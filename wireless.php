<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Contact QueryTel Inc — Sales & Support in North America</title>
    <meta name="description"
        content="Reach QueryTel Inc for managed IT, cloud, and cybersecurity. Call Toronto HQ or open a support ticket. Mon–Fri, 8am–5pm. North America-wide coverage." />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <link rel="canonical" href="https://querytel.com/contactus/" />
    <link rel="alternate" hreflang="en-ca" href="https://querytel.com/contactus/" />
    <meta name="theme-color" content="#0f172a" />
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact QueryTel Inc — Sales & Support in North America" />
    <meta property="og:description"
        content="Speak with a local expert or reach our helpdesk. Toronto HQ and North America-wide service." />
    <meta property="og:url" content="https://querytel.com/contactus/" />
    <meta property="og:site_name" content="QueryTel Inc." />
    <meta property="og:locale" content="en_CA" />
    <meta property="og:image" content="<?= $base . '/assets/images/querytel-icon.png' ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact QueryTel Inc — Sales & Support in North America" />
    <meta name="twitter:description" content="Call our Toronto HQ or open a support ticket. Mon–Fri, 8am–5pm." />
    <meta name="twitter:image" content="<?= $base . '/assets/images/querytel-icon.png' ?>" />
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

    <!-- Icons -->
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.tailwindcss.com">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind config (kept) -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } }
                    },
                    animation: {
                        fadeInRight: "fadeInRight 0.8s ease-out forwards",
                        fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
                        fadeIn: "fadeIn 1s ease-out forwards"
                    }
                }
            }
        };
    </script>

    <!-- Schema: Organization -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Organization",
    "@id":"https://querytel.com/#org",
    "name":"QueryTel Inc.",
    "url":"https://querytel.com/",
    "logo":"<?= $base . '/assets/images/querytel-icon.png' ?>",
    "sameAs":["https://www.linkedin.com/company/querytel"]
  }
  </script>

    <!-- Schema: ContactPage -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"ContactPage",
    "@id":"https://querytel.com/contactus/#contactpage",
    "url":"https://querytel.com/contactus/",
    "name":"Contact QueryTel Inc",
    "inLanguage":"en-CA",
    "about":{"@id":"https://querytel.com/#org"},
    "primaryImageOfPage":{"@type":"ImageObject","url":"<?= $base . '/assets/images/querytel-icon.png' ?>"},
    "lastReviewed":"2025-08-18",
    "breadcrumb":{"@id":"https://querytel.com/contactus/#breadcrumb"}
  }
  </script>

    <!-- Schema: BreadcrumbList -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"BreadcrumbList",
    "@id":"https://querytel.com/contactus/#breadcrumb",
    "itemListElement":[
      {"@type":"ListItem","position":1,"name":"Home","item":"https://querytel.com/"},
      {"@type":"ListItem","position":2,"name":"Contact Us","item":"https://querytel.com/contactus/"}
    ]
  }
  </script>

    <!-- Schema: LocalBusiness (HQ info for trust) -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"LocalBusiness",
    "@id":"https://querytel.com/#hq",
    "name":"QueryTel Inc — Toronto HQ",
    "url":"https://querytel.com/",
    "image":"<?= $base . '/assets/images/querytel-icon.png' ?>",
    "telephone":"+1-416-477-1380",
    "address":{
      "@type":"PostalAddress",
      "streetAddress":"7025 Tomken Road, Suite 244",
      "addressLocality":"Mississauga",
      "addressRegion":"ON",
      "postalCode":"L5S 1R6",
      "addressCountry":"CA"
    },
    "openingHoursSpecification":[{
      "@type":"OpeningHoursSpecification",
      "dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens":"08:00",
      "closes":"17:00"
    }],
    "parentOrganization":{"@id":"https://querytel.com/#org"}
  }
  </script>
    <style>
        /* Optional media inside cards (stays invisible unless you add an <img>) */
        .tl-card .tl-media {
            margin-top: .75rem;
            /* small gap under the title */
            border-radius: .75rem;
            /* rounded corners to match the card */
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(2, 6, 23, .06);
            border: 1px solid rgba(148, 163, 184, .22);
            /* match existing ring tone */
        }

        .tl-card .tl-media img {
            display: block;
            width: 100%;
            height: auto;
            object-fit: cover;
            aspect-ratio: 16 / 9;
            /* keeps cards same height rhythm */
        }
    </style>

</head>


