<?php $base = "https://itcold.com/"; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Thermographic Cameras – QueryTel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: { blue: "#1f4bd8", dark: "#0b0f1a", accent: "#f97316" }
                    },
                    boxShadow: {
                        smooth: "0 1px 2px rgba(0,0,0,0.04), 0 8px 24px rgba(0,0,0,0.06)"
                    },
                    keyframes: {
                        fade: { "0%": { opacity: 0, transform: "translateY(8px)" }, "100%": { opacity: 1, transform: "translateY(0)" } }
                    },
                    animation: { fade: "fade .6s ease-out forwards" }
                }
            }
        }
    </script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: {
                        fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
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
    </style>
</head>

<body class="bg-white text-neutral-900 antialiased">
    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="relative overflow-hidden bg-[linear-gradient(180deg,#f8fafc,white)]">
        <div class="absolute -top-24 -left-24 w-[520px] h-[520px] rounded-full bg-blue-500/5 blur-3xl"></div>
        <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-fade">
                <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-neutral-900">
                    Thermographic Cameras
                </h1>
                <p class="mt-4 text-lg text-neutral-700 max-w-xl">
                    Fast, contactless temperature screening and thermal visibility for busy environments—designed for
                    lobbies, factories, healthcare, and transport hubs.
                </p>
                <div class="mt-8 flex gap-4 opacity-0 animate-fadeIn delay-500">
                    <a href="#services"
                        class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">
                        Browse Solutions
                    </a>
                    <a href="#contact"
                        class="inline-block border border-neutral-900 text-neutral-900 px-6 py-3 rounded hover:bg-neutral-100 transition">
                        Request an Expert
                    </a>
                </div>
            </div>
            <div class="animate-fade md:justify-self-end">
                <img src="<?= $base . '/assets/images/thermographic-banner.jpg' ?>" alt="Thermographic device"
                    class="w-full max-w-md rounded-xl shadow-smooth" />
            </div>
        </div>
    </section>

    <!-- Theme tokens (keep once globally) -->
    <style>
        :root {
            --brand-orange: #f97316;
            /* primary */
            --brand-blue: #1f4bd8;
            /* secondary */
        }
    </style>

    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-6 pt-16 pb-10">
            <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-neutral-900">Thermographic Camera</h1>
            <div class="mt-5 h-px w-16 bg-neutral-200"></div>
            <p class="mt-6 text-lg leading-7 text-neutral-700 max-w-3xl">
                With the inception of the Covid-19 pandemic, businesses—small or large—have faced new operational
                challenges.
                Lockdowns pushed owners to keep teams and customers safe while staying open.
                Thermographic screening offers fast, contactless triage where people flow is constant.
            </p>
        </div>

        <!-- Dark feature band -->
        <div class="bg-neutral-900 text-white">
            <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-8 items-stretch">
                <!-- Left: thermal image -->
                <figure class="relative rounded-xl overflow-hidden ring-1 ring-white/10 min-h-[320px]">
                    <img src="https://querytel.com/wp-content/uploads/2021/10/face-detection.jpg"
                        alt="Thermal screening in a lobby" class="h-full w-full object-cover" />
                    <!-- subtle orange-to-transparent wash for brand cohesion -->
                    <div
                        class="pointer-events-none absolute inset-0 bg-gradient-to-t from-[rgba(249,115,22,0.25)] via-transparent">
                    </div>
                </figure>

                <!-- Right: headline panel -->
                <div class="rounded-xl border border-white/10 bg-white/5 p-8">
                    <h2 class="text-3xl font-semibold leading-tight">
                        Temperature Screening<br />
                        <span class="text-blue-300">Thermographic Cameras</span>
                    </h2>
                    <p class="mt-4 text-neutral-200">
                        Thermal face detection is an effective pre-screening aid for crowded places when deployed with
                        the right
                        distance, ambient control, and calibration.
                    </p>

                    <div class="mt-6 h-px w-12 bg-white/20"></div>

                    <!-- Use-cases as icon chips (orange-first, blue secondary kept in headline) -->
                    <div class="mt-6 flex flex-wrap gap-2" role="list">
                        <span role="listitem" tabindex="0"
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm rounded-full bg-white/10 border border-white/10 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-900 transition">
                            <svg class="w-4 h-4" style="color:var(--brand-orange)" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <path d="M3 10.5L12 6l9 4.5-9 4.5-9-4.5Z" />
                                <path d="M5 12v4.5a2 2 0 0 0 1.2 1.83L12 21l5.8-2.67A2 2 0 0 0 19 16.5V12" />
                            </svg>
                            Schools
                        </span>

                        <span role="listitem" tabindex="0"
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm rounded-full bg-white/10 border border-white/10 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-900 transition">
                            <svg class="w-4 h-4" style="color:var(--brand-orange)" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <path d="M3 20V9l6 3V9l6 3V9l6 3v8H3Z" />
                            </svg>
                            Factories
                        </span>

                        <span role="listitem" tabindex="0"
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm rounded-full bg-white/10 border border-white/10 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-900 transition">
                            <svg class="w-4 h-4" style="color:var(--brand-orange)" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="M8 8h8M8 12h8M8 16h4" />
                            </svg>
                            Shopping Malls
                        </span>

                        <span role="listitem" tabindex="0"
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm rounded-full bg-white/10 border border-white/10 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-900 transition">
                            <svg class="w-4 h-4" style="color:var(--brand-orange)" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <path d="M4 21V5a2 2 0 0 1 2-2h6v18H4Z" />
                                <path d="M12 21V7h6a2 2 0 0 1 2 2v12h-8Z" />
                                <path d="M7 8h3M7 12h3M7 16h3" />
                            </svg>
                            Offices
                        </span>

                        <span role="listitem" tabindex="0"
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm rounded-full bg-white/10 border border-white/10 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-900 transition">
                            <svg class="w-4 h-4" style="color:var(--brand-orange)" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <path d="M2 16l8-3 2-7 2 7 8 3-8 1-2 5-2-5-8-1Z" />
                            </svg>
                            Airports
                        </span>

                        <span role="listitem" tabindex="0"
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm rounded-full bg-white/10 border border-white/10 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-900 transition">
                            <svg class="w-4 h-4" style="color:var(--brand-orange)" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <rect x="3" y="4" width="18" height="16" rx="2" />
                                <path d="M12 8v8M8 12h8" />
                            </svg>
                            Hospitals
                        </span>

                        <span role="listitem" tabindex="0"
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm rounded-full bg-white/10 border border-white/10 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-900 transition">
                            <svg class="w-4 h-4" style="color:var(--brand-orange)" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <rect x="5" y="4" width="14" height="12" rx="2" />
                                <path d="M7 20l2-2h6l2 2M8 9h8M8 13h8" />
                            </svg>
                            Bus & Train Stations
                        </span>

                        <span role="listitem" tabindex="0"
                            class="inline-flex items-center gap-2 px-3 py-1.5 text-sm rounded-full bg-white/10 border border-white/10 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-300 focus-visible:ring-offset-2 focus-visible:ring-offset-neutral-900 transition">
                            <svg class="w-4 h-4" style="color:var(--brand-orange)" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="1.6">
                                <path d="M4 7c0 6 4 10 8 10s8-4 8-10" />
                                <path d="M8 7c0 3 2 5 4 5s4-2 4-5" />
                            </svg>
                            Theaters
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <section class="relative bg-gray-50 py-20 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="text-gray-900">
                <h2 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    What are <span class="block md:inline">Thermographic</span> Cameras?
                </h2>
                <p class="mt-6 text-gray-700 text-base md:text-lg max-w-xl">
                    Temperature Screening Thermographic Cameras detect elevated skin-surface temperatures with advanced
                    detectors and algorithms.
                    They can be used for rapid and preliminary temperature screening in office buildings, factories,
                    stations, airports, and other public places, with accuracy up to ±0.3°C.
                </p>
                <ul class="mt-6 space-y-4 text-gray-800 text-base">
                    <li class="flex items-start gap-3"><span
                            class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15"><span
                                class="w-2 h-2 rounded-full bg-orange-500"></span></span>One second to detect the
                        skin-surface temperature of a person</li>
                    <li class="flex items-start gap-3"><span
                            class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15"><span
                                class="w-2 h-2 rounded-full bg-orange-500"></span></span>Multi-person detection
                        simultaneously</li>
                    <li class="flex items-start gap-3"><span
                            class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15"><span
                                class="w-2 h-2 rounded-full bg-orange-500"></span></span>Non-contact measurement to
                        avoid physical contact</li>
                    <li class="flex items-start gap-3"><span
                            class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15"><span
                                class="w-2 h-2 rounded-full bg-orange-500"></span></span>Immediately alarming to notify
                        operators</li>
                    <li class="flex items-start gap-3"><span
                            class="mt-1 inline-flex w-5 h-5 items-center justify-center rounded-full bg-orange-500/15"><span
                                class="w-2 h-2 rounded-full bg-orange-500"></span></span>AI detection to reduce false
                        alarms from other heat sources</li>
                </ul>
            </div>

            <div class="relative">
                <!-- Circle accent (now visible) -->
                <!-- Hollow, floating circle -->
                <div aria-hidden="true" class="absolute -top-20 -left-24 w-80 h-80 rounded-full border-[28px]
            border-[#1f4bd8]/60 animate-float-y z-0 pointer-events-none"></div>


                <!-- Card sits above circle -->
                <div class="relative z-10 rounded-2xl shadow-2xl ring-1 ring-black/5 overflow-hidden">

                    <img src="https://querytel.com/wp-content/uploads/2021/10/temperature-screening-camera-469-x-500-2.jpg"
                        alt="Thermographic camera" class="mx-auto w-full max-w-xl object-contain " />
                </div>
            </div>
        </div>
        </div>
    </section>




    <style>
        @keyframes float-y {

            0%,
            100% {
                transform: translateY(-10px);
            }

            50% {
                transform: translateY(10px);
            }
        }

        .animate-float-y {
            animation: float-y 3.5s ease-in-out infinite;
            will-change: transform;
        }
    </style>

    <!-- Quickly Deploy — Expanding Gallery -->
    <section class="bg-[#151821] text-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <header class="text-center">
                <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight">
                    Quickly Deploy <span class="text-white/90">Thermal Cameras</span> In your Office
                </h2>
                <div class="w-24 h-[2px] bg-orange-500 mx-auto mt-4"></div>
            </header>

            <div id="thermal-accordion" class="mt-10 thermal-accordion">
                <!-- Panel 1 -->
                <button class="panel group active" type="button"
                    style="--img:url('https://querytel.com/wp-content/uploads/2021/10/temperature-screening-camera-469-x-500-2.jpg')">
                    <div class="overlay"></div>
                    <div class="copy">
                        <p class="tag">1. Install & Position</p>
                        <h3 class="title">Mount and calibrate</h3>
                        <p class="desc">Place the camera (and blackbody if used), set distance, angle, and ambient
                            controls for best accuracy.</p>
                    </div>
                </button>

                <!-- Panel 2 -->
                <button class="panel group" type="button"
                    style="--img:url('https://images.unsplash.com/photo-1520975922284-9d09f28cb3ee?q=80&w=1600&auto=format&fit=crop')">
                    <div class="overlay"></div>
                    <div class="copy">
                        <p class="tag">2. Images & Videos</p>
                        <h3 class="title">Receive media</h3>
                        <p class="desc">Receive images or videos taken by your thermal camera.</p>
                    </div>
                </button>

                <!-- Panel 3 -->
                <button class="panel group" type="button"
                    style="--img:url('https://images.unsplash.com/photo-1600907053164-3f3ca4b64604?q=80&w=1600&auto=format&fit=crop')">
                    <div class="overlay"></div>
                    <div class="copy">
                        <p class="tag">3. Live Screening & Alerts</p>
                        <h3 class="title">Detect and notify</h3>
                        <p class="desc">Screen elevated skin-surface temps and trigger on-screen or audible alerts.</p>
                    </div>
                </button>

                <!-- Panel 4 -->
                <button class="panel group" type="button"
                    style="--img:url('https://images.unsplash.com/photo-1551281044-c2e5bfc79678?q=80&w=1600&auto=format&fit=crop')">
                    <div class="overlay"></div>
                    <div class="copy">
                        <p class="tag">4. Reports & Audit</p>
                        <h3 class="title">Review & export</h3>
                        <p class="desc">Keep snapshots and logs for compliance and analysis.</p>
                    </div>
                </button>
            </div>
        </div>
    </section>

    <!-- Minimal CSS for the expanding behavior -->
    <style>
        :root {
            --brand-orange: #f97316;
            --brand-blue: #1f4bd8;
        }

        .thermal-accordion {
            display: flex;
            gap: 1rem;
        }

        .thermal-accordion .panel {
            position: relative;
            flex: var(--f, 1) 1 0%;
            height: 360px;
            border-radius: 0.75rem;
            overflow: hidden;
            background-image: var(--img);
            background-size: cover;
            background-position: center;
            transition: flex .4s ease, filter .3s ease, transform .3s ease, opacity .3s ease;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .08), 0 12px 28px rgba(0, 0, 0, .22);
            outline: none;
            border: none;
            cursor: pointer;
        }

        /* Dim everything a bit when hovering the strip */
        .thermal-accordion:hover .panel {
            filter: brightness(.75) saturate(.9);
        }

        /* Expand hovered one */
        .thermal-accordion:hover .panel:hover {
            --f: 3;
            filter: none;
        }

        /* Mobile/tap: active acts like hover */
        .thermal-accordion .panel.active {
            --f: 3;
            filter: none;
        }

        .thermal-accordion .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, .0) 30%, rgba(0, 0, 0, .55) 100%);
            pointer-events: none;
        }

        .thermal-accordion .copy {
            position: absolute;
            inset: auto 0 0 0;
            padding: 1.25rem;
            opacity: 0;
            transform: translateY(6px);
            transition: opacity .3s ease, transform .3s ease;
            text-align: center;
        }

        .thermal-accordion .panel:hover .copy,
        .thermal-accordion .panel.active .copy {
            opacity: 1;
            transform: translateY(0);
        }

        .thermal-accordion .tag {
            color: var(--brand-orange);
            text-transform: uppercase;
            letter-spacing: .08em;
            font-size: .75rem;
            font-weight: 600;
        }

        .thermal-accordion .title {
            font-weight: 700;
            font-size: 1.25rem;
            margin-top: .25rem;
        }

        .thermal-accordion .desc {
            color: #EAEAEA;
            margin-top: .35rem;
            font-size: .95rem;
            line-height: 1.45;
        }

        @media (min-width: 768px) {
            .thermal-accordion .panel {
                height: 420px;
            }

            .thermal-accordion .title {
                font-size: 1.375rem;
            }
        }
    </style>

    <!-- Tiny JS for tap/keyboard selection -->
    <script>
        (() => {
            const panels = Array.from(document.querySelectorAll('#thermal-accordion .panel'));
            let active = panels.findIndex(p => p.classList.contains('active'));
            const setActive = idx => {
                panels.forEach((p, i) => p.classList.toggle('active', i === idx));
                active = idx;
            };
            panels.forEach((p, i) => {
                p.addEventListener('click', () => setActive(i));
                p.addEventListener('keydown', e => {
                    if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); setActive(i); }
                    if (e.key === 'ArrowRight') setActive((active + 1) % panels.length);
                    if (e.key === 'ArrowLeft') setActive((active - 1 + panels.length) % panels.length);
                });
                p.setAttribute('tabindex', '0');
                p.setAttribute('aria-pressed', p.classList.contains('active'));
            });
        })();
    </script>

    <!-- FEATURES -->
    <section class="bg-[#f9f9f9] py-32 sm:py-36" id="solutions">
        <div class="max-w-[1440px] mx-auto px-6">
            <header class="text-center mb-24 sm:mb-28" data-aos="fade-up">
                <div class="qt-line mb-6"></div>
                <h2 class="text-[40px] sm:text-[56px] font-light text-[#1B1B1B] leading-tight tracking-tight">
                    Want to Be More Accurate in Your Diagnosis? <br />
                    <span class="font-semibold text-[color:var(--accent)]">Our Hardware Can Help</span>
                </h2>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-8 xl:gap-x-12 gap-y-16 xl:gap-y-24">
                <!-- 1: Dahua DHI-ASI7213X-T1 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Cam-1.jpg" alt="Dahua DHI-ASI7213X-T1"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">Dahua DHI-ASI7213X-T1
                        </h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Thermal Temperature Station</p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>

                <!-- 2: Flir E6-XT-63907-0804 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Camera-2.jpg"
                            alt="Flir E6-XT-63907-0804"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">Flir E6-XT-63907-0804
                        </h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Thermal Imager</p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>

                <!-- 3: Hikvision DS-K1T671TM-3XF -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="150">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Camera-3.jpg"
                            alt="Hikvision DS-K1T671TM-3XF"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">Hikvision
                            DS-K1T671TM-3XF</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Temperature Screening Terminal</p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>

                <!-- 4: Hikvision DS-2TD2636B-15 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Camera-4.jpg"
                            alt="Hikvision DS-2TD2636B-15"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">Hikvision
                            DS-2TD2636B-15</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Thermal-OPT TEM 15&6mm Bullet Camera</p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>

                <!-- 5: Dahua VD-BF5421 T -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="250">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Camera-5.jpg"
                            alt="Dahua VD-BF5421 T Thermal TEMP Camera"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">Dahua VD-BF5421 T</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Thermal TEMP Camera</p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>

                <!-- 6: Flir A400 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Camera-6.jpg"
                            alt="Flir A400 Thermal Core Camera"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">Flir A400</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Thermal Core Camera</p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>

                <!-- 7: Flir A700 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="350">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Camera-7.jpg"
                            alt="Flir A700 Thermal Core Camera"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">Flir A700</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Thermal Core Camera</p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>

                <!-- 8: AV Costar – 3212-2000 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Camera-8.jpg"
                            alt="AV Costar – 3212-2000 Bi-Spectral Thermal Camera High Resolution"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">AV Costar – 3212-2000
                        </h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Bi-Spectral Thermal Camera – High
                            Resolution</p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>

                <!-- 9: AV Costar – 3212-9000 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="450">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="https://querytel.com/wp-content/uploads/2021/10/Camera-9.jpg"
                            alt="AV Costar – 3212-9000 Black Body Calibration / Reference Unit"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-1 tracking-tight">AV Costar – 3212-9000
                        </h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">Black Body Calibration / Reference Unit
                        </p>
                        <a href="#" target="_blank" rel="noopener"
                            class="inline-block mt-4 text-[color:var(--accent)] font-medium hover:underline">Download
                            specification</a>
                    </div>
                </div>
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
        // Tiny tabs
        const btns = document.querySelectorAll(".tab-btn");
        const panels = document.querySelectorAll(".tab-panel");
        btns.forEach(b => b.addEventListener("click", () => {
            btns.forEach(x => x.classList.remove("ring-2", "ring-brand-blue", "bg-blue-50"));
            panels.forEach(p => p.classList.add("hidden"));
            b.classList.add("ring-2", "ring-brand-blue", "bg-blue-50");
            document.querySelector(`[data-panel="${b.dataset.tab}"]`).classList.remove("hidden");
        }));
        // default
        document.querySelector('.tab-btn')?.click();
    </script>
</body>

</html>