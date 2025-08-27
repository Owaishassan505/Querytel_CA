<?php
// catalogs-portal.php — Client Catalog Portal styled to the provided QueryTel theme
// --------------------------------------------------------------------------------
// - Uses Tailwind (from theme), lucide icons, navbar/footer includes
// - Password-gated per-client catalogs
// - Session cart & secure CSRF
// - Submits to /portal/place-order (Admin API backend you wire)
// - Colors/spacing/typography match the theme you pasted

session_start();

// ----------------------- Config ----------------------- //
$BASE = $BASE ?? ($base ?? ""); // if your theme sets $base, we reuse it
const PLACE_ORDER_ENDPOINT = '/portal/place-order';

$CLIENTS = [
    'client-a' => ['name' => 'Client A', 'tag' => 'Healthcare', 'password' => 'swordfish', 'email' => 'client.a@corp.com'],
    'client-b' => ['name' => 'Client B', 'tag' => 'Retail', 'password' => 'opensesame', 'email' => 'client.b@corp.com'],
    'client-c' => ['name' => 'Client C', 'tag' => 'Logistics', 'password' => 'hunter2', 'email' => 'client.c@corp.com'],
    'client-d' => ['name' => 'Client D', 'tag' => 'Education', 'password' => 'querytel', 'email' => 'client.d@corp.com'],
];

$CATALOG = function (string $clientId) {
    $base = [
        ['sku' => 'PN-1001', 'title' => 'Thermal Label Printer', 'price' => 189.99, 'variant_id' => 1111],
        ['sku' => 'PN-1002', 'title' => 'Handheld Barcode Scanner', 'price' => 79.00, 'variant_id' => 2222],
        ['sku' => 'PN-1003', 'title' => 'Receipt Paper (50 rolls)', 'price' => 42.50, 'variant_id' => 3333],
        ['sku' => 'PN-1004', 'title' => 'Docking Station', 'price' => 129.99, 'variant_id' => 4444],
    ];
    $i = 0;
    foreach ($base as &$p) {
        $p['price'] = round($p['price'] + ($i * 3.25), 2);
        $i++;
    }
    return $base;
};

// ----------------------- Helpers ----------------------- //
function ensure_csrf()
{
    if (empty($_SESSION['csrf']))
        $_SESSION['csrf'] = bin2hex(random_bytes(18));
}
function check_csrf()
{
    if (($_POST['csrf'] ?? '') !== ($_SESSION['csrf'] ?? null)) {
        http_response_code(400);
        echo 'Bad CSRF';
        exit;
    }
}
function money($n)
{
    return '$' . number_format((float) $n, 2);
}
function get_cart_key($clientId)
{
    return 'cart_' . $clientId;
}
function get_cart($clientId)
{
    return $_SESSION[get_cart_key($clientId)] ?? [];
}
function save_cart($clientId, $cart)
{
    $_SESSION[get_cart_key($clientId)] = $cart;
}

$action = $_POST['action'] ?? $_GET['action'] ?? 'view';
$clientId = $_POST['clientId'] ?? $_GET['clientId'] ?? null;
ensure_csrf();

// ----------------------- Actions ----------------------- //
if ($action === 'verify' && $clientId) {
    check_csrf();
    $password = trim($_POST['password'] ?? '');
    $client = $CLIENTS[$clientId] ?? null;
    if (!$client) {
        http_response_code(404);
        echo 'Unknown client';
        exit;
    }
    if ($password !== $client['password']) {
        http_response_code(401);
        echo 'Invalid password';
        exit;
    }
    $_SESSION['verified'][$clientId] = true;
    header('Location: ?action=catalog&clientId=' . urlencode($clientId));
    exit;
}

if (in_array($action, ['add', 'setqty', 'clear'], true) && $clientId) {
    check_csrf();
}

if ($action === 'add' && $clientId) {
    $sku = $_POST['sku'] ?? '';
    $qty = max(1, (int) ($_POST['qty'] ?? 1));
    $catalog = $CATALOG($clientId);
    $item = null;
    foreach ($catalog as $it)
        if ($it['sku'] === $sku) {
            $item = $it;
            break;
        }
    if (!$item) {
        http_response_code(404);
        echo 'Item not found';
        exit;
    }
    $cart = get_cart($clientId);
    $cart[$sku] = ['item' => $item, 'qty' => ($cart[$sku]['qty'] ?? 0) + $qty];
    save_cart($clientId, $cart);
    header('Location: ?action=catalog&clientId=' . urlencode($clientId));
    exit;
}

