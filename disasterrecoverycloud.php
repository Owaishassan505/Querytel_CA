<?php $base = "https://itcold.com" ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Querytel Inc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInRight: {
                            "0%": { opacity: 0, transform: "translateX(50px)" },
                            "100%": { opacity: 1, transform: "translateX(0)" },
                        },
                        fadeInLeft: {
                            "0%": { opacity: 0, transform: "translateX(-50px)" },
                            "100%": { opacity: 1, transform: "translateX(0)" },
                        },
                        fadeIn: {
                            "0%": { opacity: 0 },
                            "100%": { opacity: 1 },
                        },
                    },
                    animation: {
                        fadeInRight: "fadeInRight 0.8s ease-out forwards",
                        fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
                        fadeIn: "fadeIn 1s ease-out forwards",
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-white text-neutral-900 font-sans">
    <!-- HEADER -->
    <?php include("navbar.php"); ?>

    <!-- ========== HERO: Disaster Recovery Cloud ========== -->
    <section class="relative overflow-hidden text-white">
        <!-- Balanced brand gradient + soft highlights -->
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-orange-600 to-blue-800"></div>
        <div class="absolute inset-0" style="background-image:
         radial-gradient(80rem 40rem at 8% -10%,rgba(255,255,255,.14),transparent 60%),
         radial-gradient(60rem 30rem at 110% 120%,rgba(255,255,255,.08),transparent 40%);">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
            <!-- Copy -->
            <div class="animate-[fadeIn_0.7s_ease-out_forwards] opacity-0">
                <p
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 ring-1 ring-white/20 px-3 py-1 text-sm">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    Cyber Cloud Services
                </p>
                <h1 class="mt-3 text-4xl md:text-5xl font-bold leading-tight">
                    Disaster Recovery Cloud
                </h1>
                <p class="mt-4 text-orange-50 text-lg max-w-xl">
                    Orchestrated failover for your critical workloads spins up in minutes, tests without downtime, and
                    confidently meets recovery SLAs.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="#included"
                        class="inline-flex justify-center rounded-lg bg-white text-orange-600 font-semibold px-6 py-3 hover:bg-orange-50 transition">
                        What’s Included
                    </a>
                    <a href="<?= $base ?>/contactus"
                        class="inline-flex justify-center rounded-lg bg-white/10 ring-1 ring-white/30 px-6 py-3 hover:bg-white/15 transition">
                        Request a Demo
                    </a>
                </div>

                <!-- trust ticks -->
                <div class="mt-6 flex flex-wrap items-center gap-4 text-sm text-white/85">
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg>
                        RPO as low as 5 min
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg>
                        Orchestrated failover
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg>
                        DR tests on demand
                    </span>
                </div>
            </div>

            <!-- Visual: minimal inline SVG (no external asset) -->
            <div class="relative">
                <div class="absolute -inset-8 blur-3xl rounded-full"></div>
                <div class="relative z-10 rounded-2xl shadow-2xl ring-1 ring-black/5 p-6">
                    <!-- Simple data-center + failover arrow illustration -->
                    <img src="<?= $base ?>/assets/images/disasterRecovery.961513ad.svg" alt="Cyber Protect"
                        class="w-full h-72 object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- ========== INCLUDED SERVICES (grid) ========== -->
    <section id="included" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-neutral-900">
                    Included Services
                </h2>
                <div class="mt-4 h-px w-24 mx-auto bg-neutral-200"></div>
            </header>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card component -->
                <!-- 1 -->
                <article
                    class="group rounded-2xl bg-slate-800/90 text-white p-6 ring-1 ring-white/10 shadow-[0_10px_40px_rgba(2,6,23,.16)]">
                    <h3 class="text-sm font-semibold">Zero Capex to Launch Business</h3>
                    <div class="mt-4 grid place-items-center rounded-xl bg-white p-6 ring-1 ring-white/10">
                        <!-- icon: sprout/finance -->
                        <svg viewBox="0 0 96 96" class="h-28 w-28">
                            <defs>
                                <linearGradient id="i1" x1="0" y1="0" x2="1" y2="1">
                                    <stop stop-color="#93c5fd" />
                                    <stop offset="1" stop-color="#1e40af" />
                                </linearGradient>
                            </defs>
                            <circle cx="62" cy="30" r="10" fill="url(#i1)" />
                            <text x="58" y="34" font-size="10" font-weight="700" fill="#fff">$</text>
                            <path d="M16 64c12 0 16-8 16-16 12 0 16 8 16 16H16z" fill="url(#i1)" opacity=".7" />
                            <path d="M32 64c10 0 14-6 14-12 10 0 14 6 14 12H32z" fill="url(#i1)" />
                        </svg>
                    </div>
                </article>

                <!-- 2 -->
                <article
                    class="group rounded-2xl bg-slate-800/90 text-white p-6 ring-1 ring-white/10 shadow-[0_10px_40px_rgba(2,6,23,.16)]">
                    <h3 class="text-sm font-semibold">Built on Acronis Cyber Cloud</h3>
                    <div class="mt-4 grid place-items-center rounded-xl bg-white p-6 ring-1 ring-white/10">
                        <!-- icon: stacked layers -->
                        <svg viewBox="0 0 96 96" class="h-28 w-28">
                            <defs>
                                <linearGradient id="i2" x1="0" y1="0" x2="1" y2="1">
                                    <stop stop-color="#93c5fd" />
                                    <stop offset="1" stop-color="#1e40af" />
                                </linearGradient>
                            </defs>
                            <path d="M48 18l26 14-26 14L22 32 48 18z" fill="url(#i2)" />
                            <path d="M48 36l26 14-26 14L22 50l26-14z" fill="url(#i2)" opacity=".75" />
                            <path d="M48 54l26 14-26 14L22 68l26-14z" fill="url(#i2)" opacity=".55" />
                        </svg>
                    </div>
                </article>

                <!-- 3 -->
                <article
                    class="group rounded-2xl bg-slate-800/90 text-white p-6 ring-1 ring-white/10 shadow-[0_10px_40px_rgba(2,6,23,.16)]">
                    <h3 class="text-sm font-semibold">Disaster Recovery Orchestration</h3>
                    <div class="mt-4 grid place-items-center rounded-xl bg-white p-6 ring-1 ring-white/10">
                        <!-- icon: runbook/hand -->
                        <svg viewBox="0 0 96 96" class="h-28 w-28">
                            <defs>
                                <linearGradient id="i3" x1="0" y1="0" x2="1" y2="1">
                                    <stop stop-color="#93c5fd" />
                                    <stop offset="1" stop-color="#1e40af" />
                                </linearGradient>
                            </defs>
                            <rect x="20" y="22" width="56" height="40" rx="6" fill="url(#i3)" opacity=".2" />
                            <path d="M28 36h40M28 46h26" stroke="url(#i3)" stroke-width="6" stroke-linecap="round" />
                            <path d="M34 62c8 0 12-6 18-6s10 6 18 6" stroke="url(#i3)" stroke-width="6" fill="none"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                </article>

                <!-- 4 -->
                <article
                    class="group rounded-2xl bg-slate-800/90 text-white p-6 ring-1 ring-white/10 shadow-[0_10px_40px_rgba(2,6,23,.16)]">
                    <h3 class="text-sm font-semibold">Turnkey DRaaS Solution</h3>
                    <div class="mt-4 grid place-items-center rounded-xl bg-white p-6 ring-1 ring-white/10">
                        <!-- icon: cloud A -->
                        <svg viewBox="0 0 96 96" class="h-28 w-28">
                            <defs>
                                <linearGradient id="i4" x1="0" y1="0" x2="1" y2="1">
                                    <stop stop-color="#93c5fd" />
                                    <stop offset="1" stop-color="#1e40af" />
                                </linearGradient>
                            </defs>
                            <ellipse cx="50" cy="52" rx="30" ry="18" fill="url(#i4)" />
                            <circle cx="35" cy="52" r="10" fill="#c7d2fe" />
                            <text x="46" y="57" font-size="18" font-weight="800" fill="#ffffff">A</text>
                        </svg>
                    </div>
                </article>

                <!-- 5 -->
                <article
                    class="group rounded-2xl bg-slate-800/90 text-white p-6 ring-1 ring-white/10 shadow-[0_10px_40px_rgba(2,6,23,.16)]">
                    <h3 class="text-sm font-semibold">Made for Service Providers</h3>
                    <div class="mt-4 grid place-items-center rounded-xl bg-white p-6 ring-1 ring-white/10">
                        <!-- icon: handshake -->
                        <svg viewBox="0 0 96 96" class="h-28 w-28">
                            <defs>
                                <linearGradient id="i5" x1="0" y1="0" x2="1" y2="1">
                                    <stop stop-color="#93c5fd" />
                                    <stop offset="1" stop-color="#1e40af" />
                                </linearGradient>
                            </defs>
                            <path d="M20 50l16-10 14 10 14-10 12 10-18 14-12-8-10 8-16-14z" fill="url(#i5)" />
                        </svg>
                    </div>
                </article>

                <!-- 6 -->
                <article
                    class="group rounded-2xl bg-slate-800/90 text-white p-6 ring-1 ring-white/10 shadow-[0_10px_40px_rgba(2,6,23,.16)]">
                    <h3 class="text-sm font-semibold">Virtual &amp; Physical Workload Protection</h3>
                    <div class="mt-4 grid place-items-center rounded-xl bg-white p-6 ring-1 ring-white/10">
                        <!-- icon: shapes / workloads -->
                        <svg viewBox="0 0 96 96" class="h-28 w-28">
                            <defs>
                                <linearGradient id="i6" x1="0" y1="0" x2="1" y2="1">
                                    <stop stop-color="#93c5fd" />
                                    <stop offset="1" stop-color="#1e40af" />
                                </linearGradient>
                            </defs>
                            <polygon points="28,24 48,34 28,44" fill="url(#i6)" opacity=".7" />
                            <circle cx="56" cy="56" r="12" fill="url(#i6)" />
                            <polygon points="64,68 80,76 72,90 56,82" fill="url(#i6)" opacity=".7" />
                        </svg>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Acronis Cyber Cloud · Premium CTA strip -->

    <section class="relative overflow-hidden bg-neutral-50 py-20">
        <!-- ambient pattern -->
        <div class="pointer-events-none absolute inset-0 opacity-60" style="background:
        radial-gradient(80rem 40rem at -10% 0%, rgba(255,255,255,.8), transparent 60%),
        radial-gradient(60rem 30rem at 110% 120%, rgba(30,64,175,.08), transparent 40%);">
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-neutral-900">
                    Acronis <span
                        class="bg-gradient-to-r from-orange-600 to-blue-700 bg-clip-text text-transparent">Cyber
                        Cloud</span>
                </h2>
                <div class="mx-auto mt-5 flex items-center justify-center gap-3">
                    <span class="h-px w-24 bg-neutral-300"></span>
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-500"></span>
                    <span class="h-px w-24 bg-neutral-300"></span>
                </div>
                <p class="mt-4 text-neutral-600">Choose your tier to match protection with performance.</p>
            </div>

            <!-- Cards -->
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                <!-- Standard -->
                <a href="<?= $base . '/acroniscybercloudstandard' ?>"
                    class="group relative rounded-2xl p-[1px] bg-gradient-to-br from-orange-500/40 via-orange-400/20 to-blue-600/40 transition-shadow hover:shadow-[0_20px_60px_rgba(17,24,39,.15)] focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500">
                    <div
                        class="rounded-2xl bg-white/80 backdrop-blur-md ring-1 ring-black/5 p-6 flex items-center justify-between">
                        <div>
                            <div class="text-sm font-semibold text-orange-600">Standard</div>
                            <div class="mt-1 text-base font-medium text-neutral-900">Acronis Cyber Cloud Standard</div>
                            <p class="mt-2 text-sm text-neutral-600">Core backup & recovery for endpoints.</p>
                        </div>
                        <div
                            class="ml-6 grid h-11 w-11 place-items-center rounded-xl bg-orange-50 text-orange-600 ring-1 ring-orange-200/60 transition-transform group-hover:translate-x-0.5">
                            <!-- arrow -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.172 12 8.586 7.414 10 6l6 6-6 6-1.414-1.414L13.172 12z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Advanced -->
                <a href="<?= $base . '/acroniscybercloudadvanced' ?>"
                    class="group relative rounded-2xl p-[1px] bg-gradient-to-br from-orange-500/50 via-orange-400/30 to-blue-700/50 transition-shadow hover:shadow-[0_20px_60px_rgba(17,24,39,.15)] focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500">
                    <div
                        class="rounded-2xl bg-white/85 backdrop-blur-md ring-1 ring-black/5 p-6 flex items-center justify-between">
                        <div>
                            <div
                                class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-orange-700">
                                <span
                                    class="rounded px-1.5 py-0.5 bg-orange-50 ring-1 ring-orange-200/60">Recommended</span>
                            </div>
                            <div class="mt-2 text-base font-medium text-neutral-900">Acronis Cyber Cloud Advanced</div>
                            <p class="mt-2 text-sm text-neutral-600">Image + file backup, anti-ransomware, rapid
                                restore.</p>
                        </div>
                        <div
                            class="ml-6 grid h-11 w-11 place-items-center rounded-xl bg-orange-50 text-orange-600 ring-1 ring-orange-200/60 transition-transform group-hover:translate-x-0.5">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.172 12 8.586 7.414 10 6l6 6-6 6-1.414-1.414L13.172 12z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- DR -->
                <a href="<?= $base . '/acroniscyberclouddisasterrecovery' ?>"
                    class="group relative rounded-2xl p-[1px] bg-gradient-to-br from-orange-500/40 via-orange-400/20 to-blue-600/40 transition-shadow hover:shadow-[0_20px_60px_rgba(17,24,39,.15)] focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500">
                    <div
                        class="rounded-2xl bg-white/80 backdrop-blur-md ring-1 ring-black/5 p-6 flex items-center justify-between">
                        <div>
                            <div class="text-sm font-semibold text-blue-700">Disaster Recovery</div>
                            <div class="mt-1 text-base font-medium text-neutral-900">Acronis Cyber Cloud Disaster
                                Recovery</div>
                            <p class="mt-2 text-sm text-neutral-600">Run workloads in the cloud during outages.</p>
                        </div>
                        <div
                            class="ml-6 grid h-11 w-11 place-items-center rounded-xl bg-orange-50 text-orange-600 ring-1 ring-orange-200/60 transition-transform group-hover:translate-x-0.5">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.172 12 8.586 7.414 10 6l6 6-6 6-1.414-1.414L13.172 12z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- soft fade bottom -->
        <div class="pointer-events-none absolute inset-x-0 -bottom-8 h-12 bg-gradient-to-t from-black/5 to-transparent">
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-100 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-4">Need something custom?</h2>
            <p class="text-gray-600 mb-6">
                Our architects can design a deployment tailored to your enterprise.
            </p>
            <a href="#contact"
                class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">Let’s
                Talk</a>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-3xl mx-auto px-6">
            <h3 class="text-2xl font-semibold mb-8 text-center">Get In Touch</h3>
            <form class="space-y-6" action="sendmail.php" method="POST">
                <div class="grid md:grid-cols-2 gap-6">
                    <input type="text" name="name" placeholder="Your Name"
                        class="w-full border border-black px-4 py-3 rounded" required />
                    <input type="email" name="email" placeholder="Email Address"
                        class="w-full border border-black px-4 py-3 rounded" required />
                </div>
                <input type="tel" name="phone" placeholder="Phone Number"
                    class="w-full border border-black px-4 py-3 rounded" required />
                <textarea rows="4" name="message" placeholder="Your Message"
                    class="w-full border border-black px-4 py-3 rounded resize-none" required></textarea>
                <div class="text-center">
                    <button type="submit"
                        class="bg-neutral-900 text-white px-8 py-3 rounded hover:bg-neutral-800 transition">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>
    <?php include("footer.php"); ?>

</body>

</html>