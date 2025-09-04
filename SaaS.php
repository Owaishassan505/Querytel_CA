<?php $base = "/Querytel_CA"; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SaaS Solutions — Secure, Managed & Scalable | QueryTel Inc</title>

  <!-- Primary SEO -->
  <meta name="description" content="QueryTel plans, deploys, and operates your SaaS stack—Microsoft 365, Zoho, Acronis, Teams Voice—with security, backups, and real support. Simple onboarding, clear outcomes, no drama." />
  <meta name="keywords" content="Managed SaaS, Microsoft 365 management, Zoho integration, Acronis backups, Teams Voice, SaaS migration, HIPAA PIPEDA compliance, Intune MDM, SSO MFA, QueryTel" />

  <!-- Open Graph -->
  <meta property="og:title" content="SaaS Solutions — Secure, Managed & Scalable | QueryTel Inc" />
  <meta property="og:description" content="Stress-free SaaS: we deploy, integrate, secure, and back up your cloud apps with real support and clear SLAs." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.querytel.com/saas" />
  <meta property="og:image" content="https://www.querytel.com/assets/og/saas-hero.jpg" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="SaaS Solutions — Secure, Managed & Scalable | QueryTel Inc" />
  <meta name="twitter:description" content="We run your SaaS like a product team—secure, backed up, and measurable." />
  <meta name="twitter:image" content="https://www.querytel.com/assets/og/saas-hero.jpg" />

  <!-- JSON-LD -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"ProfessionalService",
    "name":"QueryTel Inc",
    "url":"https://www.querytel.com",
    "logo":"https://www.querytel.com/assets/logo.png",
    "description":"Managed SaaS solutions: Microsoft 365, Zoho, Acronis, Teams Voice. We deploy, integrate, secure, and back up your cloud apps with real support.",
    "areaServed":["Canada","United States"],
    "sameAs":["https://www.linkedin.com/company/querytel"],
    "serviceType":[
      "Managed SaaS",
      "Microsoft 365 Administration",
      "Zoho CRM/Books Integration",
      "Acronis SaaS Backups",
      "Teams Voice (VoIP)",
      "SharePoint Intranets",
      "Identity & Access (SSO/MFA)",
      "Device Management (Intune/MDM)"
    ],
    "hasOfferCatalog":{
      "@type":"OfferCatalog",
      "name":"SaaS Bundles",
      "itemListElement":[
        {"@type":"Offer","name":"Starter"},
        {"@type":"Offer","name":"Growth"},
        {"@type":"Offer","name":"Enterprise"}
      ]
    }
  }
  </script>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          keyframes: {
            fadeInUp: { '0%': { opacity: 0, transform: 'translateY(16px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
            floatY: { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-10px)' } },
            shimmer: { '0%': { backgroundPosition: '-200% 0' }, '100%': { backgroundPosition: '200% 0' } },
            pulseGlow: { '0%,100%': { boxShadow: '0 0 0 0 rgba(59,130,246,.35)' }, '50%': { boxShadow: '0 0 0 12px rgba(59,130,246,0)' } }
          },
          animation: {
            fadeInUp: 'fadeInUp .7s ease-out both',
            floatY: 'floatY 6s ease-in-out infinite',
            shimmer: 'shimmer 2.5s linear infinite',
            pulseGlow: 'pulseGlow 2.8s ease-in-out infinite'
          },
          backgroundImage: {
            brandOrbBlue: 'radial-gradient(60% 60% at 50% 40%, rgba(37,99,235,0.25) 0%, transparent 70%)',
            brandOrbOrange: 'radial-gradient(60% 60% at 50% 50%, rgba(249,115,22,0.18) 0%, transparent 70%)'
          }
        }
      }
    }
  </script>
</head>

