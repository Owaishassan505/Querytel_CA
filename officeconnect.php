<?php $base = "" ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Primary SEO -->
    <title>Office Connect VoIP & SIP Trunking | Hosted PBX for Canadian Businesses | QueryTel</title>
    <meta name="description"
        content="Office Connect by QueryTel: enterprise-grade VoIP, SIP trunking, and hosted PBX with low latency, call analytics, and easy number porting. Built for Canadian businesses." />
    <link rel="canonical" href="https://querytel.com/officeconnect/" />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <!-- Open Graph (social) -->
    <meta property="og:title" content="Office Connect VoIP & SIP Trunking | Hosted PBX | QueryTel" />
    <meta property="og:description"
        content="Cloud-based phone system with SIP trunking, advanced routing, and zero-downtime number porting. See how Office Connect modernizes calling for Canadian teams." />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://querytel.com/officeconnect/" />
    <meta property="og:image" content="https://querytel.com/wp-content/uploads/2021/10/hosted-pbx1-469x500-1.jpg" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Office Connect VoIP & SIP Trunking | Hosted PBX | QueryTel" />
    <meta name="twitter:description"
        content="Modern, scalable VoIP and SIP trunking for Canadian businesses. Easy setup, clear pricing, expert support." />
    <meta name="twitter:image" content="https://querytel.com/wp-content/uploads/2021/10/hosted-pbx1-469x500-1.jpg" />

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="preload" as="image" href="https://querytel.com/wp-content/uploads/2021/10/hosted-pbx1-469x500-1.jpg"
        imagesrcset="https://querytel.com/wp-content/uploads/2021/10/hosted-pbx1-469x500-1.jpg 800w"
        imagesizes="(min-width:1024px) 50vw, 100vw">

    <!-- CSS/JS (existing) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
                        floatSlow: { "0%, 100%": { transform: "translateY(0px)" }, "50%": { transform: "translateY(-12px)" } }
                    },
                    animation: {
                        fadeInRight: "fadeInRight 0.8s ease-out forwards",
                        fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
                        fadeIn: "fadeIn 1s ease-out forwards",
                        floatSlow: "floatSlow 6s ease-in-out infinite"
                    }
                }
            }
        };
    </script>

    <!-- Structured Data: Service + Breadcrumbs -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "https://querytel.com/officeconnect/#service",
    "name": "Office Connect – Hosted PBX & SIP Trunking",
    "serviceType": "VoIP, SIP trunking, cloud PBX",
    "url": "https://querytel.com/officeconnect/",
    "description": "Cloud-based phone system with SIP trunking, advanced routing, and analytics for Canadian businesses.",
    "areaServed": "CA",
    "provider": {
      "@type": "Organization",
      "@id": "https://querytel.com/#org",
      "name": "QueryTel Inc",
      "url": "https://querytel.com/"
    }
  }
  </script>
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://querytel.com/" },
      { "@type": "ListItem", "position": 2, "name": "Services", "item": "https://querytel.com/services/" },
      { "@type": "ListItem", "position": 3, "name": "Office Connect", "item": "https://querytel.com/officeconnect/" }
    ]
  }
  </script>
</head>