if ($action === 'setqty' && $clientId) {
    $sku = $_POST['sku'] ?? '';
    $qty = max(0, (int) ($_POST['qty'] ?? 0));
    $cart = get_cart($clientId);
    if ($qty === 0) {
        unset($cart[$sku]);
    } else if (isset($cart[$sku])) {
        $cart[$sku]['qty'] = $qty;
    }
    save_cart($clientId, $cart);
    header('Location: ?action=catalog&clientId=' . urlencode($clientId));
    exit;
}

if ($action === 'clear' && $clientId) {
    save_cart($clientId, []);
    header('Location: ?action=catalog&clientId=' . urlencode($clientId));
    exit;
}

if ($action === 'place' && $clientId) {
    check_csrf();
    if (empty($_SESSION['verified'][$clientId])) {
        http_response_code(401);
        echo 'Not verified';
        exit;
    }
    $cart = get_cart($clientId);
    if (empty($cart)) {
        http_response_code(400);
        echo 'Cart empty';
        exit;
    }

    $lineItems = [];
    foreach ($cart as $row)
        $lineItems[] = ['variant_id' => $row['item']['variant_id'], 'quantity' => $row['qty']];

    $payload = [
        'clientId' => $clientId,
        'lineItems' => $lineItems,
        'note' => 'Portal order from ' . $clientId,
        'financial_status' => 'pending',
    ];

    $ch = curl_init(PLACE_ORDER_ENDPOINT);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS => json_encode($payload),
    ]);
    $resp = curl_exec($ch);
    $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $err = curl_error($ch);
    curl_close($ch);

    if ($resp === false || $http >= 400) {
        $_SESSION['flash_err'] = $err ?: ('Order failed with HTTP ' . $http . ' — ' . ($resp ?: ''));
    } else {
        $data = json_decode($resp, true);
        if (!($data['ok'] ?? false)) {
            $_SESSION['flash_err'] = $data['error'] ?? 'Unknown error placing order';
        } else {
            $_SESSION['flash_ok'] = 'Order placed: ' . $data['order_name'] . ' (ID ' . $data['order_id'] . ')';
            save_cart($clientId, []);
        }
    }
    header('Location: ?action=catalog&clientId=' . urlencode($clientId));
    exit;
}

// ----------------------- UI ----------------------- //
function page_head($title = 'Client Catalogs | QueryTel')
{
    echo <<<HTML
<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{$title}</title>
  <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>tailwind.config={theme:{extend:{keyframes:{fadeInUp:{'0%':{opacity:0,transform:'translateY(14px)'},'100%':{opacity:1,transform:'translateY(0)'}},floatY:{'0%,100%':{transform:'translateY(0)'},'50%':{transform:'translateY(-10px)'}}},animation:{fadeInUp:'fadeInUp .7s ease-out both',floatY:'floatY 6s ease-in-out infinite'}}}}</script>
</head>
<body class="bg-white text-neutral-900 font-sans">
HTML;
}

function page_header_nav()
{
    include __DIR__ . '/navbar.php';
}
function page_footer()
{
    include __DIR__ . '/footer.php';
}

function flash_msgs()
{
    if (!empty($_SESSION['flash_err'])) {
        echo '<div class="mb-4 rounded-xl bg-rose-50 text-rose-700 p-3">' . htmlspecialchars($_SESSION['flash_err']) . '</div>';
        unset($_SESSION['flash_err']);
    }
    if (!empty($_SESSION['flash_ok'])) {
        echo '<div class="mb-4 rounded-xl bg-emerald-50 text-emerald-700 p-3">' . htmlspecialchars($_SESSION['flash_ok']) . '</div>';
        unset($_SESSION['flash_ok']);
    }
}