<body class="bg-white text-neutral-900 font-sans overflow-x-hidden">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- HEADER -->
    <?php include("navbar.php"); ?>


    <!-- Hero: Wireless Networks (Orange Major / Blue Minor, Premium) -->
    <section class="relative overflow-hidden bg-white py-24 md:py-32">
        <!-- subtle grid + soft brand glows -->
        <div class="absolute inset-0 z-0">
            <svg class="absolute inset-0 w-full h-full text-slate-100" viewBox="0 0 100 100" preserveAspectRatio="none"
                aria-hidden="true">
                <defs>
                    <pattern id="grid-prem" width="8" height="8" patternUnits="userSpaceOnUse">
                        <path d="M8 0H0V8" fill="none" stroke="currentColor" stroke-width=".28" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-prem)"></rect>
            </svg>
            <div
                class="pointer-events-none absolute -top-24 -right-24 h-[26rem] w-[26rem] rounded-full bg-orange-500/10 blur-[160px]">
            </div>
            <div
                class="pointer-events-none absolute -bottom-24 -left-24 h-[22rem] w-[22rem] rounded-full bg-blue-500/10 blur-[140px]">
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <!-- Text -->
            <div class="space-y-6 md:space-y-8">
                <div
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span>
                    Wireless Networks
                </div>

                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight leading-tight text-slate-900">
                    <span
                        class="bg-gradient-to-r from-orange-600 via-orange-500 to-blue-600 bg-clip-text text-transparent">
                        Unified Networks.
                    </span>
                    <br class="hidden lg:inline">
                    Seamlessly Connected.
                </h1>

                <p class="text-lg md:text-xl text-slate-700 leading-relaxed max-w-xl">
                    From single-floor enterprise Wi-Fi to high-speed point-to-point links, we architect and deploy
                    secure,
                    reliable wireless that powers your business—end to end.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-3 rounded-xl font-semibold text-white
                  bg-gradient-to-r from-orange-600 to-orange-500 shadow-lg ring-1 ring-orange-600/30
                  hover:scale-[1.015] hover:shadow-xl transition transform-gpu">
                        Request a Site Survey
                    </a>
                    <a href="#services" class="inline-flex items-center justify-center px-8 py-3 rounded-xl font-semibold
                  text-blue-700 border border-blue-300 hover:bg-blue-50/60 backdrop-blur transition">
                        Explore Our Services
                    </a>
                </div>

                <!-- micro trust row (optional, small & premium) -->
                <div class="flex flex-wrap items-center gap-x-4 gap-y-2 text-xs text-slate-500/90">
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-3.5 w-3.5 text-orange-600" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg>
                        Enterprise-grade security
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-3.5 w-3.5 text-blue-600" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path d="M6 2h12v2H6zM4 6h16v2H4zM4 10h16v10H4z" />
                        </svg>
                        Designed for scale
                    </span>
                    <span class="inline-flex items-center gap-2">
                        <svg class="h-3.5 w-3.5 text-orange-600" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true">
                            <path d="M12 2l7 4v6c0 6-4 9-7 10-3-1-7-4-7-10V6l7-4z" />
                        </svg>
                        SLA-backed uptime
                    </span>
                </div>
            </div>

            <!-- Visual -->
            <div
                class="relative w-full aspect-[4/3] rounded-3xl overflow-hidden bg-slate-900 flex items-center justify-center shadow-2xl ring-1 ring-slate-800">
                <div class="absolute inset-0 flex items-center justify-center p-8">
                    <div class="relative h-full w-full">
                        <!-- Central node -->
                        <div
                            class="absolute h-10 w-10 rounded-full bg-blue-500 top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 shadow-[0_0_15px_5px_rgba(59,130,246,0.6)] animate-pulse">
                        </div>

                        <!-- Outer ring -->
                        <div
                            class="absolute h-full w-full rounded-full border-4 border-dashed border-blue-600/30 animate-spin-slow">
                        </div>

                        <!-- Inner ring -->
                        <div
                            class="absolute h-[60%] w-[60%] rounded-full border-4 border-dotted border-orange-500/40 animate-spin-slow-reverse">
                        </div>

                        <!-- Connecting lines -->
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <line x1="50" y1="50" x2="20" y2="80" stroke="#f97316" stroke-width="1" class="opacity-70">
                            </line>
                            <line x1="50" y1="50" x2="80" y2="20" stroke="#3b82f6" stroke-width="1" class="opacity-70">
                            </line>
                            <line x1="50" y1="50" x2="20" y2="20" stroke="#3b82f6" stroke-width="1" class="opacity-70">
                            </line>
                            <line x1="50" y1="50" x2="80" y2="80" stroke="#f97316" stroke-width="1" class="opacity-70">
                            </line>
                        </svg>

                        <!-- Sub-nodes -->
                        <div class="absolute h-4 w-4 rounded-full bg-orange-500/90 top-[76%] left-[16%] animate-float">
                        </div>
                        <div class="absolute h-4 w-4 rounded-full bg-blue-500/90 top-[16%] left-[76%] animate-float"
                            style="animation-delay: 0.5s;"></div>
                        <div class="absolute h-4 w-4 rounded-full bg-orange-500/90 top-[16%] left-[16%] animate-float"
                            style="animation-delay: 1s;"></div>
                        <div class="absolute h-4 w-4 rounded-full bg-blue-500/90 top-[76%] left-[76%] animate-float"
                            style="animation-delay: 1.5s;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- SERVICES: Wireless Expertise (elevated, themed, animated, Lucide) -->
    <section id="services" class="relative py-24 md:py-32 bg-slate-50 overflow-hidden">
        <!-- soft brand glows -->
        <div
            class="pointer-events-none absolute -top-24 -right-40 h-[26rem] w-[26rem] rounded-full bg-orange-500/10 blur-[160px]">
        </div>
        <div
            class="pointer-events-none absolute bottom-0 -left-40 h-[22rem] w-[22rem] rounded-full bg-blue-500/10 blur-[140px]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative">
            <!-- Header -->
            <div class="max-w-2xl mx-auto text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-[.18em] text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span>
                    Solutions for a Connected World
                </span>
                <h2 class="mt-3 text-4xl font-bold tracking-tight text-slate-900 leading-tight">
                    Our Wireless Expertise
                </h2>
                <p class="mt-6 text-lg text-slate-700 leading-relaxed">
                    Design, deployment, and lifecycle management for resilient, secure, and fast wireless—scaled from a
                    single floor to multi-site campuses.
                </p>
            </div>

            <!-- Grid -->
            <div id="svc-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card template -->
                <article class="svc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-white shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-8">
                        <div class="mb-6 inline-flex items-center gap-3">
                            <div
                                class="tile grid place-items-center h-14 w-14 rounded-xl bg-orange-50 ring-1 ring-orange-200 transition-all duration-300">
                                <i data-lucide="wifi"
                                    class="h-7 w-7 text-orange-600 transition-transform duration-300"></i>
                            </div>
                            <span class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Core</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Enterprise Wi-Fi Networks</h3>
                        <p class="mt-3 text-slate-600">
                            Secure, scalable Wi-Fi with seamless roaming, mesh, and QoS for critical apps.
                        </p>
                        <ul class="mt-5 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">WPA3 /
                                802.1X</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">6 GHz
                                / Wi-Fi 6E</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                Heatmaps</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-orange-500/0 via-orange-500/40 to-blue-600/0"></div>
                </article>

                <article class="svc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-white shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-8">
                        <div class="mb-6 inline-flex items-center gap-3">
                            <div
                                class="tile grid place-items-center h-14 w-14 rounded-xl bg-blue-50 ring-1 ring-blue-200 transition-all duration-300">
                                <i data-lucide="radio-tower"
                                    class="h-7 w-7 text-blue-600 transition-transform duration-300"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Backhaul</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Point-to-Point Wireless</h3>
                        <p class="mt-3 text-slate-600">
                            Gigabit line-of-sight links between buildings with spectrum planning and SLAs.
                        </p>
                        <ul class="mt-5 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">24/60
                                GHz</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                AES-256</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">Link
                                Budget</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-blue-600/0 via-blue-600/40 to-orange-500/0"></div>
                </article>

                <article class="svc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-white shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-8">
                        <div class="mb-6 inline-flex items-center gap-3">
                            <div
                                class="tile grid place-items-center h-14 w-14 rounded-xl bg-orange-50 ring-1 ring-orange-200 transition-all duration-300">
                                <i data-lucide="satellite-dish"
                                    class="h-7 w-7 text-orange-600 transition-transform duration-300"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Access</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Fixed Wireless Internet</h3>
                        <p class="mt-3 text-slate-600">
                            Primary or backup access when fiber isn’t feasible—deployed fast, built for uptime.
                        </p>
                        <ul class="mt-5 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                Multi-WAN</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">SLA
                            </li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                Monitoring</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-orange-500/0 via-orange-500/40 to-blue-600/0"></div>
                </article>

                <article class="svc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-white shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-8">
                        <div class="mb-6 inline-flex items-center gap-3">
                            <div
                                class="tile grid place-items-center h-14 w-14 rounded-xl bg-blue-50 ring-1 ring-blue-200 transition-all duration-300">
                                <i data-lucide="shuffle"
                                    class="h-7 w-7 text-blue-600 transition-transform duration-300"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Continuity</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Failover & Load Balancing</h3>
                        <p class="mt-3 text-slate-600">
                            4G/5G failover and policy routing to keep critical services always available.
                        </p>
                        <ul class="mt-5 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">SLA
                                Alerts</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">App
                                QoS</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                Zero-Touch</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-blue-600/0 via-blue-600/40 to-orange-500/0"></div>
                </article>

                <article class="svc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-white shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-8">
                        <div class="mb-6 inline-flex items-center gap-3">
                            <div
                                class="tile grid place-items-center h-14 w-14 rounded-xl bg-orange-50 ring-1 ring-orange-200 transition-all duration-300">
                                <i data-lucide="printer"
                                    class="h-7 w-7 text-orange-600 transition-transform duration-300"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Workspace</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Wireless Printing & Peripherals</h3>
                        <p class="mt-3 text-slate-600">
                            Zero-drama deployment for printers, scanners, and mobile POS across VLANs.
                        </p>
                        <ul class="mt-5 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                AirPrint</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">mDNS
                                Proxy</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                Segmentation</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-orange-500/0 via-orange-500/40 to-blue-600/0"></div>
                </article>

                <article class="svc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-white shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-8">
                        <div class="mb-6 inline-flex items-center gap-3">
                            <div
                                class="tile grid place-items-center h-14 w-14 rounded-xl bg-blue-50 ring-1 ring-blue-200 transition-all duration-300">
                                <i data-lucide="radar"
                                    class="h-7 w-7 text-blue-600 transition-transform duration-300"></i>
                            </div>
                            <span class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">IoT</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">IoT & Sensor Integration</h3>
                        <p class="mt-3 text-slate-600">
                            Secure onboarding and telemetry for sensors, trackers, and edge devices.
                        </p>
                        <ul class="mt-5 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">PSK /
                                EAP</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">MQTT
                            </li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">Device
                                Posture</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-blue-600/0 via-blue-600/40 to-orange-500/0"></div>
                </article>

                <article class="svc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-white shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-8">
                        <div class="mb-6 inline-flex items-center gap-3">
                            <div
                                class="tile grid place-items-center h-14 w-14 rounded-xl bg-orange-50 ring-1 ring-orange-200 transition-all duration-300">
                                <i data-lucide="locate-fixed"
                                    class="h-7 w-7 text-orange-600 transition-transform duration-300"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Planning</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Wireless Site Surveys</h3>
                        <p class="mt-3 text-slate-600">
                            Predictive + on-site surveys for AP placement, coverage, and interference.
                        </p>
                        <ul class="mt-5 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">Ekahau
                            </li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                Spectrum</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">SNR
                                Targets</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-orange-500/0 via-orange-500/40 to-blue-600/0"></div>
                </article>

                <article class="svc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-white shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-8">
                        <div class="mb-6 inline-flex items-center gap-3">
                            <div
                                class="tile grid place-items-center h-14 w-14 rounded-xl bg-blue-50 ring-1 ring-blue-200 transition-all duration-300">
                                <i data-lucide="shield-check"
                                    class="h-7 w-7 text-blue-600 transition-transform duration-300"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Access</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900">Secure Guest Wi-Fi</h3>
                        <p class="mt-3 text-slate-600">
                            Branded captive portals, bandwidth controls, isolation, and compliance logging.
                        </p>
                        <ul class="mt-5 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">
                                Splash/Radius</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">Rate
                                Limits</li>
                            <li class="px-2.5 py-1 rounded-full bg-slate-50 ring-1 ring-slate-200 text-slate-700">Client
                                Isolation</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-blue-600/0 via-blue-600/40 to-orange-500/0"></div>
                </article>
            </div>

            <!-- Section CTA -->
            <!-- <div class="mt-14 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#contact"
                    class="inline-flex items-center gap-2 px-7 py-3.5 rounded-lg bg-orange-600 text-white font-semibold shadow-lg hover:shadow-xl hover:scale-[1.02] transition">
                    Request a Site Survey
                    <i data-lucide="arrow-right" class="h-4 w-4"></i>
                </a>
                <a href="#cases"
                    class="inline-flex items-center gap-2 px-7 py-3.5 rounded-lg border border-slate-300 text-slate-800 font-semibold hover:bg-slate-50 transition">
                    See Case Studies
                    <i data-lucide="files" class="h-4 w-4"></i>
                </a>
            </div> -->
        </div>
    </section>

    <!-- Lucide (place once near end of body if not already included) -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script>
        // Icons + reveal-on-scroll (lightweight)
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide?.createIcons) lucide.createIcons();

            const cards = [...document.querySelectorAll('#svc-grid .svc-card')];
            // staggered reveal
            const io = new IntersectionObserver((entries) => {
                entries.forEach((e) => {
                    if (e.isIntersecting) {
                        const idx = cards.indexOf(e.target);
                        e.target.style.transitionDelay = `${Math.min(idx % 3, 2) * 80}ms`; // stagger per row
                        e.target.classList.remove('opacity-0', 'translate-y-3');
                        io.unobserve(e.target);
                    }
                });
            }, { threshold: 0.12 });

            cards.forEach(c => io.observe(c));

            // icon tile micro-interaction
            document.querySelectorAll('#svc-grid .svc-card').forEach(card => {
                const tile = card.querySelector('.tile');
                const icon = card.querySelector('[data-lucide]');
                card.addEventListener('mouseenter', () => {
                    tile.classList.toggle('bg-orange-50', false);
                    tile.classList.toggle('bg-blue-50', false);
                    // swap tile bg based on primary icon color
                    if (icon?.classList.contains('text-blue-600')) {
                        tile.classList.add('bg-blue-600/10', 'ring-blue-300');
                    } else {
                        tile.classList.add('bg-orange-600/10', 'ring-orange-300');
                    }
                    icon.style.transform = 'scale(1.05) rotate(2deg)';
                });
                card.addEventListener('mouseleave', () => {
                    tile.classList.remove('bg-blue-600/10', 'ring-blue-300', 'bg-orange-600/10', 'ring-orange-300');
                    // restore pale tile by theme
                    if (icon?.classList.contains('text-blue-600')) {
                        tile.classList.add('bg-blue-50', 'ring-blue-200');
                    } else {
                        tile.classList.add('bg-orange-50', 'ring-orange-200');
                    }
                    icon.style.transform = '';
                });
            });
        });
    </script>




    <!-- THE PREMIUM DIFFERENCE (clean, themed, with micro-interactions) -->
    <section id="process" class="relative py-24 md:py-32 bg-white">
        <!-- soft brand glows (very subtle) -->
        <div
            class="pointer-events-none absolute -top-24 -right-40 h-[22rem] w-[22rem] rounded-full bg-orange-500/5 blur-[140px]">
        </div>
        <div
            class="pointer-events-none absolute bottom-0 -left-40 h-[18rem] w-[18rem] rounded-full bg-blue-600/5 blur-[120px]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative">
            <!-- Header -->
            <div class="max-w-2xl mx-auto text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-[.18em] text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span>
                    Your Connectivity, Our Process
                </span>
                <h2 class="mt-3 text-4xl font-bold tracking-tight text-slate-900">The Premium Difference</h2>
                <p class="mt-6 text-lg text-slate-700">
                    A four-step delivery model that produces secure, reliable wireless—documented, monitored, and ready
                    to scale.
                </p>
            </div>

            <!-- Grid -->
            <div id="proc-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Step -->
                <article class="proc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-slate-50 ring-1 ring-slate-100 shadow-lg hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-7">
                        <div class="flex items-center justify-between">
                            <div class="inline-flex items-center gap-3">
                                <div
                                    class="grid place-items-center h-12 w-12 rounded-full bg-blue-600 text-white font-bold">
                                    1</div>
                                <i data-lucide="search" class="h-6 w-6 text-blue-600"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Discovery</span>
                        </div>
                        <h3 class="mt-5 text-xl font-bold text-slate-900">Discovery & Analysis</h3>
                        <p class="mt-2 text-slate-600">
                            Site survey, spectrum snapshot, and requirement mapping to align on goals, risks, and
                            constraints.
                        </p>
                        <ul class="mt-4 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">Heatmap
                            </li>
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">RF Scan
                            </li>
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">SOW</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-blue-600/0 via-blue-600/40 to-orange-500/0"></div>
                </article>

                <!-- Step -->
                <article class="proc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-slate-50 ring-1 ring-slate-100 shadow-lg hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-7">
                        <div class="flex items-center justify-between">
                            <div class="inline-flex items-center gap-3">
                                <div
                                    class="grid place-items-center h-12 w-12 rounded-full bg-orange-600 text-white font-bold">
                                    2</div>
                                <i data-lucide="blueprint" class="h-6 w-6 text-orange-600"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Design</span>
                        </div>
                        <h3 class="mt-5 text-xl font-bold text-slate-900">Custom Solution Design</h3>
                        <p class="mt-2 text-slate-600">
                            Architecture, AP placement, VLANs, and security model—documented with bill of materials and
                            timelines.
                        </p>
                        <ul class="mt-4 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">
                                WPA3/802.1X</li>
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">Roaming
                            </li>
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">BOM</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-orange-600/0 via-orange-600/40 to-blue-600/0"></div>
                </article>

                <!-- Step -->
                <article class="proc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-slate-50 ring-1 ring-slate-100 shadow-lg hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-7">
                        <div class="flex items-center justify-between">
                            <div class="inline-flex items-center gap-3">
                                <div
                                    class="grid place-items-center h-12 w-12 rounded-full bg-cyan-600 text-white font-bold">
                                    3</div>
                                <i data-lucide="plug" class="h-6 w-6 text-cyan-600"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Deploy</span>
                        </div>
                        <h3 class="mt-5 text-xl font-bold text-slate-900">Seamless Deployment</h3>
                        <p class="mt-2 text-slate-600">
                            Staged rollout with change windows, zero-touch provisioning, and validation tests—minimal
                            disruption.
                        </p>
                        <ul class="mt-4 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">ZTP</li>
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">QoS</li>
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">UAT</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-cyan-600/0 via-cyan-600/40 to-orange-500/0"></div>
                </article>

                <!-- Step -->
                <article class="proc-card group opacity-0 translate-y-3 transition-all duration-700 ease-out
                      rounded-2xl bg-slate-50 ring-1 ring-slate-100 shadow-lg hover:shadow-2xl hover:-translate-y-1">
                    <div class="p-7">
                        <div class="flex items-center justify-between">
                            <div class="inline-flex items-center gap-3">
                                <div
                                    class="grid place-items-center h-12 w-12 rounded-full bg-blue-600 text-white font-bold">
                                    4</div>
                                <i data-lucide="activity" class="h-6 w-6 text-blue-600"></i>
                            </div>
                            <span
                                class="text-[11px] font-semibold tracking-wider text-slate-500 uppercase">Operate</span>
                        </div>
                        <h3 class="mt-5 text-xl font-bold text-slate-900">Support & Optimization</h3>
                        <p class="mt-2 text-slate-600">
                            24×7 monitoring, alerts, and quarterly tuning to keep performance and security at peak.
                        </p>
                        <ul class="mt-4 flex flex-wrap gap-2 text-[12px]">
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">SLA</li>
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">Telemetry
                            </li>
                            <li class="px-2.5 py-1 rounded-full bg-white ring-1 ring-slate-200 text-slate-700">QBR</li>
                        </ul>
                    </div>
                    <div class="h-1 w-full bg-gradient-to-r from-blue-600/0 via-blue-600/40 to-orange-500/0"></div>
                </article>
            </div>

            <!-- Results strip -->
            <div class="mt-14 flex flex-wrap items-center justify-center gap-3 text-sm">
                <span
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 ring-1 ring-slate-200 text-slate-700">
                    <i data-lucide="shield-check" class="h-4 w-4 text-blue-600"></i> Security by default
                </span>
                <span
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 ring-1 ring-slate-200 text-slate-700">
                    <i data-lucide="gauge" class="h-4 w-4 text-orange-600"></i> Performance SLAs
                </span>
                <span
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 ring-1 ring-slate-200 text-slate-700">
                    <i data-lucide="file-check-2" class="h-4 w-4 text-blue-600"></i> Docs & handover
                </span>
            </div>
        </div>
    </section>



    <!-- Lucide (once per page if not already included) -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // icons
            if (window.lucide?.createIcons) lucide.createIcons();

            // staggered reveal on scroll (lightweight, no AOS dependency)
            const cards = [...document.querySelectorAll('#proc-grid .proc-card')];
            const io = new IntersectionObserver((entries) => {
                entries.forEach((e) => {
                    if (e.isIntersecting) {
                        const idx = cards.indexOf(e.target);
                        // gentle stagger across columns
                        e.target.style.transitionDelay = `${(idx % 4) * 80}ms`;
                        e.target.classList.remove('opacity-0', 'translate-y-3');
                        io.unobserve(e.target);
                    }
                });
            }, { threshold: 0.14 });

            cards.forEach(c => io.observe(c));
        });
    </script>


    <!-- PREMIUM SCROLL TIMELINE -->
    <section id="timeline" class="relative py-24 md:py-32 bg-slate-50 overflow-hidden">
        <!-- brand glows -->
        <div
            class="pointer-events-none absolute -top-24 -right-40 h-[22rem] w-[22rem] rounded-full bg-orange-500/5 blur-[140px]">
        </div>
        <div
            class="pointer-events-none absolute -bottom-24 -left-40 h-[20rem] w-[20rem] rounded-full bg-blue-600/5 blur-[120px]">
        </div>

        <div class="max-w-4xl mx-auto px-6 relative">
            <!-- Header -->
            <div class="max-w-2xl mx-auto text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-[.18em] text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span>
                    Your Connectivity, Our Process
                </span>
                <h2 class="mt-3 text-4xl font-bold tracking-tight text-slate-900">Our Seamless Timeline</h2>
                <p class="mt-6 text-lg text-slate-700">
                    Five steps. Zero drama. Designed to deliver on time, on budget, and on spec.
                </p>
            </div>

            <div id="tl-wrapper" class="relative">
                <!-- rail (desktop) -->
                <div
                    class="hidden md:block absolute inset-y-0 left-1/2 -translate-x-1/2 w-[3px] bg-slate-200 rounded-full">
                </div>
                <!-- progress (desktop) -->
                <div id="tl-progress" class="hidden md:block absolute left-1/2 -translate-x-1/2 w-[3px] rounded-full"
                    style="top:0;height:0;background:linear-gradient(180deg,#f97316 0%,#3b82f6 100%);"></div>

                <div class="md:grid md:grid-cols-2 md:gap-x-10">
                    <!-- Step 1 (right) -->
                    <div class="tl-step tl-right mb-12 md:mb-16" data-step="1">
                        <div class="md:ml-auto  tl-card">
                            <h3 class="text-xl font-bold text-slate-900">Consultation & Discovery</h3>
                            <figure class="tl-media">
                                <img loading="lazy"
                                    src="<?= $base . '/assets/partners/Dahua_Technology_logo.svg.png' ?>"
                                    alt="Descriptive alt">
                            </figure>

                            <p class="mt-2 text-slate-600">We lock scope and constraints upfront — onsite or virtual —
                                to prevent surprises later.</p>
                        </div>
                        <div class="tl-node-wrap md:mr-auto">
                            <div
                                class="h-12 w-12 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold text-xl ring-4 ring-white shadow-md tl-node tl-node-blue">
                                1</div>
                        </div>
                    </div>

                    <!-- Step 2 (left) -->
                    <div class="tl-step tl-left mb-12 md:mb-16" data-step="2">
                        <div class="md:mr-auto  tl-card">
                            <h3 class="text-xl font-bold text-slate-900">Predictive Design</h3>
                            <p class="mt-2 text-slate-600">Coverage, capacity, channels — modeled before we buy or mount
                                anything.</p>
                        </div>
                        <div class="tl-node-wrap md:ml-auto">
                            <div
                                class="h-12 tl-node tl-node-orange w-12 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold text-xl ring-4 ring-white shadow-md tl-node tl-node-blue">
                                2</div>
                        </div>
                    </div>

                    <!-- Step 3 (right) -->
                    <div class="tl-step tl-right mb-12 md:mb-16" data-step="3">
                        <div class="md:ml-auto  tl-card">
                            <h3 class="text-xl font-bold text-slate-900">On-Site Validation</h3>
                            <p class="mt-2 text-slate-600">We physically verify, measure interference, and pin exact AP
                                locations.</p>
                        </div>
                        <div class="tl-node-wrap md:mr-auto">
                            <div
                                class="h-12 w-12 flex items-center tl-node tl-node-cyan justify-center rounded-full bg-blue-600 text-white font-bold text-xl ring-4 ring-white shadow-md tl-node tl-node-blue">
                                3</div>
                        </div>
                    </div>

                    <!-- Step 4 (left) -->
                    <div class="tl-step tl-left mb-12 md:mb-16" data-step="4">
                        <div class="md:mr-auto  tl-card">
                            <h3 class="text-xl font-bold text-slate-900">Professional Deployment</h3>
                            <p class="mt-2 text-slate-600">Certified install + cabling + config with change windows &
                                ZTP.</p>
                        </div>
                        <div class="tl-node-wrap md:ml-auto">
                            <div
                                class="h-12 w-12 flex items-center tl-node tl-node-blue justify-center rounded-full bg-blue-600 text-white font-bold text-xl ring-4 ring-white shadow-md tl-node tl-node-blue">
                                4</div>
                        </div>
                    </div>

                    <!-- Step 5 (right) -->
                    <div class="tl-step tl-right" data-step="5">
                        <div class="md:ml-auto  tl-card">
                            <h3 class="text-xl font-bold text-slate-900">Ongoing Optimization</h3>
                            <p class="mt-2 text-slate-600">Monitoring, patching, and quarterly tuning to keep
                                performance at peak.</p>
                        </div>
                        <div class="tl-node-wrap md:mr-auto">
                            <div
                                class="h-12 tl-node tl-node-orange w-12 flex items-center justify-center rounded-full bg-blue-600 text-white font-bold text-xl ring-4 ring-white shadow-md tl-node tl-node-blue">
                                5</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- timeline styles -->
        <style>
            /* mobile rail */
            @media (max-width: 767px) {
                #tl-wrapper {
                    position: relative;
                }

                #tl-wrapper:before {
                    content: "";
                    position: absolute;
                    left: 12px;
                    top: 0;
                    bottom: 0;
                    width: 2px;
                    background: #e5e7eb;
                    border-radius: 9999px;
                }

                .tl-card {
                    margin-left: 36px !important;
                }

                .tl-node {
                    left: 4px !important;
                }
            }

            .tl-node-wrap {
                display: none;
                position: relative;
            }

            @media (min-width:768px) {
                .tl-node-wrap {
                    display: flex;
                    align-items: flex-start;
                    justify-content: center;
                }
            }

            .tl-node {
                position: absolute;
                top: 0;
                left: 50%;
                transform: translate(-50%, 0);
                height: 42px;
                width: 42px;
                border-radius: 9999px;
                border: 4px solid #fff;
                box-shadow: 0 6px 16px rgba(15, 23, 42, .15);
                opacity: .3;
                filter: saturate(.7);
                transition: opacity .35s ease, transform .35s ease, box-shadow .35s ease, filter .35s ease;
            }

            .tl-node-blue {
                background: #2563eb;
            }

            /* blue-600 */
            .tl-node-orange {
                background: #f97316;
            }

            /* orange-500 */
            .tl-node-cyan {
                background: #06b6d4;
            }

            /* cyan-500 */

            .tl-step {
                position: relative;
                display: flex;
                flex-direction: column;
            }

            @media (min-width:768px) {
                .tl-right {
                    flex-direction: row-reverse;
                    text-align: right;
                }

                .tl-left {
                    flex-direction: row;
                }
            }

            .tl-card {
                background: #fff;
                border-radius: 1rem;
                padding: 1.25rem;
                /* p-5 */
                box-shadow: 0 8px 28px rgba(2, 6, 23, .06);
                border: 1px solid rgba(148, 163, 184, .22);
                opacity: 0;
                transform: translateY(8px);
                transition: opacity .45s ease, transform .45s ease, box-shadow .25s ease, border-color .25s ease;
                will-change: opacity, transform;
            }

            .tl-step.active .tl-card {
                opacity: 1;
                transform: translateY(0);
            }

            .tl-step.active .tl-node {
                opacity: 1;
                filter: saturate(1);
                transform: translate(-50%, 0) scale(1.04);
                box-shadow: 0 10px 26px rgba(15, 23, 42, .22);
            }

            .tl-card:hover {
                box-shadow: 0 16px 40px rgba(2, 6, 23, .10);
                border-color: rgba(148, 163, 184, .35);
            }
        </style>

        <!-- timeline logic (precise fill + node activation) -->
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const wrapper = document.getElementById('tl-wrapper');
                const progress = document.getElementById('tl-progress');
                const steps = [...wrapper.querySelectorAll('.tl-step')];
                const nodes = steps.map(s => s.querySelector('.tl-node'));

                let centers = [];
                const clamp = (v, min, max) => Math.max(min, Math.min(max, v));
                let ticking = false;

                // compute node centers relative to wrapper top
                function measure() {
                    const wr = wrapper.getBoundingClientRect();
                    centers = nodes.map(n => {
                        const nr = n.getBoundingClientRect();
                        return (nr.top - wr.top) + nr.height / 2;
                    });
                }

                // compute fill height: starts when wrapper top reaches 20% viewport,
                // ends when wrapper bottom reaches 20% viewport.
                function calcFill() {
                    const wr = wrapper.getBoundingClientRect();
                    const vh = window.innerHeight;
                    const start = vh * 0.5;                 // when to start filling
                    const end = wr.height + vh * 0.2;     // length of the fill travel
                    const scrolled = start - wr.top;        // how far past the start we are
                    return clamp(scrolled, 0, wr.height);   // px height inside wrapper
                }

                function update() {
                    ticking = false;

                    // desktop: draw progress + activate by fill
                    if (progress && window.innerWidth >= 768) {
                        const fill = calcFill();
                        progress.style.height = fill + 'px';

                        // Activate rule: a step is active when the fill bottom reaches node center
                        steps.forEach((step, i) => {
                            if (i === 0 ? fill >= 0 : fill >= centers[i]) step.classList.add('active');

                            else step.classList.remove('active');
                        });
                    } else {
                        // mobile: activate by IntersectionObserver (fallback: simple in-view check)
                        steps.forEach(step => {
                            const r = step.getBoundingClientRect();
                            const visible = r.top < window.innerHeight * 0.85 && r.bottom > window.innerHeight * 1.1;
                            step.classList.toggle('active', visible);
                        });
                    }
                }

                function onScrollOrResize() {
                    if (!ticking) {
                        ticking = true;
                        requestAnimationFrame(() => {
                            measure();
                            update();
                        });
                    }
                }

                // IO for smoother mobile reveals
                if (window.innerWidth < 768) {
                    const io = new IntersectionObserver((entries) => {
                        entries.forEach(e => e.target.classList.toggle('active', e.isIntersecting));
                    }, { threshold: 0.25 });
                    steps.forEach(s => io.observe(s));
                }

                // init
                measure();
                update();

                window.addEventListener('scroll', onScrollOrResize, { passive: true });
                window.addEventListener('resize', onScrollOrResize, { passive: true });
                window.addEventListener('load', onScrollOrResize);
            });
        </script>
    </section>

    <!-- HEATMAP DEMO -->
    <section id="heatmap" class="relative py-24 bg-slate-50">
        <div class="max-w-6xl mx-auto px-6 text-center mb-12">
            <h2 class="text-4xl font-bold text-slate-900">Coverage, Visualized</h2>
            <p class="mt-3 text-lg text-slate-600">Drag the slider to compare network health before and after QueryTel
                optimization.</p>
        </div>

        <div
            class="relative max-w-5xl mx-auto aspect-[16/9] overflow-hidden rounded-2xl shadow-xl border border-slate-200">
            <!-- Wrapper -->
            <div class="relative w-full h-full overflow-hidden" id="heatmapWrapper">
                <!-- Before image -->
                <img src="/assets/images/heatmap-before.png" alt="Before"
                    class="absolute inset-0 w-full h-full object-cover">

                <!-- After image (clipped by slider) -->
                <div id="afterMask" class="absolute inset-0 overflow-hidden" style="width:50%;">
                    <img src="/assets/images/heatmap-after.png" alt="After"
                        class="absolute inset-0 w-full h-full object-cover">
                </div>

                <!-- Slider handle -->
                <div id="sliderHandle" class="absolute top-0 left-1/2 w-1 h-full bg-orange-600 cursor-col-resize">
                    <div
                        class="absolute top-1/2 -translate-y-1/2 -translate-x-1/2 bg-white rounded-full shadow-md px-3 py-1 text-sm font-semibold text-slate-900">
                        Drag
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const wrapper = document.getElementById("heatmapWrapper");
        const afterMask = document.getElementById("afterMask");
        const slider = document.getElementById("sliderHandle");

        let isDragging = false;

        slider.addEventListener("mousedown", () => { isDragging = true; });
        window.addEventListener("mouseup", () => { isDragging = false; });

        window.addEventListener("mousemove", (e) => {
            if (!isDragging) return;
            const rect = wrapper.getBoundingClientRect();
            let x = e.clientX - rect.left;
            if (x < 0) x = 0;
            if (x > rect.width) x = rect.width;
            afterMask.style.width = x + "px";
            slider.style.left = x + "px";
        });
    </script>

    <section id="faq" class="relative py-24 bg-white">
        <!-- Brand Glow -->
        <div
            class="pointer-events-none absolute -top-20 -right-40 h-[20rem] w-[20rem] rounded-full bg-orange-500/5 blur-[120px]">
        </div>
        <div
            class="pointer-events-none absolute -bottom-20 -left-40 h-[18rem] w-[18rem] rounded-full bg-blue-600/5 blur-[100px]">
        </div>

        <div class="max-w-4xl mx-auto px-6">
            <!-- Header -->
            <div class="text-center mb-16">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-[.2em] text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600 animate-pulse"></span>
                    FAQ
                </span>
                <h2 class="mt-3 text-4xl font-bold text-slate-900">Questions? Answered.</h2>
                <p class="mt-4 text-lg text-slate-600">Straightforward answers to what clients ask us the most.</p>
            </div>

            <!-- Accordions -->
            <div class="space-y-4" id="faqGrid">
                <!-- Item -->
                <div
                    class="faq-card opacity-0 translate-y-2 border border-slate-200 rounded-xl shadow-sm overflow-hidden transition-all duration-500">
                    <button
                        class="faq-toggle flex w-full items-center justify-between px-6 py-4 text-left text-slate-900 font-semibold hover:bg-slate-50">
                        <span>How fast can you deploy a wireless network?</span>
                        <i data-lucide="chevron-down" class="faq-icon h-5 w-5 text-slate-500 transition-transform"></i>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="px-6 pb-6 text-slate-600">For standard office floors, we can complete a deployment in
                            as little as 5–10 business days, including survey, design, and install. Larger campuses
                            scale up but follow the same seamless process.</p>
                    </div>
                </div>

                <div
                    class="faq-card opacity-0 translate-y-2 border border-slate-200 rounded-xl shadow-sm overflow-hidden transition-all duration-500">
                    <button
                        class="faq-toggle flex w-full items-center justify-between px-6 py-4 text-left text-slate-900 font-semibold hover:bg-slate-50">
                        <span>Do you cover locations outside Toronto?</span>
                        <i data-lucide="chevron-down" class="faq-icon h-5 w-5 text-slate-500 transition-transform"></i>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="px-6 pb-6 text-slate-600">Yes. We serve clients across North America with field tech
                            partners in major metros. Our support desk operates remotely regardless of your city.</p>
                    </div>
                </div>

                <div
                    class="faq-card opacity-0 translate-y-2 border border-slate-200 rounded-xl shadow-sm overflow-hidden transition-all duration-500">
                    <button
                        class="faq-toggle flex w-full items-center justify-between px-6 py-4 text-left text-slate-900 font-semibold hover:bg-slate-50">
                        <span>What about security and compliance?</span>
                        <i data-lucide="chevron-down" class="faq-icon h-5 w-5 text-slate-500 transition-transform"></i>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="px-6 pb-6 text-slate-600">Every deployment includes WPA3 enterprise, VLAN
                            segmentation, and optional NAC. We align to HIPAA, PCI-DSS, and ISO 27001 requirements as
                            needed.</p>
                    </div>
                </div>

                <div
                    class="faq-card opacity-0 translate-y-2 border border-slate-200 rounded-xl shadow-sm overflow-hidden transition-all duration-500">
                    <button
                        class="faq-toggle flex w-full items-center justify-between px-6 py-4 text-left text-slate-900 font-semibold hover:bg-slate-50">
                        <span>Do you provide ongoing monitoring?</span>
                        <i data-lucide="chevron-down" class="faq-icon h-5 w-5 text-slate-500 transition-transform"></i>
                    </button>
                    <div class="faq-content max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <p class="px-6 pb-6 text-slate-600">Yes. Our NOC runs 24/7, with automated alerts and quarterly
                            optimization reviews included in managed contracts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            if (window.lucide?.createIcons) lucide.createIcons();

            const faqs = document.querySelectorAll(".faq-card");
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((e) => {
                    if (e.isIntersecting) {
                        e.target.classList.remove("opacity-0", "translate-y-2");
                        e.target.classList.add("transition", "ease-out");
                        observer.unobserve(e.target);
                    }
                });
            }, { threshold: 0.15 });

            faqs.forEach(card => {
                observer.observe(card);
                const toggle = card.querySelector(".faq-toggle");
                const content = card.querySelector(".faq-content");
                const icon = card.querySelector(".faq-icon");

                toggle.addEventListener("click", () => {
                    const isOpen = content.style.maxHeight && content.style.maxHeight !== "0px";
                    faqs.forEach(c => {
                        c.querySelector(".faq-content").style.maxHeight = null;
                        c.querySelector(".faq-icon").style.transform = "rotate(0deg)";
                        c.classList.remove("ring-2", "ring-orange-500/40", "bg-orange-50/30");
                    });
                    if (!isOpen) {
                        content.style.maxHeight = content.scrollHeight + "px";
                        icon.style.transform = "rotate(180deg)";
                        card.classList.add("ring-2", "ring-orange-500/40", "bg-orange-50/30");
                    }
                });
            });
        });
    </script>



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
    <!-- Lucide (place once, near the end of <body>) -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            if (window.lucide?.createIcons) lucide.createIcons();
        });
    </script>
</body>

</html>