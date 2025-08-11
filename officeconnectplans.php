<?php $base = "/Querytel_CA"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Office Connect Plans — QueryTel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: "#D83B01",
                    },
                    keyframes: {
                        fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
                        rise: { from: { opacity: 0, transform: "translateY(8px)" }, to: { opacity: 1, transform: "translateY(0)" } }
                    },
                    animation: {
                        fadeInRight: "fadeInRight .8s ease-out forwards",
                        fadeInLeft: "fadeInLeft .8s ease-out forwards",
                        fadeIn: "fadeIn 1s ease-out forwards",
                        rise: "rise .28s ease-out both"
                    },
                    boxShadow: {
                        "fluent": "0 1px 3px rgba(0,0,0,.06), 0 10px 24px rgba(0,0,0,.06)",
                        "fluent-strong": "0 2px 6px rgba(0,0,0,.08), 0 14px 32px rgba(0,0,0,.10)"
                    },
                    borderRadius: { fluent: "14px" }
                }
            }
        }
    </script>

    <style>
        :root {
            --stroke: #e5e7eb;
            --muted: #5f6b7a;
            --green: #107C10;
            --red: #D13438;
        }

        .oc-card {
            background: #fff;
            border: 1px solid var(--stroke);
            border-radius: 14px;
            box-shadow: var(--fluent, 0 1px 3px rgba(0, 0, 0, .06), 0 10px 24px rgba(0, 0, 0, .06));
        }

        .oc-btn {
            border-radius: 8px;
            font-weight: 700;
        }

        .oc-btn-primary {
            background: #D83B01;
            color: #fff;
        }

        .oc-btn-primary:hover {
            filter: brightness(.94);
        }

        .oc-btn-ghost {
            background: #fff;
            color: #111827;
            border: 1px solid var(--stroke);
        }

        .oc-btn-ghost:hover {
            background: #fafafa;
        }

        .tick,
        .xmark {
            width: 18px;
            height: 18px;
            border-radius: 9999px;
            display: inline-grid;
            place-items: center;
            font-size: 12px;
            font-weight: 800;
            line-height: 1;
        }

        .tick {
            background: var(--green);
            color: #fff
        }

        .xmark {
            background: var(--red);
            color: #fff
        }

        .zebra tbody tr:nth-child(even) {
            background: #fafafa;
        }

        th,
        td {
            border-bottom: 1px solid var(--stroke);
        }

        .badge {
            display: inline-block;
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .02em;
            padding: .28rem .54rem;
            border-radius: 9999px;
            background: #fff3ec;
            color: #D83B01;
            border: 1px solid #ffd9c6;
        }

        /* Floating accent circle animation (used in PBX section) */
        @keyframes floatFast {

            0%,
            100% {
                transform: translateY(-8px);
            }

            50% {
                transform: translateY(8px);
            }
        }

        .animate-float-fast {
            animation: floatFast 3s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-white text-neutral-900 font-sans">
    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="bg-white py-24 border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeInLeft">
                <span class="badge">Office Connect</span>
                <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight text-neutral-900">
                    Office Connect Plans
                </h1>
                <p class="mt-4 text-lg text-gray-700 max-w-xl">
                    Modern voice for modern teams. Clean admin, smart routing, and pricing that’s easy to explain.
                </p>
                <div class="mt-8 flex gap-3">
                    <a href="#pricing" class="oc-btn oc-btn-primary px-6 py-3">View Plans</a>
                    <a href="<?= $base ?>/contactus" class="oc-btn oc-btn-ghost px-6 py-3">Talk to Sales</a>
                </div>
            </div>

            <div class="animate-fadeInRight">
                <img src="<?= $base ?>/assets/images/office-connect2.jpg" alt="Office Connect Illustration"
                    class="w-full max-w-lg mx-auto rounded-xl shadow-fluent" />
            </div>
        </div>
    </section>

    <!-- VALUE BLURB -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-2xl md:text-3xl font-semibold">Simple tiers. Enterprise outcomes.</h2>
            <p class="mt-3 text-gray-600">Choose the plan that fits today—scale features without switching platforms.
            </p>
        </div>
    </section>

    <!-- PRICING -->
    <section id="pricing" class="py-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-6">
            <!-- Basic -->
            <article class="oc-card p-6 hover:shadow-fluent-strong transition animate-rise">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold">Basic</h3>
                    <span class="badge">Starter</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-bold">$19.99</div>
                    <div class="text-sm text-gray-600">per user / month</div>
                </div>
                <ul class="mt-6 space-y-3 text-[15px] text-gray-700">
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Unlimited local calling</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Voicemail-to-email</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Desktop & mobile apps</li>
                </ul>
                <a href="<?= $base ?>/contactus?s=office-connect-basic"
                    class="oc-btn oc-btn-ghost mt-6 inline-block px-6 py-3 w-full text-center">Choose Basic</a>
            </article>

            <!-- Standard -->
            <article class="oc-card p-6 ring-2 ring-accent/20 hover:shadow-fluent-strong transition animate-rise">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold">Standard</h3>
                    <span class="badge">Most popular</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-bold">$24.99</div>
                    <div class="text-sm text-gray-600">per user / month</div>
                </div>
                <ul class="mt-6 space-y-3 text-[15px] text-gray-700">
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Everything in Basic</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Auto-attendant / IVR</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Call queues & ring groups</li>
                </ul>
                <a href="<?= $base ?>/contactus?s=office-connect-standard"
                    class="oc-btn oc-btn-primary mt-6 inline-block px-6 py-3 w-full text-center">Choose Standard</a>
            </article>

            <!-- Premium -->
            <article class="oc-card p-6 hover:shadow-fluent-strong transition animate-rise">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold">Premium</h3>
                    <span class="badge">Enterprise</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-bold">$29.99</div>
                    <div class="text-sm text-gray-600">per user / month</div>
                </div>
                <ul class="mt-6 space-y-3 text-[15px] text-gray-700">
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Everything in Standard</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Call recording + retention</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Analytics & API access</li>
                </ul>
                <a href="<?= $base ?>/contactus?s=office-connect-premium"
                    class="oc-btn oc-btn-ghost mt-6 inline-block px-6 py-3 w-full text-center">Choose Premium</a>
            </article>
        </div>
    </section>

    <!-- FEATURE TABLES -->
    <?php
    function table_block($heading, $rows)
    {
        echo '<section class="py-10"><div class="max-w-7xl mx-auto px-6">';
        echo '<div class="mb-4">';
        echo '<h3 class="text-2xl font-semibold text-neutral-900">' . $heading . '</h3>';
        echo '<div class="w-12 h-1 bg-[color:var(--accent,#D83B01)] mt-3"></div>';
        echo '</div>';
        echo '<div class="oc-card overflow-x-auto">';
        echo '<table class="w-full text-left zebra">';
        echo '<thead class="bg-white sticky top-0 z-10">';
        echo '<tr>';
        echo '<th class="py-3 px-4 text-sm text-gray-600 font-semibold w-[44%]">Feature</th>';
        echo '<th class="py-3 px-4 text-sm text-gray-600 font-semibold">Basic</th>';
        echo '<th class="py-3 px-4 text-sm text-gray-600 font-semibold">Standard</th>';
        echo '<th class="py-3 px-4 text-sm text-gray-600 font-semibold">Premium</th>';
        echo '</tr>';
        echo '</thead><tbody>';
        foreach ($rows as $r) {
            $label = htmlspecialchars($r["label"]);
            $b = $r["basic"] ? '<span class="tick">✓</span>' : '<span class="xmark">✕</span>';
            $s = $r["standard"] ? '<span class="tick">✓</span>' : '<span class="xmark">✕</span>';
            $p = $r["premium"] ? '<span class="tick">✓</span>' : '<span class="xmark">✕</span>';
            echo "<tr><td class='py-3 px-4 text-[15px]'>$label</td><td class='py-3 px-4'>$b</td><td class='py-3 px-4'>$s</td><td class='py-3 px-4'>$p</td></tr>";
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div></div></section>';
    }

    $features_main = [
        ["label" => "SIP trunk / Caller ID", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "Local + toll-free routing", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "HD voice", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "Voicemail to email", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "Desktop & mobile apps", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "Auto-attendant / IVR", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "Call queues & ring groups", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "Call recording", "basic" => 0, "standard" => 0, "premium" => 1],
        ["label" => "Advanced analytics", "basic" => 0, "standard" => 0, "premium" => 1],
    ];
    $features_user = [
        ["label" => "Unlimited local calls", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "Unlimited North America", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "Voicemail transcription", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "Number porting", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "Hot desking", "basic" => 0, "standard" => 0, "premium" => 1],
    ];
    $features_group = [
        ["label" => "Ring groups", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "Shared voicemail", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "Overflow rules", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "Time-based routing", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "Queue analytics", "basic" => 0, "standard" => 0, "premium" => 1],
    ];
    $features_mobility = [
        ["label" => "iOS & Android apps", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "Wi-Fi + LTE handover", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "E911 mobile location", "basic" => 0, "standard" => 1, "premium" => 1],
        ["label" => "BYOD controls", "basic" => 0, "standard" => 0, "premium" => 1],
    ];
    $features_addons = [
        ["label" => "Fax line", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "International add-on", "basic" => 1, "standard" => 1, "premium" => 1],
        ["label" => "Contact center seats", "basic" => 0, "standard" => 0, "premium" => 1],
    ];
    ?>

    <?php
    table_block("Features", $features_main);
    table_block("Base User Features", $features_user);
    table_block("Base Group Features", $features_group);
    table_block("Personal Mobility Package", $features_mobility);
    table_block("Additional Add-ons", $features_addons);
    ?>

    <!-- EXPLANATORY BLOCK (PBX) -->
    <section class="bg-gray-50 py-24">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="animate-fadeInLeft">
                <p class="text-sm uppercase tracking-wide text-accent font-semibold mb-2">Quality you can hear</p>
                <h2 class="text-3xl md:text-4xl font-bold text-neutral-900 leading-tight">
                    Don’t frustrate your customers with low-quality calls
                </h2>
                <div class="w-16 h-1 bg-accent mt-5 mb-6"></div>
                <ul class="space-y-4 text-gray-700 text-base leading-relaxed">
                    <li class="flex gap-3"><span class="text-accent mt-1 text-xl">•</span> Reliable SIP trunking and
                        resilient routing.</li>
                    <li class="flex gap-3"><span class="text-accent mt-1 text-xl">•</span> Hard-to-get DIDs, easy
                        porting, zero downtime cutovers.</li>
                    <li class="flex gap-3"><span class="text-accent mt-1 text-xl">•</span> Analytics that surface
                        trends—not just raw CDRs.</li>
                </ul>
                <div class="mt-8 flex gap-3">
                    <a href="<?= $base ?>/contactus?s=office-connect-demo"
                        class="oc-btn oc-btn-primary px-6 py-3">Request a Demo</a>
                    <a href="<?= $base ?>/contactus?s=office-connect-rates" class="oc-btn oc-btn-ghost px-6 py-3">See
                        Rates</a>
                </div>
            </div>

            <!-- Image with floating accent circle -->
            <div class="animate-fadeInRight">
                <div class="relative w-full max-w-md mx-auto">
                    <!-- Decorative circle -->
                    <div class="pointer-events-none absolute -top-12 -left-12 w-[340px] h-[340px] rounded-full border-[42px] animate-float-fast"
                        style="border-color:#0B5FFF; opacity:.22;">
                    </div>
                    <!-- Image -->
                    <img src="https://querytel.com/wp-content/uploads/2021/10/hosted-pbx1-469x500-1.jpg"
                        alt="Call Quality" class="relative z-10 w-full rounded-xl shadow-fluent" />
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="oc-card p-6 md:p-8 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h3 class="text-2xl font-bold text-neutral-900">Ready to roll out Office Connect?</h3>
                    <p class="text-gray-600 mt-1">We’ll scope your deployment and get you live without drama.</p>
                </div>
                <div class="flex gap-3">
                    <a href="<?= $base ?>/contactus?s=office-connect" class="oc-btn oc-btn-primary px-6 py-3">Talk to an
                        Expert</a>
                    <a href="<?= $base ?>/contactus?s=quick-quote" class="oc-btn oc-btn-ghost px-6 py-3">Get a Quick
                        Quote</a>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>
</body>

</html>