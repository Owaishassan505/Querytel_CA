<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Marketing & Growth | QueryTel Inc</title>
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
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                "gtm.start": new Date().getTime(),
                event: "gtm.js",
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-57GG72GW");
    </script>
    <!-- End Google Tag Manager -->

    <!-- Icons -->
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin />
    <link rel="dns-prefetch" href="https://cdn.tailwindcss.com" />

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Tailwind config (kept) -->
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
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Schema: Organization -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "https://querytel.com/#org",
        "name": "QueryTel Inc.",
        "url": "https://querytel.com/",
        "logo": "<?= $base . '/assets/images/querytel-icon.png' ?>",
        "sameAs": ["https://www.linkedin.com/company/querytel"]
      }
    </script>

    <!-- Schema: ContactPage -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "ContactPage",
        "@id": "https://querytel.com/contactus/#contactpage",
        "url": "https://querytel.com/contactus/",
        "name": "Contact QueryTel Inc",
        "inLanguage": "en-CA",
        "about": { "@id": "https://querytel.com/#org" },
        "primaryImageOfPage": {
          "@type": "ImageObject",
          "url": "<?= $base . '/assets/images/querytel-icon.png' ?>"
        },
        "lastReviewed": "2025-08-18",
        "breadcrumb": { "@id": "https://querytel.com/contactus/#breadcrumb" }
      }
    </script>

    <!-- Schema: BreadcrumbList -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "@id": "https://querytel.com/contactus/#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://querytel.com/"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "Contact Us",
            "item": "https://querytel.com/contactus/"
          }
        ]
      }
    </script>

    <!-- Schema: LocalBusiness (HQ info for trust) -->
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "@id": "https://querytel.com/#hq",
        "name": "QueryTel Inc — Toronto HQ",
        "url": "https://querytel.com/",
        "image": "<?= $base . '/assets/images/querytel-icon.png' ?>",
        "telephone": "+1-416-477-1380",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "7025 Tomken Road, Suite 244",
          "addressLocality": "Mississauga",
          "addressRegion": "ON",
          "postalCode": "L5S 1R6",
          "addressCountry": "CA"
        },
        "openingHoursSpecification": [
          {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
              "Monday",
              "Tuesday",
              "Wednesday",
              "Thursday",
              "Friday"
            ],
            "opens": "08:00",
            "closes": "17:00"
          }
        ],
        "parentOrganization": { "@id": "https://querytel.com/#org" }
      }
    </script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="bg-white text-neutral-900 font-sans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- HEADER -->
    <?php include("navbar.php"); ?>

    <!-- HERO: Marketing Services (McKinsey-Style Premium with AOS Animations) -->
    <section class="relative bg-white py-32 overflow-hidden">
        <!-- soft gradient accents -->
        <div data-aos="fade-down-right"
            class="pointer-events-none absolute -top-40 -right-40 h-[28rem] w-[28rem] rounded-full bg-orange-500/10 blur-[200px]">
        </div>
        <div data-aos="fade-up-left" data-aos-delay="200"
            class="pointer-events-none absolute bottom-0 left-0 h-[24rem] w-[24rem] rounded-full bg-blue-500/10 blur-[160px]">
        </div>

        <div class="relative max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">
            <!-- Left: Text -->
            <div>
                <span data-aos="fade-right"
                    class="inline-block text-xs font-semibold tracking-wider text-orange-600 uppercase mb-4">
                    Marketing Services
                </span>

                <h1 data-aos="fade-right" data-aos-delay="150"
                    class="text-5xl md:text-6xl font-medium tracking-tight text-slate-900 leading-[1.15]">
                    Turning Businesses<br />
                    <span
                        class="bg-gradient-to-r from-orange-600 via-orange-500 to-blue-600 bg-clip-text text-transparent font-bold">
                        Into Market Forces
                    </span>
                </h1>

                <p data-aos="fade-right" data-aos-delay="300"
                    class="mt-8 text-lg text-slate-700 max-w-xl leading-relaxed">
                    QueryTel partners with enterprises to convert strategy into
                    measurable growth. Trusted by global brands, we deliver marketing
                    that drives markets, not just metrics.
                </p>

                <div data-aos="fade-up" data-aos-delay="450" class="mt-12 flex flex-col sm:flex-row gap-4">
                    <a href="<?= $base ?? '' ?>/contactus"
                        class="inline-flex items-center justify-center rounded-lg bg-orange-600 text-white px-8 py-3.5 font-semibold shadow-lg hover:shadow-xl hover:scale-[1.02] transition transform-gpu duration-300">
                        Request a Consultation
                    </a>
                    <a href="#services"
                        class="inline-flex items-center justify-center rounded-lg border border-slate-300 text-slate-800 px-8 py-3.5 font-semibold hover:bg-slate-50 transition duration-300">
                        Explore Services
                    </a>
                </div>

                <!-- Trusted by strip -->
                <div data-aos="fade-up" data-aos-delay="600" class="mt-12 flex items-center gap-6 opacity-70">
                    <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Trusted by</span>
                    <img src="<?= $base ?>/assets/partners/Cisco_Systems-Logo.wine.svg" class="h-7" alt="Cisco" />
                    <img src="<?= $base ?>/assets/partners/Microsoft_logo.svg.webp" class="h-6" alt="Microsoft" />
                    <img src="<?= $base ?>/assets/partners/Honeywell-Logo.wine.svg" class="h-12" alt="Honeywell" />
                    <img src="<?= $base ?>/assets/partners/Amazon_Web_Services-Logo.wine.svg" class="h-7"
                        alt="Amazon Web Services" />
                </div>
            </div>

            <!-- Right: Visual -->
            <div data-aos="zoom-in" data-aos-delay="400">
                <div class="relative rounded-2xl overflow-hidden  transition duration-500 hover:scale-[1.02]">
                    <img src="<?= $base ?>/assets/images/undraw_read-notes_7itt.svg"
                        alt="Strategic Marketing Illustration" class="w-full h-full object-contain p-8 bg-white" />
                </div>
            </div>
        </div>
    </section>

    <!-- AUTHORITY / IMPACT SECTION -->
    <section class="relative bg-white py-28 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <!-- Headline -->
            <h2 data-aos="fade-up" class="text-4xl md:text-5xl font-bold text-slate-900 leading-tight">
                From <span class="text-orange-600">Ambition</span> to
                <span class="text-blue-600">Market Impact</span>
            </h2>

            <!-- Subtext -->
            <p data-aos="fade-up" data-aos-delay="200"
                class="mt-6 text-lg text-slate-700 max-w-3xl mx-auto leading-relaxed">
                We don’t just advise — we engineer outcomes. QueryTel empowers
                enterprises to command their markets, blending strategy, technology,
                and execution into measurable dominance.
            </p>

            <!-- Proof Strip -->
            <div data-aos="fade-up" data-aos-delay="400"
                class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <p class="counter text-5xl font-semibold text-orange-600" data-target="30">
                        0
                    </p>
                    <p class="mt-2 text-sm font-semibold uppercase tracking-wide text-slate-600">
                        Years
                    </p>
                </div>
                <div>
                    <p class="counter text-5xl font-semibold text-blue-600" data-target="500">
                        0
                    </p>
                    <p class="mt-2 text-sm font-semibold uppercase tracking-wide text-slate-600">
                        Clients
                    </p>
                </div>
                <div>
                    <p class="counter text-5xl font-semibold text-orange-600" data-target="10">
                        0
                    </p>
                    <p class="mt-2 text-sm font-semibold uppercase tracking-wide text-slate-600">
                        ROI
                    </p>
                </div>
                <div>
                    <p class="counter text-5xl font-semibold text-blue-600" data-target="24">
                        0
                    </p>
                    <p class="mt-2 text-sm font-semibold uppercase tracking-wide text-slate-600">
                        Coverage
                    </p>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".counter");

            function animateCounter(counter, duration = 2000) {
                const target = +counter.dataset.target;
                let start = 0;
                const startTime = performance.now();

                function update(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);

                    // Ease-in curve (slow → fast)
                    const eased = progress * progress;

                    const value = Math.floor(eased * target);
                    counter.textContent = value;

                    if (progress < 1) {
                        requestAnimationFrame(update);
                    } else {
                        // Add suffixes when done
                        if (target === 10) counter.textContent = target + "x";
                        else if (target === 24) counter.textContent = target + "/7";
                        else counter.textContent = target + "+";
                    }
                }

                requestAnimationFrame(update);
            }

            let played = false;
            window.addEventListener("scroll", () => {
                const section = document.querySelector("section");
                const rect = section.getBoundingClientRect();
                if (!played && rect.top < window.innerHeight && rect.bottom >= 0) {
                    counters.forEach((c) => animateCounter(c));
                    played = true;
                }
            });
        });
    </script>

    <!-- <section id="flow" class="relative bg-gray-50/70 py-28 overflow-hidden">
        <div
            class="pointer-events-none absolute -top-20 -right-40 h-[30rem] w-[30rem] rounded-full bg-orange-500/5 blur-[150px]">
        </div>
        <div
            class="pointer-events-none absolute bottom-0 -left-40 h-[24rem] w-[24rem] rounded-full bg-blue-500/5 blur-[120px]">
        </div>

        <div class="max-w-6xl mx-auto px-6 relative">
            <div class="max-w-3xl mx-auto text-center mb-24">
                <h2 data-aos="fade-up" class="text-4xl md:text-5xl font-bold text-slate-900 leading-tight">
                    Our Path to
                    <span class="bg-gradient-to-r from-orange-600 to-blue-600 bg-clip-text text-transparent">Market
                        Leadership</span>
                </h2>
                <p data-aos="fade-up" data-aos-delay="150" class="mt-5 text-lg text-slate-700 leading-relaxed">
                    A disciplined, four-phase approach to building and executing
                    marketing strategies that create measurable growth and lasting
                    competitive advantage.
                </p>
            </div>

            <div class="absolute left-1/2  transform -translate-x-1/2 w-0.5 bg-slate-200 h-full rounded-full">
            </div>
            <div id="progress-line"
                class="absolute left-1/2  transform -translate-x-1/2 w-0.5 bg-gradient-to-b from-orange-500 to-blue-500 rounded-full"
                style="height: 0"></div>

            <div class="relative flex flex-col gap-y-24">
                <div class="relative flex flex-col md:flex-row items-center step">
                    <div class="w-full md:w-1/2 md:pr-14 opacity-0 step-content transition-all duration-700">
                        <div class="bg-white p-8 rounded-2xl shadow-xl ring-1 ring-slate-100 text-right">
                            <span
                                class="inline-block text-sm font-semibold text-orange-600 uppercase tracking-wider mb-2">Phase
                                01</span>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">
                                Discovery & Strategic Blueprint
                            </h3>
                            <p class="text-slate-600">
                                We begin with a deep dive into your market landscape,
                                competitive positioning, and business objectives. The outcome
                                is a data-driven strategic blueprint that defines success
                                metrics and charts the path forward.
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full md:w-1/2 md:pl-14 mt-8 md:mt-0 opacity-0 step-content transition-all duration-700">
                        <div class="bg-orange-50 p-8 rounded-2xl flex items-center justify-center h-48">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-orange-400" fill="none"
                                viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.253v11.494m-9-5.747h18M5.464 12a14.25 14.25 0 0 1 1.45-6.312m10.172 0a14.25 14.25 0 0 1 1.45 6.312m-13.072 0a14.25 14.25 0 0 0 1.45 6.312m10.172 0a14.25 14.25 0 0 0 1.45-6.312M12 21.75a9.75 9.75 0 1 0 0-19.5 9.75 9.75 0 0 0 0 19.5Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-16 transform -translate-x-1/2 node">
                        <div
                            class="w-8 h-8 rounded-full bg-slate-300 border-4 border-white shadow-lg transition-all duration-500">
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center step">
                    <div
                        class="w-full md:w-1/2 md:pr-14 order-1 md:order-1 mt-8 md:mt-0 opacity-0 step-content transition-all duration-700">
                        <div class="bg-blue-50 p-8 rounded-2xl flex items-center justify-center h-48">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-blue-400" fill="none"
                                viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z" />
                            </svg>
                        </div>
                    </div>
                    <div
                        class="w-full md:w-1/2 md:pl-14 order-2 md:order-2 opacity-0 step-content transition-all duration-700">
                        <div class="bg-white p-8 rounded-2xl shadow-xl ring-1 ring-slate-100 text-left">
                            <span
                                class="inline-block text-sm font-semibold text-blue-600 uppercase tracking-wider mb-2">Phase
                                02</span>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">
                                Campaign Architecture & Creative
                            </h3>
                            <p class="text-slate-600">
                                Our team designs compelling, multi-channel campaigns. From
                                creative asset production to technical setup, we build the
                                engine that will drive your growth, ensuring brand consistency
                                and peak performance.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-16 transform -translate-x-1/2 node">
                        <div
                            class="w-8 h-8 rounded-full bg-slate-300 border-4 border-white shadow-lg transition-all duration-500">
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center step">
                    <div class="w-full md:w-1/2 md:pr-14 opacity-0 step-content transition-all duration-700">
                        <div class="bg-white p-8 rounded-2xl shadow-xl ring-1 ring-slate-100 text-right">
                            <span
                                class="inline-block text-sm font-semibold text-orange-600 uppercase tracking-wider mb-2">Phase
                                03</span>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">
                                Multi-Channel Execution & Launch
                            </h3>
                            <p class="text-slate-600">
                                With strategy and assets in place, we execute a synchronized
                                launch across all targeted platforms. Our project management
                                ensures a seamless rollout, on time, on budget, and poised for
                                maximum impact.
                            </p>
                        </div>
                    </div>
                    <div
                        class="w-full md:w-1/2 md:pl-14 mt-8 md:mt-0 opacity-0 step-content transition-all duration-700">
                        <div class="bg-orange-50 p-8 rounded-2xl flex items-center justify-center h-48">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-orange-400" fill="none"
                                viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.59 14.37a6 6 0 0 1-5.84 7.38v-4.82m5.84-2.56a12.02 12.02 0 0 0-5.84 0m5.84 0a11.96 11.96 0 0 1 2.08 5.84m-8 0a11.96 11.96 0 0 1-2.08-5.84m0 0a6 6 0 0 1-5.84-7.38v4.82m5.84 2.56a12.02 12.02 0 0 0 5.84 0m-5.84 0a11.96 11.96 0 0 0-2.08-5.84m8 0a11.96 11.96 0 0 0 2.08 5.84M5 12a7 7 0 1 1 14 0 7 7 0 0 1-14 0Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-16 transform -translate-x-1/2 node">
                        <div
                            class="w-8 h-8 rounded-full bg-slate-300 border-4 border-white shadow-lg transition-all duration-500">
                        </div>
                    </div>
                </div>

                <div class="relative flex flex-col md:flex-row items-center step">
                    <div
                        class="w-full md:w-1/2 md:pr-14 order-1 md:order-1 mt-8 md:mt-0 opacity-0 step-content transition-all duration-700">
                        <div class="bg-blue-50 p-8 rounded-2xl flex items-center justify-center h-48">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-blue-400" fill="none"
                                viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                            </svg>
                        </div>
                    </div>
                    <div
                        class="w-full md:w-1/2 md:pl-14 order-2 md:order-2 opacity-0 step-content transition-all duration-700">
                        <div class="bg-white p-8 rounded-2xl shadow-xl ring-1 ring-slate-100 text-left">
                            <span
                                class="inline-block text-sm font-semibold text-blue-600 uppercase tracking-wider mb-2">Phase
                                04</span>
                            <h3 class="text-2xl font-bold text-slate-900 mb-3">
                                Performance Analytics & Optimization
                            </h3>
                            <p class="text-slate-600">
                                The launch is just the beginning. We continuously monitor
                                performance, leveraging advanced analytics to refine
                                targeting, messaging, and tactics for progressively greater
                                ROI and market impact.
                            </p>
                        </div>
                    </div>
                    <div class="absolute left-1/2 top-16 transform -translate-x-1/2 node">
                        <div
                            class="w-8 h-8 rounded-full bg-slate-300 border-4 border-white shadow-lg transition-all duration-500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const progressLine = document.getElementById("progress-line");
            const flowSection = document.getElementById("flow");
            const steps = document.querySelectorAll(".step");

            // Use a more specific selector for the circles inside the nodes
            const nodeCircles = document.querySelectorAll(".node > div");

            function updateTimeline() {
                const rect = flowSection.getBoundingClientRect();
                const windowHeight = window.innerHeight;

                // Only run animations if the section is in view
                if (rect.top < windowHeight && rect.bottom > 0) {
                    const totalHeight = flowSection.scrollHeight;
                    const scrollProgress = Math.max(
                        0,
                        Math.min(
                            1,
                            (windowHeight - rect.top) / (totalHeight + windowHeight * 0.9)
                        )
                    );

                    // Update progress bar height
                    progressLine.style.height = `${scrollProgress * 100}%`;

                    // Animate nodes and content
                    steps.forEach((step, i) => {
                        const stepRect = step.getBoundingClientRect();
                        const lineRect = progressLine.getBoundingClientRect();
                        const nodeCircle = nodeCircles[i];

                        // Check if the bottom of the progress line has passed the top of the step
                        if (lineRect.bottom > stepRect.top + 64) {
                            // 64 is our 'top-16' offset
                            // Activate node color based on its position (odd/even)
                            if (i % 2 === 0) {
                                // First, Third step (orange)
                                nodeCircle.classList.remove("bg-slate-300");
                                nodeCircle.classList.add(
                                    "bg-orange-500",
                                    "border-orange-500"
                                );
                            } else {
                                // Second, Fourth step (blue)
                                nodeCircle.classList.remove("bg-slate-300");
                                nodeCircle.classList.add("bg-blue-500", "border-blue-500");
                            }

                            // Reveal content
                            step.querySelectorAll(".step-content").forEach((el) => {
                                el.classList.add("opacity-100");
                                el.style.transform = "translateY(0)"; // Optional: for smooth slide-in
                            });
                        }
                    });
                }

                requestAnimationFrame(updateTimeline);
            }

            requestAnimationFrame(updateTimeline);
        });
    </script> -->


    <section id="method" class="relative bg-white py-28 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative">
            <div class="max-w-4xl mx-auto text-center mb-20">
                <h2 data-aos="fade-up" class="text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                    Our Proven Framework for <br />
                    <span class="bg-gradient-to-r from-orange-600 to-blue-600 bg-clip-text text-transparent">Unlocking
                        Market Leadership</span>
                </h2>
                <p data-aos="fade-up" data-aos-delay="150" class="mt-6 text-lg text-slate-700 leading-relaxed">
                    We don't rely on guesswork. Our success is built on a rigorous, proprietary methodology that
                    guides every partnership, from initial strategy to measurable, sustained growth.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-20 items-start">

                <div data-aos="fade-right" data-aos-delay="200" class="lg:sticky lg:top-28">
                    <p class="text-7xl lg:text-8xl font-black text-orange-200 opacity-60 leading-none">01</p>
                    <h3 class="mt-2 text-3xl font-bold text-slate-900 leading-snug">Strategic Blueprinting</h3>
                    <p class="mt-4 text-lg text-slate-600 leading-relaxed max-w-lg">
                        We begin with an exhaustive analysis of your market landscape, competitive positioning, and
                        core objectives. This phase culminates in a bespoke, data-driven strategic roadmap.
                    </p>
                </div>
                <div data-aos="fade-left" data-aos-delay="300"
                    class="p-8 rounded-2xl shadow-xl ring-1 ring-slate-100 bg-white">
                    <img src="https://via.placeholder.com/800x600.png?text=Method+Image+1" alt="Strategic Blueprinting"
                        class="w-full h-auto rounded-lg" />
                    <p class="mt-4 text-sm text-slate-500 text-center">Rigorous analysis leads to a focused direction.
                    </p>
                </div>

                <div class="order-3 lg:order-2" data-aos="fade-right" data-aos-delay="200">
                    <div class="p-8 rounded-2xl shadow-xl ring-1 ring-slate-100 bg-white">
                        <img src="https://via.placeholder.com/800x600.png?text=Method+Image+2"
                            alt="Precision Architecture" class="w-full h-auto rounded-lg" />
                        <p class="mt-4 text-sm text-slate-500 text-center">Crafting a bespoke architecture for success.
                        </p>
                    </div>
                </div>
                <div class="order-2 lg:order-3" data-aos="fade-left" data-aos-delay="300" class="lg:sticky lg:top-28">
                    <p class="text-7xl lg:text-8xl font-black text-blue-200 opacity-60 leading-none">02</p>
                    <h3 class="mt-2 text-3xl font-bold text-slate-900 leading-snug">Precision Architecture</h3>
                    <p class="mt-4 text-lg text-slate-600 leading-relaxed max-w-lg">
                        Our seasoned experts design a multi-channel campaign architecture, ensuring every touchpoint is
                        optimized for peak performance and brand consistency.
                    </p>
                </div>

                <div class="order-4 lg:order-4" data-aos="fade-right" data-aos-delay="200" class="lg:sticky lg:top-28">
                    <p class="text-7xl lg:text-8xl font-black text-orange-200 opacity-60 leading-none">03</p>
                    <h3 class="mt-2 text-3xl font-bold text-slate-900 leading-snug">Integrated Execution</h3>
                    <p class="mt-4 text-lg text-slate-600 leading-relaxed max-w-lg">
                        With the strategy and assets in place, we execute a flawless, synchronized launch. Our senior
                        team oversees every detail for a seamless transition from plan to reality.
                    </p>
                </div>
                <div class="order-5 lg:order-5" data-aos="fade-left" data-aos-delay="300">
                    <div class="p-8 rounded-2xl shadow-xl ring-1 ring-slate-100 bg-white">
                        <img src="https://via.placeholder.com/800x600.png?text=Method+Image+3"
                            alt="Integrated Execution" class="w-full h-auto rounded-lg" />
                        <p class="mt-4 text-sm text-slate-500 text-center">Flawless execution across all channels.</p>
                    </div>
                </div>

                <div class="order-7 lg:order-6" data-aos="fade-right" data-aos-delay="200">
                    <div class="p-8 rounded-2xl shadow-xl ring-1 ring-slate-100 bg-white">
                        <img src="https://via.placeholder.com/800x600.png?text=Method+Image+4"
                            alt="Continuous Optimization" class="w-full h-auto rounded-lg" />
                        <p class="mt-4 text-sm text-slate-500 text-center">Refining for maximum, sustained ROI.</p>
                    </div>
                </div>
                <div class="order-6 lg:order-7" data-aos="fade-left" data-aos-delay="300" class="lg:sticky lg:top-28">
                    <p class="text-7xl lg:text-8xl font-black text-blue-200 opacity-60 leading-none">04</p>
                    <h3 class="mt-2 text-3xl font-bold text-slate-900 leading-snug">Continuous Optimization</h3>
                    <p class="mt-4 text-lg text-slate-600 leading-relaxed max-w-lg">
                        The launch is just the beginning. We continuously monitor and leverage advanced analytics to
                        refine tactics, ensuring your campaigns deliver progressively greater impact.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section id="solutions" class="relative bg-gray-100 font-sans">
        <div class="max-w-7xl mx-auto px-6 relative pt-28">
            <div class="max-w-4xl mx-auto text-center mb-20">
                <h2 data-aos="fade-up"
                    class="font-serif text-5xl md:text-6xl font-extrabold text-slate-900 leading-tight">
                    <span class="bg-gradient-to-r from-blue-600 to-orange-600 bg-clip-text text-transparent">
                        Our Solutions,
                    </span><br />
                    Masterfully Crafted.
                </h2>
                <p data-aos="fade-up" data-aos-delay="150" class="mt-8 text-lg text-slate-700 leading-relaxed mx-auto">
                    We don't just offer services; we architect bespoke strategies designed to solve your most complex
                    challenges and create a clear path to market leadership.
                </p>
            </div>

        </div>

        <div class="relative w-full">
            <div data-aos="fade-up"
                class="relative w-full aspect-[2/1] md:aspect-[3/1] lg:aspect-[4/1] bg-center bg-cover flex items-end p-8 md:p-16 text-white"
                style="background-image: url('https://via.placeholder.com/1920x800.png?text=Strategic+Consulting+Visual');">
                <div class="absolute inset-0 bg-slate-900 opacity-60"></div>
                <div class="relative z-10 max-w-4xl">
                    <h3 class="font-serif text-4xl md:text-5xl font-bold leading-tight drop-shadow-md">Strategic
                        Consulting</h3>
                    <p class="mt-4 text-lg md:text-xl font-light max-w-2xl drop-shadow-sm">
                        We provide comprehensive analysis and data-driven roadmaps to position your business for
                        sustainable, long-term market leadership.
                    </p>
                </div>
            </div>

            <div data-aos="fade-up"
                class="relative w-full aspect-[2/1] md:aspect-[3/1] lg:aspect-[4/1] bg-center bg-cover flex items-end p-8 md:p-16 text-white"
                style="background-image: url('https://via.placeholder.com/1920x800.png?text=Performance+Marketing+Visual');">
                <div class="absolute inset-0 bg-orange-900 opacity-60"></div>
                <div class="relative z-10 max-w-4xl">
                    <h3 class="font-serif text-4xl md:text-5xl font-bold leading-tight drop-shadow-md">Performance
                        Marketing</h3>
                    <p class="mt-4 text-lg md:text-xl font-light max-w-2xl drop-shadow-sm">
                        Our experts design and execute multi-channel campaigns meticulously optimized to drive
                        unparalleled ROI and market penetration.
                    </p>
                </div>
            </div>

            <div data-aos="fade-up"
                class="relative w-full aspect-[2/1] md:aspect-[3/1] lg:aspect-[4/1] bg-center bg-cover flex items-end p-8 md:p-16 text-white"
                style="background-image: url('https://via.placeholder.com/1920x800.png?text=Brand+Architecture+Visual');">
                <div class="absolute inset-0 bg-blue-900 opacity-60"></div>
                <div class="relative z-10 max-w-4xl">
                    <h3 class="font-serif text-4xl md:text-5xl font-bold leading-tight drop-shadow-md">Brand
                        Architecture</h3>
                    <p class="mt-4 text-lg md:text-xl font-light max-w-2xl drop-shadow-sm">
                        We build compelling brand narratives and ensure they resonate across every touchpoint to forge a
                        lasting connection with your target audience.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- Add this ONCE in your <head> to use Lucide -->

    <section id="capabilities" class="relative bg-white py-28 overflow-hidden">
        <!-- Gradient Accent Circles -->
        <div class="pointer-events-none absolute -top-32 -left-32 w-96 h-96 bg-orange-400/10 rounded-full blur-[120px]">
        </div>
        <div
            class="pointer-events-none absolute -bottom-20 -right-40 w-96 h-96 bg-blue-500/10 rounded-full blur-[120px]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative">
            <!-- Heading -->
            <div class="max-w-4xl mx-auto text-center mb-20">
                <span data-aos="fade-up"
                    class="inline-block text-xs font-semibold tracking-widest text-orange-600 uppercase">
                    Core Capabilities
                </span>
                <h2 data-aos="fade-up" data-aos-delay="100"
                    class="mt-3 text-4xl md:text-5xl font-extrabold text-slate-900 leading-tight">
                    <span class="bg-gradient-to-r from-blue-600 to-orange-600 bg-clip-text text-transparent">
                        The Pillars
                    </span> of Modern Marketing
                </h2>
                <p data-aos="fade-up" data-aos-delay="200"
                    class="mt-6 text-lg text-slate-700 leading-relaxed max-w-2xl mx-auto">
                    We architect comprehensive strategies by mastering the key disciplines that drive predictable and
                    scalable growth.
                </p>
            </div>

            <!-- Pillars -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-12 lg:gap-10">
                <!-- Card -->
                <div data-aos="fade-up" data-aos-delay="300"
                    class="group bg-white rounded-2xl p-10 shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:scale-[1.03] transition-all duration-300 flex flex-col items-center text-center">
                    <div class="relative w-20 h-20 flex items-center justify-center mb-6">
                        <div class="absolute inset-0 bg-blue-100/50 rounded-full blur-xl opacity-50"></div>
                        <i data-lucide="compass"
                            class="w-12 h-12 relative z-10 text-blue-600 group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 leading-snug">Digital Strategy</h3>
                    <p class="mt-4 text-base text-slate-600 leading-relaxed">
                        From market analysis to roadmap development, we build the strategic foundation for all of your
                        digital initiatives.
                    </p>
                </div>

                <!-- Card -->
                <div data-aos="fade-up" data-aos-delay="400"
                    class="group bg-white rounded-2xl p-10 shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:scale-[1.03] transition-all duration-300 flex flex-col items-center text-center">
                    <div class="relative w-20 h-20 flex items-center justify-center mb-6">
                        <div class="absolute inset-0 bg-orange-100/50 rounded-full blur-xl opacity-50"></div>
                        <i data-lucide="bar-chart-3"
                            class="w-12 h-12 relative z-10 text-orange-600 group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 leading-snug">Performance Marketing</h3>
                    <p class="mt-4 text-base text-slate-600 leading-relaxed">
                        We design and execute campaigns across all major platforms, focusing on measurable ROI and
                        optimized growth.
                    </p>
                </div>

                <!-- Card -->
                <div data-aos="fade-up" data-aos-delay="500"
                    class="group bg-white rounded-2xl p-10 shadow-lg ring-1 ring-slate-100 hover:shadow-2xl hover:scale-[1.03] transition-all duration-300 flex flex-col items-center text-center">
                    <div class="relative w-20 h-20 flex items-center justify-center mb-6">
                        <div class="absolute inset-0 bg-blue-100/50 rounded-full blur-xl opacity-50"></div>
                        <i data-lucide="palette"
                            class="w-12 h-12 relative z-10 text-blue-600 group-hover:scale-110 transition-transform duration-300"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-slate-900 leading-snug">Content & Brand</h3>
                    <p class="mt-4 text-base text-slate-600 leading-relaxed">
                        We build compelling brand narratives and ensure they resonate across every touchpoint to forge a
                        lasting connection.
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

    <!-- <section id="marketing-stack" class="bg-slate-900 py-24 relative overflow-hidden">

        <div class="absolute -top-32 -left-32 w-96 h-96 bg-orange-400/10 rounded-full blur-[120px]"></div>
        <div class="absolute -bottom-24 -right-32 w-96 h-96 bg-blue-500/10 rounded-full blur-[120px]"></div>

        <div class="max-w-7xl mx-auto px-6 relative text-center">
            <span class="inline-block text-[11px] font-semibold tracking-widest text-orange-400 uppercase"
                data-aos="fade-up">
                Digital Reach
            </span>
            <h2 class="mt-3 text-3xl md:text-4xl font-bold text-white" data-aos="fade-up" data-aos-delay="100">
                Our Marketing Stack
            </h2>
            <p class="mt-4 text-slate-400 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                The platforms we leverage to drive attention, amplify presence, and convert engagement into growth.
            </p>
            <div class="mt-6 h-px w-28 bg-gradient-to-r from-orange-500/50 via-white/40 to-blue-500/50 mx-auto"
                data-aos="fade-up" data-aos-delay="300"></div>


            <div class="mt-14 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <?php
                $stack = [
                    "facebook",
                    "instagram",
                    "x",

                    "tiktok",
                    "youtube",
                    "pinterest",
                    "whatsapp",
                    "telegram",
                    "mailchimp",
                    "hubspot",
                    "canva",
                    "googleanalytics",
                    "semrush",
                    "reddit",
                    "quora",
                    "google"
                ];
                foreach ($stack as $slug):
                    $name = ucfirst($slug);
                    ?>
                    <div data-aos="zoom-in" data-aos-delay="<?= rand(100, 500); ?>"
                        class="flex items-center gap-3 px-4 py-3 rounded-xl backdrop-blur-md bg-white/5 hover:bg-white/10 ring-1 ring-white/10 hover:ring-white/20 transition-all duration-300 text-white text-sm font-medium shadow-[0_2px_6px_rgba(0,0,0,0.25)]">
                        <img src="https://cdn.simpleicons.org/<?= $slug; ?>" alt="<?= $name; ?> logo"
                            class="h-6 w-6 flex-shrink-0" />
                        <span><?= $name; ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section> -->

    <section id="marketing-tools" class="bg-slate-950 py-24 relative overflow-hidden">
        <!-- Blur Accents -->
        <div class="absolute -top-32 -left-20 w-80 h-80 bg-orange-500/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-[140px]"></div>

        <div class="max-w-7xl mx-auto px-6 relative text-center">
            <span class="text-[11px] font-semibold tracking-widest text-orange-400 uppercase" data-aos="fade-up">
                Marketing Toolkit
            </span>
            <h2 class="mt-3 text-3xl md:text-4xl font-bold text-white" data-aos="fade-up" data-aos-delay="100">
                Our Digital Arsenal
            </h2>
            <p class="mt-4 text-slate-400 max-w-2xl mx-auto leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                Tools we deploy to create momentum, optimize performance, and deliver results across platforms.
            </p>
            <div class="mt-6 h-px w-24 bg-gradient-to-r from-orange-400 via-white/30 to-blue-400 mx-auto"
                data-aos="fade-up" data-aos-delay="300"></div>

            <!-- Tools Grid -->
            <div class="mt-14 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-5">
                <?php
                $tools = [
                    "facebook",
                    "instagram",
                    "x",
                    // "linkedin",
                    "tiktok",
                    "youtube",
                    "pinterest",
                    "whatsapp",
                    "telegram",
                    "mailchimp",
                    "hubspot",
                    "google",
                    "canva",
                    "semrush",
                    "googleanalytics",
                    "slack",
                    "quora",
                    "reddit"
                ];
                foreach ($tools as $slug):
                    $name = ucfirst($slug);
                    ?>
                    <div data-aos="zoom-in" data-aos-delay="<?= rand(100, 400); ?>"
                        class="group flex items-center gap-3 px-4 py-3 rounded-xl bg-white/5 hover:bg-white/10 ring-1 ring-white/10 hover:ring-white/20 backdrop-blur-md transition-all duration-300 text-white text-sm font-medium shadow-[0_2px_6px_rgba(0,0,0,0.3)]">
                        <img src="https://cdn.simpleicons.org/<?= $slug; ?>" alt="<?= $name; ?> logo"
                            class="h-6 w-6 flex-shrink-0" />
                        <span class="group-hover:translate-x-0.5 transition-transform"><?= $name; ?></span>
                    </div>
                <?php endforeach; ?>
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

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            AOS.init({
                duration: 900,
                easing: "ease-out",
                once: false, // allow multiple plays
                mirror: true, // animate on scroll up
                offset: 80,
            });

            // Force refresh on load + resize to catch everything
            window.addEventListener("load", AOS.refresh);
            window.addEventListener("resize", AOS.refresh);
        });
    </script>
</body>

</html>