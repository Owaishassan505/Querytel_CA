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

            <div>
                <h2 class="text-2xl md:text-3xl font-semibold text-neutral-900">
                    Managed IT Services, Cybersecurity & Cloud Solutions in North America
                </h2>
                <h3 class="text-xl font-medium text-neutral-700 mt-2 mb-4">
                    Empowering Businesses Since 1995
                </h3>
                <p class="text-gray-700 text-base leading-relaxed">
                    QueryTel provides Managed IT Services, Cybersecurity, and Cloud Solutions in North America to help
                    businesses stay secure and efficient. Founded in 1995, we specialize in helping businesses across
                    various industries—manufacturing, cold storage, engineering, and law firms—by delivering secure,
                    scalable, and cost-effective IT solutions tailored to their unique needs.
                    <br /><br />
                    At QueryTel, we believe in three core principles:<br />
                    <strong>Continuous Optimization</strong>: Adapting technology to improve efficiency.<br />
                    <strong>Continuous Progression</strong>: Staying ahead with the latest innovations.<br />
                    <strong>Excellence</strong>: Delivering high-quality, reliable IT solutions.
                    <br /><br />
                    From manufacturing firms and cold storage facilities to engineering and law firms, we help
                    businesses achieve seamless IT infrastructure and long-term success.
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
                            <div class="h-full bg-orange-500 w-[90%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Cybersecurity & Network Security</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-emerald-500 w-[85%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Cloud Solutions</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-blue-500 w-[75%] rounded-full"></div>
                        </div>
                    </div>

                    <div>
                        <p class="text-sm font-medium text-neutral-800 mb-1">Hosting & Domain Services</p>
                        <div class="h-2 bg-neutral-200 rounded-full overflow-hidden">
                            <div class="h-full bg-rose-500 w-[65%] rounded-full"></div>
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
                    across Canada</h3>
                <div class="h-0.5 w-10 bg-neutral-300 mb-6"></div>
                <p class="text-gray-600 text-sm leading-relaxed">
                    QueryTel harnesses our deep-rooted relationships with adept IT partners to help our clients. We
                    provide bespoke end-to-end managed IT solutions, from ISP selection to individual devices like PCs,
                    printers, and mobile computers.
                </p>
            </div>

            <!-- Center: Image -->
            <div class="flex justify-center">
                <img src="https://querytel.com/wp-content/uploads/2021/10/professional-experience-1-429-x-469.png"
                    alt="Happy clients" class="rounded-lg shadow-md w-full max-w-md" />
            </div>

            <!-- Right: 26 Years Experience -->
            <div>
                <h3 class="text-4xl font-bold text-orange-600 leading-tight">
                    <span class="block">Time-Tested </span>
                    <span class="text-neutral-900">Solutions & Experience</span>
                </h3>
                <div class="h-0.5 w-10 bg-neutral-300 my-6"></div>
                <p class="text-gray-600 text-sm leading-relaxed">At QueryTel, we invest time to understand your business
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
                    computers, we ensure seamless integration of technology into your business.
                </p>

                <p class="text-lg text-gray-700 leading-relaxed mt-6">
                    With over 26 years of experience, we take a time-tested approach to IT solutions. Our experts invest
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