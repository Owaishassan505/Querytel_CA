<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Acronis Cyber Files Cloud — QueryTel</title>
    <meta name="description"
        content="Secure, enterprise-grade file sync & share with policy controls, auditing, and deep Microsoft integration. Brand it your way and manage centrally." />
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { brandorange: '#f97316', brandblue: '#1e40af' },
                    boxShadow: { soft: '0 10px 35px rgba(2,6,23,.08)' },
                    keyframes: {
                        fadeUp: { '0%': { opacity: 0, transform: 'translateY(12px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
                        floaty: { '0%,100%': { transform: 'translateY(0)' }, '50%': { transform: 'translateY(-4px)' } }
                    },
                    animation: {
                        fadeUp: 'fadeUp .6s ease-out forwards',
                        floaty: 'floaty 6s ease-in-out infinite'
                    }
                }
            }
        }
    </script>
    <style>
        [data-animate] {
            opacity: 0;
            transform: translateY(10px);
            transition: .55s ease
        }
    </style>
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
                },
            },
        };
    </script>
    <style>
        :root {
            --accent: #D83B01;
            --accent-2: #FFB900;
        }

        .qt-line {
            height: 6px;
            width: 64px;
            border-radius: 9999px;
            background: #D83B01;
            margin-inline: auto;
        }

        .qt-btn {
            border-radius: 2px;
            font-weight: 600;
        }

        .qt-btn-primary {
            background: #D83B01;
            color: #fff;
        }

        .qt-btn-primary:hover {
            background: #b93101;
        }

        .qt-btn-secondary {
            background: #fff;
            color: #1b1b1b;
            border: 1px solid #dcdcdc;
        }

        .qt-btn-secondary:hover {
            background: #f6f6f6;
            border-color: #cfcfcf;
        }

        .qt-card {
            border: 1px solid #e6e6e6;
            border-radius: 12px;
            background: #fff;
            transition: transform .2s, box-shadow .2s, border-color .2s;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .04);
        }

        .qt-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0, 0, 0, .08);
            border-color: #D83B01;
        }
    </style>
</head>

