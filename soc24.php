<?php $base = "" ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SOC 24 — 24/7 Security Operations & Incident Response | QueryTel Inc</title>
    <meta name="description"
        content="SOC 24 by QueryTel: 24/7 monitoring, threat detection, triage and incident response. MDR/XDR, SIEM correlation, playbooks, compliance reporting, and clear SLAs." />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" }, },
                        fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" }, },
                        fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
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

    <!-- HERO — single image version -->
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
                    New: 24/7 detection, triage & response
                </div>

                <h1 class="mt-4 text-4xl md:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                    SOC 24<span class="text-slate-400"> — </span>Managed Detection &amp; Response
                </h1>

                <p class="mt-4 text-lg text-slate-600 max-w-xl">
                    Around-the-clock monitoring with real analytics. We correlate signals across your endpoints, cloud,
                    identity, email, and network to quickly identify threats and rogue behavior and contain them with
                    click-ready playbooks.
                </p>


                <div class="mt-8 flex flex-col sm:flex-row gap-4 opacity-0 animate-fadeIn delay-300">
                    <a href="#overview"
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
                        </svg>
                        15-min triage SLA
                    </span>
                    <span
                        class="inline-flex items-center gap-2 rounded-lg bg-white ring-1 ring-slate-200 px-3 py-1 text-slate-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6 2h12v2H6zM4 6h16v2H4zM4 10h16v10H4z" />
                        </svg>
                        365-day log retention
                    </span>
                    <span
                        class="inline-flex items-center gap-2 rounded-lg bg-white ring-1 ring-slate-200 px-3 py-1 text-slate-700">
                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l7 4v6c0 6-4 9-7 10-3-1-7-4-7-10V6l7-4z" />
                        </svg>
                        MITRE ATT&amp;CK mapping
                    </span>
                </div>
            </div>

            <!-- Right: Single Image Only -->
            <div class="opacity-0 animate-fadeInRight delay-150">
                <div
                    class="relative rounded-2xl overflow-hidden ring-1 ring-slate-200 bg-white shadow-[0_20px_60px_rgba(2,6,23,0.08)]">
                    <div class="relative h-80 md:h-96 overflow-hidden">
                        <img src="<?= $base ?>/assets/images/10009784_2.png" alt="SOC 24 — security dashboard"
                            class="kenburns absolute inset-0 w-full h-full object-contain" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keep the Ken Burns effect -->
    <style>
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


    <!-- OVERVIEW -->
    <section id="overview" class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">Overview</h2>
            <div class="mt-3 h-px w-24 bg-slate-200 mx-auto"></div>
            <p class="mt-6 text-slate-700 leading-relaxed max-w-4xl mx-auto">
                <span class="font-semibold">SOC 24</span> is QueryTel’s always-on Security Operations Center: a
                managed detection and response (MDR) service that watches your environment 24/7, correlates signals,
                hunts threats, and executes playbooks to contain incidents. We integrate with your existing
                stack—Microsoft
                365, identity providers, EDR, firewalls, and cloud—to give you <span class="font-semibold">one
                    accountable team</span> and
                <span class="font-semibold">clear SLAs</span> from triage to remediation.
            </p>
        </div>
    </section>

    <!-- WHAT WE MONITOR -->
    <section id="fabric-analytics" class="bg-white pb-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center">
                <h3 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">Unified Monitoring &amp;
                    Correlation</h3>
                <div class="mt-3 h-px w-24 bg-slate-200 mx-auto"></div>
                <p class="mt-3 text-slate-600">Endpoints • Identity • Email • Network • Cloud</p>
            </div>

            <div class="mt-10 grid lg:grid-cols-2 gap-10 items-center">
                <!-- LEFT: example graphic -->
                <div class="relative">
                    <div
                        class="pointer-events-none absolute -top-10 -left-6 h-64 w-64 rounded-full border-[14px] border-indigo-900/90 animate-[floatY_6s_ease-in-out_infinite] opacity-70">
                    </div>
                    <div
                        class="relative rounded-2xl bg-white ring-1 ring-slate-200 shadow-[0_20px_60px_rgba(2,6,23,0.08)] p-3">
                        <img src="<?= $base ?>/assets/images/Fabric-Analytics-Reporting.jpg"
                            alt="SOC 24 unified monitoring" class="bg-white object-contain rounded-xl w-96">
                    </div>
                </div>

                <!-- RIGHT: bullets -->
                <div class="relative">
                    <svg class="absolute -z-10 -top-4 -right-6 w-[500px] h-[320px] opacity-20 text-slate-300"
                        viewBox="0 0 400 260" fill="none" aria-hidden="true">
                        <defs>
                            <pattern id="dots" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                                <circle cx="1.5" cy="1.5" r="1.5" class="fill-current"></circle>
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#dots)"></rect>
                    </svg>

                    <div>
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-orange-100 text-orange-700 ring-1 ring-orange-200">GOAL</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Detect & contain threats before they become incidents.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-indigo-100 text-indigo-700 ring-1 ring-indigo-200">CAPABILITIES</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>SIEM correlation across EDR, firewall, identity, email, cloud, and SaaS.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>MITRE ATT&amp;CK-mapped detections and threat hunting.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Playbooks for containment: isolate host, reset tokens, block IOCs, hold
                                    mail.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-6">
                        <span
                            class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-semibold bg-emerald-100 text-emerald-700 ring-1 ring-emerald-200">BENEFIT</span>
                        <ul class="mt-3 space-y-2 text-slate-700">
                            <li class="flex items-start gap-2">
                                <svg class="mt-1 h-5 w-5 text-emerald-600" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                </svg>
                                <span>Lower mean-time-to-detect (MTTD) and mean-time-to-respond (MTTR).</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES & BENEFITS -->
    <section id="features-benefits" class="bg-slate-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">Features and Benefits</h2>
                <div class="mt-4 h-px w-28 bg-white/20 mx-auto"></div>
                <p class="mt-3 text-slate-300">SOC 24 blends automation with human expertise to keep you safe.</p>
            </header>

            <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- 1 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M10 2a8 8 0 105.293 14.293l4.707 4.707 1.414-1.414-4.707-4.707A8 8 0 0010 2zm0 2a6 6 0 110 12A6 6 0 0110 4z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">24/7 Monitoring &amp; Triage</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Always-on analysts review alerts within 15 minutes. False positives get tuned out; real threats
                        get escalated with clear next steps.
                    </p>
                </article>

                <!-- 2 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 5h18v4H3V5zm0 5h18v4H3v-4zm0 5h18v4H3v-4z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Runbooks &amp; Containment</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Playbooks isolate devices, revoke tokens, block IOCs, quarantine mail, and enforce password
                        resets—fast and reversible.
                    </p>
                </article>

                <!-- 3 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M6 2h9l5 5v13a2 2 0 01-2 2H6a2 2 0 01-2-2V4a2 2 0 012-2zm8 1.5V8h4.5L14 3.5zM8 12h8v2H8v-2zm0 4h8v2H8v-2zM8 8h4v2H8V8z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Compliance Reporting</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Monthly or on-demand reports for auditors: incidents, response timelines, user access, and
                        control evidence.
                    </p>
                </article>

                <!-- 4 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 8a4 4 0 100 8 4 4 0 000-8zm9 4a7.94 7.94 0 01-.3 2.2l2.1 1.6-2 3.4-2.5-1a7.93 7.93 0 01-3 1.7l-.4 2.7h-4l-.4-2.7a7.93 7.93 0 01-3-1.7l-2.5 1-2-3.4 2.1-1.6A8.07 8.07 0 013 12c0-.8.1-1.5.3-2.2L1.2 8.2l2-3.4 2.5 1A7.93 7.93 0 019 4.1l.4-2.7h4l.4 2.7a7.93 7.93 0 013 1.7l2.5-1 2 3.4-2.1 1.6c.2.7.3 1.4.3 2.2z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Threat Hunting</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Analysts proactively search for persistence, lateral movement, and suspicious patterns—even
                        without alerts.
                    </p>
                </article>

                <!-- 5 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M7 2h2v6H7V2zm8 0h2v6h-2V2zM6 10h12v3a6 6 0 01-12 0v-3z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Integrations that Matter</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Works with Microsoft 365, Entra/Okta, Defender/EDR, Fortinet, email gateways, cloud logs, and
                        ticketing.
                    </p>
                </article>

                <!-- 6 -->
                <article
                    class="rounded-2xl bg-slate-800/70 ring-1 ring-white/10 p-5 shadow-[0_14px_50px_rgba(2,6,23,.22)]">
                    <div class="rounded-xl bg-white/90 ring-1 ring-black/5 px-4 py-3 flex items-center gap-3">
                        <svg class="h-6 w-6 text-orange-600" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 12a5 5 0 100-10 5 5 0 000 10zM2 22a8 8 0 0116 0H2zm20 0h-4a10 10 0 00-6-9 7 7 0 108 9z" />
                        </svg>
                        <h3 class="font-semibold text-slate-900 text-sm">Multi-Tenant Ready</h3>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed text-slate-200">
                        Clear separation for business units or subsidiaries. Scoped access and tailored reporting per
                        domain.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- RELATED SOLUTIONS -->
    <section id="related" class="relative bg-white py-16">
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="absolute -top-24 -left-24 h-96 w-96 rounded-full bg-slate-100"></div>
            <div class="absolute -right-32 -top-10 h-[28rem] w-[28rem] rounded-full bg-slate-100"></div>
            <div class="absolute -left-40 bottom-0 h-[26rem] w-[26rem] rounded-full bg-slate-100"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">Related Solutions</h2>
                <div class="mt-4 h-px w-28 bg-slate-300 mx-auto"></div>
            </header>

            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">MDR for Microsoft 365</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-automate-compliance.png"
                            alt="MDR for Microsoft 365"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">Defend identities, mail, and SharePoint/OneDrive
                        with policy-driven automation.</p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Email Security &amp; Phishing Defense</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-zero-day.jpg" alt="Email security"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">Advanced filtering, impersonation checks, and
                        user-reported triage.</p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Endpoint Detection &amp; Response</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-automate-security.png"
                            alt="Endpoint detection and response"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">Behavior-based protection with rapid isolation and
                        rollback.</p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Vulnerability &amp; Patch Management</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-security-fabric.jpg" alt="Vulnerability management"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">Continuous scanning with prioritized remediation
                        and change windows.</p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Attack Surface Monitoring</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-network-automation.jpg"
                            alt="Attack surface monitoring"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">Track exposed assets, misconfigurations, and
                        expired certs—before attackers do.</p>
                </a>

                <a href="#"
                    class="group rounded-2xl bg-slate-800 text-white ring-1 ring-white/10 hover:ring-white/20 shadow-[0_14px_50px_rgba(2,6,23,.18)] transition">
                    <div class="px-5 pt-6">
                        <h3 class="font-semibold">Cloud Security Posture</h3>
                    </div>
                    <div class="mt-4 mx-5 rounded-xl overflow-hidden ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/related-network-segmentation.jpg"
                            alt="Cloud security posture management"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pt-4 pb-6 text-sm text-slate-300">Guardrails for Azure/M365 and SaaS with drift
                        alerts and auto-remediation.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-100 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-4">Need a SOC with real humans behind it?</h2>
            <p class="text-gray-600 mb-6">
                We’ll map your signals, plug in our runbooks, and set SLAs that fit your risk profile.
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
                <textarea rows="4" name="message" placeholder="Tell us about your environment (users, tools, goals)…"
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