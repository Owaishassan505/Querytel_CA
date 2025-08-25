<?php $base = "https://itcold.com/"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Contact QueryTel Inc — Sales & Support in North America</title>
    <meta name="description"
        content="Get in touch with QueryTel Inc. for managed IT, cybersecurity, and cloud services. Call our Toronto HQ or reach our support desk. Open Mon–Fri, 8am–5pm." />
    <meta name="robots" content="index,follow,max-image-preview:large" />
    <link rel="canonical" href="https://querytel.com/contactus/" />
    <link rel="alternate" hreflang="en-ca" href="https://querytel.com/contactus/" />
    <meta name="theme-color" content="#0f172a" />

    <!-- Open Graph -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact QueryTel Inc — Sales & Support in North America" />
    <meta property="og:description"
        content="Speak with a local expert or open a support ticket. Toronto HQ and North America-wide service." />
    <meta property="og:url" content="https://querytel.com/contactus/" />
    <meta property="og:site_name" content="QueryTel Inc." />
    <meta property="og:locale" content="en_CA" />
    <meta property="og:image"
        content="https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact QueryTel Inc — Sales & Support in North America" />
    <meta name="twitter:description"
        content="Call our Toronto HQ or reach the support portal. Open Mon–Fri, 8am–5pm." />
    <meta name="twitter:image"
        content="https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png" />

    <!-- Icons -->
    <link rel="icon" href="/favicon.ico" sizes="any" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

    <!-- Performance hints -->
    <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.tailwindcss.com">

    <!-- Tailwind (you’re using it inline) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Page animations (kept) -->
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

    <style>
        @keyframes techPulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 1;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.85;
            }
        }

        .animate-techPulse {
            animation: techPulse 2s ease-in-out infinite;
        }
    </style>

    <!-- Schema: Organization (site-wide entity) -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "@id": "https://querytel.com/#org",
    "name": "QueryTel Inc.",
    "url": "https://querytel.com/",
    "logo": "https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png",
    "description": "Managed IT, cybersecurity, and cloud solutions for Canadian businesses.",
    "foundingDate": "1995",
    "sameAs": ["https://www.linkedin.com/company/querytel"],
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "7025 Tomken Road, Suite 244",
      "addressLocality": "Mississauga",
      "addressRegion": "ON",
      "postalCode": "L5S 1R6",
      "addressCountry": "CA"
    },
    "contactPoint": [{
      "@type": "ContactPoint",
      "contactType": "Sales",
      "telephone": "+1-844-447-8379",
      "areaServed": "CA",
      "availableLanguage": ["en"]
    },{
      "@type": "ContactPoint",
      "contactType": "Technical Support",
      "email": "support@querytel.com",
      "url": "https://helpdesk.querytel.com/portal/en/home",
      "areaServed": "CA",
      "availableLanguage": ["en"]
    }]
  }
  </script>

    <!-- Schema: LocalBusiness (HQ) -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"LocalBusiness",
    "@id":"https://querytel.com/#hq",
    "name":"QueryTel Inc — Toronto HQ",
    "url":"https://querytel.com/",
    "image":"https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png",
    "telephone":"+1-416-477-1380",
    "address":{
      "@type":"PostalAddress",
      "streetAddress":"7025 Tomken Road, Suite 244",
      "addressLocality":"Mississauga",
      "addressRegion":"ON",
      "postalCode":"L5S 1R6",
      "addressCountry":"CA"
    },
    "geo":{"@type":"GeoCoordinates","latitude":43.6519,"longitude":-79.6803},
    "openingHoursSpecification":[{
      "@type":"OpeningHoursSpecification",
      "dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens":"08:00","closes":"17:00"
    }],
    "parentOrganization":{"@id":"https://querytel.com/#org"}
  }
  </script>

    <!-- Schema: WebSite (sitelinks + search) -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"WebSite",
    "@id":"https://querytel.com/#website",
    "url":"https://querytel.com/",
    "name":"QueryTel Inc.",
    "inLanguage":"en-CA",
    "publisher":{"@id":"https://querytel.com/#org"},
    "potentialAction":{
      "@type":"SearchAction",
      "target":"https://querytel.com/?s={search_term_string}",
      "query-input":"required name=search_term_string"
    }
  }
  </script>

    <!-- Schema: ContactPage (page-specific) -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"ContactPage",
    "@id":"https://querytel.com/contactus/#contactpage",
    "url":"https://querytel.com/contactus/",
    "name":"Contact QueryTel Inc",
    "inLanguage":"en-CA",
    "about":{"@id":"https://querytel.com/#org"},
    "breadcrumb":{"@id":"https://querytel.com/contactus/#breadcrumb"},
    "primaryImageOfPage":{"@type":"ImageObject","url":"https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png"},
    "lastReviewed":"2025-08-18"
  }
  </script>

    <!-- Schema: BreadcrumbList (Home > Contact) -->
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
</head>