<body class="bg-white text-neutral-900 antialiased">

    <?php include("navbar.php"); ?>

    <!-- HERO -->


    <?php /* --- HERO: Cyber Files Cloud --- */ ?>
    <section class="relative overflow-hidden text-white">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-orange-600 to-blue-800"></div>
        <div class="absolute inset-0" style="background-image:
    radial-gradient(80rem 40rem at 10% -10%,rgba(255,255,255,.14),transparent 60%),
    radial-gradient(60rem 30rem at 110% 120%,rgba(255,255,255,.08),transparent 40%);"></div>

        <div class="relative max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <p
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 ring-1 ring-white/20 px-3 py-1 text-sm">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span> Cyber Cloud Services
                </p>
                <h1 class="mt-3 text-4xl md:text-5xl font-bold leading-tight">Acronis Cyber Files Cloud</h1>
                <p class="mt-4 text-orange-50 text-lg">
                    Secure, enterprise-grade file sync & share with policy controls, auditing, and deep Microsoft
                    integration. You can just brand it your way and manage everything centrally.
                </p>
                <div class="mt-7 flex flex-col sm:flex-row gap-4">
                    <a href="#features"
                        class="inline-flex justify-center rounded-lg bg-white text-orange-600 font-semibold px-6 py-3 hover:bg-orange-50 transition">See
                        Features</a>
                    <a href="<?= $base ?>/contactus"
                        class="inline-flex justify-center rounded-lg bg-white/10 ring-1 ring-white/30 px-6 py-3 hover:bg-white/15 transition">Talk
                        to Sales</a>
                </div>

                <div class="mt-6 flex flex-wrap items-center gap-4 text-sm text-white/85">
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg> SSO & RBAC
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg> Encryption at rest
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg> Full audit trails
                    </span>
                </div>
            </div>

            <!-- Clean inline SVG (document + cloud) -->
            <div class="relative">
                <div class="absolute -inset-8 bg-white/10 blur-3xl rounded-full"></div>
                <div class="relative z-10 bg-white/90 rounded-2xl shadow-2xl ring-1 ring-black/5 p-6">
                    <svg viewBox="0 0 700 360" class="w-full h-64 md:h-72">
                        <defs>
                            <linearGradient id="cfAccent" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#f97316" />
                                <stop offset="100%" stop-color="#1e40af" />
                            </linearGradient>
                            <filter id="softS" x="-20%" y="-20%" width="140%" height="140%">
                                <feDropShadow dx="0" dy="10" stdDeviation="12" flood-color="#0f172a"
                                    flood-opacity=".15" />
                            </filter>
                        </defs>

                        <!-- card -->
                        <rect x="40" y="30" width="620" height="300" rx="18" fill="#fff" stroke="#e5e7eb"
                            filter="url(#softS)" />
                        <!-- doc -->
                        <g transform="translate(90,70)">
                            <rect x="0" y="0" width="280" height="220" rx="12" fill="#ffffff" stroke="#e5e7eb" />
                            <rect x="0" y="0" width="280" height="56" rx="12" fill="url(#cfAccent)" opacity=".10" />
                            <g stroke="#cbd5e1" stroke-width="2">
                                <line x1="20" y1="70" x2="250" y2="70" />
                                <line x1="20" y1="96" x2="250" y2="96" />
                                <line x1="20" y1="122" x2="250" y2="122" />
                                <line x1="20" y1="148" x2="250" y2="148" />
                                <line x1="20" y1="174" x2="180" y2="174" />
                            </g>
                        </g>
                        <!-- cloud -->
                        <g transform="translate(408,112)">
                            <path
                                d="M86 132H24a24 24 0 0 1-1.5-48.0 40 40 0 0 1 62.4-37.4A36 36 0 0 1 124 76a28 28 0 0 1-38 56z"
                                fill="url(#cfAccent)" opacity=".15" />
                            <path
                                d="M80 122H22a22 22 0 0 1-1.3-44.1 36 36 0 0 1 56.1-33.7A32 32 0 0 1 118 72a26 26 0 0 1-38 50z"
                                fill="#fff" stroke="#d1d5db" />
                            <!-- arrow up -->
                            <path d="M69 112V78" stroke="#f97316" stroke-width="4" stroke-linecap="round" />
                            <path d="M56 90l13-13 13 13" fill="none" stroke="#f97316" stroke-width="4"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <!-- badge -->
                        <g transform="translate(320,248)">
                            <circle r="24" fill="url(#cfAccent)" />
                            <path d="M-6 2l4 4 10-10" fill="none" stroke="#fff" stroke-width="3" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <?php /* --- “Part of / Key Features” (screenshot section) --- */ ?>
    <section id="features" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Part Of -->
            <div class="max-w-5xl">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-neutral-900">Part Of Acronis Cyber Cloud
                </h2>
                <div class="mt-3 h-px w-28 bg-neutral-200"></div>
                <p class="mt-6 text-neutral-700 leading-relaxed">
                    Acronis Cyber Notary Cloud is part of the powerful Acronis Cyber Cloud platform, which allows
                    service providers to use one solution to deliver backup, disaster recovery, file sync and share,
                    notarization, and eSignature services to clients. With smooth and quick onboarding, service
                    providers can leverage Acronis Cyber Notary Cloud to enrich their solution portfolio and increase
                    ARPUs.
                </p>
            </div>

            <!-- Key Features -->
            <div class="mt-14">
                <h3 class="text-2xl md:text-3xl font-bold tracking-tight text-neutral-900">Key Features Of Acronis Cyber
                    Files Cloud</h3>
                <div class="mt-3 h-px w-28 bg-neutral-200"></div>

                <div class="mt-8 grid md:grid-cols-2 gap-6">
                    <!-- left card -->
                    <div
                        class="group relative overflow-hidden rounded-2xl bg-[#0b1020] text-white shadow-[0_12px_40px_rgba(2,6,23,.18)] ring-1 ring-white/5">
                        <!-- subtle gradient top edge -->
                        <div
                            class="absolute inset-x-0 top-0 h-0.5 bg-gradient-to-r from-orange-500/70 via-orange-400/50 to-blue-500/70">
                        </div>

                        <div class="p-8">
                            <div class="flex items-center gap-3">
                                <span
                                    class="grid h-10 w-10 place-items-center rounded-xl bg-orange-500/15 text-orange-400 ring-1 ring-white/10">
                                    <!-- device/people icon -->
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M3 5h18v10H3zM2 17h20v2H2zM7 20h10v2H7z" />
                                    </svg>
                                </span>
                                <h4 class="text-base md:text-lg font-semibold tracking-tight">User Experience & Editing
                                </h4>
                            </div>

                            <div class="mt-4 h-px w-full bg-white/10"></div>

                            <ul class="mt-6 space-y-4 text-sm leading-relaxed">
                                <li class="flex gap-3">
                                    <span class="mt-0.5 text-orange-400">
                                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true">
                                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                        </svg>
                                    </span>
                                    Sync and share from any device with support for Apple and Android smartphones and
                                    tablets, Windows PCs, Macs, and all popular web browsers.
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-0.5 text-orange-400">
                                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                        </svg>
                                    </span>
                                    Leverage the easy-to-use interface with no training required.
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-0.5 text-orange-400">
                                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                        </svg>
                                    </span>
                                    Edit or comment on files directly from the mobile application. The solution
                                    integrates with native Microsoft Office applications (e.g., Word, Excel,
                                    PowerPoint).
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-0.5 text-orange-400">
                                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                        </svg>
                                    </span>
                                    Use powerful PDF editing and annotation tools; mobile users have total control over
                                    their PDFs.
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-0.5 text-orange-400">
                                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                        </svg>
                                    </span>
                                    Ensure comprehensive security and privacy with FIPS 140-2 encryption, control over
                                    files and folders, and policy controls for users, applications, and data.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- right card -->
                    <div
                        class="group relative overflow-hidden rounded-2xl bg-[#0b1020] text-white shadow-[0_12px_40px_rgba(2,6,23,.18)] ring-1 ring-white/5">
                        <!-- subtle gradient top edge -->
                        <div
                            class="absolute inset-x-0 top-0 h-0.5 bg-gradient-to-r from-blue-500/70 via-orange-400/50 to-orange-500/70">
                        </div>

                        <div class="p-8">
                            <div class="flex items-center gap-3">
                                <span
                                    class="grid h-10 w-10 place-items-center rounded-xl bg-blue-500/15 text-blue-300 ring-1 ring-white/10">
                                    <!-- API/gear icon -->
                                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M12 8a4 4 0 100 8 4 4 0 000-8zm9 4l-2.1-.7a7.9 7.9 0 00-.8-1.9l1.2-1.8-1.4-1.4-1.8 1.2c-.6-.3-1.2-.6-1.9-.8L12 3 10 3l-.7 2.1c-.7.2-1.3.5-1.9.8L5.6 4.7 4.2 6.1l1.2 1.8c-.3.6-.6 1.2-.8 1.9L2 12l.7 2.1c.2.7.5 1.3.8 1.9l-1.2 1.8 1.4 1.4 1.8-1.2c.6.3 1.2.6 1.9.8L10 22h2l.7-2.1c.7-.2 1.3-.5 1.9-.8l1.8 1.2 1.4-1.4-1.2-1.8c.3-.6.6-1.2.8-1.9L21 12z" />
                                    </svg>
                                </span>
                                <h4 class="text-base md:text-lg font-semibold tracking-tight">APIs, Branding &
                                    Compliance</h4>
                            </div>

                            <div class="mt-4 h-px w-full bg-white/10"></div>

                            <ul class="mt-6 space-y-4 text-sm leading-relaxed">
                                <li class="flex gap-3">
                                    <span class="mt-0.5 text-orange-400">
                                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor"
                                            aria-hidden="true">
                                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                        </svg>
                                    </span>
                                    Gain user-friendly APIs that integrate with your business automation, billing, and
                                    provisioning solutions. Secure content management features include automatic file
                                    storage, sync, share, and search functionalities.
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-0.5 text-orange-400">
                                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                        </svg>
                                    </span>
                                    Brand the service using white label capabilities.
                                </li>
                                <li class="flex gap-3">
                                    <span class="mt-0.5 text-orange-400">
                                        <svg class="h-4.5 w-4.5" viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                                        </svg>
                                    </span>
                                    Ease client compliance concerns with an already built-in HIPAA/HITECH security
                                    program. Acronis Cyber Files Cloud upholds the strictest security and privacy
                                    standards; it provides an enterprise-class audit trail and a full history of all
                                    transactions.
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- BENEFITS -->
    <section id="benefits" class="bg-slate-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Title -->
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">
                    Six benefits of Acronis Cyber Files Cloud
                </h2>
                <div class="mt-4 h-px w-28 mx-auto bg-white/20"></div>
            </header>

            <!-- Cards -->
            <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Security at its core -->
                <article
                    class="group rounded-2xl bg-slate-800/60 ring-1 ring-white/10 hover:ring-white/20 shadow-[0_12px_40px_rgba(2,6,23,.16)] transition">
                    <div class="px-5 pt-5">
                        <h3 class="text-white font-semibold">Security at its core</h3>
                    </div>
                    <div class="mt-4 mx-5 overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/anti-malware-scaled.jpg" alt="Security at its core"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pb-6 pt-4 text-sm leading-6 text-slate-300">
                        Protect mobile and desktop devices with a secure, policy-driven collaboration platform,
                        including BYOD.
                    </p>
                </article>

                <!-- Faster response time -->
                <article
                    class="group rounded-2xl bg-slate-800/60 ring-1 ring-white/10 hover:ring-white/20 shadow-[0_12px_40px_rgba(2,6,23,.16)] transition">
                    <div class="px-5 pt-5">
                        <h3 class="text-white font-semibold">Faster response time</h3>
                    </div>
                    <div class="mt-4 mx-5 overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/faster-response-time-2-scaled.jpg"
                            alt="Faster response time"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pb-6 pt-4 text-sm leading-6 text-slate-300">
                        Act quickly on critical events and customer requests with streamlined access and sharing.
                    </p>
                </article>

                <!-- Improved productivity -->
                <article
                    class="group rounded-2xl bg-slate-800/60 ring-1 ring-white/10 hover:ring-white/20 shadow-[0_12px_40px_rgba(2,6,23,.16)] transition">
                    <div class="px-5 pt-5">
                        <h3 class="text-white font-semibold">Improved productivity</h3>
                    </div>
                    <div class="mt-4 mx-5 overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/improved-data-productivity2-scaled.jpg"
                            alt="Improved productivity"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pb-6 pt-4 text-sm leading-6 text-slate-300">
                        Share files with colleagues, customers, and partners to keep work moving anywhere.
                    </p>
                </article>

                <!-- Safeguarding of data -->
                <article
                    class="group rounded-2xl bg-slate-800/60 ring-1 ring-white/10 hover:ring-white/20 shadow-[0_12px_40px_rgba(2,6,23,.16)] transition">
                    <div class="px-5 pt-5">
                        <h3 class="text-white font-semibold">Safeguarding of data</h3>
                    </div>
                    <div class="mt-4 mx-5 overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/safeguarding-of-data-scaled.jpg" alt="Safeguarding of data"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pb-6 pt-4 text-sm leading-6 text-slate-300">
                        Know where data lives and who touched it with complete audit trails and activity history.
                    </p>
                </article>

                <!-- Flexible cloud collaboration -->
                <article
                    class="group rounded-2xl bg-slate-800/60 ring-1 ring-white/10 hover:ring-white/20 shadow-[0_12px_40px_rgba(2,6,23,.16)] transition">
                    <div class="px-5 pt-5">
                        <h3 class="text-white font-semibold">Flexible cloud collaboration</h3>
                    </div>
                    <div class="mt-4 mx-5 overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/integrated-solution.png" alt="Flexible cloud collaboration"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pb-6 pt-4 text-sm leading-6 text-slate-300">
                        Scale with confidence using granular permissions, versioning, and policy-based access.
                    </p>
                </article>

                <!-- Peace of mind -->
                <article
                    class="group rounded-2xl bg-slate-800/60 ring-1 ring-white/10 hover:ring-white/20 shadow-[0_12px_40px_rgba(2,6,23,.16)] transition">
                    <div class="px-5 pt-5">
                        <h3 class="text-white font-semibold">Peace of mind</h3>
                    </div>
                    <div class="mt-4 mx-5 overflow-hidden rounded-xl ring-1 ring-white/10">
                        <img src="<?= $base ?>/assets/images/peace-of-mind-scaled.jpg" alt="Peace of mind"
                            class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-[1.02]" />
                    </div>
                    <p class="px-5 pb-6 pt-4 text-sm leading-6 text-slate-300">
                        Store and share content on a secure cloud infrastructure designed for reliability.
                    </p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-100 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-4">Need something custom?</h2>
            <p class="text-gray-600 mb-6">Our architects can design a deployment tailored to your enterprise.</p>
            <a href="#contact"
                class="qt-btn qt-btn-secondary inline-block px-8 py-3 transition-colors duration-150">Let’s Talk</a>
        </div>
    </section>

    <!-- CONTACT -->
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

    <script>
        // Reveal-on-scroll
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.style.opacity = 1;
                    e.target.style.transform = 'translateY(0)';
                    io.unobserve(e.target);
                }
            });
        }, { threshold: .12 });
        document.querySelectorAll('[data-animate]').forEach(el => io.observe(el));
    </script>
</body>

</html>