function list_view($CLIENTS)
{
    page_head('Client Catalogs — Private Portal | QueryTel');
    page_header_nav();
    echo '<section class="relative overflow-hidden bg-white">';
    echo '  <div class="max-w-7xl mx-auto px-6 md:px-12 py-16">';
    echo '    <div class="max-w-2xl animate-fadeInUp">';
    echo '      <span class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase"><span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Client Portal</span>';
    echo '      <h1 class="mt-2 text-3xl md:text-5xl font-bold tracking-tight text-neutral-900">Choose your catalog</h1>';
    echo '      <p class="mt-3 text-neutral-600">Password-protected catalogs for repeat orders. No Shopify login needed.</p>';
    echo '    </div>';
    echo '    <div class="mt-10">';
    flash_msgs();
    echo '      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">';
    foreach ($CLIENTS as $id => $c) {
        echo '        <a href="?action=catalog&clientId=' . urlencode($id) . '" class="group rounded-2xl border border-neutral-200 bg-white p-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300">';
        echo '          <div class="flex items-center gap-3">';
        echo '            <div class="h-10 w-10 rounded-xl bg-neutral-900 text-white grid place-items-center">🔒</div>';
        echo '            <div>';
        echo '              <div class="font-semibold tracking-tight">' . htmlspecialchars($c['name']) . '</div>';
        echo '              <div class="text-xs text-neutral-500">' . htmlspecialchars($c['tag']) . ' • Protected</div>';
        echo '            </div>';
        echo '          </div>';
        echo '        </a>';
    }
    echo '      </div>';
    echo '    </div>';
    echo '  </div>';
    echo '</section>';
    page_footer();
    echo '</body></html>';
}

