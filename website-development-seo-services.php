<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Website Development & SEO Services | QueryTel Inc</title>
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
</head>

<body class="bg-white text-neutral-900 font-sans">
    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="relative overflow-hidden bg-gradient-to-br from-white via-slate-50 to-slate-100">
        <!-- Background visuals -->
        <div aria-hidden="true" class="absolute inset-0">
            <!-- Grid -->
            <svg class="absolute inset-0 w-full h-full text-slate-200/40" viewBox="0 0 100 100"
                preserveAspectRatio="none">
                <defs>
                    <pattern id="grid-hero" width="12" height="12" patternUnits="userSpaceOnUse">
                        <path d="M12 0H0V12" fill="none" stroke="currentColor" stroke-width=".3" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid-hero)" />
            </svg>
            <!-- Orb glows -->
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
                    Web Development • UI/UX • SEO Services
                </span>


                <h1 class="mt-4 sm:text-5xl font-semibold tracking-tight leading-tight text-neutral-900">
                    Web Development Company
                </h1>
                <span class="inline-flex pt-5 text-[14px] font-semibold tracking-widest text-slate-800">
                    Your Website. Your Success. Your Growth.
                </span>
                <p class="mt-6 text-lg sm:text-xl text-slate-600 max-w-2xl">
                    Losing leads to slow sites and poor design? Outdated pages and weak SEO make it worse. Don’t let
                    your website hold your business back.
                </p>


                <!-- CTAs -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="<?= $base ?>/contactus"
                        class="px-7 py-3 rounded-lg bg-orange-600 text-white font-semibold shadow-lg hover:bg-orange-700 transition">
                        Start a project
                    </a>

                </div>

                <!-- Highlights -->
                <div class="mt-8 flex flex-wrap gap-6 text-sm text-slate-600">
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        120+ Websites Delivered
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Avg. Load Speed < 1.5s </div>
                            <div class="flex items-center gap-2">
                                <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                                98% Client Retention Rate
                            </div>
                    </div>

                </div>

                <!-- Visual / Image Card -->
                <div class="relative">
                    <div
                        class="absolute -top-10 -left-8 h-52 w-52 rounded-full border-[14px] border-blue-600/30 animate-pulse animate-float-fast">
                    </div>
                    <div class="overflow-hidden relative rounded-2xl">

                        <img src="<?= $base . '/assets/images/webdev.png' ?>"
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
                    Web Development Services
                </span>
                <h2 class="mt-2 text-4xl text-neutral-900 leading-tight">Core Features We Deliver</h2>
                <p class="mt-4 text-xl text-neutral-600">
                    Your website is more than just a digital space — it’s your growth engine. That’s why every service
                    we provide is focused on solving your challenges and scaling your success.
                </p>
            </div>

            <!-- Features Grid -->
            <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Website Development -->
                <div class="feature-card reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 text-white shadow-lg">
                        <!-- Code Bracket Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Website Development</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Custom web development built around your goals, ensuring speed, scalability, and seamless
                        integration with your business tools.
                    </p>
                </div>

                <!-- UI/UX Design -->
                <div class="feature-card delay-1 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-yellow-400 to-amber-600 text-white shadow-lg">
                        <!-- Sparkles Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364L18.95 6.95M7.05 17.05l-1.414 1.414m12.728 0l-1.414-1.414M6.95 6.95L5.536 5.536" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">UI/UX Design</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your website should delight visitors while driving conversions. Our design process focuses on
                        clarity, usability, and engagement that keeps customers returning.
                    </p>
                </div>

                <!-- Website Maintenance -->
                <div class="feature-card delay-2 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white shadow-lg">
                        <!-- Shield Check Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2l4-4m5 2a9 9 0 11-18 0a9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Website Maintenance</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Success depends on consistency. We provide website maintenance service, secure, and performing
                        at its best so you can focus on growth.
                    </p>
                </div>

                <!-- Landing Pages -->
                <div class="feature-card delay-3 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white shadow-lg">
                        <!-- Presentation Chart Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-6h13M9 11V4H4v16h16v-4" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Landing Pages</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Whether for a product launch or a marketing campaign, we create landing pages that convert
                        your visitors into customers.
                    </p>
                </div>

                <!-- SEO -->
                <div class="feature-card delay-4 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-pink-500 to-rose-600 text-white shadow-lg">
                        <!-- Search Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M11 19a8 8 0 100-16 8 8 0 000 16z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">SEO Services</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your website only matters if it’s found. Our SEO solutions improve rankings, increase traffic,
                        and put your business ahead of the competition.
                    </p>
                </div>

                <!-- Speed Optimization -->
                <div class="feature-card delay-5 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-purple-500 to-fuchsia-600 text-white shadow-lg">
                        <!-- Lightning Bolt Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Performance Optimization</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Speed equals success. We fine-tune your site to reduce bounce rates, boost user experience, and
                        maximize conversions.
                    </p>
                </div>
            </div>
        </div>



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
        <!-- Subtle background grid -->
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
            <!-- Section Header -->
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> Our Process
                </span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">
                    How We Build & Deliver Websites That Perform
                </h2>
                <p class="mt-4 text-base text-neutral-600 leading-relaxed">
                    Every business has unique challenges. Our process is built to solve them, ensuring that your website
                    is the foundation of your success and growth.
                </p>
            </div>

            <!-- Steps -->
            <div class="mt-16 grid gap-8 sm:gap-10 md:grid-cols-2 xl:grid-cols-3">
                <!-- Step 1 -->
                <article
                    class="group relative rounded-2xl border border-neutral-200/70 bg-white/90 p-6 shadow-sm backdrop-blur hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[15px] font-mono tracking-widest text-blue-700/80">01</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4 6h16v2H4zM4 11h16v2H4zM4 16h10v2H4z" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Discovery & Strategy</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        We define your goals, analyze competitors, and create a roadmap tailored to your business
                        success.
                    </p>
                </article>

                <!-- Step 2 -->
                <article
                    class="group relative rounded-2xl border border-neutral-200/70 bg-white/90 p-6 shadow-sm backdrop-blur hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[15px] font-mono tracking-widest text-blue-700/80">02</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4 5h16v14H4zM7 8h10v8H7z" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">UI/UX Design</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        We turn your vision into interfaces that are intuitive, accessible, and designed for growth.
                        Every design choice is made to boost your conversion rate.
                    </p>
                </article>

                <!-- Step 3 -->
                <article
                    class="group relative rounded-2xl border border-neutral-200/70 bg-white/90 p-6 shadow-sm backdrop-blur hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[15px] font-mono tracking-widest text-blue-700/80">03</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4 6l8 6 8-6v12H4z" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Development</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        From landing pages to full-scale platforms, we build secure, SEO-ready websites that support
                        your growth at every stage.
                    </p>
                </article>

                <!-- Step 4 -->
                <article
                    class="group relative rounded-2xl border border-neutral-200/70 bg-white/90 p-6 shadow-sm backdrop-blur hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[15px] font-mono tracking-widest text-blue-700/80">04</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 12l7 7 11-11-1.4-1.4L10 16.2 4.4 10.6 3 12z" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Launch & Optimization</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Your website launches only when optimized for performance and ready to deliver measurable
                        results.
                    </p>
                </article>

                <!-- Step 5 -->
                <article
                    class="group relative rounded-2xl border border-neutral-200/70 bg-white/90 p-6 shadow-sm backdrop-blur hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[15px] font-mono tracking-widest text-blue-700/80">05</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 5v3l4-4-4-4v3A9 9 0 103 12h2a7 7 0 117 7v2a9 9 0 10-2-16z" />
                            </svg>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Support & Growth</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Your website isn’t a one-time project — it’s an ongoing growth engine. We ensure your success
                        long after launch with analytics, maintenance, and optimization.
                    </p>
                </article>
            </div>
        </div>
        <div class="mt-8 flex justify-center">
            <a href="tel:+18444478379" class="relative inline-flex items-center px-12 py-4 rounded-lg font-semibold shadow-lg
          text-white bg-neutral-900 overflow-hidden group">
                <span class="relative z-10 flex items-center">
                    Hire a Web Developer
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </span>

                <!-- Animated overlay -->
                <span class="absolute inset-0 bg-slate-600 translate-x-[-100%] group-hover:translate-x-0
                 transition-transform duration-500 ease-in-out"></span>
            </a>
        </div>
    </section>



    <!-- Import Lucide icons (if not already loaded) -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <section id="marketing"
        class="relative py-28 bg-gradient-to-br from-orange-50 via-white to-pink-50 overflow-hidden">
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
                    Marketing Edge
                </span>
                <h2 class="mt-3 text-4xl font-bold text-neutral-900 leading-tight">
                    Marketing That Drives Growth
                </h2>
                <p class="mt-4 text-lg text-neutral-600">
                    A great website is only step one. We help you turn visibility into results, combining creative
                    campaigns with data-driven strategies that align with your growth goals.
                </p>
            </div>

            <!-- Marketing Features Grid -->
            <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Feature 1 -->
                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 text-white shadow-md">
                        <i data-lucide="megaphone" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Brand Awareness</h3>
                    <p class="mt-2 text-neutral-600">
                        Build trust and recognition with consistent campaigns that make your brand stand out online.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 text-white shadow-md">
                        <i data-lucide="target" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Targeted Campaigns</h3>
                    <p class="mt-2 text-neutral-600">
                        Reach the right audience with precision-driven strategies powered by analytics.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 text-white shadow-md">
                        <i data-lucide="trending-up" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Conversion Focus</h3>
                    <p class="mt-2 text-neutral-600">
                        Your website and our campaigns are built to convert. We drive measurable ROI — more leads, more
                        sales, more growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        lucide.createIcons(); // render icons
    </script>



    <section class="relative bg-gray-50 py-24 overflow-hidden">
        <!-- Background Accent Glow -->
        <div class="absolute -top-20 -left-32 w-[400px] h-[400px] bg-orange-400/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -right-32 w-[400px] h-[400px] bg-pink-400/20 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-6 md:grid md:grid-cols-2 md:gap-20 items-center">
            <!-- Left Panel -->
            <div class="space-y-6">
                <span class="inline-block w-fit bg-orange-600 text-white text-sm font-semibold px-4 py-2 rounded">
                    MARKETING IMPACT
                </span>

                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 leading-tight">
                    Transform Clicks Into <span class="text-orange-600">Customers</span>
                </h2>
                <p class="text-gray-700 text-lg">
                    <span class="text-blue-600">Your Website. Your Success. Your Growth.</span> Isn’t just a slogan —
                    it’s our promise. Our strategies go
                    beyond impressions, turning clicks into lasting business results.
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
                                <!-- Megaphone -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M3 11l18-5v12l-18-5v-2z" />
                                    <path d="M11 19a4 4 0 01-8 0V9" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Brand Awareness</h3>
                                <p class="text-gray-600 mt-1">Make your message seen and remembered.</p>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <!-- Target -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <circle cx="12" cy="12" r="6" />
                                    <circle cx="12" cy="12" r="2" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Targeted Reach</h3>
                                <p class="text-gray-600 mt-1">Connect with the customers who matter most.</p>
                            </div>
                        </div>

                        <!-- Item 3 -->
                        <div class="flex items-start gap-4">
                            <div
                                class="w-12 h-12 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                                <!-- Trending Up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path d="M3 17l6-6 4 4 8-8" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Conversion Driven</h3>
                                <p class="text-gray-600 mt-1">Turn leads into loyal customers who fuel your growth.</p>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div>
                            <a href="#contact"
                                class="bg-orange-600 hover:bg-orange-700 text-white font-semibold px-6 py-3 rounded-lg transition">
                                Let’s Grow Together
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
                Custom <span class="text-blue-900">Web Development</span> That Works
            </h2>
            <p class="mt-4 text-gray-700 text-base md:text-lg">
                Your website is more than a design — it’s your success platform. From development to maintenance, we
                ensure every aspect of your site is fast, secure, and built to grow with your business.
            </p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-6"></div>
        </div>

        <!-- Content Area -->
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Text Side -->
            <div class="text-gray-900">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">
                    Built Around Your Growth
                </h3>
                <div class="w-12 h-1 bg-orange-500 mb-6"></div>
                <p class="text-gray-700 text-base md:text-lg mb-4">
                    Every business wants a website that looks great. You need one that also performs — ranking higher,
                    converting better, and driving measurable growth. With speed optimization, CRO, and scalable design
                    baked in, we deliver exactly that.
                </p>

            </div>

            <!-- Image with Floating Accent -->
            <div class="relative">
                <div class="absolute -top-16 -left-16 z-0 ">

                </div>

                <img src="<?= $base . '/assets/images/webdev3.png' ?>" alt="Custom Web Development Services"
                    class="relative z-10 w-full max-w-md object-cover h-96" />
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