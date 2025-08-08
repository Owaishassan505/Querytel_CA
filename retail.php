<?php $base = "/Querytel_CA"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Retail - Querytel Inc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
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

    <section class="bg-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <!-- Text Column -->
            <div class="opacity-0 animate-fadeInLeft">
                <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-neutral-900 leading-tight">
                    Let’s connect — your solution starts here.
                </h1>
                <p class="mt-6 text-lg text-gray-600">
                    Reach out to us across Canada for IT, cloud, and managed service
                    inquiries. We're always ready to talk tech or solve real-world
                    problems.
                </p>
                <div class="mt-8 flex gap-4 opacity-0 animate-fadeIn delay-500">
                    <a href="#contact"
                        class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">
                        Send Message
                    </a>
                    <a href="#map"
                        class="inline-block border border-neutral-900 text-neutral-900 px-6 py-3 rounded hover:bg-neutral-100 transition">
                        Find Us
                    </a>
                </div>
            </div>

            <!-- Image Column -->
            <div class="opacity-0 animate-fadeInRight delay-200">
                <img src="<?= $base ?>/assets/images/undraw_chat-with-ai_ir62.png" alt="Chat With AI Illustration"
                    class="w-full max-w-md mx-auto" />

            </div>
        </div>
    </section>


    <section class="bg-[#f9f9f9] py-36">
        <div class="max-w-[1440px] mx-auto px-6">

            <!-- Header -->
            <header class="text-center mb-28" data-aos="fade-up">
                <div class="h-1.5 w-14 bg-[#D83B01] mx-auto mb-6"></div>
                <h2 class="text-[56px] font-light text-[#1B1B1B] leading-tight tracking-tight">
                    Smarter Hardware for<br />
                    <span class="font-semibold text-[#D83B01]">Modern Retail Performance</span>
                </h2>
                <p class="mt-6 text-[20px] text-[#3A3A3A] leading-relaxed max-w-3xl mx-auto">
                    Engineered for speed, resilience, and control — our retail systems empower scale with seamless
                    connectivity and secure operation.
                </p>
            </header>

            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-12 gap-y-24">

                <!-- Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group"
                    data-aos="fade-up">
                    <div class="h-2 bg-[#D83B01]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/networking.jpg"
                            alt="Enterprise Networking"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3">Enterprise Networking</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Scalable switching and routing infrastructure — built to keep your retail environment fast
                            and resilient.
                        </p>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group"
                    data-aos="fade-up" data-aos-delay="100">
                    <div class="h-2 bg-[#D83B01]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/printer-2.jpg"
                            alt="Thermal Receipt Printers"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3">Thermal Receipt Printers</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Clean, crisp output every time — no jams, no noise. Optimized for frictionless checkouts.
                        </p>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group"
                    data-aos="fade-up" data-aos-delay="200">
                    <div class="h-2 bg-[#D83B01]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/RF-Scanners.jpg" alt="RF Scanners"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3">RF Scanners</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Ergonomic, accurate, fast. Empower real-time inventory with the right scanning tools.
                        </p>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="h-2 bg-[#D83B01]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Wireless.jpg" alt="Retail Wireless"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3">Retail Wireless</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Whole-floor Wi-Fi coverage, smart install logic, and seamless roaming for staff and POS
                            devices.
                        </p>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="h-2 bg-[#D83B01]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Mobile-Computers.jpg"
                            alt="Handheld Terminals"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3">Handheld Terminals</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Mobile command centers for retail staff — access orders, stock, and updates instantly.
                        </p>
                    </div>
                </div>

                <!-- Card -->
                <div class="bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition group"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="h-2 bg-[#D83B01]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/security-2.jpg" alt="Retail Firewall"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3">Retail Firewall</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Protect every device and transaction — perimeter defense, smart threat detection, always on.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- REQUEST EXPERT BUTTON -->
    <section class="py-16 bg-white text-center" data-aos="fade-up">
        <div class="max-w-4xl mx-auto px-6">
            <a href="<?= $base ?>/contactus"
                class="inline-block bg-[#D83B01] text-white font-semibold px-8 py-4 rounded-lg shadow-sm hover:bg-[#b93101] transition duration-300">
                Request an Expert
            </a>
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
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, easing: 'ease-out-cubic' });

    </script>
</body>

</html>