<body class="bg-white text-neutral-900 font-sans">
    <!-- HEADER -->
    <?php include("navbar.php"); ?>

    <!-- HERO -->

    <!-- Hero Section -->
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-neutral-900">
                Who We Are
            </h1>
            <p class="mt-4 text-gray-600 text-lg">
                Delivering secure IT solutions and trusted infrastructure to Canadian businesses since 1995.
            </p>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative">

            <!-- Left: Image with floating circle -->
            <div class="relative">
                <div
                    class="absolute -top-6 -left-6 w-48 h-48 bg-[#d9e3ff] rounded-full opacity-60 z-0 animate-pulse-slow">
                </div>
                <img src="<?= $base ?>/assets/images/undraw_online-community_3o0l.png" alt="About Us Illustration"
                    class="relative z-10 rounded-xl shadow-lg" />
            </div>

            <!-- Right: Text -->
            <div>
                <h2 class="text-2xl md:text-3xl font-semibold text-neutral-900">
                    Managed IT Services, Cybersecurity & Cloud Solutions in North America
                </h2>
                <h3 class="text-xl font-medium text-neutral-700 mt-2 mb-4">
                    Empowering Businesses Since 1995
                </h3>
                <p class="text-gray-700 text-base leading-relaxed">
                    At <span class="font-semibold">QueryTel</span>, we deliver more than just Managed IT Services,
                    Cybersecurity,
                    and Cloud Solutions. Since 1995, we’ve been helping businesses across North America stay
                    <span class="font-semibold">secure, efficient, and future-ready</span>. Our expertise extends to
                    industries
                    such as <span class="font-semibold">manufacturing, cold storage, engineering, and law firms</span>,
                    where we
                    provide scalable, reliable, and cost-effective IT solutions.
                    <br /><br />
                    In addition to our core IT services, we also offer
                    <span class="font-semibold">product development and custom programming</span>, enabling companies to
                    build
                    smarter solutions that fit their unique needs and drive growth.
                    <br /><br />
                    Our core principles guide everything we do:<br /><br />
                    <span class="font-semibold">Continuous Optimization</span> – Enhancing technology to maximize
                    efficiency.<br />
                    <span class="font-semibold">Continuous Progression</span> – Adopting innovations to keep clients
                    ahead.<br />
                    <span class="font-semibold">Excellence</span> – Delivering secure, high-quality, and dependable IT
                    solutions.
                    <br /><br />
                    Whether it’s <span class="font-semibold">strengthening IT infrastructure</span> or
                    <span class="font-semibold">developing custom-built software</span>, QueryTel is your trusted
                    partner for
                    seamless technology and long-term success.
                </p>
            </div>

        </div>
    </section>


    <!-- Optional CSS for animation -->
    <style>
        @keyframes pulse-slow {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.6;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 6s infinite;
        }
    </style>
    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- Left Column -->
            <div>
                <span class="uppercase text-sm font-semibold text-orange-600 tracking-wider">Our Skills</span>
                <h2 class="text-3xl md:text-4xl font-bold mt-2 text-neutral-900">Our Expertise</h2>
                <p class="text-gray-600 mt-4 mb-8">At QueryTel, we specialize in:</p>

                <div class="space-y-6">

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Managed IT Services</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-orange-500 w-[100%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Cybersecurity & Network Security</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-emerald-600 w-[100%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Cloud Solutions</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-sky-500 w-[100%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Hosting & Domain Services</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-rose-600 w-[100%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Development</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-indigo-500 w-[100%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Marketing</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-yellow-500 w-[100%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">24/7 Helpdesk</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-purple-500 w-[100%] rounded-full"></div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Right Column: Image -->
            <div class="relative">
                <div
                    class="absolute -top-8 -left-8 w-48 h-48 border-8 border-blue-200 rounded-full z-0 animate-pulse-slow">
                </div>

                <img src="<?= $base ?>/assets/images/undraw_ideas_vn7a.png" alt="Expertise Illustration"
                    class="relative z-10 w-full max-w-md mx-auto transform scale-x-[-1]" />
            </div>
        </div>
    </section>


    <!-- Animation Style -->
    <style>
        @keyframes pulse-slow {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.6;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        .animate-pulse-slow {
            animation: pulse-slow 5s infinite;
        }
    </style>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12 items-center">
            <!-- Left: Our Clients -->
            <div>
                <h3 class="text-2xl text-neutral-900 mb-4">Proud Partners of Over <b>50 Leading IT Consultants</b>
                    across North America</h3>
                <div class="h-0.5 w-10 bg-neutral-300 mb-6"></div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    At QueryTel, collaboration is at the heart of what we do. We proudly partner with over 50 of
                    Canada’s top IT consultants, combining their expertise with our innovative solutions to deliver
                    exceptional value to businesses nationwide. Together, we ensure organizations have access to the
                    latest technologies, strategic insights, and reliable support that drive long-term success.
                </p>
            </div>

            <!-- Center: Image -->
            <div class="flex justify-center">
                <img src="<?= $base . '/assets/images/undraw_personal-goals_f9bb.svg' ?>" alt="Happy clients"
                    class="rounded-lg w-full max-w-md h-96" />
            </div>

            <!-- Right: 26 Years Experience -->
            <div>
                <h3 class="text-4xl font-bold text-orange-600 leading-tight">
                    <span class="block">Time-Tested </span>
                    <span class="text-neutral-900">Solutions & Experience</span>
                </h3>
                <div class="h-0.5 w-10 bg-neutral-300 my-6"></div>
                <p class="text-gray-600 text-sm leading-relaxed">At QueryTel, we invest time understanding your business
                    goals and long-term vision. Our IT experts ensure that your technology aligns perfectly with your
                    <b>growth strategy, modernization needs, and competitive edge.</b>
                </p>
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="max-w-3xl md:max-w-4xl border-l-4 border-blue-600 pl-6">


                <!-- Techy Circuit Icon -->
                <div class="mb-4">
                    <svg class="w-10 h-10 text-blue-600 animate-techPulse" fill="none" stroke="currentColor"
                        stroke-width="1.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h6M12 3v3m0 15v-3m9-6h-3M6 12H3m15.5-6.5l-2.12 2.12M6.5 6.5l2.12 2.12m8.48 8.48l2.12-2.12M6.5 17.5l2.12-2.12" />
                    </svg>
                </div>


                <!-- Section Label -->
                <p class="uppercase text-sm tracking-wider text-blue-600 font-semibold mb-3">Why Choose Us</p>

                <!-- Main Heading -->
                <h2 class="text-4xl font-bold text-neutral-800 leading-tight mb-6">
                    Cybersecurity and Cloud Solutions
                </h2>

                <!-- Paragraphs -->
                <p class="text-lg text-gray-700 leading-relaxed">
                    QueryTel harnesses deep-rooted relationships with adept IT partners to provide bespoke, end-to-end
                    managed IT solutions. From ISP selection to individual devices like PCs, printers, and mobile
                    computers, we ensure seamless technology integration into your business.
                </p>

                <p class="text-lg text-gray-700 leading-relaxed mt-6">
                    With over 30+ years of experience, we take a time-tested approach to IT solutions. Our experts
                    invest
                    time to understand your business goals and long-term vision, ensuring that your technology aligns
                    perfectly with your growth strategy, modernization needs, and competitive edge.
                </p>

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
</body>

</html>