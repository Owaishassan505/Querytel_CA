<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Ecommerce Development Solutions | Shopify & WooCommerce Experts | QueryTel Inc</title>
    <meta name="description"
        content="QueryTel Inc is your Shopify development agency for ecommerce website development, WooCommerce experts, Shopify Plus developers, product feed management, and conversion rate optimization. Scalable, secure, and built for modern retail." />

    <meta name="robots" content="index,follow,max-image-preview:large" />
    <link rel="canonical" href="https://querytel.com/ecommerce-development-solutions/" />
    <link rel="alternate" hreflang="en-ca" href="https://querytel.com/ecommerce-development-solutions/" />
    <meta name="theme-color" content="#0f172a" />
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />

    <!-- Open Graph -->
    <meta property="og:title" content="Ecommerce Development Solutions | Shopify & WooCommerce Experts" />
    <meta property="og:description"
        content="Shopify development agency delivering ecommerce website development, WooCommerce customization, product feed & catalog management, and headless commerce solutions." />
    <meta property="og:url" content="https://querytel.com/ecommerce-development-solutions/" />
    <meta property="og:site_name" content="QueryTel Inc." />
    <meta property="og:locale" content="en_CA" />
    <meta property="og:image" content="<?= $base . '/assets/images/querytel-icon.png' ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Ecommerce Development Solutions | QueryTel Inc" />
    <meta name="twitter:description"
        content="Expert Shopify Plus developers, WooCommerce experts, and ecommerce SEO services. From store setup to conversion optimization — we build for growth." />
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
      "@id":"https://querytel.com/ecommerce-development-solutions/#breadcrumb",
      "itemListElement":[
        {"@type":"ListItem","position":1,"name":"Home","item":"https://querytel.com/"},
        {"@type":"ListItem","position":2,"name":"Ecommerce Development Solutions","item":"https://querytel.com/ecommerce-development-solutions/"}
      ]
    }
    </script>
    <script type="application/ld+json">
        {
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Shopify Development Agency",
  "provider": { "@id": "https://querytel.com/#org" },
  "areaServed": "CA",
  "description": "Shopify Plus developers, WooCommerce experts, and ecommerce SEO services."
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
</head>


<body class="bg-white text-neutral-900 font-sans">
    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="relative overflow-hidden bg-gradient-to-br from-white via-slate-50 to-slate-100">
        <!-- Background visuals -->
        <div aria-hidden="true" class="absolute inset-0">
            <svg class="absolute inset-0 w-full h-full text-slate-200/40" viewBox="0 0 100 100"
                preserveAspectRatio="none">
                <defs>
                    <pattern id="grid-hero" width="12" height="12" patternUnits="userSpaceOnUse">
                        <path d="M12 0H0V12" fill="none" stroke="currentColor" stroke-width=".3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-hero)" />
            </svg>
            <div
                class="absolute -top-32 -left-20 w-[500px] h-[500px] bg-gradient-to-tr from-blue-200/40 to-blue-400/20 blur-[180px] rounded-full">
            </div>
            <div
                class="absolute -bottom-40 right-0 w-[400px] h-[400px] bg-gradient-to-tr from-orange-200/40 to-pink-200/20 blur-[160px] rounded-full">
            </div>
        </div>

        <div
            class="max-w-7xl mx-auto px-6 py-28 lg:py-36 grid gap-16 lg:grid-cols-[1fr_1.2fr] items-center relative z-10">
            <!-- Text -->
            <div class="reveal animate-fadeInUp">
                <span
                    class="inline-flex items-center gap-2 text-[12px] font-semibold tracking-widest text-orange-600 uppercase">
                    Shopify • WooCommerce • Headless
                </span>

                <h1 class="mt-4 sm:text-5xl font-semibold tracking-tight leading-tight text-neutral-900">
                    Ecommerce Development Solutions
                </h1>
                <span class="inline-flex pt-5 text-[14px] font-semibold tracking-widest text-slate-800">
                    Your Software. Your Success. Your Growth.
                </span>
                <p class="mt-6 text-lg sm:text-xl text-slate-600 max-w-2xl">
                    Shopify, WooCommerce, and headless commerce built for your growth. From store setup to
                    automated product feeds, catalog integrations, and conversion optimization, we engineer ecommerce
                    platforms that scale with your vision.
                </p>


                <!-- CTAs -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="<?= $base ?>/contactus"
                        class="px-7 py-3 rounded-lg bg-orange-600 text-white font-semibold shadow-lg hover:bg-orange-700 transition">
                        Book a Free Shopify Consultation
                    </a>

                </div>

                <!-- Highlights / Trust Signals -->
                <div class="mt-8 flex flex-wrap gap-6 text-sm text-slate-600">
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Current Projects: 6 Active Stores
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Avg. Client ROI: +23% in Year 1
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Certified Shopify Plus Developers
                    </div>
                </div>


            </div>

            <!-- Visual / Code Card -->
            <div class="relative">
                <div
                    class="absolute -top-10 -left-8 h-52 w-52 rounded-full border-[14px] border-blue-600/30 animate-pulse animate-float-fast">
                </div>
                <div class="overflow-hidden relative rounded-2xl">

                    <img src="<?= $base . '/assets/images/ecom.png' ?>"
                        alt="Visual representation of <?= strtolower($serviceTitle ?? 'service') ?>"
                        class="w-full object-cover" />
                </div>
            </div>
        </div>
    </section>







    <section class="relative py-28 bg-gradient-to-br from-white via-slate-100 to-slate-200 overflow-hidden">
        <div aria-hidden="true" class="absolute inset-0 z-0">
            <div class="absolute inset-0 w-full h-full bg-slate-50"></div>

            <!-- Warm Blob (top-right) -->
            <div class="absolute -top-40 -right-40 h-[500px] w-[500px] rounded-full 
        bg-gradient-to-tr from-orange-400/60 via-pink-500/50 to-red-400/50 
        blur-[180px] animate-blobFloat"></div>

            <!-- Cool Blob (bottom-left) -->
            <div class="absolute -bottom-40 -left-40 h-[500px] w-[500px] rounded-full 
        bg-gradient-to-tr from-blue-400/60 via-cyan-400/50 to-indigo-500/50 
        blur-[180px] animate-blobFloat2"></div>

            <!-- Honeycomb Pattern -->
            <svg class="absolute inset-0 w-full h-full animate-bgShift" viewBox="0 0 200 173.2"
                preserveAspectRatio="none">
                <defs>
                    <pattern id="hex" width="200" height="173.2" patternUnits="userSpaceOnUse"
                        patternTransform="scale(0.5)">
                        <polygon points="100,0 200,50 200,150 100,200 0,150 0,50" fill="none" stroke="#e2e8f0"
                            stroke-width="0.5" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#hex)" />
            </svg>
        </div>

        <!-- Main Content Container -->
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center max-w-2xl mx-auto reveal animate-fadeInUp">
                <span
                    class="inline-flex items-center gap-2 text-sm font-medium tracking-wide text-orange-600 uppercase">
                    Ecommerce Development & Integrations
                </span>
                <h2 class="mt-2 text-4xl text-neutral-900 leading-tight">Core Features We Deliver</h2>
                <p class="mt-4 text-xl text-neutral-600">
                    Your e-commerce platform should do more than look polished — it should drive your sales, connect
                    your systems, and scale without stress. Every feature we deliver is focused on your efficiency,
                    conversions, and growth.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Inventory & Catalog -->
                <div class="feature-card reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 text-white shadow-lg">
                        <i data-lucide="boxes" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Inventory & Catalog Management</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your products, always in sync. Real-time tracking and automated catalog updates keep your
                        listings consistent across every channel.
                    </p>
                </div>

                <!-- Product Feed Automation -->
                <div class="feature-card delay-1 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-yellow-400 to-amber-600 text-white shadow-lg">
                        <i data-lucide="upload-cloud" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Product Feed Automation</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Take the manual work out of growth. Automated feeds for Google Shopping, marketplaces, and
                        social commerce continually optimized, never outdated.
                    </p>
                </div>

                <!-- Shopify & WooCommerce Development -->
                <div class="feature-card delay-2 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white shadow-lg">
                        <i data-lucide="shopping-cart" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Shopify & WooCommerce Development</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your store, your way. Custom builds, theme development, and Shopify Plus / WooCommerce
                        integrations tailored to your roadmap.
                    </p>
                </div>

                <!-- Ecommerce Dashboards -->
                <div class="feature-card delay-3 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white shadow-lg">
                        <i data-lucide="bar-chart-3" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Ecommerce Dashboards</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your business at a glance. Real-time dashboards for sales, inventory health, and conversion
                        metrics.
                    </p>
                </div>

                <!-- Cloud Commerce Solutions -->
                <div class="feature-card delay-4 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-pink-500 to-rose-600 text-white shadow-lg">
                        <i data-lucide="cloud" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Cloud Commerce Solutions</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Scalable, resilient platforms engineered for today and ready for tomorrow. Cloud-native builds
                        that grow with you.
                    </p>
                </div>

                <!-- Integrations & Workflows -->
                <div class="feature-card delay-5 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-purple-500 to-fuchsia-600 text-white shadow-lg">
                        <i data-lucide="plug-zap" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Integrations & Workflows</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Connect everything. From payment gateways and ERPs to CRMs and third-party APIs, we unify your
                        tools so operations stay smooth.
                    </p>
                </div>
            </div>


        </div>

        <script>
            lucide.createIcons();
        </script>




        <style>
            @keyframes bgShift {
                0% {
                    transform: translate(0, 0);
                }

                50% {
                    transform: translate(20px, 20px);
                }

                100% {
                    transform: translate(0, 0);
                }
            }

            .animate-bgShift {
                animation: bgShift 40s linear infinite;
            }

            @keyframes blobFloat {

                0%,
                100% {
                    transform: translateY(0) scale(1);
                }

                50% {
                    transform: translateY(-40px) scale(1.1);
                }
            }

            @keyframes blobFloat2 {

                0%,
                100% {
                    transform: translateY(0) scale(1);
                }

                50% {
                    transform: translateY(40px) scale(1.05);
                }
            }

            .animate-blobFloat {
                animation: blobFloat 18s ease-in-out infinite;
            }

            .animate-blobFloat2 {
                animation: blobFloat2 22s ease-in-out infinite;
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes cardFadeIn {
                from {
                    opacity: 0;
                    transform: translateY(40px) scale(0.98);
                }

                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            .reveal {
                opacity: 0;
                transform: translateY(40px);
            }

            .animate-active.animate-fadeInUp {
                animation: fadeInUp 1s ease-out forwards;
            }

            .animate-active.feature-card {
                animation: cardFadeIn 1s ease-out forwards;
            }

            .animate-active.feature-card.delay-1 {
                animation-delay: 0.3s;
            }

            .animate-active.feature-card.delay-2 {
                animation-delay: 0.6s;
            }
        </style>
    </section>

    <section id="process" class="relative isolate bg-white py-24 sm:py-32">
        <!-- Background grid -->
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
            <svg class="absolute inset-0 h-full w-full text-slate-100" viewBox="0 0 100 100" preserveAspectRatio="none">
                <defs>
                    <pattern id="grid-soft" width="8" height="8" patternUnits="userSpaceOnUse">
                        <path d="M8 0H0V8" fill="none" stroke="currentColor" stroke-width=".35" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-soft)" />
            </svg>
        </div>

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <!-- Header -->
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Process
                </span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">
                    How We Build & Scale Ecommerce Platforms
                </h2>
                <p class="mt-4 text-base text-neutral-600 leading-relaxed">
                    We don’t just build e-commerce stores. We design growth systems. Our process ensures your store is
                    not only live but also profitable, competitive, and ready for scale.
                </p>
            </div>

            <!-- Steps -->
            <div class="mt-16 grid gap-8 sm:gap-10 md:grid-cols-2 xl:grid-cols-3">
                <!-- Step 1 -->
                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">01</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="compass" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Discovery & Planning</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Your requirements, your vision. We analyze catalogs, competitors, and customer journeys to build
                        the right strategy.
                    </p>
                </article>

                <!-- Step 2 -->
                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">02</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="layout-dashboard" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Design & Catalog Setup</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Storefront UI/UX crafted for clarity and conversion, paired with structured catalog and
                        inventory setups for accuracy and scale.
                    </p>
                </article>

                <!-- Step 3 -->
                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">03</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="code" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Development & Integrations</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Full-stack builds that integrate seamlessly with your tools, automate product feeds, and power
                        up your workflows.
                    </p>
                </article>

                <!-- Step 4 -->
                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">04</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="rocket" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Launch & Optimization</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Go live with impact. SEO setup, conversion optimization, and testing ensure performance from day
                        one.
                    </p>
                </article>

                <!-- Step 5 -->
                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">05</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="infinity" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Support & Growth</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Your store isn’t static, neither is our support. We iterate, upgrade, and optimize so you stay
                        competitive.
                    </p>
                </article>
            </div>
        </div>
    </section>









    <!-- Import Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <section id="growth" class="relative py-28 bg-gradient-to-br from-orange-50 via-white to-pink-50 overflow-hidden">
        <!-- Background accent -->
        <div aria-hidden="true" class="absolute inset-0">
            <div
                class="absolute -top-40 -left-40 h-[500px] w-[500px] rounded-full bg-gradient-to-tr from-orange-300/40 to-pink-400/30 blur-[160px]">
            </div>
            <div
                class="absolute -bottom-40 -right-40 h-[500px] w-[500px] rounded-full bg-gradient-to-tr from-blue-300/40 to-cyan-400/30 blur-[160px]">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center max-w-2xl mx-auto">
                <span
                    class="inline-flex items-center gap-2 text-sm font-semibold tracking-wide text-orange-600 uppercase">
                    Ecommerce Growth
                </span>
                <h2 class="mt-3 text-4xl font-bold text-neutral-900 leading-tight">
                    Turning <span class="text-orange-600">Traffic</span> Into Revenue
                </h2>
                <p class="mt-4 text-lg text-neutral-600">
                    Traffic alone doesn’t pay the bills. We help you transform clicks into customers with strategies
                    designed for conversions, retention, and lifetime value.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 text-white shadow-md">
                        <i data-lucide="trending-up" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Conversion Optimization</h3>
                    <p class="mt-2 text-neutral-600">
                        From A/B testing to checkout UX tweaks, we fine-tune your funnel to lift conversion rates
                        without guesswork.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 text-white shadow-md">
                        <i data-lucide="search" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Ecommerce SEO</h3>
                    <p class="mt-2 text-neutral-600">
                        Your products deserve to be found. Optimized product feeds, structured data, and <em>organic
                            growth strategies</em> to keep you
                        ranking on Google & marketplaces.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 text-white shadow-md">
                        <i data-lucide="user" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Personalization & Retention</h3>
                    <p class="mt-2 text-neutral-600">
                        Keep customers coming back. AI-driven recommendations, loyalty programs, and tailored flows make
                        every visit personal.
                    </p>
                </div>
            </div>
        </div>
    </section>





    <script>
        document.addEventListener("DOMContentLoaded", () => {
            lucide.createIcons();
        });
    </script>


    <section class="relative bg-gray-50 py-24 overflow-hidden">
        <!-- Background Accent Glow -->
        <div class="absolute -top-20 -left-32 w-[400px] h-[400px] bg-orange-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -right-32 w-[400px] h-[400px] bg-pink-400/20 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:grid md:grid-cols-2 md:gap-20 items-center">
            <!-- Left Panel -->
            <div class="space-y-6">
                <span class="inline-block w-fit bg-orange-600 text-white text-sm font-semibold px-4 py-2 rounded">
                    Ecommerce Infrastructure
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    The <span class="text-orange-600">Foundation</span> Behind Every Store
                </h2>
                <p class="text-gray-700 text-lg">
                    Without structure, your growth collapses. That’s why we build the backbone of your e-commerce:
                    centralized data, inventory sync, compliance, and resilient infrastructure.
                </p>

                <div class="w-16 h-1 bg-orange-500"></div>
            </div>

            <!-- Right Panel -->
            <div class="mt-12 md:mt-0">
                <div class="bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden relative">
                    <!-- Orange Accent Stripe -->
                    <div class="absolute left-0 top-0 h-full w-2 bg-orange-600"></div>

                    <!-- Content -->
                    <div class="p-10 space-y-6">
                        <!-- Item 1 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-orange-100 text-orange-600 rounded-full flex items-center justify-center">
                                <i data-lucide="database" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Data & Inventory Systems</h3>
                                <p class="text-gray-600 mt-1">
                                    Centralized product catalogs, automated <em>product feed pipelines</em>, and
                                    <em>real-time inventory synchronization</em> across all channels.
                                </p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <i data-lucide="shield" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Compliance & Security</h3>
                                <p class="text-gray-600 mt-1">
                                    Your transactions, protected. PCI-ready builds, fraud prevention, and
                                    enterprise-grade security baked in.
                                </p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                                <i data-lucide="cpu" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Performance Engineering</h3>
                                <p class="text-gray-600 mt-1">
                                    Your uptime, untouchable. Load-tested infrastructure, CDN-backed storefronts, and
                                    optimized web vitals keep your store lightning-fast.
                                </p>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div>
                            <a href="#contact"
                                class="bg-orange-600 hover:bg-orange-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                                Strengthen Your Foundation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <section class="relative bg-gray-50 py-20 overflow-hidden">
        <!-- Section Heading -->
        <div class="text-center max-w-4xl mx-auto px-6 mb-20">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                Enterprise <span class="text-orange-600">Ecommerce Development</span> That Connects Everything
            </h2>
            <p class="mt-4 text-gray-700 text-base md:text-lg">
                Scaling isn’t just about bigger storefronts but more innovative ecosystems. We connect your ERPs, CRMs,
                logistics, and APIs into one future-ready commerce platform.
            </p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-6"></div>
        </div>

        <!-- Content Area -->
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Text Side -->
            <div class="text-gray-900">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">
                    Commerce Without Silos
                </h3>
                <div class="w-12 h-1 bg-orange-500 mb-6"></div>
                <p class="text-gray-700 text-base md:text-lg mb-4">
                    Your catalogs, orders, and data are finally talking to each other. There is no more copy-paste
                    chaos. With our middleware bridges, Shopify, WooCommerce, ERPs, and APIs work as one, giving you a
                    future-proof and growth-ready foundation.
                </p>

            </div>

            <!-- Visual Side -->
            <div class="relative">
                <div class="absolute -top-16 -left-16 z-0">
                    <!-- <div class="w-[360px] h-[360px] border-[40px] rounded-full animate-float-fast"
                        style="border-color: #3c6ffbff; opacity: 0.2"></div> -->
                </div>

                <img src="<?= $base . '/assets/images/ecom2.png' ?>"
                    alt="Ecommerce website development, Shopify store setup service, and WooCommerce integrations"
                    class="relative z-10 w-full max-w-md mx-auto object-cover animate-float-fast" />


            </div>
        </div>
    </section>








    <style>
        @keyframes floatFast {

            0%,
            100% {
                transform: translateY(-40px);
            }

            50% {
                transform: translateY(40px);
            }
        }

        .animate-float-fast {
            animation: floatFast 4s ease-in-out infinite;
        }
    </style>
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
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("animate-active");
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.2 });

            document.querySelectorAll(".reveal").forEach((el) => observer.observe(el));
        });
    </script>
</body>

</html>