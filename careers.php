<?php $base = "/Querytel_CA"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Careers - Querytel Inc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        segoe: ['"Segoe UI"', 'Tahoma', 'Geneva', 'Verdana', 'sans-serif'],
                    },
                    colors: {
                        brandorange: '#f97316', // Primary
                        brandblue: '#0078D4', // Secondary
                        brandgray: '#f3f2f1'
                    },
                    keyframes: {
                        fadeUp: {
                            "0%": { opacity: 0, transform: "translateY(20px)" },
                            "100%": { opacity: 1, transform: "translateY(0)" },
                        }
                    },
                    animation: {
                        fadeUp: "fadeUp 0.8s ease-out forwards"
                    }
                },
            },
        };
    </script>
</head>

<body class="bg-brandgray text-neutral-900 font-segoe">

    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="relative bg-gradient-to-r from-brandorange to-brandblue text-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeUp">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight">
                    Build the Future with <span class="text-white">Querytel</span>
                </h1>
                <p class="mt-6 text-lg text-orange-50">
                    Join a team that protects enterprises, innovates in security, and shapes the future of technology in
                    Canada.
                </p>
                <div class="mt-8 flex gap-4">
                    <a href="#openings"
                        class="inline-block bg-white text-brandorange font-semibold px-6 py-3 rounded hover:bg-orange-50 transition">
                        View Open Roles
                    </a>
                    <a href="#life"
                        class="inline-block border border-white text-white px-6 py-3 rounded hover:bg-white hover:text-brandorange transition">
                        Life at Querytel
                    </a>
                </div>
            </div>
            <div class="relative animate-fadeUp delay-200">
                <div class="absolute -inset-4 bg-white/10 rounded-full blur-3xl"></div>
                <img src="<?= $base ?>/assets/images/team-collab.jpg" alt="Team collaboration"
                    class="relative z-10 w-full max-w-md mx-auto rounded-xl shadow-2xl object-cover h-96" />
            </div>
        </div>
    </section>

    <section class="bg-gray-50 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto">
                <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-gray-900">
                    Join <span class="text-brandorange">QueryTel</span>
                </h1>
                <p class="mt-4 text-lg text-gray-600">
                    Be part of a growing team that’s shaping the future of technology solutions across Canada.
                    Explore opportunities to innovate, learn, and lead.
                </p>
            </div>

            <!-- Intro Image -->
            <div class="mt-10 rounded-xl overflow-hidden shadow-lg">
                <img src="<?= $base ?>/assets/images/team-collab.jpg" alt="Team working together"
                    class="w-full object-cover h-72 md:h-96" />
            </div>

            <!-- Why Join Us -->
            <div class="mt-16 grid md:grid-cols-3 gap-10">
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-8">
                    <h3 class="text-xl font-semibold text-gray-900">Innovative Culture</h3>
                    <p class="mt-3 text-gray-600">
                        Work in an environment that fosters creativity, collaboration, and the freedom to bring your
                        ideas to life.
                    </p>
                </div>
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-8">
                    <h3 class="text-xl font-semibold text-gray-900">Growth & Learning</h3>
                    <p class="mt-3 text-gray-600">
                        Access training, certifications, and mentorship programs to expand your skills and career path.
                    </p>
                </div>
                <div class="bg-white rounded-xl shadow-sm hover:shadow-md transition p-8">
                    <h3 class="text-xl font-semibold text-gray-900">Impactful Work</h3>
                    <p class="mt-3 text-gray-600">
                        Join projects that make a real difference in security, networking, and IT solutions across
                        industries.
                    </p>
                </div>
            </div>

            <!-- Job Listings -->
            <div id="openings" class="mt-20">
                <h2 class="text-3xl font-bold text-gray-900 text-center">Current Openings</h2>
                <div class="mt-10">
                    <div class="bg-white rounded-xl shadow-sm p-10 text-center max-w-2xl mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-brandblue mb-4"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 16h-1v-4h-1m1 4h.01M12 8h.01M21 12c0 4.418-3.582 8-8 8s-8-3.582-8-8 3.582-8 8-8 8 3.582 8 8z" />
                        </svg>
                        <p class="text-lg text-gray-700 font-medium">
                            We don’t have any open positions at the moment.
                        </p>
                        <p class="mt-2 text-gray-500">
                            Please check back later or send us your resume — we’ll keep it on file for future
                            opportunities.
                        </p>
                        <a href="<?= $base . '/contactus' ?>"
                            class="mt-6 inline-block bg-brandorange hover:bg-orange-600 text-white px-6 py-3 rounded-lg shadow transition">
                            Send Your Resume
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-brandorange text-white text-center">
        <h2 class="text-3xl font-bold">Ready to Join Us?</h2>
        <p class="mt-4">We’re always on the lookout for talented, driven individuals to join our growing team.</p>
        <a href="#openings"
            class="mt-6 inline-block bg-white text-brandorange font-semibold px-8 py-3 rounded hover:bg-orange-50 transition">
            Explore Careers
        </a>
    </section>

    <?php include("footer.php"); ?>

</body>

</html>