<?php $base = "/Querytel_CA"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Querytel Inc</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                        fadeIn: {
                            "0%": { opacity: 0 },
                            "100%": { opacity: 1 },
                        },
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
</head>

<body class="bg-white text-neutral-900 font-sans">
    <!-- HEADER -->
    <?php include("navbar.php"); ?>

    <!-- HERO -->

    <section class="bg-white py-24">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <!-- Left Column: Text -->
            <div>
                <h1 class="text-4xl md:text-5xl font-bold text-neutral-900 leading-tight">
                    Managed Services
                </h1>
                <p class="mt-4 text-lg text-gray-700 max-w-xl">
                    Total care for your infrastructure, IT, and everything in between. Reliable, scalable, and just the
                    way enterprise IT should feel.
                </p>
            </div>

            <!-- Right Column: Image -->
            <div>
                <img src="https://querytel.com/wp-content/uploads/2025/02/Blue-Modern-7-Step-Types-Of-Waste-Diagram-Timeline-Infographic-Brainstorm.png"
                    alt="Managed Services Graphic" class="w-full max-w-lg mx-auto rounded-xl shadow-md" />
            </div>

        </div>
    </section>



    <section class="bg-white py-24">
        <!-- HERO -->
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-neutral-900">
                Let’s Talk
            </h1>
            <p class="mt-4 text-gray-600 text-lg">
                Reach out to us at any of our locations across Canada.
            </p>
        </div>
    </section>


    <section class="bg-gray-50 py-24">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

            <!-- Left Column -->
            <div class="animate-fadeInLeft">
                <p class="text-sm uppercase tracking-wide text-orange-600 font-semibold mb-2">
                    Looking for managed services? We can help!
                </p>
                <h2 class="text-3xl font-bold text-neutral-900 mb-6">
                    Starting from <span class="text-blue-700">$50/User</span>
                </h2>
                <h3 class="text-xl font-semibold text-neutral-800 mb-6">Managed Services Includes:</h3>

                <ul class="space-y-6 text-gray-700 text-base leading-relaxed">
                    <li class="flex items-start gap-3">
                        <span class="text-blue-600 mt-1">•</span>
                        Desktop/Notebook PCs: OS optimization, antivirus, remote support, yearly cleanup & more.
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-600 mt-1">•</span>
                        Servers: User management, backups, server log monitoring, onsite/remote support.
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-blue-600 mt-1">•</span>
                        24/7 Firewall Device Monitoring with reports & alerts.
                    </li>
                </ul>

                <div class="mt-8 flex items-center gap-3 group hover:scale-105 transition-transform">
                    <svg class="w-6 h-6 text-orange-500 group-hover:text-orange-600" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2 8.5l7.5 7.5M2 16l5-5 6.5 6.5L8 22l-6-6z" />
                    </svg>
                    <span class="text-xl font-semibold text-neutral-900 group-hover:text-blue-700 transition">
                        1-844-447-8379
                    </span>
                </div>
            </div>

            <!-- Right Column -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 animate-fadeInRight delay-200">
                <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path d="M9 12h6M12 3v3m0 15v-3m9-6h-3M6 12H3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm font-medium text-neutral-800">Secure Remote Desktop & On-Site Support</span>
                </div>

                <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path d="M3 3h18v18H3z" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm font-medium text-neutral-800">Office Connect</span>
                </div>

                <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path d="M6 2v20M18 2v20M6 6h12M6 18h12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm font-medium text-neutral-800">IP Telephone System</span>
                </div>

                <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path d="M12 12l8-5-8-5-8 5 8 5zm0 0v8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm font-medium text-neutral-800">Cloud Services & Security</span>
                </div>

                <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path d="M4 4h16v4H4zM4 16h16v4H4zM4 10h16v4H4z" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm font-medium text-neutral-800">Desktops, Servers & Network Equipment</span>
                </div>

                <div class="flex items-start gap-4 p-4 rounded hover:bg-gray-50 transition">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path d="M2 12h4M18 12h4M12 2v4M12 18v4" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="text-sm font-medium text-neutral-800">Fiber & Wireless Connectivity</span>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-white py-24">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

            <!-- Left Block -->
            <div class="space-y-6 animate-fadeInLeft">
                <img src="https://querytel.com/wp-content/uploads/2021/10/Helpdesk-support-768x512.jpg"
                    alt="IT Monitoring" class="w-full max-w-md mx-auto md:mx-0 rounded" />
                <h3 class="text-2xl md:text-3xl font-semibold text-neutral-900 leading-tight">
                    We Monitor the IT Infrastructure of Your Business While Your Competitors are Fast Asleep
                </h3>
                <div class="h-px w-20 bg-gray-300"></div>
                <p class="text-gray-700 leading-relaxed text-base">
                    Yes, Querytel offers exclusive 24 hours helpdesk support to all our clients. It means that a
                    dedicated team of IT masters is always available if you need any IT support 24 hours a day.
                </p>
                <p class="text-gray-700 leading-relaxed text-base">
                    We use HIPAA-compliant support software for mission-critical infrastructure as we believe in
                    providing the very best to our clients.
                </p>
            </div>

            <!-- Right Block -->
            <div class="space-y-6 animate-fadeInRight">
                <img src="https://querytel.com/wp-content/uploads/2021/10/cyber-security-live-monitoring-4-768x512.jpg"
                    alt="Cyber Security" class="w-full max-w-md mx-auto md:mx-0 rounded shadow-lg" />
                <h3 class="text-2xl md:text-3xl font-semibold text-neutral-900 leading-tight">
                    Cyber Security Live Monitoring:
                    <span class="block text-blue-700 font-bold mt-2">Your Security Is Our Priority</span>
                </h3>
                <div class="h-px w-20 bg-gray-300"></div>
                <p class="text-gray-700 leading-relaxed text-base">
                    In 2021, organizations have to spend $13.0 million in case of cybercrime on average. In 2020,
                    Canadians reported over 63,000 cyber incidents.
                </p>
                <p class="text-gray-700 leading-relaxed text-base">
                    These statistics are horrifying. That’s why we have decided to provide live cyber security
                    monitoring to businesses, as research suggests that most companies detect cyber-attacks after
                    months.
                </p>
                <p class="text-gray-700 leading-relaxed text-base">
                    Our cyber security solutions include SEM (Security Event Information Management) based on monitoring
                    and notifying services, patches detection & analysis, ethical hacking for testing, and regular
                    expert-led cybersecurity evaluations.
                </p>
            </div>
        </div>

        <!-- Image Row -->
        <div class="mt-24 grid md:grid-cols-2 gap-8 max-w-7xl mx-auto px-6 animate-fadeIn delay-200">
            <img src="https://querytel.com/wp-content/uploads/2021/10/Insurance-b-768x512.jpg" alt="Insurance Tech"
                class="w-full h-auto rounded-lg shadow-md" />
            <img src="https://querytel.com/wp-content/uploads/2021/10/Ultramodern-Server-Location-3b-768x512.jpg"
                alt="Data Center" class="w-full h-auto rounded-lg shadow-md" />
        </div>

        <!-- Extra Text Section -->
        <div class="max-w-7xl mx-auto px-6 mt-12 grid md:grid-cols-2 gap-16 items-start">

            <div class="space-y-4">
                <h3 class="text-2xl md:text-3xl font-semibold text-neutral-900 leading-tight">
                    Insured for

                    Liability
                </h3>
                <div class="h-px w-20 bg-gray-300"></div>
                <p class="text-gray-700 leading-relaxed text-base">
                    Our in-house server, cloud, cybersecurity, and network experts embody only the highest level of
                    professionalism and etiquette. But, we still allocate a standing $5 million liability insurance for
                    any project or service provided by us so that our clients can rest assured any damage or injury
                    incurred onsite happens without incident.
                </p>
            </div>
            <div class="space-y-4">
                <h3 class="text-2xl md:text-3xl font-semibold text-neutral-900 leading-tight">
                    Offensive and Defensive Safety Services
                </h3>
                <div class="h-px w-20 bg-gray-300"></div>
                <p class="text-gray-700 leading-relaxed text-base">
                    At QueryTel, we offer all of our clients the option to store their critical business data in the
                    heart of the GTA in Toronto at 151 Front Street: in a state-of-the-art facility with temperature,
                    security, and power redundancies.
                </p>
            </div>
        </div>
    </section>

    <section class="relative bg-neutral-900 text-white py-24 overflow-hidden">
        <div class="absolute inset-0">
            <img src="your-worker-image.jpg" alt="Background Workers" class="w-full h-full object-cover opacity-20">
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

            <!-- Left Panel -->
            <div class="space-y-6">
                <span class="inline-block bg-orange-500 text-white font-semibold px-4 py-2 rounded">ONLINE
                    APPOINTMENTS</span>
                <div class="h-1 w-20 bg-white opacity-50"></div>
                <h2 class="text-3xl font-bold leading-tight">
                    Want higher productivity, competence, agility, and competitive benefit for your business?
                </h2>
                <p class="text-gray-300">
                    The Covid-19 pandemic has changed markets and caused new buying behaviors. A state-of-the-art IT
                    infrastructure is more vital than ever.
                </p>
                <p class="text-gray-300">
                    An outdated IT infrastructure results in connection failures; thereby, your workflow suffers from
                    the incapability to gauge and respond.
                </p>
                <p class="text-gray-300">
                    In your quest to meet your company’s objectives and beat your competitors, you feel overwhelmed and
                    vulnerable with the issues in your IT systems.
                </p>
                <p class="text-gray-300">
                    It’s time to refresh and renew your IT infrastructure with our help!
                </p>
                <div class="h-1 w-20 bg-white opacity-50"></div>
            </div>

            <!-- Right Panel -->
            <div class="bg-white/5 backdrop-blur-md p-8 rounded-lg shadow-lg space-y-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M5.121 17.804A13.937 13.937 0 0112 15c2.21 0 4.29.535 6.121 1.476M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Free On-Site Consultation</h3>
                </div>
                <p class="text-gray-200">
                    Our onsite network assessment identifies the equipment and infrastructure that needs to be improved
                    or upgraded and reviews existing or potential performance issues.
                </p>
                <p class="text-gray-200">
                    If we discover such problems during the network assessment, we can provide a detailed plan to
                    resolve the problem while optimizing your overall network performance for maximum efficiency.
                </p>
                <p class="text-gray-200">
                    Remember, a state-of-the-art IT infrastructure is the lifeline of a thriving, innovative and
                    unstoppable business.
                </p>
                <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold px-6 py-2 rounded transition">
                    Book
                </button>
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
    <section id="contact" class="py-20">
        <div class="max-w-3xl mx-auto px-6">
            <h3 class="text-2xl font-semibold mb-8 text-center">Contact Us</h3>
            <form class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <input type="text" placeholder="Your Name" class="w-full border border-black px-4 py-3 rounded"
                        required />
                    <input type="email" placeholder="Email Address" class="w-full border border-black px-4 py-3 rounded"
                        required />
                </div>
                <input type="tel" placeholder="Phone Number" class="w-full border border-black px-4 py-3 rounded"
                    required />
                <textarea rows="4" placeholder="Your Message"
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