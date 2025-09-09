<?php $base = "/Querytel_CA"; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Code Services — Web, Software & APIs | Querytel Inc</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          keyframes: {
            fadeInUp: { "0%": { opacity: 0, transform: "translateY(16px)" }, "100%": { opacity: 1, transform: "translateY(0)" } },
            floatY: { "0%,100%": { transform: "translateY(0)" }, "50%": { transform: "translateY(-12px)" } }
          },
          animation: {
            fadeInUp: "fadeInUp .7s ease-out forwards",
            floatY: "floatY 6s ease-in-out infinite"
          }
        }
      }
    }
  </script>
</head>

<body class="bg-white text-neutral-900 font-sans">
  <?php include("navbar.php"); ?>

  <!-- HERO: Code Services (Theme = Orange + Blue) — Responsive -->
  <section class="relative overflow-hidden bg-white">
    <!-- faint grid -->
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
      <svg class="absolute inset-0 w-full h-full text-slate-100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <defs>
          <pattern id="grid-th" width="8" height="8" patternUnits="userSpaceOnUse">
            <path d="M8 0H0V8" fill="none" stroke="currentColor" stroke-width=".35" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid-th)"></rect>
      </svg>
    </div>

    <!-- soft brand orb (BLUE) -->
    <svg
      class="pointer-events-none absolute -top-20 -right-20 w-[360px] h-[360px] md:w-[520px] md:h-[520px] text-blue-600/10"
      viewBox="0 0 600 600" fill="none" aria-hidden="true">
      <defs>
        <linearGradient id="orb-th" x1="0" y1="0" x2="1" y2="1">
          <stop offset="0%" stop-color="currentColor" stop-opacity=".9" />
          <stop offset="100%" stop-color="currentColor" stop-opacity="0" />
        </linearGradient>
      </defs>
      <circle cx="300" cy="300" r="300" fill="url(#orb-th)" />
    </svg>

    <div
      class="max-w-7xl mx-auto px-4 sm:px-6 py-16 sm:py-20 md:py-32 grid gap-10 md:gap-12 lg:grid-cols-[1fr_1.3fr] items-center">

      <!-- Text -->
      <div class="opacity-0 animate-fadeInUp">
        <span
          class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
          <span class="inline-block h-1.5 w-1.5 rounded-full bg-orange-600"></span>
          Web • Software • APIs
        </span>

        <h1 class="mt-3 text-3xl sm:text-4xl md:text-6xl font-bold tracking-tight leading-tight text-neutral-900">
          Design, build, ship. <span class="text-blue-700/70">With zero drama.</span>
        </h1>

        <p class="mt-4 sm:mt-5 text-base sm:text-lg md:text-xl text-neutral-600 max-w-2xl">
          Modern stacks, clean architecture, and ruthless focus on DX & UX. From pixel-perfect sites to production APIs
          and automations.
        </p>

        <div class="mt-6 sm:mt-8 flex flex-col sm:flex-row flex-wrap gap-3">
          <a href="<?= $base ?? '' ?>/contactus"
            class="inline-flex items-center justify-center gap-2 bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700 transition">
            Start a project
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
              <path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z" />
            </svg>
          </a>
          <!-- <a href="#work"
            class="inline-flex items-center justify-center gap-2 border border-blue-700 text-blue-700 px-6 py-3 rounded-lg hover:bg-blue-50 transition">
            See work
          </a> -->
        </div>

        <div class="mt-6 sm:mt-8 flex flex-wrap gap-x-6 gap-y-2 text-sm">
          <div class="flex items-center gap-2 text-neutral-600">
            <span class="h-2 w-2 rounded-full bg-orange-600"></span> Core Web Vitals focused
          </div>
          <div class="flex items-center gap-2 text-neutral-600">
            <span class="h-2 w-2 rounded-full bg-orange-600"></span> Security by default
          </div>
          <div class="flex items-center gap-2 text-neutral-600">
            <span class="h-2 w-2 rounded-full bg-orange-600"></span> CI/CD & previews
          </div>
        </div>
      </div>

      <!-- Visual -->
      <div class="relative min-w-0"> <!-- min-w-0 prevents grid overflow on mobile -->
        <!-- floating ring (BLUE) -->
        <div
          class="pointer-events-none absolute -top-8 -left-6 h-48 w-48 md:h-72 md:w-72 rounded-full border-[12px] md:border-[14px] border-blue-700/90 opacity-70 animate-floatY">
        </div>

        <!-- Code card -->
        <div
          class="relative rounded-2xl bg-white ring-1 ring-slate-200 shadow-[0_20px_60px_rgba(2,6,23,0.08)] overflow-hidden">
          <div class="flex items-center gap-2 px-4 py-2.5 sm:py-3 bg-blue-50 border-b border-blue-100">
            <span class="h-2.5 w-2.5 rounded-full bg-orange-500"></span>
            <span class="h-2.5 w-2.5 rounded-full bg-amber-400"></span>
            <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
            <span class="ml-3 text-[11px] sm:text-xs font-medium text-blue-700">api/routes.ts</span>
          </div>
          <pre class="p-3 sm:p-4 text-[11px] sm:text-[12.5px] leading-6 
            overflow-x-auto max-w-full text-slate-800 
            whitespace-pre-wrap break-words">

