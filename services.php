<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary SEO -->
    <title>IT Services in North America | Managed IT, Cloud, Cybersecurity & VoIP | QueryTel</title>
    <meta name="description"
        content="Explore QueryTel’s enterprise IT services: Managed IT, cloud infrastructure, cybersecurity, warehousing & network builds, and Office Connect VoIP. Built for Canadian businesses." />
    <link rel="canonical" href="https://querytel.com/services/" />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <!-- Open Graph -->
    <meta property="og:title"
        content="IT Services in North America | Managed IT, Cloud, Cybersecurity & VoIP | QueryTel" />
    <meta property="og:description"
        content="See all QueryTel services: managed support, cloud, cybersecurity, warehousing & network infrastructure, and Office Connect VoIP." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://querytel.com/services/" />
    <meta property="og:image"
        content="https://querytel.com/wp-content/uploads/2021/10/Business-Strategy-Planning-2b-1024x576.png" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title"
        content="IT Services in North America | Managed IT, Cloud, Cybersecurity & VoIP | QueryTel" />
    <meta name="twitter:description"
        content="Browse the full QueryTel services portfolio for Canadian organizations." />
    <meta name="twitter:image"
        content="https://querytel.com/wp-content/uploads/2021/10/Business-Strategy-Planning-2b-1024x576.png" />

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preload" as="image"
        href="https://querytel.com/wp-content/uploads/2021/10/Business-Strategy-Planning-2b-1024x576.png"
        imagesrcset="https://querytel.com/wp-content/uploads/2021/10/Business-Strategy-Planning-2b-1024x576.png 1024w"
        imagesizes="(min-width:1024px) 60vw, 100vw">

    <!-- CSS/JS you already use -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
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

    <!-- Your existing styles -->
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

        .pill {
            border: 1px solid #dcdcdc;
            border-radius: 9999px;
            padding: .5rem .9rem;
            cursor: pointer;
        }

        .pill.active {
            background: #1b1b1b;
            color: #fff;
            border-color: #1b1b1b;
        }
    </style>

    <!-- Motion tokens -->
    <style>
        @media (prefers-reduced-motion:no-preference) {
            .anim-backdrop {
                animation: qtfade .16s ease-out forwards;
            }

            .anim-sheet-in {
                animation: qtsheet .18s cubic-bezier(.2, .8, .2, 1) forwards;
            }

            .anim-hero img {
                animation: qtzoom .6s ease-out forwards;
            }

            .anim-rise {
                animation: qtrise .22s ease-out both;
            }

            .anim-stagger>* {
                opacity: 0;
                transform: translateY(6px);
                animation: qtrise .24s ease-out forwards;
            }

            .anim-stagger>*:nth-child(1) {
                animation-delay: .06s;
            }

            .anim-stagger>*:nth-child(2) {
                animation-delay: .12s;
            }

            .anim-stagger>*:nth-child(3) {
                animation-delay: .18s;
            }

            .anim-stagger>*:nth-child(4) {
                animation-delay: .24s;
            }

            .anim-stagger>*:nth-child(5) {
                animation-delay: .30s;
            }
        }

        @keyframes qtfade {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes qtsheet {
            from {
                opacity: 0;
                transform: translateY(10px) scale(.985)
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1)
            }
        }

        @keyframes qtzoom {
            from {
                transform: scale(1.02)
            }

            to {
                transform: scale(1)
            }
        }

        @keyframes qtrise {
            from {
                opacity: 0;
                transform: translateY(6px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
    </style>

    <!-- Fluent-style modal integration -->
    <style>
        html {
            color-scheme: light;
        }

        #svc-sheet-overlay {
            display: none;
        }

        #svc-sheet-overlay.is-open {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            overscroll-behavior: contain;
        }

        #svc-sheet {
            width: min(98vw, 1280px);
            max-height: 92vh;
            border-radius: 14px;
            will-change: transform, opacity;
        }

        #svc-sheet-overlay>[data-close] {
            background: rgba(12, 12, 12, .45);
            backdrop-filter: saturate(150%) blur(8px);
        }

        #svc-sheet-img {
            object-fit: fill !important;
        }
    </style>

    <!-- Structured Data: ItemList of services + Breadcrumbs -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"ItemList",
    "@id":"https://querytel.com/services/#list",
    "name":"QueryTel Services",
    "itemListOrder":"https://schema.org/ItemListOrderAscending",
    "itemListElement":[
      { "@type":"ListItem", "position":1, "url":"https://querytel.com/managedservices/", "name":"Managed Services" },
      { "@type":"ListItem", "position":2, "url":"https://querytel.com/cloud-security/", "name":"Cloud Security" },
      { "@type":"ListItem", "position":3, "url":"https://querytel.com/officeconnect/", "name":"Office Connect (VoIP & SIP Trunking)" },
      { "@type":"ListItem", "position":4, "url":"https://querytel.com/warehousing-solutions-and-network-infrastructure/", "name":"Warehousing & Network Infrastructure" }
    ],
    "url":"https://querytel.com/services/"
  }
  </script>
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"BreadcrumbList",
    "itemListElement":[
      { "@type":"ListItem", "position":1, "name":"Home", "item":"https://querytel.com/" },
      { "@type":"ListItem", "position":2, "name":"Services", "item":"https://querytel.com/services/" }
    ]
  }
  </script>