<body class="bg-white text-neutral-900 font-sans">
    <!-- HEADER -->
    <?php include("navbar.php"); ?>

    <!-- HERO -->

    <section class="bg-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <!-- Text Column -->
            <div data-aos="fade-right">

                <h1 class="text-5xl font-bold tracking-tight text-neutral-900 leading-tight">
                    <span class="text-orange-600 font-bold">Office Connect:</span> Seamless Communication, One Platform
                </h1>
                <p class="mt-6 text-lg text-gray-600">
                    Voice, video, messaging, and more — all unified under one powerful solution.
                    Designed for modern Canadian businesses that demand reliability and clarity.
                </p>
                <div class="mt-8 flex gap-4" data-aos="fade" data-aos-delay="500">
                    <a href="#contact"
                        class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">
                        Book a Demo
                    </a>
                    <a href="#features"
                        class="inline-block border border-neutral-900 text-neutral-900 px-6 py-3 rounded hover:bg-neutral-100 transition">
                        Explore Features
                    </a>
                </div>
            </div>

            <!-- Image Column -->
            <div data-aos="fade-left" data-aos-delay="200">
                <img src="<?= $base . '/assets/images/phones.png' ?>" alt="Office Connect Video Chat"
                    class="w-full max-w-xl mx-auto rounded-xl" />
            </div>

        </div>
    </section>




    <section class="bg-gray-50 py-24 overflow-hidden" id="features">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">

            <!-- Left Image with Decorative Circle -->
            <div class="relative w-full max-w-xl mx-auto" data-aos="fade-right" data-aos-delay="200">
                <div class="absolute -top-24 -left-24 z-0 animate-floatSlow rotate-45">
                    <div class="w-[320px] h-[320px] rounded-full border-[40px] border-blue-900 shadow-xl opacity-80">
                    </div>
                </div>
                <img src="<?= $base . '/assets/images/office-connect-2b.jpg' ?>" alt="Office Connect Illustration"
                    class="relative z-10 w-full rounded-xl shadow-xl" />
            </div>

            <!-- Right Content -->
            <div class="relative z-10 opacity-0 animate-fadeInRight">
                <h2 class="text-3xl font-semibold text-neutral-900 mb-4">
                    So, What Exactly is <span class="text-blue-900 font-bold">Office Connect?</span>
                </h2>
                <hr class="w-12 border-t-2 border-gray-300 mb-6" />
                <span
                    class="inline-block bg-orange-500 text-white text-xs font-semibold px-4 py-1 rounded mb-6 tracking-wide">
                    ACCESSIBLE, SECURE, AND SHARED TEAMWORK
                </span>
                <p class="text-gray-700 text-base leading-relaxed mb-3">
                    Say goodbye to bulky on-premise systems and hello to flexibility: no more juggling wires,
                    installations, or hardware headaches.
                </p>
                <p class="text-gray-700 text-base leading-relaxed">
                    Hosted PBX by QueryTel gives your team crystal-clear voice over a secure, private network. Work from
                    anywhere, scale instantly, and enjoy unified communication all in one low monthly fee.
                </p>
            </div>
        </div>
    </section>


    <section class="relative bg-no-repeat bg-top bg-[length:1600px_auto] md:bg-cover"
        style="background-image: url('<?= $base . '/assets/images/Callcenterscript-scaled.jpg' ?>');">

        <div class="bg-black/60 py-24 md:py-32">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center text-white">

                <!-- Left Content -->
                <div class="animate-fadeInLeft">
                    <h2 class="text-4xl font-extrabold leading-tight mb-4">
                        Simple, <span class="text-orange-400">Affordable</span>, Reliable!
                    </h2>
                    <div class="w-16 h-1 bg-white mb-6"></div>
                    <p class="text-lg text-white/90 leading-relaxed max-w-xl">
                        Office Connect from QueryTel helps you cut costs while empowering your team with unmatched
                        flexibility. Add or remove extensions instantly and take calls anywhere—your desk, tablet, or
                        smartphone. Everything’s managed, secure, and bundled into one simple monthly fee.
                    </p>
                </div>

                <!-- Right CTA Box -->
                <div
                    class="bg-white/10 p-10 rounded-2xl backdrop-blur-md shadow-xl text-center border border-white/10 animate-fadeInRight">
                    <h3 class="text-base font-semibold uppercase tracking-widest text-white/80 mb-5">
                        Speak to a QueryTel Specialist
                    </h3>
                    <div class="flex justify-center items-center mb-6">
                        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-orange-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 5l7 7-7 7M8 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                    <p class="text-xl md:text-2xl font-bold tracking-wide">
                        1-844-447-8379
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="relative bg-gray-900 text-white py-24">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

            <!-- Phone Image Right -->
            <div class="relative z-10 md:order-2">
                <img src="<?= $base . '/assets/images/polycom.png' ?>" alt="Polycom VVX 411"
                    class="w-full md:w-[110%] lg:w-[130%] max-w-5xl mx-auto md:ml-auto rounded-xl shadow-2xl animate-floatSlow h-auto object-contain" />
            </div>


            <!-- Offer Content Left -->
            <div class="relative z-10 md:order-1">
                <h2 class="text-4xl font-bold mb-6">
                    Limited Time Offer — <span class="text-orange-400">Office Connect</span>!
                </h2>

                <ul class="space-y-6 text-white/90 text-base leading-relaxed">
                    <li class="flex items-start gap-4">
                        <span class="text-orange-400 mt-1">•</span>
                        <div>
                            <strong>For Quantity: 5 or More Users</strong><br>
                            Includes Polycom VVX 411 IP phones with Office Connect Premium Package.
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="text-orange-400 mt-1">•</span>
                        <div>
                            <strong>$30.00/month/user</strong> with a 3-year contract.<br>
                            High-quality communication. No hidden fees.
                        </div>
                    </li>
                </ul>

                <div class="mt-10">
                    <h3 class="text-lg font-semibold mb-2">Call Now For More Info</h3>
                    <a href="tel:1-844-447-8379"
                        class="inline-block bg-orange-500 px-6 py-3 rounded-lg text-white text-lg font-bold shadow hover:bg-orange-600 transition">
                        1-844-447-8379
                    </a>
                </div>
            </div>
        </div>

        <!-- Decorative Glow -->
        <div
            class="absolute inset-0 bg-gradient-to-tr from-orange-500/10 via-transparent to-blue-600/10 z-0 pointer-events-none">
        </div>
    </section>

    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Header -->
            <div class="mb-16">
                <h2
                    class="text-3xl md:text-4xl font-semibold text-neutral-900 leading-tight tracking-tight md:leading-snug">
                    <span class="text-orange-500">Office Connect</span> simplifies how your team communicates
                </h2>
                <hr class="mt-4 w-20 border-t-2 border-orange-500" />
            </div>



            <!-- Cards -->
            <div class="grid md:grid-cols-2 gap-12 items-start relative z-10">
                <!-- Left Card -->
                <div class="bg-orange-50 p-8 rounded-xl shadow-xl relative" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/5426/5426385.png" alt="Collaboration Icon"
                            class="w-12 h-12 mr-4">
                        <h3 class="text-2xl font-bold text-neutral-900">Collaborate Anytime, Anywhere</h3>
                    </div>
                    <p class="text-gray-700 text-base leading-relaxed">
                        Office Connect effortlessly combines Outlook, MS Office, and Windows File Explorer documents
                        into SharePoint and Office 365. It’s user-friendly, so your team can add documents, emails, and
                        attachments with one tap.
                    </p>
                </div>

                <!-- Right Card -->
                <div class="bg-gray-50 p-8 rounded-xl shadow-xl relative" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="Admin Icon"
                            class="w-12 h-12 mr-4">
                        <h3 class="text-2xl font-bold text-neutral-900">Collaboration Made Easy</h3>
                    </div>
                    <p class="text-gray-700 text-base leading-relaxed">
                        Office Connect enables your team to onboard seamlessly with a central admin board. Find,
                        arrange, and manage documents from one platform. There is no need to deploy a server; use the
                        built-in web manager for smooth operations.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-gray-50 py-24">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

            <!-- Left: Text Content -->
            <div>
                <div class="flex items-center gap-4 mb-8">
                    <div class="bg-orange-500 p-3 rounded-xl shadow-md">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold text-neutral-900">Save Money</h2>
                        <div class="h-[2px] w-12 bg-gray-300 mt-2"></div>
                    </div>
                </div>

                <ul class="space-y-6 mt-10 text-gray-700 text-[1.05rem] leading-7">
                    <li class="flex gap-3">
                        <div class="mt-2 w-2 h-2 bg-orange-500 rounded-full shrink-0"></div>
                        Zero Upfront Cost
                    </li>
                    <li class="flex gap-3">
                        <div class="mt-2 w-2 h-2 bg-orange-500 rounded-full shrink-0"></div>
                        Pay-As-You-Go Model Is Available
                    </li>
                    <li class="flex gap-3">
                        <div class="mt-2 w-2 h-2 bg-orange-500 rounded-full shrink-0"></div>
                        Free Soft Phones Are Available
                    </li>
                    <li class="flex gap-3">
                        <div class="mt-2 w-2 h-2 bg-orange-500 rounded-full shrink-0"></div>
                        Fixed Monthly Cost
                    </li>
                    <li class="flex gap-3">
                        <div class="mt-2 w-2 h-2 bg-orange-500 rounded-full shrink-0"></div>
                        Add/Remove Users With Hassle-Free Maintenance
                    </li>
                    <li class="flex gap-3">
                        <div class="mt-2 w-2 h-2 bg-orange-500 rounded-full shrink-0"></div>
                        QueryTel Office Connect Is Cost-Effective And Easier To Manage And Maintain Versus Traditional
                        Box Phone Systems
                    </li>
                    <li class="flex gap-3">
                        <div class="mt-2 w-2 h-2 bg-orange-500 rounded-full shrink-0"></div>
                        Our Virtual Fax Service Allows You To Manage Your Faxes On An Online Portal With Confirmed
                        Delivery Report
                    </li>
                </ul>

            </div>


            <!-- Right: Image + Animated Glow -->
            <div class="relative">
                <div
                    class="absolute -top-10 -left-10 w-80 h-80 bg-orange-200 rounded-full  opacity-30 animate-floatSlow">
                </div>
                <img src="<?= $base ?>/assets/images/undraw_calculator_21hp.svg" alt="Save Money"
                    class="relative z-10 w-full max-w-sm mx-auto rounded-xl ">
            </div>

        </div>
    </section>

    <!-- <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16 text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-neutral-900">
                    Office Connect <span class="text-orange-500">Delivers More</span>
                </h2>
                <p class="mt-4 text-gray-600 text-lg max-w-2xl mx-auto">
                    Designed for efficiency, security, and control — all without the hassle.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">

               
                <div class="bg-orange-50 p-8 rounded-xl shadow-xl relative" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3079/3079048.png" alt="Security Icon"
                            class="w-12 h-12 mr-4" />
                        <h3 class="text-2xl font-bold text-neutral-900">Security is the top priority</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Office Connect removes compliance risks by adding primary documents into SharePoint and Office
                        365 with an automatic arrangement.
                    </p>
                </div>

               
                <div class="bg-gray-50 p-8 rounded-xl shadow-xl relative" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/854/854894.png" alt="Productivity Icon"
                            class="w-12 h-12 mr-4" />
                        <h3 class="text-2xl font-bold text-neutral-900">Increased Productivity</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        You can copy or transfer files from one application to another in seconds.
                    </p>
                </div>

               
                <div class="bg-gray-50 p-8 rounded-xl shadow-xl relative" data-aos="fade-right">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/2179/2179261.png" alt="Save Time Icon"
                            class="w-12 h-12 mr-4" />
                        <h3 class="text-2xl font-bold text-neutral-900">Save time</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        You can move emails and files into your desired location in seconds. You can share items
                        securely with partners with “view” or “edit” permissions.
                    </p>
                </div>

               
                <div class="bg-orange-50 p-8 rounded-xl shadow-xl relative" data-aos="fade-left">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/1302/1302809.png" alt="Reporting Icon"
                            class="w-12 h-12 mr-4" />
                        <h3 class="text-2xl font-bold text-neutral-900">Effective Reporting</h3>
                    </div>
                    <p class="text-gray-700 leading-relaxed">
                        Our report dashboard lets you see worker actions and incomplete or unsuccessful uploads in
                        Office Connect.
                    </p>
                </div>

            </div>
        </div>
    </section> -->

    <section class="bg-gray-50 py-24">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Icon + Heading -->
            <div class="flex items-center gap-4 mb-12">
                <div class="bg-orange-500 p-3 rounded-xl shadow-lg float-anim">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path d="M3 6h18M3 12h18M3 18h18" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-4xl font-bold text-gray-900">Features</h2>
                    <div class="w-16 h-1 mt-2 bg-gray-300"></div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="grid md:grid-cols-3 gap-10 text-gray-800 text-base">
                <ul class="space-y-4">
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Alternate Numbers
                    </li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Block Unknown Numbers
                    </li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Forwarding
                        Always</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Forwarding Busy
                    </li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Forwarding No
                        Answer</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Hold</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Park</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Pickup</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Return</li>
                </ul>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Transfer</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Call Waiting</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Do Not Disturb</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> HD Voice</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Hide My Number</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Last Number Redial
                    </li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Music on Hold</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Network Directory
                    </li>
                </ul>

                <ul class="space-y-4">
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Paging</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Select Your City</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Speed Dial</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Show Who's Calling
                        from Inside</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Show Who's Calling
                        from Outside</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> FREE QueryTel to
                        QueryTel Calling</li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Enhanced Voicemail
                    </li>
                    <li class="flex items-start gap-3"><span class="text-orange-600 mt-1">•</span> Voicemail to Email
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <style>
        @keyframes float-anim {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .float-anim {
            animation: float-anim 5s ease-in-out infinite;
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
            const iframe = document.querySelector("#map-iframe");
            if (!iframe) return;

            const observer = new IntersectionObserver(
                (entries) => {
                    if (entries[0].isIntersecting) {
                        iframe.src = iframe.dataset.src;
                        observer.disconnect();
                    }
                },
                { rootMargin: "200px" }
            );

            observer.observe(iframe);
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false,
            duration: 800,
            easing: 'ease-out-cubic',
            offset: 100,
        });

    </script>
</body>

</html>