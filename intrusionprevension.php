<?php $base = "https://demo.querytel.ca"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Querytel Inc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4/dist/css/splide.min.css">

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
                    Stop Intrusions <span class="text-orange-500">Before</span> They Happen.
                </h1>
                <p class="mt-6 text-lg text-gray-600">
                    From warehouses to retail, our access control and live video monitoring keep criminals out and your
                    assets secure 24/7, across North America.
                </p>
                <div class="mt-8 flex gap-4 opacity-0 animate-fadeIn delay-500">
                    <a href="#contact"
                        class="inline-block bg-orange-500 text-white px-6 py-3 rounded hover:bg-orange-600 transition">
                        Get Protected
                    </a>
                    <a href="#logo-slider"
                        class="inline-block border border-orange-500 text-orange-500 px-6 py-3 rounded hover:bg-orange-50 transition">
                        See Coverage
                    </a>
                </div>
            </div>

            <!-- Image Column -->
            <div class="opacity-0 animate-fadeInRight delay-200 relative">
                <!-- Glow effect -->
                <div class="absolute -inset-6 rounded-full bg-orange-500/20 blur-3xl animate-glow"></div>
                <img src="<?= $base ?>/assets/images/undraw_projections_fhch.svg" alt="Intrusion Prevention"
                    class="relative z-10 w-full max-w-md mx-auto rounded-xl shadow-2xl object-cover animate-float" />
            </div>
        </div>
    </section>

    <style>
        @keyframes float {

            0%,
            100% {
                transform: translateY(-12px);
            }

            50% {
                transform: translateY(12px);
            }
        }

        @keyframes glowPulse {

            0%,
            100% {
                opacity: 0.3;
                transform: scale(1);
            }

            50% {
                opacity: 0.6;
                transform: scale(1.05);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        .animate-glow {
            animation: glowPulse 5s ease-in-out infinite;
        }
    </style>





    <section class="relative bg-gray-50 py-20 overflow-hidden">
        <!-- Top Heading -->
        <div class="text-center max-w-4xl mx-auto px-6 mb-20">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight">
                Criminals are constantly
                <span class="text-blue-900">Honing</span> Their Skills!!
            </h2>
            <p class="mt-4 text-gray-700 text-base md:text-lg">
                Are you well equipped to secure your well-built business from unwanted intrusions?
            </p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-6"></div>
        </div>

        <!-- Content Area -->
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center relative z-10">
            <!-- Text -->
            <div class="text-gray-900">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">
                    ACCESS CONTROL: Don’t Compromise on Protection
                </h3>
                <div class="w-12 h-1 bg-orange-500 mb-6"></div>
                <p class="text-gray-700 text-base md:text-lg mb-4">
                    Yes, business protection is essential, so you should never ignore it. Secure your office building,
                    industrial site, warehouse, or residential area with our Access Control Systems. Our access systems
                    allow you to control and monitor entry and exits from the door or main gates. Our altered solutions
                    allow you to control crimes and unauthorized persons' entry, enhance the security of office staff,
                    and more.
                </p>
                <ul class="mt-6 space-y-4 text-gray-800 text-base md:text-lg">
                    <li class="flex items-start gap-3">
                        <span
                            class="mt-2 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15">
                            <span class="w-2 h-2 rounded-full" style="background:var(--accent,#f97316)"></span>
                        </span>
                        Reduce costs by replacing security guards with access control
                    </li>
                    <li class="flex items-start gap-3">
                        <span
                            class="mt-2 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15">
                            <span class="w-2 h-2 rounded-full" style="background:var(--accent,#f97316)"></span>
                        </span>
                        Verify all drivers moving in and out of your facilities
                    </li>
                    <li class="flex items-start gap-3">
                        <span
                            class="mt-2 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15">
                            <span class="w-2 h-2 rounded-full" style="background:var(--accent,#f97316)"></span>
                        </span>
                        Monitor visitors
                    </li>
                    <li class="flex items-start gap-3">
                        <span
                            class="mt-2 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15">
                            <span class="w-2 h-2 rounded-full" style="background:var(--accent,#f97316)"></span>
                        </span>
                        Get live video monitoring to ensure a safe and secure environment
                    </li>
                </ul>
            </div>
            <!-- Image with circle -->
            <div class="relative">
                <!-- Circle behind image -->
                <div class="absolute -top-16 -left-16 z-0">
                    <div class="w-[360px] h-[360px] border-[40px] rounded-full animate-float-fast"
                        style="border-color: #0602ff; opacity: 0.3"></div>
                </div>

                <!-- Image -->
                <img src="<?= $base . '/assets/images/Access-Control.jpg' ?>" alt="Cloud PBX"
                    class="relative z-10 w-full max-w-md mx-auto rounded-xl shadow-2xl object-cover" />
            </div>
        </div>
    </section>

    <style>
        @keyframes floatFast {

            0%,
            100% {
                transform: translateY(-50px);
            }

            50% {
                transform: translateY(50px);
            }
        }

        .animate-float-fast {
            animation: floatFast 3s ease-in-out infinite;
        }
    </style>

    <section class="bg-[#1b1e27] py-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10">
            <!-- Card: Construction -->
            <article class="rounded-xl bg-white/5 ring-1 ring-white/10 shadow-[0_8px_30px_rgba(0,0,0,.25)] p-8">
                <h3 class="text-center text-xl font-semibold text-white">Construction</h3>

                <div class="mt-6 rounded-md overflow-hidden border border-white/10 shadow">
                    <img src="<?= $base . '/assets/images/construction.jpg' ?>" alt="Construction site"
                        class="w-full h-64 object-cover" />
                </div>

                <p class="mt-6 text-[15px] leading-relaxed text-slate-200">
                    According to estimates, construction companies in North America lose half a billion dollars annually
                    due to stolen equipment and goods from the site.
                </p>
                <p class="mt-3 text-[15px] leading-relaxed text-slate-200">
                    To protect your company, get Live Video Monitoring to save your projects from unwanted intrusions!
                </p>
            </article>

            <!-- Card: Shopping Centre & Retail -->
            <article class="rounded-xl bg-white/5 ring-1 ring-white/10 shadow-[0_8px_30px_rgba(0,0,0,.25)] p-8">
                <h3 class="text-center text-xl font-semibold text-white">Shopping Centre &amp; Retail</h3>

                <div class="mt-6 rounded-md overflow-hidden border border-white/10 shadow">
                    <img src="<?= $base . '/assets/images/shopping.jpg' ?>" alt="Shopping centre"
                        class="w-full h-64 object-cover" />
                </div>

                <p class="mt-6 text-[15px] leading-relaxed text-slate-200">
                    Shopping center and retail sector crimes are on a high. You need advanced equipment to catch
                    intruders.
                </p>
                <p class="mt-3 text-[15px] leading-relaxed text-slate-200">
                    Shopping center and retail sector crimes are on the rise. You need advanced equipment to catch
                    intruders.
                    Get proactive shopping center monitoring solutions that allow you to monitor site activities in real
                    time and use specialized communication systems to inform trespassers that you have spotted them and
                    that authorities are on their way.
                </p>
            </article>
        </div>
    </section>

    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10">
            <!-- Office & Commercial -->
            <article class="rounded-xl bg-[#3b3f4b] ring-1 ring-white/10 shadow-[0_8px_30px_rgba(0,0,0,.25)] p-8">
                <h3 class="text-center text-xl font-semibold text-white">Office &amp; Commercial</h3>

                <div class="mt-6 rounded-md overflow-hidden border border-white/10 shadow">
                    <img src="<?= $base . '/assets/images/office-commercial.jpg' ?>" alt="Modern office workspace"
                        class="w-full h-64 object-cover" />
                </div>

                <p class="mt-6 text-[15px] leading-relaxed text-slate-200">
                    Hiring security guards requires a lot of money and is still ineffective.
                </p>
                <p class="mt-3 text-[15px] leading-relaxed text-slate-200">
                    Get Live Video Monitoring along with gate and building access control to protect your office from
                    unwanted intrusions!
                </p>
            </article>

            <!-- Automotive Dealerships -->
            <article class="rounded-xl bg-[#3b3f4b] ring-1 ring-white/10 shadow-[0_8px_30px_rgba(0,0,0,.25)] p-8">
                <h3 class="text-center text-xl font-semibold text-white">Automotive Dealerships</h3>

                <div class="mt-6 rounded-md overflow-hidden border border-white/10 shadow">
                    <img src="<?= $base . '/assets/images/auto-dealership.jpg' ?>"
                        alt="Automotive dealership service bay" class="w-full h-64 object-cover" />
                </div>

                <p class="mt-6 text-[15px] leading-relaxed text-slate-200">
                    The automotive dealership sector faces record burglaries, property harm, and other hazards because
                    people can easily see their high-value inventory.
                </p>
                <p class="mt-3 text-[15px] leading-relaxed text-slate-200">
                    Get a customized security solution that starts with Live Video Monitoring. Start today by asking an
                    expert above.
                </p>
            </article>
        </div>
    </section>

    <section class="bg-[#1b1e27] py-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-10">
            <!-- Industrial & Manufacturing -->
            <article class="rounded-xl bg-white/5 ring-1 ring-white/10 shadow-[0_8px_30px_rgba(0,0,0,.25)] p-8">
                <h3 class="text-center text-xl font-semibold text-white">Industrial &amp; Manufacturing</h3>

                <div class="mt-6 rounded-md overflow-hidden border border-white/10 shadow">
                    <img src="<?= $base . '/assets/images/industrial-manufacturing.jpg' ?>"
                        alt="Factory / manufacturing floor" class="w-full h-64 object-cover" />
                </div>

                <p class="mt-6 text-[15px] leading-relaxed text-slate-200">
                    Anyone who stores inventory or assets outside knows security is a critical concern since fences,
                    gates,
                    and lights can only do so much.
                </p>
                <p class="mt-3 text-[15px] leading-relaxed text-slate-200">
                    Anyone who stores inventory or assets outside knows security is critical since fences, gates, and
                    lights can only do so much.
                    You need to control entry and exit to your factory and allow workers access based on security
                    approval and a plan. This limits undesirable visitors while monitoring their presence and movement
                    throughout the office.
                </p>
                <p class="mt-3 text-[15px] leading-relaxed text-slate-200">
                    Get your customized access control and site-wide monitoring system today!
                </p>
            </article>

            <!-- Distribution & Logistics -->
            <article class="rounded-xl bg-white/5 ring-1 ring-white/10 shadow-[0_8px_30px_rgba(0,0,0,.25)] p-8">
                <h3 class="text-center text-xl font-semibold text-white">Distribution &amp; Logistics</h3>

                <div class="mt-6 rounded-md overflow-hidden border border-white/10 shadow">
                    <img src="<?= $base . '/assets/images/distribution-logistics.jpg' ?>"
                        alt="Distribution and logistics facility" class="w-full h-64 object-cover" />
                </div>

                <p class="mt-6 text-[15px] leading-relaxed text-slate-200">
                    Cargo theft is a real problem and costs companies billions annually. Protect your valuable inventory
                    while enhancing your site-wide monitoring and access control capabilities with QueryTel’s Video
                    Monitoring and access control systems!
                </p>
            </article>
        </div>
    </section>

    <!-- Elegant Fluent-style Carousel -->
    <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div id="qt-carousel" class="relative rounded-2xl ring-1 ring-neutral-200 overflow-hidden" role="region"
                aria-roledescription="carousel" aria-label="Industry highlights" data-autoplay="6000">
                <!-- viewport -->
                <div data-track class="flex transition-transform duration-500 ease-out will-change-transform">
                    <!-- Slide 1 -->
                    <article data-slide class="relative w-full shrink-0 h-[420px] md:h-[520px]"
                        aria-roledescription="slide" aria-label="1 of 5">
                        <img src="<?= $base ?>/assets/images/access-control-1.jpg" alt="Industrial & Manufacturing"
                            class="absolute inset-0 w-full h-full object-contain" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 md:left-8 md:right-8">
                            <div
                                class="backdrop-blur-sm bg-white/10 border border-white/15 rounded-xl p-5 md:p-6 text-white">
                                <p class="text-xs font-semibold uppercase tracking-wider text-orange-400">Industrial &
                                    Manufacturing</p>
                                <h3 class="mt-1 text-xl md:text-2xl font-semibold">Control entry, monitor presence,
                                    reduce risk</h3>
                                <p class="mt-2 text-white/90 text-sm md:text-base">Site-wide access control with live
                                    monitoring to limit unauthorized visitors and track movement.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Slide 2 -->
                    <article data-slide class="relative w-full shrink-0 h-[420px] md:h-[520px]"
                        aria-roledescription="slide" aria-label="2 of 5">
                        <img src="<?= $base ?>/assets/images/access-control-2.jpg" alt="Distribution & Logistics"
                            class="absolute inset-0 w-full h-full object-contain" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 md:left-8 md:right-8">
                            <div
                                class="backdrop-blur-sm bg-white/10 border border-white/15 rounded-xl p-5 md:p-6 text-white">
                                <p class="text-xs font-semibold uppercase tracking-wider text-orange-400">Distribution &
                                    Logistics</p>
                                <h3 class="mt-1 text-xl md:text-2xl font-semibold">Deter cargo theft with real-time
                                    visibility</h3>
                                <p class="mt-2 text-white/90 text-sm md:text-base">Live video monitoring plus access
                                    control across docks and yards.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Slide 3 -->
                    <article data-slide class="relative w-full shrink-0 h-[420px] md:h-[520px]"
                        aria-roledescription="slide" aria-label="3 of 5">
                        <img src="<?= $base ?>/assets/images/access-control-3.jpg" alt="Office & Commercial"
                            class="absolute inset-0 w-full h-full object-contain" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 md:left-8 md:right-8">
                            <div
                                class="backdrop-blur-sm bg-white/10 border border-white/15 rounded-xl p-5 md:p-6 text-white">
                                <p class="text-xs font-semibold uppercase tracking-wider text-orange-400">Office &
                                    Commercial</p>
                                <h3 class="mt-1 text-xl md:text-2xl font-semibold">Protect workplaces without heavy
                                    guard costs</h3>
                                <p class="mt-2 text-white/90 text-sm md:text-base">Access control + monitoring to
                                    prevent intrusions and streamline entry.</p>
                            </div>
                        </div>
                    </article>

                    <!-- Slide 4 -->
                    <article data-slide class="relative w-full shrink-0 h-[420px] md:h-[520px]"
                        aria-roledescription="slide" aria-label="4 of 5">
                        <img src="<?= $base ?>/assets/images/access-control-4.jpg" alt="Automotive Dealerships"
                            class="absolute inset-0 w-full h-full object-contain" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/25 to-transparent"></div>
                        <div class="absolute bottom-6 left-6 right-6 md:left-8 md:right-8">
                            <div
                                class="backdrop-blur-sm bg-white/10 border border-white/15 rounded-xl p-5 md:p-6 text-white">
                                <p class="text-xs font-semibold uppercase tracking-wider text-orange-400">Automotive
                                    Dealerships</p>
                                <h3 class="mt-1 text-xl md:text-2xl font-semibold">Safeguard high-value inventory, 24/7
                                </h3>
                                <p class="mt-2 text-white/90 text-sm md:text-base">Smart alerts and coverage across lots
                                    and service bays.</p>
                            </div>
                        </div>
                    </article>


                </div>

                <!-- edge fades -->
                <div
                    class="pointer-events-none absolute inset-y-0 left-0 w-28 bg-gradient-to-r from-white to-transparent">
                </div>
                <div
                    class="pointer-events-none absolute inset-y-0 right-0 w-28 bg-gradient-to-l from-white to-transparent">
                </div>

                <!-- progress -->
                <div class="absolute bottom-0 left-0 right-0 h-0.5 bg-neutral-200">
                    <div data-progress class="h-full bg-orange-500 w-0"></div>
                </div>

                <!-- controls -->
                <button data-prev
                    class="group absolute left-3 top-1/2 -translate-y-1/2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/80 hover:bg-white shadow ring-1 ring-black/5"
                    aria-label="Previous slide">
                    <svg class="w-5 h-5 text-neutral-900 group-active:translate-x-[-1px] transition" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M15 18l-6-6 6-6" />
                    </svg>
                </button>
                <button data-next
                    class="group absolute right-3 top-1/2 -translate-y-1/2 inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/80 hover:bg-white shadow ring-1 ring-black/5"
                    aria-label="Next slide">
                    <svg class="w-5 h-5 text-neutral-900 group-active:translate-x-[1px] transition" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 6l6 6-6 6" />
                    </svg>
                </button>

                <!-- dots -->
                <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2">
                    <button data-dot class="h-2.5 w-2.5 rounded-full bg-neutral-300"
                        aria-label="Go to slide 1"></button>
                    <button data-dot class="h-2.5 w-2.5 rounded-full bg-neutral-300"
                        aria-label="Go to slide 2"></button>
                    <button data-dot class="h-2.5 w-2.5 rounded-full bg-neutral-300"
                        aria-label="Go to slide 3"></button>
                    <button data-dot class="h-2.5 w-2.5 rounded-full bg-neutral-300"
                        aria-label="Go to slide 4"></button>

                </div>
            </div>
        </div>
    </section>

    <script>
        (() => {
            const root = document.getElementById('qt-carousel');
            const track = root.querySelector('[data-track]');
            const slides = [...root.querySelectorAll('[data-slide]')];
            const dots = [...root.querySelectorAll('[data-dot]')];
            const prev = root.querySelector('[data-prev]');
            const next = root.querySelector('[data-next]');
            const bar = root.querySelector('[data-progress]');
            const autoplayMs = parseInt(root.dataset.autoplay || '0', 10);
            const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            let i = 0, tId = null, barId = null, downX = null, dx = 0;

            function set(index, animate = true) {
                i = (index + slides.length) % slides.length;
                if (!animate || reduceMotion) track.style.transition = 'none';
                else track.style.transition = 'transform .5s ease';

                track.style.transform = `translateX(${-i * 100}%)`;
                slides.forEach((s, k) => s.setAttribute('aria-hidden', k !== i));
                dots.forEach((d, k) => d.classList.toggle('bg-orange-500', k === i));
                restartBar();
                // force re-enable transition after no-animate moves
                if (!animate || reduceMotion) requestAnimationFrame(() => track.style.transition = 'transform .5s ease');
            }

            function nextSlide() { set(i + 1); }
            function prevSlide() { set(i - 1); }

            function startAutoplay() {
                if (!autoplayMs || reduceMotion) return;
                stopAutoplay();
                tId = setInterval(nextSlide, autoplayMs);
                restartBar();
            }
            function stopAutoplay() {
                if (tId) clearInterval(tId), tId = null;
                if (barId) cancelAnimationFrame(barId), barId = null;
            }
            function restartBar() {
                if (!autoplayMs || reduceMotion) return;
                bar.style.transition = 'none';
                bar.style.width = '0%';
                requestAnimationFrame(() => {
                    bar.style.transition = `width ${autoplayMs}ms linear`;
                    bar.style.width = '100%';
                });
            }

            // dots
            dots.forEach((d, k) => d.addEventListener('click', () => set(k)));
            // arrows
            prev.addEventListener('click', prevSlide);
            next.addEventListener('click', nextSlide);
            // pause on hover / focus
            ['mouseenter', 'focusin'].forEach(evt => root.addEventListener(evt, stopAutoplay));
            ['mouseleave', 'focusout'].forEach(evt => root.addEventListener(evt, startAutoplay));

            // keyboard
            root.addEventListener('keydown', e => {
                if (e.key === 'ArrowRight') nextSlide();
                if (e.key === 'ArrowLeft') prevSlide();
            });
            root.tabIndex = 0;

            // swipe
            track.addEventListener('pointerdown', e => { downX = e.clientX; dx = 0; track.setPointerCapture(e.pointerId); stopAutoplay(); });
            track.addEventListener('pointermove', e => {
                if (downX == null) return;
                dx = e.clientX - downX;
                track.style.transition = 'none';
                track.style.transform = `translateX(${(-i * 100) + (dx / track.clientWidth) * 100}%)`;
            });
            track.addEventListener('pointerup', e => {
                if (downX == null) return;
                const threshold = track.clientWidth * 0.15;
                if (dx > threshold) prevSlide();
                else if (dx < -threshold) nextSlide();
                else set(i); // snap back
                downX = null; startAutoplay();
            });
            track.addEventListener('pointercancel', () => { downX = null; set(i); startAutoplay(); });

            // init
            set(0, false);
            startAutoplay();
        })();
    </script>

    <!-- Logo Slider -->
    <section id="logo-slider" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-xs font-semibold tracking-widest text-neutral-500 uppercase">Trusted by leading
                brands</p>

            <div class="relative mt-6 overflow-hidden rounded-2xl ring-1 ring-neutral-200 bg-white">
                <!-- soft edge fades -->
                <div
                    class="pointer-events-none absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-white to-transparent">
                </div>
                <div
                    class="pointer-events-none absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-white to-transparent">
                </div>

                <!-- marquee -->
                <div class="group relative">
                    <ul
                        class="flex items-center gap-12 py-8 will-change-transform animate-logo-marquee [animation-duration:28s] [animation-timing-function:linear]">
                        <!-- set A -->
                        <li class="shrink-0">
                            <img src="<?= $base ?>/assets/images/hikvision.png" alt="Hikvision"
                                class="h-10 md:h-12 grayscale opacity-70 transition duration-300 group-hover:opacity-80 hover:grayscale-0 hover:opacity-100 hover:scale-[1.04]" />
                        </li>
                        <li class="shrink-0">
                            <img src="<?= $base ?>/assets/images/dahua.png" alt="Dahua"
                                class="h-10 md:h-12 grayscale opacity-70 transition duration-300 group-hover:opacity-80 hover:grayscale-0 hover:opacity-100 hover:scale-[1.04]" />
                        </li>
                        <li class="shrink-0">
                            <img src="<?= $base ?>/assets/images/HID.png" alt="FLIR"
                                class="h-10 md:h-12 grayscale opacity-70 transition duration-300 group-hover:opacity-80 hover:grayscale-0 hover:opacity-100 hover:scale-[1.04]" />
                        </li>
                        <li class="shrink-0">
                            <img src="<?= $base ?>/assets/images/Honeywell.png" alt="AV Costar"
                                class="h-10 md:h-12 grayscale opacity-70 transition duration-300 group-hover:opacity-80 hover:grayscale-0 hover:opacity-100 hover:scale-[1.04]" />
                        </li>


                        <!-- set B (duplicate for seamless loop) -->
                        <li class="shrink-0">
                            <img src="<?= $base ?>/assets/images/hikvision.png" alt="Hikvision"
                                class="h-10 md:h-12 grayscale opacity-70 transition duration-300 group-hover:opacity-80 hover:grayscale-0 hover:opacity-100 hover:scale-[1.04]" />
                        </li>
                        <li class="shrink-0">
                            <img src="<?= $base ?>/assets/images/dahua.png" alt="Dahua"
                                class="h-10 md:h-12 grayscale opacity-70 transition duration-300 group-hover:opacity-80 hover:grayscale-0 hover:opacity-100 hover:scale-[1.04]" />
                        </li>
                        <li class="shrink-0">
                            <img src="<?= $base ?>/assets/images/flir.png" alt="FLIR"
                                class="h-10 md:h-12 grayscale opacity-70 transition duration-300 group-hover:opacity-80 hover:grayscale-0 hover:opacity-100 hover:scale-[1.04]" />
                        </li>
                        <li class="shrink-0">
                            <img src="<?= $base ?>/assets/images/avcostar.png" alt="AV Costar"
                                class="h-10 md:h-12 grayscale opacity-70 transition duration-300 group-hover:opacity-80 hover:grayscale-0 hover:opacity-100 hover:scale-[1.04]" />
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes logo-marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-logo-marquee {
            animation: logo-marquee 10s linear infinite;
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

</body>

</html>