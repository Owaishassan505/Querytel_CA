<?php $base = "/Querytel_CA"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FortiAnalyzer - Querytel Inc</title>
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



    <!-- HERO — FortiAnalyzer with animated slider -->
    <section class="relative overflow-hidden bg-gradient-to-b from-white to-slate-50 py-20">
        <!-- subtle accents -->
        <div
            class="pointer-events-none absolute -top-32 -right-32 h-96 w-96 rounded-full bg-[conic-gradient(at_50%_50%,#f1f5f9,25%,#e2e8f0,50%,#eef2ff,75%,#e2e8f0)] blur-2xl opacity-70">
        </div>
        <div
            class="pointer-events-none absolute -bottom-24 -left-24 h-[28rem] w-[28rem] rounded-full bg-[radial-gradient(circle_at_30%_30%,#dbeafe,20%,transparent_60%)] blur-2xl opacity-70">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <!-- Left: text -->
            <div class="opacity-0 animate-fadeInLeft">
                <div
                    class="inline-flex items-center gap-2 rounded-full bg-slate-100 text-slate-700 ring-1 ring-slate-200 px-3 py-1 text-xs font-medium">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    New: Unified analytics & log management
                </div>

                <h1 class="mt-4 text-4xl md:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                    FortiAnalyzer<span class="text-slate-400"> — </span>Security Analytics & Log Management
                </h1>

                <p class="mt-4 text-lg text-slate-600 max-w-xl">
                    Centralize logs, visualize threats, and automate responses across your Fortinet fabric with
                    high-volume ingestion, MITRE-aligned analytics, and retention you can trust.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4 opacity-0 animate-fadeIn delay-300">
                    <a href="#learn-more"
                        class="inline-flex items-center justify-center rounded-lg bg-slate-900 text-white px-6 py-3 font-semibold hover:bg-slate-800 transition">Explore
                        Capabilities</a>
                    <a href="<?= $base ?>/contactus"
                        class="inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-800 px-6 py-3 font-semibold hover:bg-white transition">Request
                        a Demo</a>
                </div>

                <div class="mt-6 flex flex-wrap gap-3 text-sm">
                    <span
                        class="inline-flex items-center gap-2 rounded-lg bg-white ring-1 ring-slate-200 px-3 py-1 text-slate-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg> Up to 100k EPS
                    </span>
                    <span
                        class="inline-flex items-center gap-2 rounded-lg bg-white ring-1 ring-slate-200 px-3 py-1 text-slate-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 2h12v2H6zM4 6h16v2H4zM4 10h16v10H4z" />
                        </svg> 365-day retention
                    </span>
                    <span
                        class="inline-flex items-center gap-2 rounded-lg bg-white ring-1 ring-slate-200 px-3 py-1 text-slate-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l7 4v6c0 6-4 9-7 10-3-1-7-4-7-10V6l7-4z" />
                        </svg> MITRE mappings
                    </span>
                </div>
            </div>

            <!-- Right: Swiper slider -->
            <div class="opacity-0 animate-fadeInRight delay-150">
                <div
                    class="relative rounded-2xl overflow-hidden ring-1 ring-slate-200 bg-white shadow-[0_20px_60px_rgba(2,6,23,0.08)]">
                    <div class="swiper heroSwiper">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="relative h-80 md:h-96 overflow-hidden">
                                    <img src="<?= $base ?>/assets/images/10009784_2.jpg" alt="FortiAnalyzer dashboard"
                                        class="kenburns absolute inset-0 w-full h-full object-cover" />
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="relative h-80 md:h-96 overflow-hidden">
                                    <img src="<?= $base ?>/assets/images/f24e96360b1c15da75233dc421563fde_Device Manager.png"
                                        alt="FortiAnalyzer logs"
                                        class="kenburns absolute inset-0 w-full h-full object-contain" />
                                </div>
                            </div>
                        </div>

                        <!-- Pagination (pills) -->
                        <div class="swiper-pagination !bottom-3"></div>

                        <!-- Custom nav buttons -->
                        <button class="hero-prev absolute left-3 top-1/2 -translate-y-1/2 z-10
                         inline-flex items-center justify-center h-10 w-10 rounded-full
                         bg-white/80 backdrop-blur ring-1 ring-slate-200 text-slate-700
                         hover:bg-white hover:shadow-md focus:outline-none focus:ring-2 focus:ring-slate-900/20">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M14 6l-6 6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="hero-next absolute right-3 top-1/2 -translate-y-1/2 z-10
                         inline-flex items-center justify-center h-10 w-10 rounded-full
                         bg-white/80 backdrop-blur ring-1 ring-slate-200 text-slate-700
                         hover:bg-white hover:shadow-md focus:outline-none focus:ring-2 focus:ring-slate-900/20">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M10 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                    <!-- subtle top accent -->

                </div>
            </div>
        </div>
    </section>

    <!-- Swiper CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <style>
        /* Ken Burns motion */
        .kenburns {
            transform: scale(1.08);
            animation: kenburns 10s ease-in-out infinite;
        }

        @keyframes kenburns {
            0% {
                transform: scale(1.08) translateY(0);
            }

            50% {
                transform: scale(1.14) translateY(-8px);
            }

            100% {
                transform: scale(1.08) translateY(0);
            }
        }
    </style>

    <script>
        const swiper = new Swiper(".heroSwiper", {
            loop: true,
            speed: 900,                 // smooth slide
            autoplay: { delay: 3800, disableOnInteraction: false },
            effect: "slide",
            grabCursor: true,
            keyboard: { enabled: true },
            navigation: { nextEl: ".hero-next", prevEl: ".hero-prev" },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: (i, className) =>
                    `<span class="${className} !mx-1 !h-2.5 !w-6 !rounded-full !bg-slate-300 !opacity-70
                       swiper-pagination-bullet-active:!bg-slate-900 swiper-pagination-bullet-active:!opacity-100"></span>`
            }
        });

        // Pause on hover (premium touch)
        const heroEl = document.querySelector(".heroSwiper");
        heroEl.addEventListener("mouseenter", () => swiper.autoplay.stop());
        heroEl.addEventListener("mouseleave", () => swiper.autoplay.start());
    </script>

    <section id="overview" class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">Overview</h2>
            <div class="mt-3 h-px w-24 bg-slate-200 mx-auto"></div>
            <p class="mt-6 text-slate-700 leading-relaxed max-w-4xl mx-auto">
                FortiAnalyzer is a <span class="font-semibold">powerful log management, analytics, and reporting
                    platform</span>,
                that provides organizations with single-pane orchestration, automation, and response for simplified
                security operations, proactive risk identification and remediation, and complete visibility of the
                entire attack surface.
            </p>
        </div>
    </section>

    <section id="fabric-analytics" class="bg-white pb-20">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Section header -->
            <div class="text-center">
                <h3 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">Fabric Analytics &amp;
                    Reporting</h3>
                <div class="mt-3 h-px w-24 bg-slate-200 mx-auto"></div>
                <p class="mt-3 text-slate-600">Central Logging &amp; Reporting for Fortinet</p>
            </div>

            <div class="mt-10 grid lg:grid-cols-2 gap-10 items-center">
                <!-- LEFT: image with floating hollow circle -->
                <div class="relative">
                    <!-- Hollow floating ring (dark blue) -->
                    <div
                        class="pointer-events-none absolute -top-10 -left-6 h-64 w-64 rounded-full border-[14px] border-indigo-900/90 animate-floatY opacity-70">
                    </div>

                    <!-- Screenshot card -->
                    <div
                        class="relative rounded-2xl bg-white ring-1 ring-slate-200 shadow-[0_20px_60px_rgba(2,6,23,0.08)] p-3">
                        <img src="/Querytel_CA/assets/images/Fabric-Analytics-Reporting.jpg"
                            alt="FortiAnalyzer Fabric Analytics dashboard"
                            class="bg-white object-contain rounded-xl w-96">
                    </div>
                </div>

                <!-- RIGHT: content with badges & dotted backdrop -->
                <div class="relative">
                    <!-- subtle dotted map backdrop -->
                    <svg class="absolute -z-10 -top-4 -right-6 w-[500px] h-[320px] opacity-20 text-slate-300"
                        viewBox="0 0 400 260" fill="none" aria-hidden="true">
                        <defs>
                            <pattern id="dots" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                                <circle cx="1.5" cy="1.5" r="1.5" class="fill-current"></circle>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#dots)"></rect>
                    </svg>

                    <!-- Goal -->
                    <div>
                        <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold
                       bg-orange-100 text-orange-700 ring-1 ring-orange-200">GOAL</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Real-time Network and Anomaly Visibility</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Capabilities -->
                    <div class="mt-6">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold
                       bg-indigo-100 text-indigo-700 ring-1 ring-indigo-200">CAPABILITIES</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Policy, Events, Traffic, and other data correlation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Security Fabric Analytics &amp; Reporting</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>720+ Datasets and Reports</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Benefit -->
                    <div class="mt-6">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold
                       bg-emerald-100 text-emerald-700 ring-1 ring-emerald-200">BENEFIT</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Improve Network Visibility and Risk Assessment</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== /END SECTION ========== -->
    <!-- ============== FEATURES & BENEFITS ============== -->
    <section id="features-benefits" class="bg-slate-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">
                    Features and Benefits
                </h2>
                <div class="mt-4 h-px w-28 bg-white/20 mx-auto"></div>
            </header>

            <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- 1 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <!-- Magnifier -->
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M10 2a8 8 0 105.293 14.293l4.707 4.707 1.414-1.414-4.707-4.707A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">End-to-End Visibility with Event Correlation
                            and Threat Detection</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Reduce time to detection using Indicators of Compromise (IoCs) and correlation to identify
                        threats across the network quickly.
                    </p>
                </article>

                <!-- 2 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <!-- HA / cluster -->
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M3 5h18v4H3V5zm0 5h18v4H3v-4zm0 5h18v4H3v-4z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Enterprise-Grade High Availability</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        It automatically backs up the FortiAnalyzer database to clusters (up to 4 nodes) for DR; any
                        secondary node can become the primary.
                    </p>
                </article>

                <!-- 3 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <!-- Report -->
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M6 2h9l5 5v13a2 2 0 01-2 2H6a2 2 0 01-2-2V4a2 2 0 012-2zm8 1.5V8h4.5L14 3.5zM8 12h8v2H8v-2zm0 4h8v2H8v-2zM8 8h4v2H8V8z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Advanced Compliance Reporting</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Hundreds of pre-built reports and templates tailored to regulatory needs make proving compliance
                        straightforward.
                    </p>
                </article>

                <!-- 4 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <!-- Gear -->
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12 8a4 4 0 100 8 4 4 0 000-8zm9 4a7.94 7.94 0 01-.3 2.2l2.1 1.6-2 3.4-2.5-1a7.93 7.93 0 01-3 1.7l-.4 2.7h-4l-.4-2.7a7.93 7.93 0 01-3-1.7l-2.5 1-2-3.4 2.1-1.6A8.07 8.07 0 013 12c0-.8.1-1.5.3-2.2L1.2 8.2l2-3.4 2.5 1A7.93 7.93 0 019 4.1l.4-2.7h4l.4 2.7a7.93 7.93 0 013 1.7l2.5-1 2 3.4-2.1 1.6c.2.7.3 1.4.3 2.2z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Security Automation</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Reduce complexity and cost with REST API, scripts, connectors, and automation stitches for
                        response workflows.
                    </p>
                </article>

                <!-- 5 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <!-- Plug -->
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M7 2h2v6H7V2zm8 0h2v6h-2V2zM6 10h12v3a6 6 0 01-12 0v-3z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Enterprise-Ready Integrations</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Turn-key integration with no extra charge for partners like Splunk, IBM QRadar, ServiceNow,
                        Tufin, and AlgoSec.
                    </p>
                </article>

                <!-- 6 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <!-- Multi-tenancy / org -->
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12 12a5 5 0 100-10 5 5 0 000 10zM2 22a8 8 0 0116 0H2zm20 0h-4a10 10 0 00-6-9 7 7 0 108 9z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Multi-Tenancy &amp; Administrative Domains
                            (ADOMs)</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Separate customer data and manage domains using ADOMs for compliance and operational
                        effectiveness.
                    </p>
                </article>
            </div>
        </div>
    </section>
    <!-- ============ /END FEATURES & BENEFITS ============ -->

    <!-- ===================== RELATED SOLUTIONS ===================== -->
    <section id="related" class="relative bg-white py-16">
        <!-- soft backdrop circles -->
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute -top-24 -left-24 h-96 w-96 rounded-full bg-slate-100"></div>
            <div class="absolute -right-32 -top-10 h-[28rem] w-[28rem] rounded-full bg-slate-100"></div>
            <div class="absolute -left-40 bottom-0 h-[26rem] w-[26rem] rounded-full bg-slate-100"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                    Related Solutions
                </h2>
                <div class="mt-4 h-px w-28 bg-slate-300 mx-auto"></div>
            </header>

            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- card -->
                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Automate Compliance</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-automate-compliance.png" alt="Automate Compliance"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">
                        Simplify compliance across the network, leveraging turn-key automations.
                    </p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Protect Against Known &amp; Zero-Day Threats</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-zero-day.jpg"
                            alt="Protect Against Zero-Day Threats"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">
                        Comprehensive IPS with breadth and depth of coverage for known and zero-day attacks.
                    </p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Automate Security</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-automate-security.png" alt="Automate Security"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">
                        Shrink the time required to complete security lifecycle tasks with policy-driven automation.
                    </p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Security Fabric</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-security-fabric.jpg" alt="Security Fabric"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">
                        The cybersecurity platform that enables digital innovation with unified visibility.
                    </p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Reduce Ops Complexity with Network Automation</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-network-automation.jpg" alt="Network Automation"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">
                        Operate from a unified console and integrate with existing enterprise workflows.
                    </p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Network Segmentation that Scales</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-network-segmentation.jpg"
                            alt="Network Segmentation"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">
                        Segment your network without performance degradation using policy-based controls.
                    </p>
                </a>
            </div>
        </div>
    </section>
    <!-- =================== /RELATED SOLUTIONS =================== -->


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