<body class="bg-white text-neutral-900 font-sans">
  <?php include('navbar.php'); ?>

  <!-- STICKY CTA BAR -->
  <div id="stickyCta" class="fixed inset-x-0 bottom-4 z-40 px-4 sm:px-6 lg:px-8" aria-label="Quick contact for SaaS help">
    <div class="mx-auto max-w-5xl rounded-2xl bg-neutral-900/90 text-white shadow-2xl ring-1 ring-white/10 backdrop-blur">
      <div class="flex flex-col gap-3 p-4 sm:flex-row sm:items-center sm:justify-between">
        <div class="text-center sm:text-left">
          <p class="text-sm text-white/80">Managed SaaS with compliance, backups, and support.</p>
          <p class="text-base sm:text-lg font-semibold">Ready to modernize your stack?</p>
        </div>
        <div class="flex items-center justify-center gap-3">
          <a href="<?= $base ?? '' ?>/contactus" class="inline-flex items-center gap-2 rounded-lg bg-orange-600 px-5 py-2.5 font-semibold text-white hover:bg-orange-700 transition">
            Request an Expert
            <svg class="h-4 w-4" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"><path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z"/></svg>
          </a>
          <button onclick="document.getElementById('stickyCta').remove()" class="rounded-lg px-3 py-2 text-sm text-white/70 hover:text-white transition" aria-label="Dismiss">
            Dismiss
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- HERO -->
  <section class="relative overflow-hidden bg-gradient-to-br from-slate-50 via-white to-slate-100">
    <div aria-hidden="true" class="absolute inset-0">
      <div class="absolute -top-40 -left-40 h-[520px] w-[520px] rounded-full bg-blue-600/15 blur-3xl"></div>
      <div class="absolute top-16 right-0 h-[420px] w-[420px] rounded-full bg-orange-500/15 blur-3xl"></div>
      <svg class="absolute inset-0 w-full h-full text-slate-200/50" aria-hidden="true">
        <defs><pattern id="hero-grid-tight" width="8" height="8" patternUnits="userSpaceOnUse"><path d="M8 0H0V8" fill="none" stroke="currentColor" stroke-width=".35"/></pattern></defs>
        <rect width="100%" height="100%" fill="url(#hero-grid-tight)"></rect>
      </svg>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 py-20 sm:py-24 lg:py-32">
      <div class="mx-auto max-w-3xl mb-4 text-center">
        <div class="inline-flex items-center gap-2 rounded-full bg-white/80 ring-1 ring-slate-200 px-3 py-1.5 text-[12px] text-slate-700 backdrop-blur">
          <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
          All systems operational · PIPEDA/HIPAA-friendly onboarding
        </div>
      </div>

      <div class="mx-auto max-w-3xl text-center">
        <span class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
          <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span>
          Managed SaaS
        </span>
        <h1 class="mt-3 text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight tracking-tight text-neutral-900">
          SaaS that looks after itself. <span class="text-blue-700/80">You look after business.</span>
        </h1>
        <p class="mt-4 sm:mt-5 text-base sm:text-lg md:text-xl text-neutral-600">
          We plan, deploy, and operate your cloud apps—Microsoft 365, Zoho, Acronis, Teams Voice—with SSO/MFA, device controls, and daily backups. Clear process, predictable results.
        </p>
        <div class="mt-7 flex flex-col sm:flex-row items-center justify-center gap-4">
          <a href="<?= $base ?? '' ?>/contactus" class="inline-flex items-center gap-2 bg-orange-600 text-white px-7 py-3 rounded-xl hover:bg-orange-700 transition font-semibold shadow-md">
            Request an Expert
            <svg class="h-4 w-4" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"><path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z"/></svg>
          </a>
          <a href="#plans" class="inline-flex items-center gap-2 border border-blue-700 text-blue-700 px-7 py-3 rounded-xl hover:bg-blue-50 transition font-semibold">
            View Bundles
          </a>
        </div>
      </div>

      <div class="mt-12 sm:mt-14 mx-auto max-w-5xl">
        <div class="rounded-[28px] bg-white ring-1 ring-slate-200 shadow-[0_24px_80px_rgba(2,6,23,.12)] overflow-hidden">
          <div class="px-5 py-3 bg-gradient-to-r from-blue-50 to-blue-100 border-b border-blue-200 flex items-center gap-2">
            <span class="h-2.5 w-2.5 rounded-full bg-red-400"></span>
            <span class="h-2.5 w-2.5 rounded-full bg-yellow-400"></span>
            <span class="h-2.5 w-2.5 rounded-full bg-green-400"></span>
            <span class="ml-3 text-xs font-medium text-blue-700">QueryTel • SaaSOps Overview</span>
          </div>
          <div class="p-6 sm:p-8">
            <div class="grid gap-4 sm:grid-cols-3">
              <div class="rounded-xl border border-slate-200 p-4" aria-label="Identity and access">
                <p class="text-xs text-slate-500">Identity & Access</p>
                <p class="mt-1 text-lg font-semibold">SSO • MFA • Conditional</p>
                <p class="mt-2 text-sm text-slate-600">Log in once, stay secure everywhere—no sticky notes, no lockouts.</p>
              </div>
              <div class="rounded-xl border border-slate-200 p-4" aria-label="Backups">
                <p class="text-xs text-slate-500">Backups</p>
                <p class="mt-1 text-lg font-semibold">M365 • SharePoint • Mail</p>
                <p class="mt-2 text-sm text-slate-600">Automatic copies of the important stuff, with point-in-time restore.</p>
              </div>
              <div class="rounded-xl border border-slate-200 p-4" aria-label="Observability">
                <p class="text-xs text-slate-500">Observability</p>
                <p class="mt-1 text-lg font-semibold">Status • Alerts • Reports</p>
                <p class="mt-2 text-sm text-slate-600">You’ll know what changed, who has access, and what needs attention.</p>
              </div>
            </div>
          </div>
          <div class="border-t border-slate-200 bg-slate-50/60">
            <div class="grid grid-cols-3 divide-x divide-slate-200 text-center">
              <div class="py-3 sm:py-4">
                <div class="text-base sm:text-xl font-semibold text-neutral-900">99.95%</div>
                <div class="text-[10px] text-blue-700/70">Target SLA</div>
              </div>
              <div class="py-3 sm:py-4">
                <div class="text-base sm:text-xl font-semibold text-neutral-900">&lt; 14 days</div>
                <div class="text-[10px] text-blue-700/70">Onboarding</div>
              </div>
              <div class="py-3 sm:py-4">
                <div class="text-base sm:text-xl font-semibold text-neutral-900">PIPEDA/HIPAA</div>
                <div class="text-[10px] text-blue-700/70">Alignment</div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-6 rounded-xl border border-neutral-200/60 bg-white/70 p-3 backdrop-blur text-sm text-neutral-700 flex flex-wrap items-center justify-center gap-x-6 gap-y-2">
          <span class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Microsoft 365 • Teams • SharePoint</span>
          <span class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Zoho CRM/Books</span>
          <span class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Acronis backups • DR runbooks</span>
        </div>
      </div>
    </div>
  </section>

  <!-- LIFECYCLE -->
  <section id="lifecycle" class="relative bg-white py-20">
    <div class="mx-auto max-w-7xl px-6">
      <div class="max-w-3xl">
        <span class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
          <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Lifecycle
        </span>
        <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight">From sign-up to scale — handled.</h2>
        <p class="mt-3 text-neutral-600">Simple steps. Clear owners. Measurable results. We run your SaaS like a product team.</p>
      </div>

      <?php $steps = [
          ['n' => '01', 't' => 'Onboarding', 'd' => 'Tenant setup, domains, clean folder structure, and secure sign-ins—without downtime.', 'k' => '<li>Identity + SSO (Entra/Okta)</li><li>MFA & baseline MDM</li><li>Shared drives & permissions</li>'],
          ['n' => '02', 't' => 'Integrate', 'd' => 'Connect email, CRM, accounting, phones, and storage so tools work together.', 'k' => '<li>Microsoft 365 & Teams</li><li>Zoho CRM/Books</li><li>SharePoint & OneDrive</li>'],
          ['n' => '03', 't' => 'Operate', 'd' => 'We keep things healthy: backups, patching, alerts, access reviews, and reports.', 'k' => '<li>Acronis Cyber Protect</li><li>SIEM & alerting</li><li>Quarterly access reviews</li>'],
          ['n' => '04', 't' => 'Scale', 'd' => 'Add teams or locations with templates and automation—no rebuilds required.', 'k' => '<li>Role-based automation</li><li>Least-privilege by default</li><li>DR runbooks & tests</li>']
      ]; ?>

      <div class="mt-12 grid gap-6 md:grid-cols-2 xl:grid-cols-4">
        <?php foreach ($steps as $s): ?>
              <article class="group relative rounded-2xl border border-neutral-200/70 bg-white/90 p-6 shadow-[0_6px_24px_rgba(2,6,23,0.05)] backdrop-blur">
                <div class="flex items-center justify-between">
                  <span class="text-[11px] font-mono tracking-widest text-blue-700/80"><?= $s['n']; ?></span>
                  <span class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white ring-1 ring-white/10">→</span>
                </div>
                <h3 class="mt-4 text-lg font-semibold text-neutral-900"><?= htmlspecialchars($s['t']); ?></h3>
                <p class="mt-1 text-sm text-neutral-600 leading-relaxed"><?= htmlspecialchars($s['d']); ?></p>
                <ul class="mt-3 text-[12px] text-slate-700 space-y-1 list-disc pl-5"><?= $s['k']; ?></ul>
              </article>
        <?php endforeach; ?>
      </div>

      <div class="mt-10 rounded-xl border border-neutral-200/60 bg-white/70 p-4 backdrop-blur">
        <div class="grid gap-3 text-sm text-neutral-700 sm:grid-cols-3">
          <div class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> 30-day onboarding target</div>
          <div class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> Quarterly access reviews</div>
          <div class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> Annual table-top DR tests</div>
        </div>
      </div>
    </div>
  </section>

  <!-- BUNDLES -->
  <section id="plans" class="relative isolate bg-white py-20 sm:py-24">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
      <div class="absolute left-1/2 top-0 -translate-x-1/2 h-[520px] w-[900px] opacity-[0.1] blur-3xl bg-brandOrbBlue"></div>
      <div class="absolute right-0 bottom-0 h-[280px] w-[280px] opacity-[0.08] blur-2xl bg-brandOrbOrange"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6">
      <div class="max-w-3xl animate-fadeInUp">
        <span class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
          <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> Bundles
        </span>
        <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">Pick a lane — we drive.</h2>
        <p class="mt-3 text-neutral-600">Three opinionated bundles. We can customize, but these work out of the box.</p>
      </div>

      <?php $plans = [
          [
              'name' => 'Starter',
              'tag' => 'Best for SMB',
              'accent' => 'from-blue-50 to-white',
              'includes' => [
                  'Microsoft 365 Business Standard',
                  'Identity + MFA baseline',
                  'Acronis backup for M365',
                  'Basic device patching',
                  'Ticket support (business hours)'
              ]
          ],
          [
              'name' => 'Growth',
              'tag' => 'For growing teams',
              'accent' => 'from-orange-50 to-white',
              'includes' => [
                  'Microsoft 365 E3 + Teams/SharePoint',
                  'SSO, conditional access, MDM (Intune)',
                  'Advanced email security + phishing defense',
                  'Zoho CRM/Books integration',
                  '24/7 monitoring + on-call'
              ]
          ],
          [
              'name' => 'Enterprise',
              'tag' => 'Compliance heavy',
              'accent' => 'from-blue-50 to-white',
              'includes' => [
                  'Microsoft 365 E5 or equivalent',
                  'SIEM, DLP & access reviews',
                  'Geo-fencing & device posture',
                  'DR runbooks + quarterly tests',
                  'SLA 99.95% + incident reports'
              ]
          ]
      ]; ?>

      <div class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
        <?php foreach ($plans as $p): ?>
              <article class="group relative overflow-hidden rounded-2xl border border-neutral-200/60 bg-gradient-to-br <?= $p['accent']; ?> p-6 shadow-[0_6px_24px_rgba(2,6,23,0.06)] backdrop-blur">
                <div class="flex items-center justify-between">
                  <h3 class="text-xl font-semibold text-neutral-900 group-hover:text-orange-600 transition-colors"><?= htmlspecialchars($p['name']); ?></h3>
                  <span class="inline-flex items-center rounded-full border border-neutral-200 bg-white/80 px-2.5 py-1 text-[10px] font-semibold text-neutral-700"><?= htmlspecialchars($p['tag']); ?></span>
                </div>
                <ul class="mt-4 space-y-2 text-sm text-neutral-700">
                  <?php foreach ($p['includes'] as $li): ?>
                        <li class="flex items-start gap-2"><span class="mt-1 h-1.5 w-1.5 rounded-full bg-orange-600"></span><?= htmlspecialchars($li); ?></li>
                  <?php endforeach; ?>
                </ul>
                <a href="<?= $base ?? '' ?>/contactus" class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-orange-600 hover:text-orange-700" aria-label="Discuss the <?= htmlspecialchars($p['name']); ?> bundle">
                  Discuss this bundle
                  <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"><path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z"/></svg>
                </a>
              </article>
        <?php endforeach; ?>
      </div>

      <div class="mt-8 rounded-xl border border-neutral-200/60 bg-white/70 p-4 text-sm text-neutral-700">
        Not sure which bundle fits? We’ll map roles, compliance, and budget—then recommend a path.
      </div>
    </div>
  </section>

  <!-- WORK SHOWCASE -->
  <section id="work" class="relative bg-white py-20 sm:py-24">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center max-w-3xl mx-auto">
        <span class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
          <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Work That Shipped
        </span>
        <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">Real projects. Real outcomes.</h2>
        <p class="mt-3 text-neutral-600">A quick tour of wins we’ve delivered and the SaaS stack we operate daily.</p>
      </div>

      <!-- Tabs + Avatar -->
      <div id="workTabsWrap" class="mt-16 relative flex flex-col items-center">
        <!-- Avatar -->
        <svg id="tabAvatar" class="absolute -top-16 h-16 w-16 transition-all duration-300 ease-out" viewBox="0 0 120 140" aria-hidden="true">
          <defs>
            <filter id="softGlow" x="-50%" y="-50%" width="200%" height="200%"><feGaussianBlur stdDeviation="6" result="blur"/><feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
            <radialGradient id="bgHalo" cx="50%" cy="40%" r="60%"><stop offset="0%" stop-color="#60a5fa" stop-opacity=".55"/><stop offset="100%" stop-color="#60a5fa" stop-opacity="0"/></radialGradient>
            <linearGradient id="botShell" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#f3f4f6"/><stop offset="100%" stop-color="#d1d5db"/></linearGradient>
            <linearGradient id="visorGrad" x1="0" y1="0" x2="0" y2="1"><stop offset="0%" stop-color="#0f172a"/><stop offset="100%" stop-color="#1f2937"/></linearGradient>
            <linearGradient id="accent" x1="0" y1="0" x2="1" y2="0"><stop offset="0%" stop-color="#22d3ee"/><stop offset="100%" stop-color="#3b82f6"/></linearGradient>
          </defs>
          <ellipse cx="60" cy="70" rx="56" ry="56" fill="url(#bgHalo)"/>
          <g filter="url(#softGlow)"><line x1="60" y1="8" x2="60" y2="18" stroke="#93c5fd" stroke-width="3" stroke-linecap="round"/><circle cx="60" cy="6" r="4" fill="#93c5fd"/></g>
          <g style="animation: botFloat 5.5s ease-in-out infinite">
            <rect x="22" y="22" rx="18" ry="18" width="76" height="60" fill="url(#botShell)" stroke="#cbd5e1" stroke-width="2"/>
            <rect x="30" y="34" rx="12" ry="12" width="60" height="36" fill="url(#visorGrad)"/>
            <g><g class="eye blink"><circle cx="45" cy="52" r="6.5" fill="url(#accent)"/><circle cx="45" cy="52" r="2.2" fill="#a5f3fc"/></g><g class="eye blink" style="animation-delay:.2s"><circle cx="75" cy="52" r="6.5" fill="url(#accent)"/><circle cx="75" cy="52" r="2.2" fill="#a5f3fc"/></g></g>
            <circle cx="32" cy="58" r="2.6" fill="#fca5a5" opacity=".9"/><circle cx="88" cy="58" r="2.6" fill="#fca5a5" opacity=".9"/>
            <path d="M46 68 q14 10 28 0" fill="none" stroke="#94a3b8" stroke-width="3" stroke-linecap="round"/>
            <rect x="30" y="86" rx="14" ry="14" width="60" height="36" fill="url(#botShell)" stroke="#cbd5e1" stroke-width="2"/>
            <rect x="38" y="98" width="44" height="8" rx="4" fill="#e2e8f0"/><rect x="38" y="98" width="22" height="8" rx="4" fill="url(#accent)"/>
            <polygon points="60,128 54,116 66,116" fill="url(#botShell)" stroke="#cbd5e1" stroke-width="2"/>
          </g>
          <style>
            @keyframes botFloat { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-3px)} }
            @keyframes blink { 0%,92%,100%{transform:scaleY(1)} 94%,98%{transform:scaleY(.1)} }
            .blink{animation:blink 4.5s infinite; transform-origin:center;}
          </style>
        </svg>

        <div id="workTabs" class="flex items-center justify-center gap-2" role="tablist" aria-label="Showcase tabs">
          <button data-tab="cases" class="tabBtn active inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-neutral-900 text-white text-[12px] font-medium" role="tab" aria-selected="true">Case Studies</button>
          <button data-tab="tools" class="tabBtn inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 hover:bg-slate-200 text-[12px] font-medium" role="tab" aria-selected="false">Tools We Run</button>
        </div>
      </div>

      <script>
        (function () {
          const wrap = document.getElementById('workTabsWrap');
          const avatar = document.getElementById('tabAvatar');
          const buttons = document.querySelectorAll('#workTabs .tabBtn');
          const btnCases = document.querySelector('#workTabs .tabBtn[data-tab="cases"]');
          const btnTools = document.querySelector('#workTabs .tabBtn[data-tab="tools"]');

          function positionAvatar(overBtn) {
            const btnRect = overBtn.getBoundingClientRect();
            const wrapRect = wrap.getBoundingClientRect();
            const w = avatar.getBoundingClientRect().width || 64;
            const left = (btnRect.left - wrapRect.left) + (btnRect.width / 2) - (w / 2);
            avatar.style.left = left + 'px';
          }

          function setActive(tab) {
            buttons.forEach(b => { b.classList.remove('active','bg-neutral-900','text-white'); b.setAttribute('aria-selected','false'); });
            const activeBtn = document.querySelector(`#workTabs .tabBtn[data-tab="${tab}"]`);
            activeBtn.classList.add('active','bg-neutral-900','text-white'); activeBtn.setAttribute('aria-selected','true');

            const tabCases = document.getElementById('tab-cases');
            const tabTools = document.getElementById('tab-tools');

            const casesOn = tab === 'cases';
            if (tabCases && tabTools) {
              tabCases.classList.toggle('hidden', !casesOn);
              tabTools.classList.toggle('hidden', casesOn);
            }
            positionAvatar(casesOn ? btnTools : btnCases); // hover over inactive
          }

          const initial = document.querySelector('#workTabs .tabBtn.active')?.dataset.tab || 'cases';
          requestAnimationFrame(() => setActive(initial));
          buttons.forEach(btn => btn.addEventListener('click', () => setActive(btn.dataset.tab)));
          window.addEventListener('resize', () => {
            const inactive = document.querySelector('#workTabs .tabBtn:not(.active)'); if (inactive) positionAvatar(inactive);
          });
        })();
      </script>

      <?php
      // Spotlight + cards copy tightened for SEO and clarity
      $spotlight = [
          'title' => 'Hospital SaaS Rollout',
          'desc' => 'Teams + Intune with backups and access controls. Fast onboarding, zero surprises.',
          'kpis' => [['+420', 'Staff onboarded'], ['0', 'Unplanned downtime'], ['<48h', 'Cutover window']],
          'img' => '/assets/portfolio/hospital-hero.jpg',
          'url' => $base . '/projects/hospital-saas-rollout',
          'tags' => ['Healthcare', 'M365', 'Intune', 'Acronis']
      ];

      $cases = [
          ['title' => 'Retail Email Migration', 'desc' => 'Legacy IMAP → Microsoft 365 over a weekend. Orders kept flowing.', 'img' => '/assets/portfolio/retail-m365.jpg', 'url' => $base . '/projects/retail-email-migration', 'tags' => ['Retail', 'M365']],
          ['title' => 'Finance Access Reviews', 'desc' => 'Quarterly reviews, DLP, and geo-fencing for remote advisors.', 'img' => '/assets/portfolio/finance-access.jpg', 'url' => $base . '/projects/finance-access-reviews', 'tags' => ['Finance', 'Security']],
          ['title' => 'Teams Voice for Clinics', 'desc' => 'IVR, call queues, and recording—built for multi-site clinics.', 'img' => '/assets/portfolio/voice-clinics.jpg', 'url' => $base . '/projects/teams-voice-clinics', 'tags' => ['Healthcare', 'Voice', 'Teams']]
      ];

      $tools = [
          ['name' => 'Microsoft 365', 'desc' => 'Identity, SSO/MFA, Intune, SharePoint/OneDrive.', 'logo' => 'https://cdn.simpleicons.org/microsoft/0078D4', 'url' => $base . '/services/m365'],
          ['name' => 'Zoho CRM & Books', 'desc' => 'Sales + invoicing tied to Outlook and Teams.', 'logo' => 'https://cdn.simpleicons.org/zoho/FF0000', 'url' => $base . '/services/zoho'],
          ['name' => 'Acronis Cyber Protect', 'desc' => 'SaaS backups, retention, legal hold, DR.', 'logo' => 'https://cdn.simpleicons.org/acronis/002D72', 'url' => $base . '/services/acronis'],
          ['name' => 'Teams Voice (VoIP)', 'desc' => 'Queues, IVR, recording, carrier onboarding.', 'logo' => 'https://cdn.simpleicons.org/microsoftteams/6264A7', 'url' => $base . '/services/voice'],
          ['name' => 'SharePoint Intranet', 'desc' => 'Department sites, governance, search.', 'logo' => 'https://cdn.simpleicons.org/microsoftsharepoint/0078D4', 'url' => $base . '/services/sharepoint']
      ];
      ?>

      <!-- CASES VIEW -->
      <div id="tab-cases">
        <div class="mt-10 grid gap-6 lg:grid-cols-[1.3fr_.9fr]">
          <a href="<?= $spotlight['url'] ?>" class="group relative overflow-hidden rounded-2xl ring-1 ring-slate-200 bg-white shadow-[0_20px_60px_rgba(2,6,23,.08)]">
            <div class="relative">
              <img src="<?= $spotlight['img'] ?>" alt="Case study — <?= htmlspecialchars($spotlight['title']) ?> results" class="w-full h-64 sm:h-80 lg:h-[420px] object-cover transition group-hover:scale-[1.02]">
              <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/20 to-transparent"></div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 p-6 sm:p-8 text-white">
              <h3 class="text-2xl sm:text-3xl font-semibold"><?= htmlspecialchars($spotlight['title']) ?></h3>
              <p class="mt-2 text-white/90 max-w-2xl"><?= htmlspecialchars($spotlight['desc']) ?></p>
              <div class="mt-4 flex flex-wrap gap-2">
                <?php foreach ($spotlight['tags'] as $t): ?><span class="text-[11px] bg-white/15 backdrop-blur px-2 py-1 rounded-full ring-1 ring-white/20"><?= htmlspecialchars($t) ?></span><?php endforeach; ?>
              </div>
              <div class="mt-4 grid grid-cols-3 gap-2 sm:max-w-md">
                <?php foreach ($spotlight['kpis'] as $k): ?>
                      <div class="rounded-lg bg-white/10 ring-1 ring-white/20 px-3 py-2 text-center">
                        <div class="text-lg font-semibold"><?= htmlspecialchars($k[0]) ?></div>
                        <div class="text-[10px] uppercase tracking-wide text-white/80"><?= htmlspecialchars($k[1]) ?></div>
                      </div>
                <?php endforeach; ?>
              </div>
            </div>
          </a>

          <div class="grid gap-4">
            <?php foreach ($cases as $c): ?>
                  <a href="<?= $c['url'] ?>" class="group overflow-hidden rounded-2xl ring-1 ring-slate-200 bg-white hover:shadow-md transition">
                    <div class="grid grid-cols-[120px_1fr]">
                      <img src="<?= $c['img'] ?>" alt="<?= htmlspecialchars($c['title']) ?> preview" class="h-full w-full object-cover">
                      <div class="p-4">
                        <h4 class="font-semibold text-neutral-900 group-hover:text-orange-600"><?= htmlspecialchars($c['title']) ?></h4>
                        <p class="mt-1 text-sm text-neutral-600"><?= htmlspecialchars($c['desc']) ?></p>
                        <div class="mt-2 flex flex-wrap gap-1.5">
                          <?php foreach ($c['tags'] as $t): ?><span class="text-[10px] text-blue-800 bg-blue-50 border border-blue-100 px-2 py-0.5 rounded-full"><?= htmlspecialchars($t) ?></span><?php endforeach; ?>
                        </div>
                      </div>
                    </div>
                  </a>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Logo marquee -->
        <div class="mt-10 overflow-hidden" aria-label="Partners and platforms">
          <div class="flex items-center gap-8 animate-[marquee_30s_linear_infinite] will-change-transform">
            <?php foreach (['microsoft', 'microsoftteams', 'microsoftsharepoint', 'zoho', 'acronis', 'shopify', 'azure'] as $slug): ?>
                  <div class="flex items-center gap-3 rounded-xl bg-white border border-slate-200 py-3 px-4">
                    <?php if ($slug === 'azure'): ?>
                          <img src="/assets/icons/azure.svg" class="h-6 w-6" alt="Azure logo">
                    <?php else: ?>
                          <img src="https://cdn.simpleicons.org/<?= $slug; ?>" class="h-6 w-6" alt="<?= ucfirst($slug) ?> logo">
                    <?php endif; ?>
                    <span class="text-sm font-medium text-slate-700"><?= ucfirst($slug) ?></span>
                  </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- TOOLS VIEW -->
      <div id="tab-tools" class="hidden" aria-label="Tools we manage">
        <div class="mt-10 grid gap-6 sm:gap-7 md:grid-cols-2 lg:grid-cols-3">
          <?php foreach ($tools as $t): ?>
                <a href="<?= $t['url'] ?>" class="group relative overflow-hidden rounded-2xl border border-neutral-200/60 bg-gradient-to-br from-white to-slate-50 p-6 shadow-[0_6px_24px_rgba(2,6,23,0.06)] hover:-translate-y-1 hover:shadow-xl transition">
                  <div class="flex items-center gap-3">
                    <div class="h-11 w-11 rounded-xl bg-neutral-900 grid place-items-center">
                      <img src="<?= $t['logo'] ?>" alt="<?= htmlspecialchars($t['name']) ?> logo" class="h-6 w-6" loading="lazy" />
                    </div>
                    <span class="inline-flex items-center rounded-full border border-neutral-200 bg-white/80 px-2.5 py-1 text-[10px] font-semibold text-neutral-700">Tool</span>
                  </div>
                  <h3 class="mt-5 text-xl font-semibold text-neutral-900 group-hover:text-orange-600 transition-colors"><?= htmlspecialchars($t['name']) ?></h3>
                  <p class="mt-2 text-neutral-600"><?= htmlspecialchars($t['desc']) ?></p>
                  <span class="mt-5 inline-flex items-center gap-2 text-sm font-medium text-orange-600 group-hover:text-orange-700">
                    Learn more
                    <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" aria-hidden="true" fill="currentColor"><path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z"/></svg>
                  </span>
                </a>
          <?php endforeach; ?>
        </div>
      </div>

      <style>
        @keyframes marquee { 0% { transform: translateX(0);} 100% { transform: translateX(-50%);} }
      </style>
    </div>
  </section>

  <!-- INTEGRATIONS -->
  <section id="integrations" class="relative bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="max-w-3xl">
        <span class="inline-block text-[11px] font-semibold tracking-widest text-orange-600 uppercase">Integrations</span>
        <h2 class="mt-3 text-3xl md:text-4xl font-semibold">Works with your tools.</h2>
        <p class="mt-3 text-neutral-600">We connect SaaS to identity, comms, CRM, accounting, telephony, and storage—the wiring you actually need.</p>
      </div>

      <?php $logos = ['microsoft', 'teams', 'sharepoint', 'azure', 'zoho', 'acronis', 'slack', 'zoom', 'twilio', 'stripe', 'quickbooks', 'shopify']; ?>
      <div class="mt-10 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
        <?php foreach ($logos as $slug):
            $name = ucfirst($slug); ?>
              <div class="flex items-center justify-center gap-3 rounded-xl bg-white border border-slate-200 py-3 px-4 hover:shadow-md transition">
                <?php if ($slug === 'azure'): ?>
                      <img src="/assets/icons/azure.svg" alt="Azure" class="h-6 w-6" />
                <?php else: ?>
                      <img src="https://cdn.simpleicons.org/<?= $slug; ?>" alt="<?= $name; ?>" class="h-6 w-6" />
                <?php endif; ?>
                <span class="text-sm font-medium text-slate-800"><?= $name; ?></span>
              </div>
        <?php endforeach; ?>
      </div>

      <div class="mt-8 text-sm text-neutral-700">Need something special? Our middleware links odd systems without duct tape.</div>
    </div>
  </section>

  <!-- INDUSTRIES -->
  <section id="industries" class="relative bg-slate-50 py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="max-w-3xl">
        <span class="inline-block text-[11px] font-semibold tracking-widest text-orange-600 uppercase">Use Cases</span>
        <h2 class="mt-3 text-3xl md:text-4xl font-semibold">Built for your industry.</h2>
        <p class="mt-3 text-neutral-600">Healthcare, retail, and finance have different rules. We meet them without slowing people down.</p>
      </div>

      <div class="mt-10 overflow-x-auto [scrollbar-width:none] [-ms-overflow-style:none]" style="scrollbar-width:none;">
        <div class="flex gap-6 min-w-max pr-6">
          <?php $cards = [
              ['t' => 'Healthcare', 'd' => 'HIPAA-minded workflows, PHI handling, secure messaging, and clear audit trails.', 'k' => '<span>MDM</span><span>E2EE</span><span>DR</span>'],
              ['t' => 'Retail', 'd' => 'POS, inventory, and staff provisioning that won’t break peak season.', 'k' => '<span>SSO</span><span>MDM</span><span>UEM</span>'],
              ['t' => 'Finance', 'd' => 'Tight access reviews, geo-fencing, and device posture checks for remote advisors.', 'k' => '<span>DLP</span><span>SIEM</span><span>MFA</span>'],
              ['t' => 'Field Teams', 'd' => 'Zero-touch enrollment and offline-safe rules for rough environments.', 'k' => '<span>Intune</span><span>MDM</span><span>RBAC</span>']
          ]; ?>
          <?php foreach ($cards as $c): ?>
                <div class="group w-[320px] flex-shrink-0 rounded-2xl bg-white border border-slate-200 p-6 hover:shadow-lg transition">
                  <h3 class="text-lg font-semibold text-neutral-900"><?= htmlspecialchars($c['t']); ?></h3>
                  <p class="mt-2 text-sm text-neutral-600"><?= htmlspecialchars($c['d']); ?></p>
                  <div class="mt-4 flex flex-wrap gap-2 text-[11px] text-blue-700/80"><?= $c['k']; ?></div>
                </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- COMPLIANCE STRIP -->
  <section class="relative bg-white py-14">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid gap-6 md:grid-cols-3">
        <div class="rounded-xl border border-slate-200 p-6">
          <p class="text-sm text-slate-500">Compliance</p>
          <p class="mt-1 text-xl font-semibold">PIPEDA • HIPAA-friendly • SOC 2 vendor selection</p>
        </div>
        <div class="rounded-xl border border-slate-200 p-6">
          <p class="text-sm text-slate-500">Data Residency</p>
          <p class="mt-1 text-xl font-semibold">Canada-first options with transparent cross-border flows</p>
        </div>
        <div class="rounded-xl border border-slate-200 p-6">
          <p class="text-sm text-slate-500">SLA</p>
          <p class="mt-1 text-xl font-semibold">99.95% target • 24/7 on-call • incident postmortems</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="relative bg-white py-20">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center max-w-3xl mx-auto">
        <span class="inline-block text-[11px] font-semibold tracking-widest text-orange-600 uppercase">FAQ</span>
        <h2 class="mt-3 text-3xl md:text-4xl font-bold">Questions, pre-answered.</h2>
        <p class="mt-3 text-slate-600">If it saves a support ticket, it goes here.</p>
      </div>

      <?php $faqs = [
          ['q' => 'Can you migrate us from our current tenant?', 'a' => 'Yes. We audit licenses, identity setup, mail flow, SharePoint/OneDrive, and Teams. Then we run a staged cutover with rollback points and after-care support.'],
          ['q' => 'Do you support Zoho alongside Microsoft 365?', 'a' => 'Absolutely. We integrate Zoho CRM/Books with M365 identity, email, and file storage so data flows cleanly between tools.'],
          ['q' => 'What about backups for SaaS data?', 'a' => 'We use Acronis Cyber Protect (or equivalent) for Microsoft 365 and other SaaS backups with retention and legal hold. Restores are tested.'],
          ['q' => 'We’re regulated. How do you handle compliance?', 'a' => 'We design for least-privilege, enforce MFA, run quarterly access reviews, and document controls. We align to PIPEDA/HIPAA and help you pick SOC 2 vendors.'],
          ['q' => 'How fast can we start?', 'a' => 'Discovery starts this week. Typical onboarding completes in under 14 days for small teams and ~30 days for larger orgs.']
      ]; ?>

      <div class="mt-10 max-w-3xl mx-auto divide-y divide-slate-200 rounded-2xl border border-slate-200">
        <?php foreach ($faqs as $i => $f):
            $id = 'faq-' . $i; ?>
              <details class="group p-5">
                <summary class="flex cursor-pointer items-center justify-between list-none">
                  <h3 class="text-base font-semibold text-neutral-900"><?= htmlspecialchars($f['q']); ?></h3>
                  <span class="ml-4 h-7 w-7 grid place-items-center rounded-lg bg-slate-100 text-slate-600 group-open:rotate-45 transition">+</span>
                </summary>
                <p class="mt-3 text-sm text-neutral-700 leading-relaxed"><?= htmlspecialchars($f['a']); ?></p>
              </details>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="relative bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 py-20">
    <div class="max-ww-5xl max-w-5xl mx-auto text-center px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-white">Ready to stop babysitting software?</h2>
      <p class="mt-4 text-lg text-slate-300 max-w-2xl mx-auto">Let QueryTel run your SaaS so your team can actually work. Clean onboarding, steady ops, predictable costs.</p>
      <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
        <a href="<?= $base ?? '' ?>/contactus" class="inline-block px-8 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-semibold shadow-lg transition">Request an Expert</a>
        <a href="<?= $base . '/services' ?>" class="inline-block px-8 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-semibold ring-1 ring-white/20 transition">Explore Services</a>
      </div>
    </div>
    <div class="absolute inset-0 pointer-events-none">
      <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[600px] rounded-full bg-orange-500/10 blur-3xl"></div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <style>
    @media (prefers-reduced-motion: no-preference) {
      .animate-line-sweep { animation: lineSweep 3.6s ease-in-out infinite; }
      @keyframes lineSweep { 0% { transform: translateX(-10%);} 100% { transform: translateX(110%);} }
    }
    /* hide scrollbars for industries row */
    #industries [overflow-x-auto]::-webkit-scrollbar { display: none; }
  </style>
</body>
</html>