</head>


<body class="bg-white text-neutral-900 font-sans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-semibold tracking-tight leading-tight">
                    Services that make your IT invisible and your team faster.
                </h1>
                <p class="mt-6 text-lg text-neutral-700">
                    From network rollouts to endpoint hardening, pick what you need or bundle it. Flat, predictable,
                    scalable.
                </p>
                <div class="mt-8 flex gap-3">
                    <a href="#catalog" class="qt-btn qt-btn-primary px-8 py-3">Browse Services</a>
                    <a href="<?= $base ?>/contactus" class="qt-btn qt-btn-secondary px-8 py-3">Get a Quote</a>
                </div>
            </div>
            <div class="md:block hidden">
                <img src="<?= $base . '/assets/images/business2840.jpg' ?>" alt="Services Overview"
                    class="w-full rounded-xl " />
            </div>
        </div>
    </section>

    <!-- SEARCH + FILTERS -->
    <section id="catalog" class="bg-[#f9f9f9] py-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row md:items-center gap-4 md:gap-6">
                <input id="svc-search" type="search" placeholder="Search services (e.g., Wi-Fi, VoIP, security)…"
                    class="w-full md:flex-1 border border-neutral-300 rounded-[2px] px-4 py-3 outline-none focus:border-neutral-800"
                    aria-label="Search services" />
                <div class="flex flex-wrap items-center gap-2" id="svc-filters">
                    <?php
                    $services = [
                        // title, category, desc, image(url), slug
                        // Managed Services
                        ["24/7 Help Desk Support", "Managed Services", "Always-on user support with clear SLAs.", "/assets/images/SAO.webp", "24-7-help-desk-support"],
                        ["Field Services", "Managed Services", "On-site install, break/fix, and structured cabling.", "/assets/images/field-service.jpeg", "field-services"],
                        ["Datacenter Operations", "Managed Services", "Monitoring, maintenance, and capacity planning.", "/assets/images/Depositphotos_287797174_XL-1024x576.jpg", "datacenter-operations"],
                        ["Network Infrastructure Operations", "Managed Services", "Lifecycle, config, and change control for switches/routers.", "/assets/images/NIO.jpg", "network-infrastructure-operations"],
                        ["End-User Computing Infrastructure", "Managed Services", "Device imaging, policies, and updates at scale.", "/assets/images/EUC.webp", "end-user-computing-infrastructure"],
                        ["Greenfield Projects", "Managed Services", "New-site buildouts from design to go-live.", "/assets/images/Greenfield-Project.jpg", "greenfield-projects"],
                        ["Procurement Services", "Managed Services", "Sourcing, licensing, and logistics with preferred pricing.", "/assets/images/1653946676832-1-1024x683.jpeg", "procurement-services"],
                        ["Staff Augmentation / Outsourcing", "Managed Services", "Extra hands or full teams to hit deadlines.", "/assets/images/SAO1.webp", "staff-augmentation-outsourcing"],

                        // Managed Security Services
                        ["Infrastructure Security", "Managed Security Services", "Harden networks, segment traffic, & enforce policy.", "/assets/images/iNTERNET-SECURITY-1024x761.png", "infrastructure-security"],
                        ["24-Hour Monitoring & Mitigation", "Managed Security Services", "Continuous detection and response.", "/assets/images/24-hour-security.webp", "24-hour-monitoring-mitigation"],
                        ["Patch/Vulnerability Monitoring", "Managed Security Services", "Track CVEs, patch cadence, and exceptions.", "/assets/images/Vulnerability-Monitoring-Assessment-Mitigation.webp", "patch-vulnerability-monitoring"],
                        ["Securing Segregation of IT/OT Devices", "Managed Security Services", "Segment critical systems safely.", "/assets/images/SOC-monitoring.png", "securing-segregation-it-ot"],
                        ["Certificate Management", "Managed Security Services", "Issue, rotate, and audit certs without surprises.", "/assets/images/Certificate-Management.webp", "certificate-management"],

                        // Web & Digital Services
                        ["Dynamic Web Development", "Web & Digital Services", "Modern, performant sites on proven stacks.", "/assets/images/depositphotos_652767038-stock-illustration-man-code-guy-writes-code.webp", "dynamic-web-development"],
                        ["E-Commerce Site Development & Management", "Web & Digital Services", "Secure storefronts with smooth ops.", "/assets/images/ecommerce.webp", "ecommerce-development-management"],
                        ["Intranet/SharePoint Development & Management", "Web & Digital Services", "Internal portals that people use.", "/assets/images/intranet.webp", "intranet-sharepoint-development-management"],
                        ["Web Catalog Development & Management", "Web & Digital Services", "Product catalogs with a search that finds things.", "/assets/images/web-catalog.webp", "web-catalog-development-management"],
                        ["Chatbot Deployment & Training", "Web & Digital Services", "Automate FAQs and workflows safely.", "/assets/images/chatbot.webp", "chatbot-deployment-training"],
                        ["Workflow Automation", "Web & Digital Services", "Zap the busywork; ship the work that matters.", "/assets/images/workflow-automation.webp", "workflow-automation"],

                        // Application Security
                        ["Secure Onboarding", "Application Security", "Provision users/apps securely from day one.", "/assets/images/Untitled-design-7.png", "secure-onboarding"],
                        ["Single Sign-On (SSO)", "Application Security", "One login, strong authentication, happy users.", "/assets/images/Single-Sign-On-SSO.webp", "single-sign-on-sso"],
                        ["Monitoring", "Application Security", "Watch app health and threats in one place.", "/assets/images/threat-monitoring.webp", "application-monitoring"],
                        ["Lifecycle Management", "Application Security", "Joiners/movers/leavers done right.", "/assets/images/undefined.png", "lifecycle-management"],

                        // Testing & Auditing
                        ["Penetration Testing", "Testing & Auditing", "Find issues before attackers do.", "/assets/images/Penetration-testing-1.webp", "penetration-testing"],
                        ["Auditing Security Controls", "Testing & Auditing", "Evidence, controls, and gaps documented.", "/assets/images/Untitled-design-9.png", "auditing-security-controls"],
                        ["Remediation", "Testing & Auditing", "Fix quickly with prioritized actions.", "/assets/images/Untitled-design-10.png", "remediation"],
                    ];
                    $cats = array_values(array_unique(array_map(fn($s) => $s[1], $services)));
                    ?>
                    <span class="pill active" data-cat="all">All</span>
                    <?php foreach ($cats as $c): ?>
                        <span class="pill" data-cat="<?= htmlspecialchars($c) ?>"><?= htmlspecialchars($c) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- GRID -->
            <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-8" id="svc-grid">
                <?php foreach ($services as $s): ?>
                    <article class="qt-card overflow-hidden svc-card" data-cat="<?= htmlspecialchars($s[1]) ?>"
                        data-title="<?= htmlspecialchars(strtolower($s[0])) ?>">
                        <div class="h-2 bg-[color:var(--accent)]"></div>
                        <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                            <img src="<?= htmlspecialchars($s[3]) ?>" alt="<?= htmlspecialchars($s[0]) ?>"
                                class="absolute inset-0 w-full h-full object-fill" />
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-semibold mb-2"><?= htmlspecialchars($s[0]) ?></h3>
                            <p class="text-sm text-neutral-600 leading-relaxed"><?= htmlspecialchars($s[2]) ?></p>
                            <div class="mt-4">
                                <button class="qt-btn qt-btn-secondary px-4 py-2 text-sm svc-open"
                                    data-title="<?= htmlspecialchars($s[0]) ?>" data-desc="<?= htmlspecialchars($s[2]) ?>"
                                    data-img="<?= htmlspecialchars($s[3]) ?>" data-cat="<?= htmlspecialchars($s[1]) ?>"
                                    data-slug="<?= htmlspecialchars($s[4]) ?>">
                                    Quick view
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div class="text-center mb-12">
                <div class="qt-line mb-6"></div>
                <h2 class="text-3xl font-semibold tracking-tight">FAQs</h2>
            </div>
            <div class="space-y-6">
                <details class="qt-card p-5">
                    <summary class="font-medium cursor-pointer">Can I combine multiple services?</summary>
                    <p class="mt-3 text-sm text-neutral-700">Yes. Mix-and-match or pick a bundle. We’ll scope and price
                        predictably.</p>
                </details>
                <details class="qt-card p-5">
                    <summary class="font-medium cursor-pointer">Do you handle multi-site rollouts?</summary>
                    <p class="mt-3 text-sm text-neutral-700">Yep. Standardized configs, staged deployment, nightly
                        windows, zero-drama cutovers.</p>
                </details>
                <details class="qt-card p-5">
                    <summary class="font-medium cursor-pointer">Support &amp; SLAs?</summary>
                    <p class="mt-3 text-sm text-neutral-700">24/7 monitoring options with clear SLAs. We’ll match what
                        your operations need.</p>
                </details>
            </div>
        </div>
    </section>

    <!-- FINAL CTA -->
    <section class="py-20 bg-white text-center">
        <div class="max-w-4xl mx-auto px-6">
            <a href="<?= $base ?>/contactus" class="qt-btn qt-btn-primary inline-block px-10 py-4 text-lg">Request an
                Expert</a>
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
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script> AOS.init({ duration: 800, easing: 'ease-out-cubic' }); </script>

    <!-- Filters + Search -->
    <script>
        const pills = document.querySelectorAll('#svc-filters .pill');
        const cards = document.querySelectorAll('.svc-card');
        pills.forEach(p => p.addEventListener('click', () => {
            pills.forEach(x => x.classList.remove('active'));
            p.classList.add('active');
            const cat = p.dataset.cat;
            cards.forEach(c => { c.style.display = (cat === 'all' || c.dataset.cat === cat) ? '' : 'none'; });
            document.getElementById('svc-search').value = '';
        }));

        const q = document.getElementById('svc-search');
        q.addEventListener('input', () => {
            const term = q.value.trim().toLowerCase();
            cards.forEach(c => { c.style.display = c.dataset.title.includes(term) ? '' : 'none'; });
            pills.forEach(x => x.classList.remove('active'));
            pills[0].classList.add('active'); // All
        });
    </script>

    <!-- SERVICE MODAL — Fluent-centered -->
    <div id="svc-sheet-overlay" class="fixed inset-0 z-[70]">
        <!-- Backdrop (acrylic boosted via CSS) -->
        <div class="absolute inset-0 bg-black/50 backdrop-blur-[2px] opacity-0 transition-opacity duration-150 ease-out"
            data-close></div>

        <!-- Dialog -->
        <section id="svc-sheet" role="dialog" aria-modal="true" aria-labelledby="svc-sheet-title"
            aria-describedby="svc-sheet-desc" class="relative my-8 bg-white rounded-[14px] border border-neutral-200 shadow-2xl overflow-hidden
                    opacity-0 scale-[.98] transition-all duration-150 ease-out grid grid-cols-1 md:grid-cols-2">
            <!-- Left: image panel -->
            <div id="svc-left" class="relative hidden md:block bg-neutral-100">
                <img id="svc-sheet-img" decoding="async" alt="" class="absolute inset-0 w-full h-full object-cover" />
                <div
                    class="pointer-events-none absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-black/45 to-transparent">
                </div>
            </div>

            <!-- Right: content column -->
            <div class="flex min-h-0 flex-col">
                <header class="px-6 md:px-8 pt-6">
                    <div class="flex items-start gap-3">
                        <span id="svc-sheet-cat"
                            class="text-xs font-semibold px-2 py-[6px] rounded-full border border-neutral-300 text-neutral-700 bg-neutral-50"></span>
                        <button id="svc-sheet-close" class="ml-auto qt-btn qt-btn-secondary px-3 py-1.5 text-sm"
                            aria-label="Close">Close</button>
                    </div>
                    <h2 id="svc-sheet-title"
                        class="mt-4 text-[26px] md:text-[34px] leading-tight font-semibold tracking-tight"></h2>
                </header>

                <main class="flex-1 min-h-0 overflow-y-auto px-6 md:px-8 pb-6">
                    <article id="svc-sheet-desc" class="mt-4 space-y-4 text-neutral-900"></article>

                    <div class="mt-8 flex flex-col sm:flex-row gap-3">
                        <a href="<?= $base ?>/contactus"
                            class="qt-btn qt-btn-primary px-6 py-3 text-base text-center sm:w-auto w-full">Talk to an
                            Expert</a>
                        <a id="svc-sheet-quote" href="#"
                            class="qt-btn qt-btn-secondary px-6 py-3 text-base text-center sm:w-auto w-full">Get a
                            Quote</a>
                    </div>
                </main>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // ========= Long copy (valid JS) =========
            const longCopy = {
                // Managed Services
                "24-7-help-desk-support": `QueryTel provides 24/7 Help Desk Support to maintain operational continuity and reduce downtime across your IT environment. Our dedicated support teams handle technical incidents, service requests, and general user assistance with transparent processes and defined SLAs. We ensure rapid response, efficient issue resolution, and escalation management to keep your business operations uninterrupted, day or night.`,
                "field-services": `QueryTel offers Field Services to support on-site infrastructure requirements across distributed environments. Our certified technicians provide hardware installation, maintenance, troubleshooting, and emergency response for critical systems. These services ensure physical IT assets remain operational, secure, and aligned with organizational standards, reducing operational risks associated with downtime or technical failures.`,
                "datacenter-operations": `QueryTel delivers comprehensive Data Center Operations to ensure critical infrastructure availability, performance, and security. Our services cover routine maintenance, proactive monitoring, incident response, and capacity management to support business continuity. We align operations with industry best practices and compliance standards, helping organizations optimize data center efficiency while minimizing risk and downtime.`,
                "network-infrastructure-operations": `QueryTel provides Network Infrastructure Operations to maintain secure, resilient, high-performance network environments. Our services include proactive monitoring, configuration management, fault resolution, and performance optimization for wired and wireless networks. We ensure stable connectivity across core, distribution, and access layers, supporting critical business applications and communications with minimal disruption.`,
                "end-user-computing-infrastructure": `QueryTel manages End-User Computing Infrastructure to support the full lifecycle of workplace devices, including desktops, laptops, mobile devices, and peripherals. Our services cover provisioning, maintenance, updates, and security management to ensure a consistent and reliable user experience. We help organizations enhance productivity by maintaining device compliance, performance, and security across diverse operational environments.`,
                "greenfield-projects": `QueryTel provides end-to-end services for Greenfield Projects, delivering new IT infrastructure deployments aligned with business objectives and industry standards. Our solutions cover planning, design, procurement, installation, and operational handover of IT systems. We ensure new environments are scalable, secure, and optimized to support future growth, minimizing risk during initial build phases and enabling seamless operational readiness.`,
                "procurement-services": `QueryTel offers Procurement Services to simplify the acquisition of IT hardware, software, and licensing. We leverage established vendor relationships to ensure timely delivery, competitive pricing, and alignment with technical and operational requirements. Our procurement process reduces lead times, controls costs, and ensures compatibility with existing and planned IT environments.`,
                "staff-augmentation-outsourcing": `QueryTel provides staff augmentation and outsourcing services to extend internal IT capabilities with skilled professionals across key disciplines. We offer flexible engagement models to support project-based needs or ongoing operations. Our resources integrate with existing teams to address skill gaps, manage workload fluctuations, and deliver specialized expertise without the overhead of permanent hiring.`,

                // Managed Security Services
                "infrastructure-security": `QueryTel delivers comprehensive Infrastructure Security services to protect critical IT environments from evolving cyber threats. Our approach combines continuous monitoring, proactive threat management, and enforced security controls to safeguard network infrastructure, data centers, and hybrid environments. We help organizations maintain operational resilience, meet compliance standards, and reduce risk across their infrastructure.`,
                "24-hour-monitoring-mitigation": `QueryTel provides 24-hour security monitoring and threat mitigation to safeguard critical infrastructure. Our continuous surveillance detects anomalies in real time, enabling rapid identification, containment, and resolution of security incidents to minimize operational impact.`,
                "patch-vulnerability-monitoring": `QueryTel offers proactive vulnerability management, including continuous monitoring, risk assessment, and structured patching. We prioritize remediation that is aligned with best practices to protect systems against known vulnerabilities. `,
                "securing-segregation-it-ot": `We implement and enforce security measures to segregate IT and Operational Technology (OT) environments, reducing the risk of cross-contamination between critical systems. Our solutions align with industry frameworks to enhance resilience and maintain regulatory compliance.`,
                "certificate-management": `QueryTel provides centralized Certificate Management to ensure digital certificates' validity, security, and lifecycle control. We maintain visibility, automate renewals, and enforce policies to protect secure communications and organizational assets.`,

                // Web & Digital Services
                "dynamic-web-development": `QueryTel delivers Dynamic Web Development tailored to modern business needs. We build responsive, scalable, and secure web applications for customer-facing and internal use cases, aligning technical capabilities with business objectives and long-term maintainability.`,
                "ecommerce-development-management": `QueryTel provides end-to-end E-Commerce Site Development and management. We integrate platforms with payment, inventory, and logistics to ensure operational efficiency and data integrity and maintain performance, security, and scalability over time.`,
                "intranet-sharepoint-development-management": `QueryTel delivers Intranet/SharePoint solutions to enhance collaboration, document management, and communication. We design secure, scalable platforms aligned with processes and governance, with customization, integration, and lifecycle management.`,
                "web-catalog-development-management": `QueryTel builds web catalogs that handle complex product inventories with a search function that finds things. We integrate with ERP/CRM/ CRM/e-commerce for real-time accuracy across pricing, stock, and specifications, focusing on integrity and performance.`,
                "chatbot-deployment-training": `QueryTel deploys enterprise-grade chatbots integrated with CRM, service desks, and knowledge bases to automate FAQs and workflows. We handle data-driven training, conversation optimization, and lifecycle management to keep responses accurate and on-brand.`,
                "workflow-automation": `QueryTel delivers Workflow Automation that connects systems, triggers actions, and streamlines approvals, reporting, and notifications. We reduce manual intervention without disrupting core processes, emphasizing accuracy, consistency, and maintainability.`,

                // Application Security
                "secure-onboarding": `QueryTel provides Secure Onboarding to integrate new applications with appropriate controls from day one. We assess configurations, enforce policies, and align onboarding with organizational security standards.`,
                "single-sign-on-sso": `We deliver Single Sign-On (SSO) solutions to simplify authentication and improve security posture. Centralized access management reduces credential risk and improves user experience across apps.`,
                "application-monitoring": `QueryTel implements continuous application monitoring to detect anomalies, unauthorized access, and threats. Our monitoring integrates with broader security operations for proactive detection and rapid response.`,
                "lifecycle-management": `We manage application security lifecycles from deployment through decommissioning, including assessments, updates, and control enforcement to stay aligned with evolving threats and compliance.`,

                // Testing & Auditing
                "penetration-testing": `QueryTel conducts Penetration Testing to identify exploitable vulnerabilities across networks, applications, and infrastructure. We simulate real-world attacks and provide prioritized remediation guidance.`,
                "auditing-security-controls": `We perform comprehensive audits of security controls for effectiveness and compliance, providing visibility into control performance and gaps with clear, actionable findings.`,
                "remediation": `QueryTel delivers structured Remediation to address vulnerabilities and deficiencies identified in assessments and audits, with prioritized actions and implementation support for measurable improvement.`
            };

            // Merge with any existing map
            window.longCopy = { ...(window.longCopy || {}), ...longCopy };

            // ========= Helpers =========
            const overlay = document.getElementById('svc-sheet-overlay');
            const backdrop = overlay.querySelector('[data-close]');
            const sheet = document.getElementById('svc-sheet');
            const left = document.getElementById('svc-left');
            const imgEl = document.getElementById('svc-sheet-img');
            const titleEl = document.getElementById('svc-sheet-title');
            const catEl = document.getElementById('svc-sheet-cat');
            const descEl = document.getElementById('svc-sheet-desc');
            const quoteEl = document.getElementById('svc-sheet-quote');
            const closeBtn = document.getElementById('svc-sheet-close');

            let isOpen = false;
            let lastFocus = null;
            let hideTimer = null;

            function slugify(s) { return (s || '').toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, ''); }
            function toHTMLBigFirst(txt) {
                const parts = (txt || '').trim().split(/\n\s*\n/).map(p => p.trim()).filter(Boolean);
                if (!parts.length) return '';
                const first = `<p class="text-[18px] md:text-[19px] leading-8 text-neutral-900">${parts[0]}</p>`;
                const rest = parts.slice(1).map(p => `<p class="text-[16px] md:text-[17px] leading-7 text-neutral-800">${p}</p>`).join('');
                return first + rest;
            }
            function getCopy({ title, slug, desc }) {
                const key = slug || slugify(title || '');
                const long = (window.longCopy && window.longCopy[key]) || '';
                if (long.trim()) return long;
                return (desc || '').trim();
            }

            // ========= Animations + visibility =========
            function show() {
                overlay.classList.add('is-open');  // visibility on

                // restart animations cleanly
                backdrop.classList.remove('anim-backdrop');
                sheet.classList.remove('anim-sheet-in');
                titleEl.classList.remove('anim-rise');
                descEl.classList.remove('anim-stagger');

                // force reflow so animations replay
                void overlay.offsetWidth;

                // apply animations
                backdrop.classList.add('anim-backdrop');
                sheet.classList.add('anim-sheet-in');
                titleEl.classList.add('anim-rise');
                descEl.classList.add('anim-stagger');

                document.documentElement.classList.add('overflow-hidden');
            }
            function hide() {
                backdrop.classList.add('opacity-0');
                sheet.classList.add('opacity-0', 'scale-[.98]');
                hideTimer = setTimeout(() => {
                    overlay.classList.remove('is-open'); // visibility off
                    document.documentElement.classList.remove('overflow-hidden');
                    if (lastFocus) lastFocus.focus({ preventScroll: true });
                }, 150);
            }

            // ========= Open/Close =========
            function openSheet({ title, desc, img, cat, slug }) {
                if (isOpen) return;
                if (hideTimer) clearTimeout(hideTimer);
                isOpen = true;

                lastFocus = document.activeElement;

                const key = slug || slugify(title);
                const copy = getCopy({ title, slug: key, desc });

                titleEl.textContent = title || '';
                catEl.textContent = cat || '';
                descEl.innerHTML = toHTMLBigFirst(copy);
                quoteEl && (quoteEl.href = "<?= $base ?>/contactus?s=" + encodeURIComponent(key));

                if (img) {
                    imgEl.src = img; imgEl.alt = title || 'Service image';
                    left.classList.remove('hidden');
                    left.classList.remove('anim-hero');
                    void left.offsetWidth;
                    left.classList.add('anim-hero');
                } else {
                    imgEl.removeAttribute('src');
                    left.classList.add('hidden');
                    left.classList.remove('anim-hero');
                }

                backdrop.classList.add('opacity-0');
                sheet.classList.add('opacity-0', 'scale-[.98]');

                show();

                // Accessibility: move screen-reader focus to the title on open
                titleEl.setAttribute('tabindex', '-1');
                titleEl.focus({ preventScroll: true });
            }

            function closeSheet() {
                if (!isOpen) return;
                isOpen = false;
                hide();
            }

            // ========= Listeners =========
            document.addEventListener('click', (e) => {
                const btn = e.target.closest('.svc-open');
                if (btn) {
                    e.preventDefault();
                    openSheet({
                        title: btn.dataset.title,
                        desc: btn.dataset.desc,
                        img: btn.dataset.img,
                        cat: btn.dataset.cat,
                        slug: btn.dataset.slug
                    });
                    return;
                }
                if (e.target && e.target.hasAttribute('data-close')) closeSheet();
            });

            closeBtn.addEventListener('click', (e) => { e.preventDefault(); closeSheet(); });
            document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && isOpen) closeSheet(); });

            // Focus trap
            overlay.addEventListener('keydown', (e) => {
                if (!isOpen || e.key !== 'Tab') return;
                const f = sheet.querySelectorAll('a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])');
                if (!f.length) return;
                const first = f[0], last = f[f.length - 1];
                if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
                else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
            });

            // Optional API
            window.QuerytelModal = { open: openSheet, close: closeSheet };
        });
    </script>
</body>

</html>