function catalog_view($CLIENTS, $CATALOG, $clientId)
{
    $client = $CLIENTS[$clientId] ?? null;
    if (!$client) {
        http_response_code(404);
        echo 'Unknown client';
        return;
    }
    $verified = !empty($_SESSION['verified'][$clientId]);
    $catalog = $verified ? $CATALOG($clientId) : [];
    $cart = get_cart($clientId);
    $subtotal = 0.0;
    foreach ($cart as $row)
        $subtotal += $row['item']['price'] * $row['qty'];

    page_head(htmlspecialchars($client['name']) . ' — Catalog | QueryTel');
    page_header_nav();

    echo '<section class="relative overflow-hidden bg-white">';
    echo '  <div class="max-w-7xl mx-auto px-6 md:px-12 py-12 md:py-16">';
    echo '    <div class="flex items-center justify-between">';
    echo '      <div class="max-w-2xl">';
    echo '        <span class="inline-block text-[11px] font-semibold tracking-widest text-orange-600 uppercase">Catalog</span>';
    echo '        <h2 class="mt-2 text-2xl md:text-4xl font-bold text-neutral-900">' . htmlspecialchars($client['name']) . '</h2>';
    echo '        <p class="mt-2 text-neutral-600">Private price list and fast re-ordering.</p>';
    echo '      </div>';
    echo '      <a class="hidden md:inline-block text-sm text-neutral-600 hover:text-neutral-900" href="?">← All clients</a>';
    echo '    </div>';

    flash_msgs();

    if (!$verified) {
        echo '    <div class="mt-6 rounded-2xl border border-neutral-200 bg-white p-6">';
        echo '      <div class="font-medium mb-2">Enter portal password</div>';
        echo '      <p class="text-sm text-neutral-600 mb-4">This catalog is protected. Verify to view products.</p>';
        echo '      <form method="post" class="flex flex-col sm:flex-row items-stretch sm:items-center gap-2">';
        echo '        <input type="hidden" name="csrf" value="' . htmlspecialchars($_SESSION['csrf']) . '">';
        echo '        <input type="hidden" name="action" value="verify">';
        echo '        <input type="hidden" name="clientId" value="' . htmlspecialchars($clientId) . '">';
        echo '        <input type="password" name="password" class="px-3 py-2 rounded-lg border border-neutral-300 w-full sm:w-64" placeholder="••••••••" required />';
        echo '        <button class="px-5 py-2 rounded-lg bg-neutral-900 text-white hover:bg-neutral-800">Verify</button>';
        echo '      </form>';
        echo '    </div>';
    } else {
        echo '    <div class="mt-8 grid lg:grid-cols-3 gap-6">';

        // Products
        echo '      <div class="lg:col-span-2 rounded-2xl border border-neutral-200 bg-white p-4 md:p-5">';
        echo '        <div class="flex items-center justify-between mb-3"><div class="font-medium">Products</div><a class="text-sm text-neutral-600 hover:text-neutral-900" href="?">Change client</a></div>';
        echo '        <div class="grid sm:grid-cols-2 gap-3">';
        foreach ($catalog as $item) {
            $qty = $cart[$item['sku']]['qty'] ?? 0;
            echo '          <div class="rounded-xl border border-neutral-200 p-3">';
            echo '            <div class="h-28 w-full rounded-lg bg-neutral-100 mb-2 grid place-items-center text-neutral-400 text-xs">image</div>';
            echo '            <div class="font-medium text-sm leading-tight mb-1">' . htmlspecialchars($item['title']) . '</div>';
            echo '            <div class="text-xs text-neutral-500 mb-2">SKU: ' . htmlspecialchars($item['sku']) . '</div>';
            echo '            <div class="flex items-center justify-between">';
            echo '              <div class="font-semibold">' . money($item['price']) . '</div>';
            echo '              <form method="post" class="flex items-center gap-2">';
            echo '                <input type="hidden" name="csrf" value="' . htmlspecialchars($_SESSION['csrf']) . '">';
            echo '                <input type="hidden" name="clientId" value="' . htmlspecialchars($clientId) . '">';
            echo '                <input type="hidden" name="sku" value="' . htmlspecialchars($item['sku']) . '">';
            echo '                <input type="number" min="0" name="qty" value="' . (int) $qty . '" class="w-16 px-2 py-1 text-sm rounded-lg border border-neutral-300" />';
            echo '                <button name="action" value="setqty" class="px-3 py-1 rounded-lg bg-neutral-900 text-white text-sm hover:bg-neutral-800">Set</button>';
            echo '                <button name="action" value="add" class="px-3 py-1 rounded-lg border border-neutral-300 text-sm">+1</button>';
            echo '              </form>';
            echo '            </div>';
            echo '          </div>';
        }
        echo '        </div>';
        echo '      </div>';

        // Cart
        echo '      <div class="rounded-2xl border border-neutral-200 bg-white p-4 h-fit">';
        echo '        <div class="font-medium mb-3">Current order</div>';
        if (empty($cart)) {
            echo '        <div class="text-sm text-neutral-500">No items yet. Add products from the left.</div>';
        } else {
            foreach ($cart as $row) {
                $item = $row['item'];
                $qty = $row['qty'];
                $line = $item['price'] * $qty;
                echo '      <div class="flex items-start justify-between gap-3 mb-3">';
                echo '        <div><div class="text-sm font-medium leading-tight">' . htmlspecialchars($item['title']) . '</div><div class="text-xs text-neutral-500">' . htmlspecialchars($item['sku']) . '</div><div class="text-xs text-neutral-600 mt-1">' . (int) $qty . ' × ' . money($item['price']) . '</div></div>';
                echo '        <div class="text-sm font-semibold">' . money($line) . '</div>';
                echo '      </div>';
            }
            echo '      <div class="border-t border-neutral-200 pt-3 flex items-center justify-between mb-3"><div class="text-sm text-neutral-600">Subtotal</div><div class="text-base font-semibold">' . money($subtotal) . '</div></div>';
            echo '      <form method="post" class="flex items-center gap-2">';
            echo '        <input type="hidden" name="csrf" value="' . htmlspecialchars($_SESSION['csrf']) . '">';
            echo '        <input type="hidden" name="clientId" value="' . htmlspecialchars($clientId) . '">';
            echo '        <button name="action" value="place" class="w-full inline-flex items-center justify-center gap-2 px-4 py-2 rounded-xl bg-neutral-900 text-white hover:bg-neutral-800">Place Order</button>';
            echo '        <button name="action" value="clear" class="px-4 py-2 rounded-xl border border-neutral-300">Clear</button>';
            echo '      </form>';
        }
        echo '      </div>';

        echo '    </div>'; // grid
    }

    echo '  </div>';
    echo '</section>';

    page_footer();
    echo '</body></html>';
}

// ----------------------- Controller ----------------------- //
if ($action === 'catalog' && $clientId) {
    catalog_view($CLIENTS, $CATALOG, $clientId);
} else {
    list_view($CLIENTS);
}
