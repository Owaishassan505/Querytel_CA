<?php $base = "/Querytel_CA"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fortinet Firewalls (FortiGate) - QueryTel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
                    },
                    animation: {
                        fadeInRight: "fadeInRight 0.8s ease-out forwards",
                        fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
                        fadeIn: "fadeIn 1s ease-out forwards",
                    },
                }
            }
        }
    </script>
    <style>
        @keyframes floatY {
            0% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-14px)
            }

            100% {
                transform: translateY(0)
            }
        }

        .animate-floatY {
            animation: floatY 6s ease-in-out infinite;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        /* Ken Burns motion for slider images */
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

        /* Fluent-style pagination pills (works without Tailwind variants) */
        .gate-pagination .swiper-pagination-bullet {
            width: 24px;
            height: 10px;
            border-radius: 9999px;
            background: rgb(203 213 225);
            opacity: .7;
            margin: 0 4px !important;
        }

        .gate-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background: rgb(15 23 42);
            opacity: 1;
        }
    </style>

</head>

<body class="bg-white text-neutral-900 font-sans">
    <?php include("navbar.php"); ?>

    <!-- HERO — FortiGate (distinct but consistent) -->
    <section class="relative overflow-hidden bg-gradient-to-b from-white to-slate-50 py-20">
        <!-- subtle accents -->
        <div
            class="pointer-events-none absolute -top-32 -right-32 h-96 w-96 rounded-full bg-[conic-gradient(at_50%_50%,#f1f5f9,25%,#e2e8f0,50%,#eef2ff,75%,#e2e8f0)] blur-2xl opacity-70">
        </div>
        <div
            class="pointer-events-none absolute -bottom-24 -left-24 h-[28rem] w-[28rem] rounded-full bg-[radial-gradient(circle_at_30%_30%,#dbeafe,20%,transparent_60%)] blur-2xl opacity-70">
        </div>

        <div class="relative max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <!-- Text -->
            <div class="opacity-0 animate-fadeInLeft">
                <div
                    class="inline-flex items-center gap-2 rounded-full bg-slate-100 text-slate-700 ring-1 ring-slate-200 px-3 py-1 text-xs font-medium">
                    <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                    New: NGFW + Secure SD-WAN in one
                </div>

                <h1 class="mt-4 text-4xl md:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                    FortiGate<span class="text-slate-400"> — </span>Next-Gen Firewalls
                </h1>

                <p class="mt-4 text-lg text-slate-600 max-w-xl">
                    With integrated SD-WAN, you can stop advanced threats, segment your network, and accelerate apps.
                    Application awareness, AI-powered IPS, and ASIC-accelerated performance are managed from a single
                    pane.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4 opacity-0 animate-fadeIn delay-300">
                    <a href="#overview"
                        class="inline-flex items-center justify-center rounded-lg bg-slate-900 text-white px-6 py-3 font-semibold hover:bg-slate-800 transition">
                        Explore Capabilities
                    </a>
                    <a href="<?= $base ?>/contactus"
                        class="inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-800 px-6 py-3 font-semibold hover:bg-white transition">
                        Request a Demo
                    </a>
                </div>

                <!-- KPI chips -->
                <div class="mt-6 flex flex-wrap gap-3 text-sm">
                    <span
                        class="inline-flex items-center gap-2 rounded-lg bg-white ring-1 ring-slate-200 px-3 py-1 text-slate-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg>
                        ASIC acceleration
                    </span>
                    <span
                        class="inline-flex items-center gap-2 rounded-lg bg-white ring-1 ring-slate-200 px-3 py-1 text-slate-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 2h12v2H6zM4 6h16v2H4zM4 10h16v10H4z" />
                        </svg>
                        AI-powered IPS
                    </span>
                    <span
                        class="inline-flex items-center gap-2 rounded-lg bg-white ring-1 ring-slate-200 px-3 py-1 text-slate-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l7 4v6c0 6-4 9-7 10-3-1-7-4-7-10V6l7-4z" />
                        </svg>
                        Secure SD-WAN
                    </span>
                </div>
            </div>

            <!-- Illustration (inline SVG appliance + traffic) -->
            <!-- Right: FortiGate slider -->
            <div class="opacity-0 animate-fadeInRight delay-150">
                <div
                    class="relative rounded-2xl overflow-hidden ring-1 ring-slate-200 bg-white shadow-[0_20px_60px_rgba(2,6,23,0.08)]">
                    <div class="swiper gateSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="relative h-80 md:h-96 overflow-hidden">
                                    <img src="<?= $base ?>/assets/images/s-l1200.jpg" alt="FortiGate appliances in rack"
                                        class="kenburns absolute inset-0 w-full h-full object-fill" />
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="relative h-80 md:h-96 overflow-hidden">
                                    <img src="<?= $base ?>/assets/images/demo-ngfw-1.webp"
                                        alt="FortiGate policy & SD-WAN dashboard"
                                        class="kenburns absolute inset-0 w-full h-full object-fill" />
                                </div>
                            </div>
                        </div>

                        <!-- Pagination (pills) -->
                        <div class="swiper-pagination gate-pagination !bottom-3"></div>

                        <!-- Custom nav buttons -->
                        <button class="gate-prev absolute left-3 top-1/2 -translate-y-1/2 z-10
                     inline-flex items-center justify-center h-10 w-10 rounded-full
                     bg-white/80 backdrop-blur ring-1 ring-slate-200 text-slate-700
                     hover:bg-white hover:shadow-md focus:outline-none focus:ring-2 focus:ring-slate-900/20">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M14 6l-6 6 6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="gate-next absolute right-3 top-1/2 -translate-y-1/2 z-10
                     inline-flex items-center justify-center h-10 w-10 rounded-full
                     bg-white/80 backdrop-blur ring-1 ring-slate-200 text-slate-700
                     hover:bg-white hover:shadow-md focus:outline-none focus:ring-2 focus:ring-slate-900/20">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M10 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- OVERVIEW -->
    <section id="overview" class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">Overview</h2>
            <div class="mt-3 h-px w-24 bg-slate-200 mx-auto"></div>
            <p class="mt-6 text-slate-700 leading-relaxed max-w-4xl mx-auto">
                FortiGate firewalls are <span class="font-semibold">purpose-built with security processors</span> to
                enable the industry’s best threat protection and performance for SSL-encrypted traffic. They provide
                high-performance network security solutions that protect your network, users, and data from continually
                evolving threats.
            </p>
        </div>
    </section>

    <!-- THE FORTINET SECURITY FABRIC -->
    <section id="security-fabric" class="bg-white pb-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center">
                <h3 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">The Fortinet Security Fabric
                </h3>
                <div class="mt-3 h-px w-24 bg-slate-200 mx-auto"></div>
                <p class="mt-3 text-slate-600 max-w-3xl mx-auto">
                    The Security Fabric enables organizations to achieve their digital innovation outcomes without
                    compromise by delivering a true cybersecurity platform that provides:
                </p>
            </div>

            <div class="mt-10 grid lg:grid-cols-2 gap-10 items-center">
                <!-- LEFT: diagram with floating ring -->
                <div class="relative">
                    <div
                        class="pointer-events-none absolute -top-10 -left-6 h-64 w-64 rounded-full border-[14px] border-indigo-900/90 animate-floatY opacity-70">
                    </div>
                    <div
                        class="relative rounded-2xl w-96 ring-1 ring-slate-200 shadow-[0_20px_60px_rgba(2,6,23,0.08)] p-3">
                        <!-- replace src with your assets path -->
                        <img src="<?= $base ?>/assets/images/security-fabric-diagram.jpg"
                            alt="Fortinet Security Fabric diagram" class="bg-white object-contain rounded-xl w-96">
                    </div>
                </div>

                <!-- RIGHT: badges + bullets + dotted backdrop -->
                <div class="relative">
                    <svg class="absolute -z-10 -top-4 -right-6 w-[500px] h-[320px] opacity-20 text-slate-300"
                        viewBox="0 0 400 260" fill="none" aria-hidden="true">
                        <defs>
                            <pattern id="dots-fabric" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                                <circle cx="1.5" cy="1.5" r="1.5" class="fill-current"></circle>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#dots-fabric)"></rect>
                    </svg>

                    <div>
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-orange-100 text-orange-700 ring-1 ring-orange-200">BOARD</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Broad visibility and protection of the entire digital attack surface to better
                                    manage risk</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-indigo-100 text-indigo-700 ring-1 ring-indigo-200">INTEGRATED</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Integrated solutions that reduce management complexity and share threat
                                    intelligence</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-emerald-100 text-emerald-700 ring-1 ring-emerald-200">AUTOMATION</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Automated self-healing networks with AI-driven security for fast and efficient
                                    operations</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INDUSTRIES -->
    <section id="features-benefits" class="bg-slate-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">Businesses and Industries Need
                    Cybersecurity</h2>
                <div class="mt-4 h-px w-28 bg-white/20 mx-auto"></div>
                <p class="mt-6 text-slate-300 max-w-3xl mx-auto">
                    From Secure SD-WAN to AI-driven security operations and secure remote work, QueryTel offers the most
                    comprehensive
                    solutions to help industries accelerate security, maximize productivity, preserve user experience,
                    and lower the total cost of ownership.
                </p>
            </header>

            <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- K-12 School Districts -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 3L2 8l10 5 10-5-10-5zm0 7L2 5v11l10 5 10-5V5l-10 5z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">K-12 School Districts</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Enable digital learning resources while
                        ensuring networks' and students' physical and digital safety.</p>
                </article>

                <!-- Higher Education -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Higher Education</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Supporting a secure, innovative campus with
                        support for free expression.</p>
                </article>

                <!-- Federal Government -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 10l9-7 9 7v2H3v-2zm0 4h18v6H3v-6z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Federal Government</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Protecting U.S. Government data and critical
                        infrastructure against advanced nation-state threats.</p>
                </article>

                <!-- State and Local Government -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4 10l8-6 8 6v10H4V10z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">State and Local Government</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Protecting digital assets and critical
                        infrastructure against growing advanced threats.</p>
                </article>

                <!-- Hospitality -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 20h18v-2H3v2zm3-4h12l-1-6H7l-1 6zM8 6h8l1 2H7l1-2z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Hospitality</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Enabling hospitality cybersecurity without
                        impacting the quality of the guest experience. </p>
                </article>

                <!-- Healthcare -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M11 2h2v6h6v2h-6v6h-2v-6H5V8h6V2z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Healthcare</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Enabling the latest advances in patient care
                        while protecting against cyberattacks.</p>
                </article>

                <!-- Financial Services -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l9 4-9 4-9-4 9-4zm-9 7l9 4 9-4v9H3V9z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Financial Services</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Protecting institutions against advanced
                        threats while optimizing cost and efficiency.</p>
                </article>

                <!-- Retail -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4 6h16l-1 5H5L4 6zm1 7h14v7H5v-7z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Retail</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Protecting retailers against advanced threats
                        while providing positive shopping experiences.</p>
                </article>

                <!-- Manufacturing -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 13h4V9l4 4h4V9l6 6v3H3v-9z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Manufacturing</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Protecting IT and OT resources against
                        threats in manufacturing with a single platform.</p>
                </article>

                <!-- SCADA Control Systems -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4 4h16v4H4V4zm0 6h10v10H4V10zm12 0h4v6h-4v-6z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">SCADA Control Systems</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Protecting OT environments and their critical
                        infrastructure sectors.</p>
                </article>

                <!-- Power and Utilities -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M13 3L4 14h7l-1 7 9-11h-7l1-7z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Power and Utilities</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Protecting critical infrastructure against
                        cyberattacks while ensuring physical safety and productivity.</p>
                </article>

                <!-- Oil and Gas -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l4 6-4 6-4-6 4-6zm-6 16h12v4H6v-4z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Oil and Gas</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Protecting critical infrastructure and assets
                        against cyber threats with end-to-end integration.</p>
                </article>

                <!-- Media and Entertainment -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M4 6h16v12H4V6zm6 2v8l6-4-6-4z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Media and Entertainment</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Safeguarding content and sensitive data
                        against advanced threats while improving efficiency.</p>
                </article>

                <!-- Technology -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 5h18v4H3V5zm0 5h18v4H3v-4zm0 5h18v4H3v-4z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Technology</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Bolstering protection against advanced cyber
                        threats while optimizing cost and efficiency.</p>
                </article>

                <!-- Communications -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M2 6h20v4H2V6zm0 6h14v4H2v-4z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Communications</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">High-performance network traffic.</p>
                </article>

                <!-- Pharmaceutical -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M7 2h10v6H7V2zM4 10h16v12H4V10z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Pharmaceutical</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Enabling pharma companies to innovate while
                        protecting mission-critical assets.</p>
                </article>

                <!-- Transportation -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 13h18l-2-6H5l-2 6zm1 2h16v5H4v-5z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Transportation</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">Security for the evolving needs of
                        transportation and logistics organizations.</p>
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
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
        const gateSwiper = new Swiper(".gateSwiper", {
            loop: true,
            speed: 900,
            autoplay: { delay: 3800, disableOnInteraction: false },
            grabCursor: true,
            keyboard: { enabled: true },
            navigation: { nextEl: ".gate-next", prevEl: ".gate-prev" },
            pagination: {
                el: ".gate-pagination",
                clickable: true,
                renderBullet: (i, className) =>
                    `<span class="${className} !mx-1 !h-2.5 !w-6 !rounded-full !bg-slate-300 !opacity-70
                       swiper-pagination-bullet-active:!bg-slate-900 swiper-pagination-bullet-active:!opacity-100"></span>`
            }
        });

        // Pause on hover
        const gateEl = document.querySelector(".gateSwiper");
        gateEl.addEventListener("mouseenter", () => gateSwiper.autoplay.stop());
        gateEl.addEventListener("mouseleave", () => gateSwiper.autoplay.start());
    </script>

</body>

</html>