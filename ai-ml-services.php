<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>AI & Machine Learning Services in Canada | QueryTel Inc</title>
    <meta name="description"
        content="QueryTel Inc provides AI, machine learning, and deep learning services in Canada — from predictive analytics to NLP and computer vision — built for business growth." />

    <meta name="robots" content="index,follow,max-image-preview:large" />
    <link rel="canonical" href="https://querytel.com/ai-ml-services-canada/" />
    <link rel="alternate" hreflang="en-ca" href="https://querytel.com/ai-ml-services-canada/" />

    <meta name="theme-color" content="#0f172a" />
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />

    <!-- Open Graph -->
    <meta property="og:title" content="AI & Machine Learning Services in Canada | QueryTel Inc" />
    <meta property="og:description"
        content="AI, ML, and DL services for Canadian businesses. Predictive analytics, NLP, computer vision, and generative AI solutions that drive growth." />
    <meta property="og:url" content="https://querytel.com/ai-ml-services-canada/" />
    <meta property="og:site_name" content="QueryTel Inc." />
    <meta property="og:locale" content="en_CA" />
    <meta property="og:image" content="<?= $base . '/assets/images/querytel-ai.jpg' ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="AI & Machine Learning Services in Canada | QueryTel Inc" />
    <meta name="twitter:description"
        content="Full-service AI/ML/DL solutions — predictive analytics, NLP, computer vision, generative AI. Helping Canadian businesses grow smarter." />
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
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
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
      "name": "AI & ML Services",
      "item": "https://querytel.com/ai-ml-services-canada/"
    }
  ]
}
</script>


    <!-- Schema: Service -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": [
    "Artificial Intelligence Development",
    "Machine Learning Solutions",
    "Deep Learning Consulting",
    "Predictive Analytics",
    "Natural Language Processing (NLP)",
    "Computer Vision",
    "Generative AI Solutions",
    "AI Strategy & Consulting"
  ],
  "provider": { "@id": "https://querytel.com/#org" },
  "areaServed": "CA",
  "description": "AI, ML, and DL services in Canada including predictive analytics, NLP, computer vision, and generative AI for smarter business growth."
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
            <!-- Left Text -->
            <div class="reveal animate-fadeInUp">
                <span
                    class="inline-flex items-center gap-2 text-[12px] font-semibold tracking-widest text-orange-600 uppercase">
                    AI • MACHINE LEARNING • INNOVATION
                </span>

                <h1 class="mt-4 text-4xl sm:text-5xl font-semibold tracking-tight leading-tight text-neutral-900">
                    AI & Machine Learning Services
                </h1>
                <span class="inline-flex pt-5 text-[14px] font-semibold tracking-widest text-slate-800">
                    Your AI. Your Decisions. Your Growth.
                </span>
                <p class="mt-6 text-lg sm:text-xl text-slate-600 max-w-2xl">
                    Your business deserves more than just data — it deserves intelligence that drives results. QueryTel
                    helps enterprises unlock the power of Artificial Intelligence with solutions built for your
                    industry. From predictive analytics and NLP to computer vision and generative AI, we design and
                    deploy models that accelerate efficiency, innovation, and long-term growth.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="<?= $base ?>/contactus"
                        class="px-7 py-3 rounded-lg bg-orange-600 text-white font-semibold shadow-lg hover:bg-orange-700 transition">
                        Request an AI Consultation
                    </a>

                </div>

                <div class="mt-8 flex flex-wrap gap-6 text-sm text-slate-600">
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        20+ AI Models Deployed Across Industries
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Cut Costs by up to 35% with Automation
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-orange-600"></span>
                        Trusted by Enterprises Across Canada
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="relative">
                <!-- <div
                    class="absolute -top-10 -left-8 h-52 w-52 rounded-full border-[14px] border-blue-600/30 animate-pulse animate-blobFloat3">
                </div> -->
                <div class="overflow-hidden relative rounded-2xl">
                    <img src="<?= $base . '/assets/images/ai.png' ?>" alt="AI & Machine Learning illustration"
                        class="w-full h-96 object-cover rounded-2xl" />
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
            <div class="text-center max-w-2xl mx-auto reveal animate-fadeInUp">
                <span
                    class="inline-flex items-center gap-2 text-sm font-medium tracking-wide text-orange-600 uppercase">
                    AI & ML Solutions
                </span>
                <h2 class="mt-2 text-4xl text-neutral-900 leading-tight">
                    Intelligent Services: Engineered for Innovation
                </h2>
                <p class="mt-4 text-xl text-neutral-600">
                    AI isn’t the future, it’s your competitive edge today. We combine AI, Machine Learning, and Deep
                    Learning to build solutions around your challenges, data, and growth goals. With QueryTel, AI
                    doesn’t just work, it works for you.
                </p>
            </div>

            <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                <div class="feature-card reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-indigo-600 text-white shadow-lg">
                        <i data-lucide="cpu" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Predictive Analytics</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your data should tell you more than what happened yesterday. We turn your historical data into
                        foresight helping you reduce risks, optimize operations, and anticipate customer demand before
                        it happens.
                    </p>
                </div>

                <div class="feature-card delay-1 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-orange-500 to-pink-500 text-white shadow-lg">
                        <i data-lucide="message-square" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Natural Language Processing</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your customers expect conversations, not commands. Our NLP models are built for your business
                        powering chatbots, sentiment analysis, and text automation that respond like humans and scale
                        with your needs.
                    </p>
                </div>

                <div class="feature-card delay-2 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white shadow-lg">
                        <i data-lucide="eye" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Computer Vision</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Our CV solutions see what matters to you, from your factories to your healthcare systems.
                        Detect, classify, and interpret images with accuracy that drives your performance, compliance,
                        and customer trust.
                    </p>
                </div>

                <div class="feature-card delay-3 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-yellow-400 to-amber-600 text-white shadow-lg">
                        <i data-lucide="zap" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Deep Learning Models</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your toughest problems deserve intelligent answers. We design deep learning frameworks for your
                        unique challenges, from fraud detection to autonomous systems, unlocking capabilities that
                        accelerate your growth.
                    </p>
                </div>

                <div class="feature-card delay-4 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-purple-500 to-fuchsia-600 text-white shadow-lg">
                        <i data-lucide="layers" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">Generative AI</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Your creativity should never be limited. We harness generative AI to create text, images, and
                        workflows that fuel your innovation, streamline your operations, and uncover new revenue
                        opportunities.
                    </p>
                </div>

                <div class="feature-card delay-5 reveal">
                    <div
                        class="h-16 w-16 flex items-center justify-center rounded-2xl bg-gradient-to-br from-pink-500 to-rose-600 text-white shadow-lg">
                        <i data-lucide="compass" class="h-8 w-8"></i>
                    </div>
                    <h3 class="mt-8 text-2xl font-semibold text-slate-900">AI Strategy & Consulting</h3>
                    <p class="mt-3 text-base text-slate-700 leading-relaxed">
                        Not sure where to start? We provide AI consulting and roadmap planning, helping you adopt AI
                        responsibly and at scale.
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

            .animate-blobFloat3 {
                animation: blobFloat2 2s ease-in-out infinite;
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
                    Our 5-Step Approach to Building AI Solutions
                </h2>
                <p class="mt-4 text-base text-neutral-600 leading-relaxed">
                    Every AI journey with QueryTel begins with your challenges and ends with your results. Our
                    structured process ensures measurable outcomes, reliable performance, and innovation you can scale.
                </p>
            </div>

            <div class="mt-16 grid gap-8 sm:gap-10 md:grid-cols-2 xl:grid-cols-3">
                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[14px] font-mono tracking-widest text-blue-700/80">01</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="compass" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Discovery & Strategy</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        We begin by identifying your business challenges, defining AI opportunities, and aligning use
                        cases with measurable goals.
                    </p>
                </article>

                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[14px] font-mono tracking-widest text-blue-700/80">02</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="database" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Data Collection & Preparation</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        We gather, clean, and structure your data for AI readiness, ensuring high-quality inputs for
                        accurate and reliable models.
                    </p>
                </article>

                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[14px] font-mono tracking-widest text-blue-700/80">03</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="cpu" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Model Development</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Custom-built ML and DL models trained to deliver accuracy and performance where you need it
                        most.
                    </p>
                </article>

                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[14px] font-mono tracking-widest text-blue-700/80">04</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="rocket" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Deployment & Integration</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Once validated, we integrate AI models into your business systems, APIs, or applications for
                        seamless adoption.
                    </p>
                </article>

                <article
                    class="group rounded-2xl border border-neutral-200/70 bg-white p-6 shadow-sm hover:shadow-lg transition">
                    <div class="flex items-center justify-between">
                        <span class="text-[14px] font-mono tracking-widest text-blue-700/80">05</span>
                        <span
                            class="inline-flex h-9 w-9 items-center justify-center rounded-xl bg-neutral-900 text-white">
                            <i data-lucide="bar-chart-3" class="h-5 w-5"></i>
                        </span>
                    </div>
                    <h3 class="mt-5 text-lg font-semibold text-neutral-900">Monitoring & Optimization</h3>
                    <p class="mt-2 text-sm text-neutral-600 leading-relaxed">
                        Continuous performance tracking, retraining, and improvements to keep your AI solutions ahead of
                        change.
                    </p>
                </article>
            </div>
        </div>
        <div class="mt-8 flex justify-center">
            <a href="tel:+18444478379" class="relative inline-flex items-center px-12 py-4 rounded-lg font-semibold shadow-lg
          text-white bg-neutral-900 overflow-hidden group">
                <span class="relative z-10 flex items-center">
                    Hire an AI Engineer
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
                    AI Growth
                </span>
                <h2 class="mt-3 text-4xl font-bold text-neutral-900 leading-tight">
                    From <span class="text-orange-600">Data to Decisions</span> That Drive Your Growth
                </h2>
                <p class="mt-4 text-lg text-neutral-600">
                    Our AI solutions transform data into practical tools for your automation, forecasting, and stronger
                    customer relationships.
                </p>
            </div>

            <div class="mt-20 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-orange-500 to-pink-500 text-white shadow-md">
                        <i data-lucide="brain-circuit" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Intelligent Automation</h3>
                    <p class="mt-2 text-neutral-600">
                        Automate repetitive tasks, reduce errors, and free your team to focus on strategic growth.
                    </p>
                </div>

                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 text-white shadow-md">
                        <i data-lucide="line-chart" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Predictive Insights</h3>
                    <p class="mt-2 text-neutral-600">
                        Build confidence with models forecasting demand, uncovering risks, and revealing opportunities.
                    </p>
                </div>

                <div
                    class="group relative rounded-2xl border border-orange-200 bg-white p-8 shadow-sm hover:shadow-lg transition">
                    <div
                        class="h-14 w-14 flex items-center justify-center rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 text-white shadow-md">
                        <i data-lucide="shield-check" class="h-6 w-6"></i>
                    </div>
                    <h3 class="mt-6 text-xl font-semibold text-neutral-900">Customer Experience</h3>
                    <p class="mt-2 text-neutral-600">
                        Deliver personalized, responsive interactions with AI-powered recommendation engines and
                        chatbots.
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
                Solving <span class="text-orange-600">Business Problems</span> with AI
            </h2>
            <p class="mt-4 text-gray-700 text-base md:text-lg">
                We focus on real outcomes. From lowering costs to predicting demand and reducing fraud, our AI solutions
                remove the barriers to your growth.
            </p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-6"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative z-10">
            <div class="text-gray-900">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">Turn Data into Results</h3>
                <div class="w-12 h-1 bg-orange-500 mb-6"></div>
                <p class="text-gray-700 text-base md:text-lg mb-4">
                    We help you cut costs, predict demand, and stop fraud before it happens. Our AI solutions are built
                    to solve the challenges holding you back and to deliver clear results that grow your business today
                    and prepare you for tomorrow.
                </p>

            </div>

            <div class="relative">
                <div class="absolute -top-16 -left-16 z-0">
                    <!-- <div class="w-[360px] h-[360px] border-[40px] rounded-full animate-float-fast"
                        style="border-color: #3c6ffbff; opacity: 0.2"></div> -->
                </div>
                <img src="<?= $base . '/assets/images/ai2.png' ?>"
                    alt="AI solving business challenges like automation, risk detection, and predictive analytics"
                    class="relative z-10 h-full mb-10 w-full mx-auto object-cover" />
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