<code>// minimal, boring, fast
import { z } from "zod";

export const route = {
  method: "POST",
  path: "/v1/contact",
  body: z.object({ name:z.string(), email:z.string().email(), message:z.string().min(10) }),
  handler: async ({ body, db, mail }) => {
    await db.insert("leads", body);
    await mail.send({ to:"sales@querytel.com", subject:"New lead", text: body.message });
    return { ok: true };
  }
};</code></pre>
        </div>

        <!-- Metrics pill -->
        <div class="mt-4 grid grid-cols-3 gap-2 sm:gap-3 text-center">
          <div class="rounded-xl border border-blue-100 py-2.5 sm:py-3">
            <div class="text-base sm:text-xl font-semibold text-neutral-900">~45ms</div>
            <div class="text-[10px] sm:text-[11px] text-blue-700/70">TTFB (edge)</div>
          </div>
          <div class="rounded-xl border border-blue-100 py-2.5 sm:py-3">
            <div class="text-base sm:text-xl font-semibold text-neutral-900">100</div>
            <div class="text-[10px] sm:text-[11px] text-blue-700/70">CWV Score</div>
          </div>
          <div class="rounded-xl border border-blue-100 py-2.5 sm:py-3">
            <div class="text-base sm:text-xl font-semibold text-neutral-900">99.9%</div>
            <div class="text-[10px] sm:text-[11px] text-blue-700/70">Uptime</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tailwind keyframes (kept) -->
  <script>
    if (window.tailwind) {
      tailwind.config = tailwind.config || { theme: { extend: {} } };
      const kf = tailwind.config.theme.extend.keyframes || {};
      const an = tailwind.config.theme.extend.animation || {};
      tailwind.config.theme.extend.keyframes = {
        ...kf,
        fadeInUp: { "0%": { opacity: 0, transform: "translateY(16px)" }, "100%": { opacity: 1, transform: "translateY(0)" } },
        floatY: { "0%,100%": { transform: "translateY(0)" }, "50%": { transform: "translateY(-10px)" } }
      };
      tailwind.config.theme.extend.animation = {
        ...an,
        fadeInUp: "fadeInUp .7s ease-out forwards",
        floatY: "floatY 6s ease-in-out infinite"
      };
    }
  </script>

  <!-- SECTION: Why Choose Us -->
  <section class="relative bg-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">
        Why build with <span class="text-orange-600">QueryTel</span>?
      </h2>
      <p class="mt-4 text-lg text-neutral-600 max-w-2xl mx-auto">
        We don’t just write code — we deliver solutions that scale, stay secure, and look damn good while doing it.
      </p>

      <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Card 1 -->
        <div
          class="p-8 rounded-2xl shadow-lg border border-slate-100 hover:shadow-xl transition bg-gradient-to-br from-orange-50 to-white">
          <div
            class="h-12 w-12 mx-auto flex items-center justify-center rounded-full bg-orange-600 text-white text-xl font-bold">
            ⚡</div>
          <h3 class="mt-6 text-xl font-semibold text-neutral-900">Fast Delivery</h3>
          <p class="mt-3 text-neutral-600 text-sm">Agile sprints, automated CI/CD pipelines, and deadlines that don’t
            slip.</p>
        </div>

        <!-- Card 2 -->
        <div
          class="p-8 rounded-2xl shadow-lg border border-slate-100 hover:shadow-xl transition bg-gradient-to-br from-blue-50 to-white">
          <div
            class="h-12 w-12 mx-auto flex items-center justify-center rounded-full bg-blue-700 text-white text-xl font-bold">
            🔒</div>
          <h3 class="mt-6 text-xl font-semibold text-neutral-900">Security First</h3>
          <p class="mt-3 text-neutral-600 text-sm">Threat modeling, code audits, and encryption baked into everything.
          </p>
        </div>

        <!-- Card 3 -->
        <div
          class="p-8 rounded-2xl shadow-lg border border-slate-100 hover:shadow-xl transition bg-gradient-to-br from-orange-50 to-white">
          <div
            class="h-12 w-12 mx-auto flex items-center justify-center rounded-full bg-orange-600 text-white text-xl font-bold">
            🚀</div>
          <h3 class="mt-6 text-xl font-semibold text-neutral-900">Scalable Systems</h3>
          <p class="mt-3 text-neutral-600 text-sm">Microservices, serverless, or monolith — always built to handle
            growth.</p>
        </div>

        <!-- Card 4 -->
        <div
          class="p-8 rounded-2xl shadow-lg border border-slate-100 hover:shadow-xl transition bg-gradient-to-br from-blue-50 to-white">
          <div
            class="h-12 w-12 mx-auto flex items-center justify-center rounded-full bg-blue-700 text-white text-xl font-bold">
            🎨</div>
          <h3 class="mt-6 text-xl font-semibold text-neutral-900">Modern Design</h3>
          <p class="mt-3 text-neutral-600 text-sm">Pixel-perfect UI, responsive layouts, and Microsoft-level polish.</p>
        </div>

        <!-- Card 5 -->
        <div
          class="p-8 rounded-2xl shadow-lg border border-slate-100 hover:shadow-xl transition bg-gradient-to-br from-orange-50 to-white">
          <div
            class="h-12 w-12 mx-auto flex items-center justify-center rounded-full bg-orange-600 text-white text-xl font-bold">
            🤝</div>
          <h3 class="mt-6 text-xl font-semibold text-neutral-900">Trusted Partner</h3>
          <p class="mt-3 text-neutral-600 text-sm">We don’t vanish after launch — ongoing support and updates included.
          </p>
        </div>

        <!-- Card 6 -->
        <div
          class="p-8 rounded-2xl shadow-lg border border-slate-100 hover:shadow-xl transition bg-gradient-to-br from-blue-50 to-white">
          <div
            class="h-12 w-12 mx-auto flex items-center justify-center rounded-full bg-blue-700 text-white text-xl font-bold">
            📊</div>
          <h3 class="mt-6 text-xl font-semibold text-neutral-900">Data Driven</h3>
          <p class="mt-3 text-neutral-600 text-sm">Analytics, monitoring, and insights to guide smart business
            decisions.</p>
        </div>
      </div>
    </div>
  </section>



  <?php /**
    * Elegant Services Section (PHP + Tailwind) — Animated & Color‑infused
    * Subtle motion, gradient accents, restrained color splashes.
    */ ?>

  <section id="services" class="relative isolate bg-white py-20 sm:py-24">
    <!-- background glow -->
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
      <div class="absolute left-1/2 top-0 -translate-x-1/2 h-[540px] w-[900px] rounded-full opacity-[0.1] blur-3xl"
        style="background: radial-gradient(60% 60% at 50% 40%, #2563eb 0%, transparent 70%)"></div>
      <div class="absolute right-0 bottom-0 h-[300px] w-[300px] rounded-full opacity-[0.07] blur-2xl"
        style="background: radial-gradient(60% 60% at 50% 50%, #f97316 0%, transparent 70%)"></div>
    </div>

    <div class="mx-auto max-w-7xl px-6">
      <!-- Header -->
      <div class="max-w-3xl animate-fadeInUp">
        <span
          class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
          <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> Services
        </span>
        <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">Web & Software, tastefully
          executed.</h2>
        <p class="mt-3 text-neutral-600">Lean builds, clean API surfaces, and UI that feels inevitable. Elegance is the
          absence of noise.</p>
      </div>

      <?php
      $items = [
        ['title' => 'Websites', 'desc' => 'Modern, responsive sites built with performance, accessibility, and SEO at the core. Structured with a true design system.', 'pill' => 'Frontend', 'icon' => '<path d="M12 2a10 10 0 100 20 10 10 0 000-20Zm1 2.1c2.5.3 4.6 2 5.4 4.2H13V4.1ZM11 4.1V8H5.7A7 7 0 0111 4.1ZM4.1 11H8v2H4.1a8.2 8.2 0 010-2ZM5.7 16H11v3.9A7 7 0 015.7 16Zm7.3 3.9V16h4.3A7 7 0 0113 19.9ZM20 13h-4v-2h4a8.2 8.2 0 010 2Z" />', 'cta' => 'Start a website', 'color' => 'from-blue-50 to-white'],
        ['title' => 'Web Apps', 'desc' => 'Scalable applications with authentication, dashboards, and data exports. Built component-first, tested, and documented.', 'pill' => 'Product', 'icon' => '<path d="M8 5 3 12l5 7 2-1.4L6.2 12 10 6.4 8 5Zm8 0-2 1.4L17.8 12 14 17.6 16 19l5-7-5-7Z" />', 'cta' => 'Scope my app', 'color' => 'from-orange-50 to-white'],
        ['title' => 'APIs', 'desc' => 'REST or GraphQL APIs with monitoring, rate-limits, retries, and version control. Designed for resilience and clarity.', 'pill' => 'Backend', 'icon' => '<path d="M7 2h2v6H7V2zm8 0h2v6h-2V2zM6 10h12v3a6 6 0 01-12 0v-3z" />', 'cta' => 'Design my API', 'color' => 'from-blue-50 to-white'],
        ['title' => 'E-commerce', 'desc' => 'Shopify solutions with elegant checkouts, tax & shipping logic, and reliable storefront performance.', 'pill' => 'Commerce', 'icon' => '<path d="M7 4h13l-1.5 9H8.6L7 4Zm-1 0H3v2h2l2.4 12H19v2H7a2 2 0 01-2-1.6L4 6Z" />', 'cta' => 'Launch my shop', 'color' => 'from-orange-50 to-white'],
        ['title' => 'Automation', 'desc' => 'Integrations, workflows, and webhooks that remove friction. Background tasks that simply disappear.', 'pill' => 'Ops', 'icon' => '<path d="M11 2h2v6h-2V2ZM2 11h6v2H2v-2Zm14 0h6v2h-6v-2Zm-3 5v6h-2v-6h2Z" />', 'cta' => 'Automate my work', 'color' => 'from-blue-50 to-white'],
        ['title' => 'Care & Security', 'desc' => 'Proactive monitoring, backups, and patching. Stability engineered from the start, not as an afterthought.', 'pill' => 'Support', 'icon' => '<path d="M12 2l8 4v6c0 5-3.5 8.5-8 10-4.5-1.5-8-5-8-10V6l8-4z" />', 'cta' => 'Get ongoing care', 'color' => 'from-orange-50 to-white'],

        // NEW — AI / Chatbot
        ['title' => 'AI / Chatbot', 'desc' => 'Conversational assistants that handle support, sales, and knowledge retrieval. Built with trust, guardrails, and insights.', 'pill' => 'AI', 'icon' => '<path d="M4 5h16v10H7l-3 3V5zm3 4h10v2H7V9z" />', 'cta' => 'Build my bot', 'color' => 'from-blue-50 to-white'],

        // NEW — ML / DL
        ['title' => 'ML / DL', 'desc' => 'End-to-end machine learning pipelines. Training, fine-tuning, and deploying models that scale with your data.', 'pill' => 'ML/DL', 'icon' => '<path d="M4 6h16v12H4V6zm3 3h4v6H7V9zm6 0h4v6h-4V9z" />', 'cta' => 'Train my model', 'color' => 'from-orange-50 to-white'],

        // NEW — IoT
        ['title' => 'IoT', 'desc' => 'Secure device connectivity and telemetry at scale. Real-time cloud dashboards and edge intelligence.', 'pill' => 'IoT', 'icon' => '<path d="M12 2a7 7 0 017 7h-2a5 5 0 10-5 5v2a7 7 0 110-14zm1 9h7v2h-7v-2z" />', 'cta' => 'Connect my devices', 'color' => 'from-blue-50 to-white'],
      ];
      ?>



      <div class="mt-12 grid gap-6 sm:gap-7 md:grid-cols-2 lg:grid-cols-3">
        <?php foreach ($items as $it): ?>
          <article
            class="group relative overflow-hidden rounded-2xl border border-neutral-200/60 bg-gradient-to-br <?= $it['color']; ?> p-6 shadow-[0_6px_24px_rgba(2,6,23,0.06)] backdrop-blur transition-transform duration-500 hover:-translate-y-1 hover:shadow-xl animate-fadeInUp">
            <div class="flex items-center gap-3">
              <div class="grid h-11 w-11 place-items-center rounded-xl bg-neutral-900 text-white animate-fadeInUp">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><?= $it['icon']; ?></svg>
              </div>
              <span
                class="inline-flex items-center rounded-full border border-neutral-200 bg-white/80 px-2.5 py-1 text-[10px] font-semibold text-neutral-700">
                <?= htmlspecialchars($it['pill']); ?>
              </span>
            </div>

            <h3 class="mt-5 text-xl font-semibold text-neutral-900 group-hover:text-orange-600 transition-colors">
              <?= htmlspecialchars($it['title']); ?>
            </h3>
            <p class="mt-2 text-neutral-600 leading-relaxed"><?= htmlspecialchars($it['desc']); ?></p>

            <a href="<?= $base ?? '' ?>/contactus"
              class="mt-5 inline-flex items-center gap-2 text-sm font-medium text-orange-600 transition-colors hover:text-orange-700">
              <?= htmlspecialchars($it['cta']); ?>
              <svg class="h-4 w-4 transition-transform group-hover:translate-x-1" viewBox="0 0 24 24" fill="currentColor"
                aria-hidden="true">
                <path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z" />
              </svg>
            </a>
          </article>
        <?php endforeach; ?>
      </div>

      <div class="mt-12 rounded-xl border border-neutral-200/60 bg-white/70 p-4 backdrop-blur animate-fadeInUp">
        <div class="grid gap-3 text-sm text-neutral-700 sm:grid-cols-3">
          <div class="flex items-center gap-2"><span
              class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> Fixed scope, clear pricing</div>
          <div class="flex items-center gap-2"><span
              class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> Performance & security by default
          </div>
          <div class="flex items-center gap-2"><span
              class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span> CI/CD, docs, backups</div>
        </div>
      </div>
    </div>

    <script>
      tailwind.config = tailwind.config || { theme: { extend: {} } };
      tailwind.config.theme.extend.keyframes = {
        fadeInUp: { '0%': { opacity: 0, transform: 'translateY(16px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } }
      };
      tailwind.config.theme.extend.animation = {
        fadeInUp: 'fadeInUp 0.7s ease-out both'
      };
    </script>
  </section>


  <section id="process" class="relative isolate bg-white py-24 sm:py-32">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
      <svg class="absolute inset-0 h-full w-full text-slate-100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <defs>
          <pattern id="grid-soft" width="8" height="8" patternUnits="userSpaceOnUse">
            <path d="M8 0H0V8" fill="none" stroke="currentColor" stroke-width=".35" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#grid-soft)"></rect>
      </svg>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="max-w-3xl">
        <span
          class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
          <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Process
        </span>
        <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">
          How We Publish Software
        </h2>
        <p class="mt-4 text-base text-neutral-600 leading-relaxed">
          Small, clear steps. Careful design. Results you can see and measure.
        </p>
      </div>

      <?php
      $steps = [
        ['n' => '01', 't' => 'Scope', 'd' => 'We start by understanding what you\'re trying to achieve. We define clear goals, outline what\'s in and out of scope, and agree on what success looks like.', 'icon' => '<path d="M4 6h16v2H4zM4 11h16v2H4zM4 16h10v2H4z" />'],
        ['n' => '02', 't' => 'Design', 'd' => 'Before writing a single line of code, we design how things will look and work — including all the empty states, errors, and user journeys.', 'icon' => '<path d="M4 5h16v14H4zM7 8h10v8H7z" />'],
        ['n' => '03', 't' => 'Build', 'd' => 'Our team writes clean, reliable code — tested and reviewed to make sure everything works exactly as planned.', 'icon' => '<path d="M4 6l8 6 8-6v12H4z" />'],
        ['n' => '04', 't' => 'Ship', 'd' => 'We launch carefully, using tools that let us test features safely, roll out gradually, and monitor performance in real-time.', 'icon' => '<path d="M3 12l7 7 11-11-1.4-1.4L10 16.2 4.4 10.6 3 12z" />'],
        ['n' => '05', 't' => 'Iterate', 'd' => 'After launch, we track how people use it. We learn what’s working, what’s not, and use that to improve it continuously.', 'icon' => '<path d="M12 5v3l4-4-4-4v3A9 9 0 103 12h2a7 7 0 117 7v2a9 9 0 10-2-16z" />'],
      ];
      ?>

      <div class="mt-16">
        <div class="relative">
          <div
            class="hidden 2xl:block absolute left-0 right-0 top-14 h-[2px] bg-gradient-to-r from-blue-200 via-blue-400 to-blue-200 opacity-60">
            <div class="h-full w-24 animate-line-sweep bg-gradient-to-r from-transparent via-white/80 to-transparent">
            </div>
          </div>

          <div class="grid gap-8 sm:gap-10 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($steps as $s): ?>
              <article
                class="group relative rounded-2xl border border-neutral-200/70 bg-white/90 p-6 xl:p-7 shadow-[0_6px_24px_rgba(2,6,23,0.05)] backdrop-blur">
                <div class="flex items-center justify-between">
                  <span class="text-[11px] font-mono tracking-widest text-blue-700/80"><?= $s['n']; ?></span>
                  <span
                    class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white ring-1 ring-white/10">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                      <?= $s['icon']; ?>
                    </svg>
                  </span>
                </div>

                <h3 class="mt-5 text-lg font-semibold text-neutral-900"><?= htmlspecialchars($s['t']); ?></h3>
                <p class="mt-2 text-sm text-neutral-600 leading-relaxed"><?= htmlspecialchars($s['d']); ?></p>

                <div class="mt-5 rounded-lg bg-slate-50 p-3 text-[11px] leading-5 text-slate-700 ring-1 ring-slate-100">
                  <?php if ($s['t'] === 'Scope'): ?>
                    <pre><code>Goals:
                                                                                                                                                                ✓ Clear definition of success
                                                                                                                                                                ✓ Fixed scope from day one</code></pre>
                  <?php elseif ($s['t'] === 'Design'): ?>
                    <pre><code>Design kit:
                                                                                                                                                                ✓ Buttons, forms, layouts
                                                                                                                                                                ✓ Empty | Error | Loading states</code></pre>
                  <?php elseif ($s['t'] === 'Build'): ?>
                    <pre><code>Process:
                                                                                                                                                                ✓ Feature branch
                                                                                                                                                                ✓ Code review + testing</code></pre>
                  <?php elseif ($s['t'] === 'Ship'): ?>
                    <pre><code>Launch flow:
                                                                                                                                                                ✓ Preview links
                                                                                                                                                                ✓ Gradual rollout
                                                                                                                                                                ✓ Real-time logs</code></pre>
                  <?php else: ?>
                    <pre><code>After launch:
                                                                                                                                                                ✓ Track usage
                                                                                                                                                                ✓ Learn → Improve → Repeat</code></pre>
                  <?php endif; ?>
                </div>

                <div
                  class="hidden 2xl:block absolute left-1/2 top-14 -translate-x-1/2 h-3 w-3 rounded-full bg-white ring-2 ring-blue-500/70">
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <div class="mt-20 rounded-xl border border-neutral-200/60 bg-white/70 p-5 backdrop-blur">
        <div class="grid gap-4 text-sm text-neutral-700 sm:grid-cols-3">
          <div class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> Clear reviews
            & test coverage</div>
          <div class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> Reliable
            launches & safe rollbacks</div>
          <div class="flex items-center gap-2"><span class="h-1.5 w-1.5 rounded-full bg-blue-600"></span> Documented
            delivery process</div>
        </div>
      </div>
    </div>

    <style>
      @media (prefers-reduced-motion: no-preference) {
        @keyframes lineSweep {
          0% {
            transform: translateX(-10%);
          }

          100% {
            transform: translateX(110%);
          }
        }

        .animate-line-sweep {
          animation: lineSweep 3.6s ease-in-out infinite;
        }

        article.group {
          transition: transform .4s ease, box-shadow .4s ease;
        }

        article.group:hover {
          transform: translateY(-6px);
          box-shadow: 0 10px 30px rgba(2, 6, 23, .1);
        }
      }

      pre {
        white-space: pre-wrap;
      }
    </style>
  </section>




  <!-- MARKETING & SMM SECTION (Light Theme) -->
  <section class="relative bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 lg:px-12">
      <div class="text-center max-w-3xl mx-auto">
        <span class="inline-block text-[11px] font-semibold tracking-widest text-orange-500 uppercase">
          Marketing & Growth
        </span>
        <h2 class="mt-3 text-3xl md:text-4xl font-bold text-slate-900">
          Marketing that Builds Trust
        </h2>
        <p class="mt-4 text-slate-600">
          Strategic campaigns, data-backed insights, and scalable solutions designed for measurable results.
        </p>
      </div>

      <!-- Grid -->
      <div class="mt-16 grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:shadow-md transition">
          <div
            class="h-12 w-12 flex items-center justify-center rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 mb-6">
            <img src="https://cdn.simpleicons.org/meta/ffffff" class="h-6 w-6" alt="Meta logo" />
          </div>
          <h3 class="text-lg font-semibold text-slate-900">Social Media Management</h3>
          <p class="mt-3 text-slate-600 text-sm">
            Tailored campaigns on Facebook, Instagram, TikTok, and LinkedIn to drive engagement and brand growth.
          </p>
        </div>

        <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:shadow-md transition">
          <div
            class="h-12 w-12 flex items-center justify-center rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 mb-6">
            <img src="https://cdn.simpleicons.org/googleads/ffffff" class="h-6 w-6" alt="Google Ads logo" />
          </div>
          <h3 class="text-lg font-semibold text-slate-900">Performance Advertising</h3>
          <p class="mt-3 text-slate-600 text-sm">
            Data-driven ad campaigns across Google, Meta, and programmatic channels to maximize ROI.
          </p>
        </div>

        <div class="p-8 rounded-2xl bg-slate-50 border border-slate-200 hover:shadow-md transition">
          <div
            class="h-12 w-12 flex items-center justify-center rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 mb-6">
            <img src="https://cdn.simpleicons.org/mailchimp/ffffff" class="h-6 w-6" alt="Mailchimp logo" />
          </div>
          <h3 class="text-lg font-semibold text-slate-900">Automation & Email</h3>
          <p class="mt-3 text-slate-600 text-sm">
            Automated workflows, personalized newsletters, and client nurturing campaigns that scale with your business.
          </p>
        </div>
      </div>
    </div>

    <!-- Background visuals (subtle, Microsoft-style) -->
    <div class="absolute inset-0 -z-10">
      <div
        class="absolute -top-20 right-0 w-[500px] h-[500px] bg-gradient-to-tr from-orange-100 to-pink-100 blur-[160px] rounded-full">
      </div>
      <div
        class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-gradient-to-tr from-sky-100 to-indigo-100 blur-[140px] rounded-full">
      </div>
    </div>
  </section>



  <!-- STACK -->
  <section class="bg-slate-900 py-20 relative">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <span class="inline-block text-[11px] font-semibold tracking-widest text-orange-400 uppercase">
        Our Toolbox
      </span>
      <h2 class="mt-3 text-3xl md:text-4xl font-bold text-white">
        Stacks we love
      </h2>
      <p class="mt-3 text-slate-400 max-w-2xl mx-auto">
        Modern frameworks, reliable backends, AI/ML brains, and cloud platforms that keep us scaling.
      </p>
      <div class="mt-6 h-px w-24 bg-gradient-to-r from-orange-500/60 via-white/40 to-orange-500/60 mx-auto"></div>

      <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5">
        <?php
        $stack = [
          // Web & Core
          "react",
          "nextdotjs",
          "nodedotjs",
          "typescript",
          "javascript",
          "php",
          "laravel",
          "mysql",
          "postgresql",
          "mongodb",
          "redis",
          "docker",
          "kubernetes",

          // DevOps / Tools
          "git",
          "github",
          "gitlab",
          "bitbucket",
          "figma",
          "postman",
          "graphql",
          "linux",
          "nginx",
          "apache",
          "wordpress",
          "shopify",
          "tailwindcss",
          "vite",
          "webpack",

          // Cloud
          "amazonaws",
          "googlecloud",
          "azure",

          // AIML / Data Science
          "tensorflow",
          "pytorch",
          "scikitlearn",
          "keras",
          "opencv",
          "numpy",
          "pandas",
          "jupyter",
          "anaconda",
          "huggingface",
          "mlflow",
          "python",
          "c++",
          "c#",

        ];

        foreach ($stack as $slug):
          $name = ucfirst($slug);
          ?>
          <div
            class="flex items-center gap-3 rounded-xl bg-white/5 hover:bg-white/10 transition-all duration-300 text-white py-3 px-4 ring-1 ring-white/10 hover:ring-white/20 text-sm font-medium shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
            <?php if ($slug === "azure"): ?>
              <img src="/assets/icons/azure.svg" alt="Azure logo" class="h-6 w-6 flex-shrink-0" />
            <?php else: ?>
              <img src="https://cdn.simpleicons.org/<?= $slug; ?>" alt="<?= $name; ?> logo" class="h-6 w-6 flex-shrink-0" />
            <?php endif; ?>
            <span><?= $name; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <style>
      section .grid div {
        backdrop-filter: blur(6px);
      }
    </style>
  </section>

  <!-- MARKETING & SMM -->
  <section class="bg-slate-950 py-20 relative">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <span class="inline-block text-[11px] font-semibold tracking-widest text-orange-400 uppercase">
        Growth Tools
      </span>
      <h2 class="mt-3 text-3xl md:text-4xl font-bold text-white">
        Marketing & SMM
      </h2>
      <p class="mt-3 text-slate-400 max-w-2xl mx-auto">
        Platforms we use to reach, engage, and grow audiences online.
      </p>
      <div class="mt-6 h-px w-24 bg-gradient-to-r from-orange-500/60 via-white/40 to-orange-500/60 mx-auto"></div>

      <div class="mt-12 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5">
        <?php
        $marketing = [
          "facebook",
          "instagram",
          "x",       // old Twitter (X is not in Simple Icons yet)
          "linkedIn",
          "tiktok",
          "youtube",
          "pinterest",
          "whatsapp",
          "telegram",
          "slack",
          "mailchimp",
          "googleanalytics",
          "hubspot",
          "semrush",
          "canva",
          "reddit",
          "quora",
          "google"
        ];

        foreach ($marketing as $slug):
          $name = ucfirst($slug);
          ?>
          <div
            class="flex items-center gap-3 rounded-xl bg-white/5 hover:bg-white/10 transition-all duration-300 text-white py-3 px-4 ring-1 ring-white/10 hover:ring-white/20 text-sm font-medium shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
            <img src="https://cdn.simpleicons.org/<?= $slug; ?>" alt="<?= $name; ?> logo" class="h-6 w-6 flex-shrink-0" />
            <span><?= $name; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <style>
      section .grid div {
        backdrop-filter: blur(6px);
      }
    </style>
  </section>



  <!-- FINAL CTA -->
  <section class="relative bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 py-20">
    <div class="max-w-5xl mx-auto text-center px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-white">
        Ready to build something extraordinary?
      </h2>
      <p class="mt-4 text-lg text-slate-300 max-w-2xl mx-auto">
        Whether it’s scaling your business, designing your digital presence, or launching your next big idea — we’re
        here to make it real.
      </p>

      <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">
        <a href="<?= $base . '/contactus' ?>"
          class="inline-block px-8 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-semibold shadow-lg transition">
          Request an Expert
        </a>
        <a href="<?= $base . '/services' ?>"
          class="inline-block px-8 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-semibold ring-1 ring-white/20 transition">
          Explore Services
        </a>
      </div>
    </div>

    <!-- subtle glow background -->
    <div class="absolute inset-0 pointer-events-none">
      <div
        class="absolute -top-32 left-1/2 -translate-x-1/2 w-[600px] h-[600px] rounded-full bg-orange-500/10 blur-3xl">
      </div>
    </div>
  </section>






  <?php include("footer.php"); ?>
</body>

</html>