<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Digital Marketing Agency in Canada | SEO, PPC & Social Media Experts | QueryTel Inc</title>
    <meta name="description"
        content="QueryTel Inc is a digital marketing agency in Canada specializing in SEO, PPC management, social media marketing, content strategy, and conversion rate optimization. Drive measurable growth with data-backed campaigns." />

    <meta name="robots" content="index,follow,max-image-preview:large" />
    <link rel="canonical" href="https://querytel.com/digital-marketing-agency-canada/" />
    <link rel="alternate" hreflang="en-ca" href="https://querytel.com/digital-marketing-agency-canada/" />
    <meta name="theme-color" content="#0f172a" />
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />

    <!-- Open Graph -->
    <meta property="og:title" content="Digital Marketing Agency Canada | QueryTel Inc" />
    <meta property="og:description"
        content="SEO, PPC, and social media marketing services that scale. QueryTel Inc helps brands grow with digital marketing strategies engineered for ROI." />
    <meta property="og:url" content="https://querytel.com/digital-marketing-agency-canada/" />
    <meta property="og:site_name" content="QueryTel Inc." />
    <meta property="og:locale" content="en_CA" />
    <meta property="og:image" content="<?= $base . '/assets/images/querytel-icon.png' ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Digital Marketing Agency in Canada | QueryTel Inc" />
    <meta name="twitter:description"
        content="Full-service digital marketing agency offering SEO, paid ads, content marketing, and CRO — built to scale your business." />
    <meta name="twitter:image" content="<?= $base . '/assets/images/querytel-icon.png' ?>" />

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

    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-57GG72GW');</script>
    <!-- End Google Tag Manager -->

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
    "@id":"https://querytel.com/digital-marketing-agency-canada/#breadcrumb",
    "itemListElement":[
      {"@type":"ListItem","position":1,"name":"Home","item":"https://querytel.com/"},
      {"@type":"ListItem","position":2,"name":"Digital Marketing Agency","item":"https://querytel.com/digital-marketing-agency-canada/"}
    ]
  }
  </script>

    <!-- Schema: Service -->
    <script type="application/ld+json">
  {
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": [
    "Digital Marketing Agency",
    "SEO Services",
    "PPC Management",
    "Social Media Marketing",
    "Content Marketing",
    "Email Marketing Services",
    "Conversion Rate Optimization (CRO)",
    "Analytics & Reporting"
  ],
  "provider": { "@id": "https://querytel.com/#org" },
  "areaServed": "CA",
  "description": "Full-service digital marketing agency in Canada offering SEO, PPC management, social media marketing, content marketing, email marketing, CRO, and analytics."
}

  </script>

    <!-- Schema: LocalBusiness -->
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
            <div class="reveal animate-fadeInUp">
                <span
                    class="inline-flex items-center gap-2 text-[12px] font-semibold tracking-widest text-orange-600 uppercase">
                    STRATEGY • GROWTH • ROI
                </span>

                <h1 class="mt-4 text-4xl sm:text-5xl font-semibold tracking-tight leading-tight text-neutral-900">
                    Grow Your Canadian Business with Data-Driven Digital Marketing
                </h1>

                <p class="mt-6 text-lg sm:text-xl text-slate-600 max-w-2xl">
                    At QueryTel, digital marketing isn’t about clicks, it’s about your business results. We design
                    ROI-driven strategies that make your website visible, competitive, and profitable. Every service is
                    built around your success, from SEO services and PPC campaigns to social media, content, and
                    conversion optimization.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="<?= $base ?>/contactus"
                        class="px-7 py-3 rounded-lg bg-orange-600 text-white font-semibold shadow-lg hover:bg-orange-700 transition">
                        Get Your Free Audit
                    </a>

                </div>

                <div class="mt-8 flex flex-wrap gap-6 text-sm text-slate-600">
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Managed Ad Spend: $1.2M+ Last Year
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Avg. ROI: +32% Across Campaigns
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Google & Meta Certified
                    </div>
                </div>
            </div>

            <div class="relative">
                <div
                    class="absolute -top-10 -left-8 h-52 w-52 rounded-full border-[14px] border-blue-600/30 animate-pulse">
                </div>
                <div
                    class="relative rounded-2xl bg-white ring-1 ring-slate-200 shadow-[0_20px_60px_rgba(2,6,23,0.08)] overflow-hidden">
                    <div class="flex items-center gap-2 px-4 py-2.5 bg-slate-50 border-b border-slate-100">
                        <span class="h-2.5 w-2.5 rounded-full bg-red-400"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-amber-400"></span>
                        <span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span>
                        <span class="ml-3 text-xs font-medium text-slate-600">digital-growth.js</span>
                    </div>

                    <div class="p-6">
                        <canvas id="channelMix" class="w-full h-60"></canvas>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('channelMix');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['SEO', 'PPC', 'Social', 'Email'],
                        datasets: [{
                            label: 'Conversions',
                            data: [1800, 1200, 950, 400],
                            backgroundColor: [
                                'rgba(37,99,235,0.6)', // blue SEO
                                'rgba(249,115,22,0.6)', // orange PPC
                                'rgba(16,185,129,0.6)', // green Social
                                'rgba(234,179,8,0.6)' // yellow Email
                            ],
                            borderRadius: 8
                        }]
                    },
                    options: {
                        plugins: { legend: { display: false } },
                        scales: {
                            x: { grid: { display: false }, ticks: { color: '#475569' } },
                            y: { grid: { color: '#f1f5f9' }, ticks: { color: '#64748b' } }
                        }
                    }
                });
            </script>
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
            <div class="text-center max-w-2xl mx-auto reveal animate-fadeInUp">
                <span
                    class="inline-flex items-center gap-2 text-sm font-medium tracking-wide text-orange-600 uppercase">
                    Digital Marketing Solutions
                </span>
                <h2 class="mt-2 text-4xl text-neutral-900 leading-tight">Core Features We Deliver
                </h2>
                <p class="mt-4 text-xl text-neutral-600">
                    Your marketing isn’t one-size-fits-all. That’s why every service we provide aims to solve your
                    visibility challenges, scale your customer reach, and drive your measurable growth.
                </p>
            </div>

            <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                <div class="feature-card reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white shadow-lg">
                        <i data-lucide="search" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">SEO Services</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Boost your organic traffic and dominate rankings with keyword research, on-page optimization,
                        and content that attracts and converts.
                    </p>
                </div>

                <div class="feature-card delay-1 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 text-white shadow-lg">
                        <i data-lucide="mouse-pointer-click" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">PPC Management</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        We manage your Google Ads and Meta campaigns with precision targeting so every dollar grows your
                        leads and sales.
                    </p>
                </div>

                <div class="feature-card delay-2 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white shadow-lg">
                        <i data-lucide="share-2" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Social Media Marketing</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        From Facebook to TikTok, we create campaigns that grow your audience, engagement, and brand
                        loyalty.
                    </p>
                </div>

                <div class="feature-card delay-3 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-yellow-400 to-amber-600 text-white shadow-lg">
                        <i data-lucide="file-text" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Content Marketing</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        We craft content that works for your SEO and audience. Blogs, eBooks, and landing pages that
                        fuel your authority and growth.
                    </p>

                </div>

                <div class="feature-card delay-4 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-purple-500 to-fuchsia-600 text-white shadow-lg">
                        <i data-lucide="trending-up" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Conversion Rate Optimization (CRO)</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Clicks don’t matter without conversions. We optimize your funnels, landing pages, and campaigns
                        so your visitors become customers.
                    </p>
                </div>

                <div class="feature-card delay-5 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-pink-500 to-rose-600 text-white shadow-lg">
                        <i data-lucide="bar-chart-3" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Reputation & Reporting</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        We protect your brand credibility and give you transparent reporting, so your ROI is always
                        clear.
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
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span> our Process
                </span>
                <h2 class="mt-3 text-3xl sm:text-4xl font-semibold tracking-tight text-neutral-900">
                    Our 5-Step Formula for Sustainable Growth
                </h2>
                <p class="mt-4 text-base text-neutral-600 leading-relaxed">
                    Every campaign is built around your goals and ends with your measurable ROI.
                </p>
            </div>

            <div class="mt-16 grid gap-8 sm:gap-10 md:grid-cols-2 xl:grid-cols-3">
                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">01</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="compass" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Discovery & Strategy</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        We analyze your goals, audience, and competitors to define the right mix of SEO, PPC, and social
                        media campaigns.
                    </p>
                </article>

                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">02</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="edit-3" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Creative & Content</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        We Develop ad creatives and content for your audience.
                    </p>
                </article>

                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">03</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="target" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Campaign Launch</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Execute campaigns across search, display, social, and email for your visibility.
                    </p>
                </article>

                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">04</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="trending-up" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Optimization & CRO</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        We're not done once the campaign is live. We Refine your campaigns and funnels for maximum
                        conversions.
                    </p>
                </article>

                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[11px] font-mono tracking-widest text-blue-700/80">05</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="bar-chart-3" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-slate-900">Analytics & Reporting</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        We provide transparent and insightful reporting, giving you a clear understanding of your ROI
                        and key performance indicators. We also manage your online reputation to maintain a positive
                        brand image.
                    </p>
                </article>
            </div>
        </div>
        <div class="mt-8 flex justify-center">
            <a href="tel:+18444478379" class="relative inline-flex items-center px-12 py-4 rounded-lg font-semibold shadow-lg
          text-white bg-neutral-900 overflow-hidden group">
                <span class="relative z-10 flex items-center">
                    Get a Free Marketing Audit
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










    <!-- Import Lucide -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <section id="growth" class="relative py-28 bg-gradient-to-br from-orange-50 via-white to-pink-50 overflow-hidden">
        <div aria-hidden="true" class="absolute inset-0">
            <div
                class="absolute -top-40 -left-40 h-[500px] w-[500px] rounded-full bg-gradient-to-tr from-orange-300/40 to-pink-400/30 blur-[160px]">
            </div>
            <div
                class="absolute -bottom-40 -right-40 h-[500px] w-[500px] rounded-full bg-gradient-to-tr from-blue-300/40 to-cyan-400/30 blur-[160px]">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto">
                <span
                    class="inline-flex items-center gap-2 text-sm font-semibold tracking-wide text-orange-600 uppercase">
                    Marketing Growth
                </span>
                <h2 class="mt-3 text-4xl font-bold text-neutral-900 leading-tight">
                    Marketing That Delivers Your Growth
                </h2>
                <p class="mt-4 text-lg text-neutral-600">
                    Clicks alone don’t build businesses. That’s why our strategies focus on compounding your growth over
                    time.
                </p>
            </div>

            <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 text-white shadow-md">
                        <i data-lucide="trending-up" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Conversion Optimization</h3>
                    <p class="mt-2 text-neutral-600">
                        We refine funnels with testing, behavioral insights, and campaign optimization that
                        consistently lift conversion rates. Our focus is on turning your website visitors into paying
                        customers.
                    </p>
                </div>

                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 text-white shadow-md">
                        <i data-lucide="search" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Search Visibility</h3>
                    <p class="mt-2 text-neutral-600">
                        Our SEO services and content frameworks are designed to improve your discoverability in search
                        engines.
                        We build your brand authority and support local search to attract the right audience.
                    </p>
                </div>

                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 text-white shadow-md">
                        <i data-lucide="users" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Retention & Loyalty</h3>
                    <p class="mt-2 text-neutral-600">
                        From email marketing services to remarketing flows, we keep your audience engaged and returning.
                        Our strategies are focused on building customer loyalty and increasing lifetime value.
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


    <section class="relative bg-gray-50 py-20 overflow-hidden">
        <div class="text-center max-w-4xl mx-auto px-6 mb-20">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                Enterprise <span class="text-orange-600">Marketing Services</span> Built for Your Growth
            </h2>
            <!-- <p class="mt-4 text-gray-700 text-base md:text-lg">
                We focus on what actually moves the needle: strong organic visibility, targeted paid advertising,
                consistent brand engagement, persuasive content, and reliable customer outreach. Each service works
                together
                to attract the right audience and convert them into loyal customers.
            </p> -->
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-6"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative z-10">
            <div class="text-gray-900">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">A Complete Marketing Approach</h3>
                <div class="w-12 h-1 bg-orange-500 mb-6"></div>
                <p class="text-gray-700 text-base md:text-lg mb-4">
                    We combine the full spectrum of marketing to maximize your impact: SEO, PPC, content, retention, and
                    automation. <br>
                    <span class="font-semibold">Your Website. Your Campaigns. Your Brand. Your Growth.</span>
                </p>
                <p class="text-gray-700 text-base md:text-lg">
                    Every channel is integrated for your ROI. With local SEO, remarketing ads, and data-driven
                    analytics, we eliminate guesswork and replace it with measurable strategies that deliver your
                    success.
                </p>
            </div>

            <div class="relative">
                <div class="absolute -top-16 -left-16 z-0">
                    <div class="w-[360px] h-[360px] border-[40px] rounded-full animate-float-fast"
                        style="border-color: #3c6ffbff; opacity: 0.2"></div>
                </div>
                <img src="<?= $base . '/assets/images/marketing2.jpg' ?>"
                    alt="Team working on digital marketing services like SEO, PPC, social media, and email campaigns"
                    class="relative z-10 w-full  mx-auto h-96 object-fill" />
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