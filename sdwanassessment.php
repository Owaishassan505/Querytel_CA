<?php $base = "" ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SD-WAN Assessment - Querytel Inc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInUp: { "0%": { opacity: 0, transform: "translateY(16px)" }, "100%": { opacity: 1, transform: "translateY(0)" } }
                    },
                    animation: { fadeInUp: "fadeInUp .7s ease-out forwards" }
                }
            }
        };
    </script>
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-57GG72GW');</script>
    <!-- End Google Tag Manager -->

</head>

<body class="bg-white text-neutral-900 font-sans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include("navbar.php"); ?>

    <!-- HERO (Microsoft style: minimal, left-aligned, airy, no image/circle) -->
    <section class="relative overflow-hidden bg-white">
        <!-- subtle corner accent -->
        <svg class="pointer-events-none absolute -top-8 -right-8 w-[520px] h-[520px] text-slate-100"
            viewBox="0 0 600 600" fill="none" aria-hidden="true">
            <defs>
                <linearGradient id="ms-accent" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="currentColor" stop-opacity=".6" />
                    <stop offset="100%" stop-color="currentColor" stop-opacity="0" />
                </linearGradient>
            </defs>
            <circle cx="300" cy="300" r="300" fill="url(#ms-accent)" />
        </svg>

        <div class="max-w-7xl mx-auto px-6 py-28 md:py-32 grid md:grid-cols-2 gap-12 items-center">
            <!-- Left: Text -->
            <div class="max-w-3xl">
                <span class="inline-block text-xs font-semibold tracking-widest text-orange-600 uppercase">
                    Assessment
                </span>
                <h1 class="mt-3 text-4xl md:text-6xl font-bold tracking-tight leading-tight">
                    SD-WAN Assessment
                </h1>
                <p class="mt-5 text-lg md:text-xl text-neutral-600">
                    A vendor-neutral review of performance, resilience, and security. Get a clear roadmap, sizing, and a
                    TCO model to move from MPLS-heavy to application-first networking without guesswork.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="<?= $base . '/contactus' ?>"
                        class="inline-block bg-neutral-900 text-white px-6 py-3 rounded-lg hover:bg-neutral-800 transition">
                        Start Free Assessment
                    </a>
                    <a href="#sample-report"
                        class="inline-block text-neutral-900 px-6 py-3 rounded-lg border border-neutral-900 hover:bg-neutral-100 transition">
                        See Checklist
                    </a>
                </div>
                <p class="mt-4 text-sm text-neutral-500">
                    Typical scope: current-state discovery, app SLA baselines, zero-trust readiness, and migration plan.
                </p>
            </div>

            <!-- Right: Image (clean Fluent-style card) -->
            <div>
                <div
                    class="rounded-2xl overflow-hidden bg-white ring-1 ring-slate-200 shadow-[0_20px_60px_rgba(2,6,23,0.08)]">
                    <img src="<?= $base ?>/assets/images/Project258-01.jpg" alt="SD-WAN network visualization"
                        class="w-full h-96 object-cover" />
                </div>
            </div>
        </div>
    </section>



    <!-- SECTION: Text + Image + Circle Accent (Floating Circle) -->
    <section id="assessment-overview" class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">

            <!-- Image with circle accent -->
            <div class="relative">
                <!-- floating circle -->
                <div
                    class="pointer-events-none absolute -top-10 -left-8 h-72 w-72 rounded-full border-[14px] border-indigo-600/70 opacity-70 floating-circle">
                </div>
                <div
                    class="relative rounded-2xl shadow-[0_20px_60px_rgba(2,6,23,0.08)] p-4 transition-all duration-300 ease-out hover:shadow-[0_25px_70px_rgba(2,6,23,0.15)] hover:scale-[1.02]">
                    <img src="<?= $base ?>/assets/images/fortigate-sdwan-dashboard.jpg"
                        alt="Global WAN Edge Visualization"
                        class="w-full max-w-md mx-auto rounded-xl object-contain transition-transform duration-300 ease-out hover:scale-[1.03]">
                </div>
            </div>

            <!-- Text -->
            <div>
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-neutral-900">
                    Solve WAN Edge Complexity with Free Expert Guidance
                </h2>
                <div class="mt-3 h-px w-16 bg-neutral-300"></div>

                <h3 class="mt-6 text-2xl font-semibold text-neutral-900">
                    Start your Secure SD-WAN Assessment today
                </h3>
                <div class="mt-3 h-px w-12 bg-neutral-300"></div>

                <p class="mt-5 text-neutral-700 text-lg">
                    Today’s branch offices require secure, direct internet access.
                </p>
                <p class="mt-3 text-neutral-700">
                    Get specific recommendations on how to transform your WAN edges while saving costs.
                </p>

                <p class="mt-5 font-medium text-neutral-900">Your free Secure SD-WAN Assessment:</p>
                <ul class="mt-4 space-y-3">
                    <li class="flex items-start">
                        <span class="mt-1 mr-3 text-orange-500">●</span>
                        <span>Requires minimal time investment and has little to no performance impact</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mt-1 mr-3 text-orange-500">●</span>
                        <span>Delivers actionable insights on your network and security postures</span>
                    </li>
                    <li class="flex items-start">
                        <span class="mt-1 mr-3 text-orange-500">●</span>
                        <span>Includes a full copy of your report with expert planning recommendations</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Floating circle animation -->
    <style>
        @keyframes floatUpDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .floating-circle {
            animation: floatUpDown 4s ease-in-out infinite;
        }
    </style>


    <style>
        @keyframes floatY {

            0%,
            100% {
                transform: translateY(20px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .floating-circle {
            animation: floatY 3s ease-in-out infinite;
            will-change: transform;
        }
    </style>
    <!-- SAMPLE REPORT -->
    <section id="sample-report" class="bg-slate-900 py-20">
        <div class="max-w-7xl mx-auto px-6">
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">Sample Report</h2>
                <div class="mt-4 h-px w-24 bg-white/20 mx-auto"></div>
            </header>

            <div class="mt-12 grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Executive Summary -->
                <article class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-6">
                    <h3 class="text-lg font-semibold text-white text-center">Executive Summary</h3>
                    <div class="mt-4 rounded-xl bg-white ring-1 ring-black/5 shadow-[0_14px_50px_rgba(2,6,23,.22)] p-3
                    transition-transform duration-300 ease-out hover:scale-[1.02]">
                        <img src="<?= $base ?>/assets/images/report_02_executive_summary.png"
                            alt="SD-WAN Assessment - Executive Summary page" class="w-full rounded-lg object-contain" />
                    </div>
                </article>

                <!-- Utilization -->
                <article class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-6">
                    <h3 class="text-lg font-semibold text-white text-center">Utilization</h3>
                    <div class="mt-4 rounded-xl bg-white ring-1 ring-black/5 shadow-[0_14px_50px_rgba(2,6,23,.22)] p-3
                    transition-transform duration-300 ease-out hover:scale-[1.02]">
                        <img src="<?= $base ?>/assets/images/report_09_utilization_01.png"
                            alt="SD-WAN Assessment - Utilization page" class="w-full rounded-lg object-contain" />
                    </div>
                </article>

                <!-- Recommendations -->
                <article class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-6">
                    <h3 class="text-lg font-semibold text-white text-center">Recommendations</h3>
                    <div class="mt-4 rounded-xl bg-white ring-1 ring-black/5 shadow-[0_14px_50px_rgba(2,6,23,.22)] p-3
                    transition-transform duration-300 ease-out hover:scale-[1.02]">
                        <img src="<?= $base ?>/assets/images/report_12_recommendations.png"
                            alt="SD-WAN Assessment - Recommendations page" class="w-full rounded-lg object-contain" />
                    </div>
                </article>
            </div>
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