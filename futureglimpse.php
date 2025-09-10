<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Technology Solutions | QueryTel Inc.</title>
    <meta name="description"
        content="Technology solutions for exceptional IT experiences. Video-first hero section in Microsoft-style layout." />
    <link rel="icon" href="/favicon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: { blue: '#1e40af', orange: '#f97316' }
                    },
                    keyframes: {
                        fadeUp: { '0%': { opacity: 0, transform: 'translateY(20px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
                        fadeIn: { '0%': { opacity: 0 }, '100%': { opacity: 1 } }
                    },
                    animation: { fadeUp: 'fadeUp 1s ease-out forwards', fadeIn: 'fadeIn 2s ease-out forwards' }
                }
            }
        }
    </script>
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <style>
        .vignette::after {
            content: '';
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: radial-gradient(120% 120% at 80% 40%, rgba(15, 23, 42, 0.0) 0%, rgba(15, 23, 42, 0.3) 55%, rgba(15, 23, 42, 0.75) 100%);
        }

        @media (prefers-reduced-motion: reduce) {
            * {
                animation: none !important;
                transition: none !important
            }
        }

        #globe-container canvas {
            pointer-events: none !important;
            position: absolute !important;
            inset: 0 !important;
        }
    </style>

</head>

<body class="bg-white text-neutral-900">
    <?php include('navbar.php'); ?>


    <section
        class="relative isolate overflow-hidden bg-slate-950 text-white min-h-[800px] flex items-center justify-center">

        <!-- glowing background -->
        <div aria-hidden="true" class="absolute inset-0 -z-20">
            <div
                class="absolute -top-40 left-1/2 -translate-x-1/2 w-[700px] h-[700px] rounded-full bg-blue-600/30 blur-[180px] animate-pulse">
            </div>
            <div
                class="absolute bottom-0 right-0 w-[500px] h-[500px] rounded-full bg-orange-500/20 blur-[200px] animate-[floatY_14s_ease-in-out_infinite]">
            </div>
        </div>

        <!-- content -->
        <div class="relative mx-auto max-w-7xl px-6 py-32 sm:py-40 text-center z-30">
            <span class="inline-block text-sm font-semibold tracking-widest text-orange-400 uppercase animate-fadeInUp">
                ✦ Glimpse of the Future ✦
            </span>

            <h1 class="mt-6 text-4xl sm:text-6xl md:text-7xl font-extrabold leading-[1.2] sm:leading-[1.25] md:leading-[1.3]
      bg-gradient-to-r from-blue-400 via-white to-orange-400 bg-clip-text text-transparent animate-fadeInUp">
                The Next Era of Technology
            </h1>

            <p class="mt-6 text-lg sm:text-xl text-slate-300 max-w-2xl mx-auto animate-fadeInUp">
                AR, VR, smarter collaboration, powerful consoles, and lightning-fast networks.
                Tomorrow’s innovations — already unfolding today.
            </p>

            <div class="mt-10 flex justify-center gap-4 animate-fadeInUp">
                <a href="#glimpse"
                    class="px-8 py-3 rounded-xl bg-orange-500 hover:bg-orange-600 text-white font-medium shadow-lg shadow-orange-500/30 transition">
                    Explore the Future
                </a>
                <a href="/contactus"
                    class="px-8 py-3 rounded-xl bg-white/10 hover:bg-white/20 text-white font-medium ring-1 ring-white/20 transition">
                    Request an Expert
                </a>
            </div>
        </div>

        <!-- Interactive Globe -->
        <div id="globe-container" class="absolute inset-0 w-full h-[700px] z-10 pointer-events-none"></div>
    </section>



    <script type="importmap">
{
  "imports": {
    "three": "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js"
  }
}
</script>


    <div id="globe-container" class="absolute inset-0 w-full h-[700px] -z-0"></div>

    <script type="module">
        import * as THREE from "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js";
        import { OrbitControls } from "https://cdn.jsdelivr.net/npm/three@0.160.0/examples/jsm/controls/OrbitControls.js";

        const container = document.getElementById("globe-container");
        const scene = new THREE.Scene();
        const camera = new THREE.PerspectiveCamera(45, container.clientWidth / container.clientHeight, 0.1, 2000);
        camera.position.set(0, 0, 4);

        const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);

        // Globe
        const texture = new THREE.TextureLoader().load("https://raw.githubusercontent.com/jeromeetienne/threex.planets/master/images/earthmap1k.jpg");
        const globe = new THREE.Mesh(
            new THREE.SphereGeometry(1.2, 64, 64),
            new THREE.MeshStandardMaterial({ map: texture, emissive: 0x113355, emissiveIntensity: 0.25 })
        );
        scene.add(globe);

        // Atmosphere
        const atmosphere = new THREE.Mesh(
            new THREE.SphereGeometry(1.26, 64, 64),
            new THREE.MeshPhongMaterial({ color: 0x3b82f6, transparent: true, opacity: 0.2, blending: THREE.AdditiveBlending, side: THREE.BackSide })
        );
        scene.add(atmosphere);

        // Starfield
        const starsGeo = new THREE.BufferGeometry();
        const starCnt = 2000;
        const pos = new Float32Array(starCnt * 3);
        for (let i = 0; i < starCnt; i++) {
            const r = 20 + Math.random() * 15;
            const theta = Math.random() * 2 * Math.PI;
            const phi = Math.acos(2 * Math.random() - 1);
            pos[i * 3] = r * Math.sin(phi) * Math.cos(theta);
            pos[i * 3 + 1] = r * Math.cos(phi);
            pos[i * 3 + 2] = r * Math.sin(phi) * Math.sin(theta);
        }
        starsGeo.setAttribute("position", new THREE.BufferAttribute(pos, 3));
        scene.add(new THREE.Points(starsGeo, new THREE.PointsMaterial({ color: 0xffffff, size: 0.05 })));

        // Orbit particles
        const ringGeo = new THREE.TorusGeometry(2, 0.005, 16, 200);
        const ring = new THREE.Mesh(ringGeo, new THREE.MeshBasicMaterial({ color: 0xf97316, transparent: true, opacity: 0.4 }));
        ring.rotation.x = Math.PI / 2;
        scene.add(ring);

        // Lights
        scene.add(new THREE.AmbientLight(0xffffff, 0.5));
        const light = new THREE.PointLight(0x60a5fa, 1.2);
        light.position.set(5, 3, 5);
        scene.add(light);

        // Controls
        const controls = new OrbitControls(camera, renderer.domElement);
        controls.enableZoom = false; controls.enablePan = false; controls.autoRotate = true; controls.autoRotateSpeed = 0.6;

        // Resize
        window.addEventListener("resize", () => {
            camera.aspect = container.clientWidth / container.clientHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(container.clientWidth, container.clientHeight);
        });

        // Animate
        (function animate() {
            requestAnimationFrame(animate);
            globe.rotation.y += 0.001;
            ring.rotation.z += 0.002;
            renderer.render(scene, camera);
        })();
    </script>



    <style>
        @keyframes floatY {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(16px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp .9s ease-out forwards;
        }

        .animate-[floatY_14s_ease-in-out_infinite] {
            animation: floatY 14s ease-in-out infinite;
        }
    </style>


    <style>
        @keyframes shimmerSweep {
            0% {
                transform: translateX(-100%);
                opacity: 0
            }

            40% {
                opacity: .4
            }

            100% {
                transform: translateX(100%);
                opacity: 0
            }
        }

        .shimmer-text {
            position: relative;
            display: inline-block;
            background: linear-gradient(to right, #f97316, #fff, #38bdf8);
            background-size: 200% 100%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientShift 8s ease infinite;
            overflow: hidden;
        }

        .shimmer-text::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .6), transparent);
            animation: shimmerSweep 4s ease-in-out infinite;
        }
    </style>



    <section class="relative isolate overflow-hidden bg-[#0b0f1a] py-32 text-white" id="glimpse">
        <!-- Background Magic -->
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10 overflow-hidden">
            <!-- animated aurora -->
            <div class="absolute inset-0 aurora"></div>
            <!-- spotlight glow -->
            <div
                class="absolute left-1/2 top-1/2 w-[1200px] h-[1200px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/5 blur-[220px]">
            </div>
            <!-- diagonal beams -->
            <div class="absolute -inset-x-32 -inset-y-10 rotate-12 beam"></div>
            <div class="absolute -inset-x-32 -inset-y-10 -rotate-12 beam beam--2"></div>
            <!-- subtle particles -->
            <div class="absolute inset-0 dots"></div>
        </div>

        <!-- TOP CONTENT -->
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-5xl md:text-7xl font-extrabold leading-tight tracking-tight">
                <span
                    class="bg-gradient-to-r from-orange-400 via-white to-sky-400 bg-clip-text text-transparent animate-gradient">
                    Glimpse Into Tomorrow
                </span>
            </h2>
            <p class="mt-6 text-xl md:text-2xl text-white/70 leading-relaxed max-w-3xl mx-auto">
                Technology isn’t waiting. It’s already transforming our world — immersive realities, invisible defenses,
                and intelligence that moves with us.
            </p>

            <!-- 3 Columns -->
            <div class="mt-20 grid md:grid-cols-3 gap-12 text-left">
                <div class="relative group">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-orange-500/40 to-sky-500/40 blur opacity-40 group-hover:opacity-70 transition">
                    </div>
                    <div class="relative bg-white/5 rounded-2xl p-8 ring-1 ring-white/10 backdrop-blur-sm">
                        <h3 class="text-2xl font-bold mb-4">Immersive Realities</h3>
                        <p class="text-white/70 leading-relaxed">AR and VR will define the next way we work, learn, and
                            experience ideas. Not just on screens — but all around us.</p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-sky-500/40 to-indigo-500/40 blur opacity-40 group-hover:opacity-70 transition">
                    </div>
                    <div class="relative bg-white/5 rounded-2xl p-8 ring-1 ring-white/10 backdrop-blur-sm">
                        <h3 class="text-2xl font-bold mb-4">Invisible Defenses</h3>
                        <p class="text-white/70 leading-relaxed">Cybersecurity is becoming predictive, adaptive, and
                            real-time. A living shield that protects without being seen.</p>
                    </div>
                </div>
                <div class="relative group">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-indigo-500/40 to-orange-500/40 blur opacity-40 group-hover:opacity-70 transition">
                    </div>
                    <div class="relative bg-white/5 rounded-2xl p-8 ring-1 ring-white/10 backdrop-blur-sm">
                        <h3 class="text-2xl font-bold mb-4">Intelligence at Scale</h3>
                        <p class="text-white/70 leading-relaxed">AI will amplify human imagination. Automating the
                            routine, predicting the complex, and freeing us to create.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECOND BLOCK -->
        <div class="mx-auto max-w-7xl px-6 mt-28">
            <!-- TITLE -->
            <div class="relative text-center select-none">
                <h2 class="pointer-events-none absolute inset-0 translate-y-[2px] blur-[1px] text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight text-transparent"
                    style="-webkit-text-stroke: 1px rgba(255,149,64,.35);">
                    TECHNOLOGY IN <span class="uppercase">Motion</span>
                </h2>
                <h2
                    class="relative z-10 text-4xl sm:text-5xl md:text-6xl font-extrabold tracking-tight bg-gradient-to-r from-orange-400 via-white to-sky-400 bg-clip-text text-transparent animated-gradient">
                    TECHNOLOGY IN <span class="uppercase">Motion</span>
                </h2>
                <p class="mt-4 mx-auto max-w-3xl text-lg text-slate-300/80 leading-relaxed">
                    <span class="inline-block kinetic-word">Crisp</span>,
                    <span class="inline-block kinetic-word delay-75">immersive</span>,
                    <span class="inline-block kinetic-word delay-150">and</span>
                    <span class="inline-block kinetic-word delay-200">inevitable.</span>
                </p>
                <div
                    class="mt-6 mx-auto h-px w-44 bg-gradient-to-r from-orange-400/60 via-white/40 to-sky-400/60 relative overflow-hidden rounded">
                    <span class="absolute inset-y-0 -left-1/3 w-1/3 shimmer"></span>
                </div>
            </div>

            <!-- GRID VIDEOS -->
            <div class="mt-14 grid grid-cols-12 gap-6">
                <article class="reveal col-span-12 sm:col-span-6 lg:col-span-3">
                    <div class="card-tilt group relative p-[1.5px] rounded-3xl animated-border">
                        <div
                            class="relative rounded-[calc(1.5rem-1.5px)] overflow-hidden bg-white/5 ring-1 ring-white/10 backdrop-blur">
                            <video autoplay muted loop playsinline preload="none"
                                class="lazy-video block w-full h-full aspect-[16/9] object-cover group-hover:scale-[1.02] transition-transform"
                                data-src="<?= $base ?>/assets/video/AZj14vhbOvzNIrt-1RYHuw-AZj14vhbK2uqUlwKwz_S2Q.mp4">
                            </video>

                            <span class="sheen"></span>
                            <div class="absolute bottom-4 left-4 text-sm font-medium text-white/90">AR in Action</div>
                        </div>
                    </div>
                </article>
                <article class="reveal delay-100 col-span-12 lg:col-span-6">
                    <div class="card-tilt group relative p-[1.8px] rounded-3xl animated-border-hero">
                        <div
                            class="relative rounded-[calc(1.5rem-1.8px)] overflow-hidden bg-white/5 ring-1 ring-white/10 backdrop-blur animate-floatSlow">
                            <video autoplay muted loop playsinline preload="none"
                                class="lazy-video block w-full h-full aspect-[16/9] object-cover group-hover:scale-[1.015] transition-transform"
                                data-src="<?= $base ?>/assets/video/Yealink.mp4">
                            </video>

                            <span class="sheen"></span>
                            <div class="absolute bottom-5 left-5">
                                <div
                                    class="inline-flex items-center gap-2 rounded-full bg-black/50 px-3 py-1 ring-1 ring-white/20 backdrop-blur">
                                    <span class="h-1.5 w-1.5 rounded-full bg-sky-400"></span>
                                    <span
                                        class="text-[12px] font-semibold tracking-wide text-white/90 uppercase">Feature
                                        Reel</span>
                                </div>
                                <div class="mt-3 text-lg font-medium text-white/95">Next-Gen Consoles</div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="reveal delay-200 col-span-12 sm:col-span-6 lg:col-span-3">
                    <div class="card-tilt group relative p-[1.5px] rounded-3xl animated-border">
                        <div
                            class="relative rounded-[calc(1.5rem-1.5px)] overflow-hidden bg-white/5 ring-1 ring-white/10 backdrop-blur">
                            <video autoplay muted loop playsinline preload="none"
                                class="lazy-video block w-full h-full aspect-[16/9] object-cover group-hover:scale-[1.02] transition-transform"
                                data-src="<?= $base ?>/assets/video/AZj1yoXl0UgpEmGW2K2zwAZj1yoXlbOa9mqkJTH0rFA.mp4">
                            </video>

                            <span class="sheen"></span>
                            <div class="absolute bottom-4 left-4 text-sm font-medium text-white/90">Smart Collaboration
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <style>
        @keyframes auroraDrift {
            0% {
                transform: translate3d(-2%, -1%, 0) scale(1.02);
                filter: blur(30px);
            }

            50% {
                transform: translate3d(2%, 1%, 0) scale(1.03);
                filter: blur(35px);
            }

            100% {
                transform: translate3d(-2%, -1%, 0) scale(1.02);
                filter: blur(30px);
            }
        }

        .aurora {
            background:
                radial-gradient(60% 80% at 18% 12%, rgba(249, 115, 22, .18) 0%, transparent 60%),
                radial-gradient(55% 75% at 82% 28%, rgba(56, 189, 248, .16) 0%, transparent 60%),
                radial-gradient(90% 60% at 50% 90%, rgba(255, 255, 255, .07) 0%, transparent 70%),
                radial-gradient(30% 30% at 65% 15%, rgba(249, 115, 22, .10) 0%, transparent 70%);
            animation: auroraDrift 16s ease-in-out infinite;
            filter: blur(28px);
        }

        /* --- Beams (converging hairline glows) --- */
        @keyframes beamSweep {
            0% {
                background-position: 0% 50%
            }

            100% {
                background-position: 200% 50%
            }
        }

        .beam {
            background: linear-gradient(90deg,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 149, 64, .10) 18%,
                    rgba(255, 255, 255, .06) 50%,
                    rgba(56, 189, 248, .12) 82%,
                    rgba(255, 255, 255, 0) 100%);
            background-size: 200% 100%;
            animation: beamSweep 12s linear infinite;
            filter: blur(48px);
            opacity: .45;
            mask-image: radial-gradient(100% 100% at 50% 50%, #000 40%, transparent 85%);
        }

        .beam--2 {
            animation-duration: 14s;
            animation-direction: reverse;
            opacity: .35;
        }

        /* --- Dots (soft particles, non-tacky) --- */
        @keyframes dotsDrift {
            0% {
                transform: translateY(0)
            }

            100% {
                transform: translateY(-12px)
            }
        }

        .dots {
            background-image: radial-gradient(rgba(255, 255, 255, .08) 1px, transparent 1px);
            background-size: 18px 18px;
            opacity: .18;
            animation: dotsDrift 7s ease-in-out infinite alternate;
            -webkit-mask-image: radial-gradient(70% 60% at 50% 45%, #000 55%, transparent 100%);
            mask-image: radial-gradient(70% 60% at 50% 45%, #000 55%, transparent 100%);
        }

        /* motion respect */
        @media (prefers-reduced-motion: reduce) {

            .aurora,
            .beam,
            .beam--2,
            .dots {
                animation: none !important
            }
        }

        /* Entrance reveal */
        .reveal {
            opacity: 0;
            transform: translateY(16px);
            transition: opacity .6s ease, transform .6s ease;
        }

        .reveal.is-inview {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal.delay-100 {
            transition-delay: .1s;
        }

        .reveal.delay-200 {
            transition-delay: .2s;
        }

        /* Subtle float for center hero */
        @keyframes floatSlow {

            0%,
            100% {
                transform: translateY(0)
            }

            50% {
                transform: translateY(-10px)
            }
        }

        .animate-floatSlow {
            animation: floatSlow 9s ease-in-out infinite;
        }

        /* Animated gradient hairline borders */
        @keyframes borderPan {
            0% {
                background-position: 0% 50%
            }

            100% {
                background-position: 200% 50%
            }
        }

        .animated-border {
            background: linear-gradient(90deg,
                    rgba(56, 189, 248, .6),
                    rgba(255, 255, 255, .15),
                    rgba(249, 115, 22, .6),
                    rgba(56, 189, 248, .6));
            background-size: 200% 100%;
            animation: borderPan 6s linear infinite;
        }

        .animated-border-hero {
            background: conic-gradient(at 30% 30%,
                    rgba(56, 189, 248, .65),
                    rgba(255, 255, 255, .08),
                    rgba(249, 115, 22, .65),
                    rgba(56, 189, 248, .65));
            animation: borderPan 8s linear infinite;
            background-size: 200% 200%;
        }

        /* Sheen sweep on hover */
        @keyframes sheenMove {
            0% {
                transform: translateX(-120%) skewX(-15deg);
                opacity: 0
            }

            30% {
                opacity: .35
            }

            100% {
                transform: translateX(120%) skewX(-15deg);
                opacity: 0
            }
        }

        .sheen {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            width: 30%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .35), transparent);
            transform: translateX(-150%) skewX(-15deg);
            filter: blur(2px);
        }

        .group:hover .sheen {
            animation: sheenMove 1.2s ease forwards;
        }

        /* Tilt parallax */
        .card-tilt {
            transform-style: preserve-3d;
            will-change: transform;
            transition: transform .2s ease;
        }

        .card-tilt.is-tilting {
            transition: none;
        }

        /* Respect reduced motion */
        @media (prefers-reduced-motion: reduce) {

            .reveal,
            .animate-floatSlow,
            .animated-border,
            .animated-border-hero,
            .group:hover .sheen {
                animation: none !important;
                transition: none !important;
            }
        }

        /* Gradient text animation (LEFT → RIGHT) */
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 200% 50%;
            }
        }

        .animated-gradient {
            background-size: 200% 100%;
            animation: gradientShift 9s linear infinite;
        }

        /* kinetic tagline words */
        @keyframes riseIn {
            0% {
                transform: translateY(10px);
                opacity: 0
            }

            100% {
                transform: translateY(0);
                opacity: 1
            }
        }

        .kinetic-word {
            animation: riseIn .7s cubic-bezier(.2, .7, .2, 1) both;
        }

        .kinetic-word.delay-75 {
            animation-delay: .075s
        }

        .kinetic-word.delay-150 {
            animation-delay: .15s
        }

        .kinetic-word.delay-200 {
            animation-delay: .2s
        }

        /* shimmer underline */
        @keyframes shimmerSweep {
            0% {
                transform: translateX(-120%);
                opacity: 0
            }

            20% {
                opacity: .5
            }

            100% {
                transform: translateX(220%);
                opacity: 0
            }
        }

        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .6), transparent);
            filter: blur(1px);
            animation: shimmerSweep 2.2s ease-in-out infinite;
        }

        /* motion respect */
        @media (prefers-reduced-motion: reduce) {

            .animated-gradient,
            .kinetic-word,
            .shimmer {
                animation: none !important
            }
        }

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 200% 50%;
            }
        }

        .gradient-sweep {
            background-size: 200% 100%;
            animation: gradientShift 8s ease-in-out infinite;
            will-change: background-position;
        }
    </style>


    <script>
        // Scroll reveal
        (() => {
            const els = document.querySelectorAll('.reveal');
            if (!('IntersectionObserver' in window)) { els.forEach(e => e.classList.add('is-inview')); return; }
            const io = new IntersectionObserver((entries) => {
                entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('is-inview'); io.unobserve(e.target); } });
            }, { threshold: 0.2 });
            els.forEach(e => io.observe(e));
        })();

        // Pause vids offscreen (battery-friendly)
        (() => {
            const vids = document.querySelectorAll('section video[autoplay][muted][loop]');
            if (!('IntersectionObserver' in window)) { vids.forEach(v => v.play().catch(() => { })); return; }
            const io = new IntersectionObserver(entries => {
                entries.forEach(e => {
                    const v = e.target;
                    if (e.isIntersecting) v.play().catch(() => { });
                    else v.pause();
                });
            }, { threshold: 0.25 });
            vids.forEach(v => io.observe(v));
        })();

        // Hover tilt (subtle, premium)
        (() => {
            const cards = document.querySelectorAll('.card-tilt');
            const clamp = (n, min, max) => Math.max(min, Math.min(max, n));
            cards.forEach(card => {
                let rect;
                const onMove = (e) => {
                    rect = rect || card.getBoundingClientRect();
                    const x = (e.clientX - rect.left) / rect.width;   // 0..1
                    const y = (e.clientY - rect.top) / rect.height;   // 0..1
                    const rx = clamp((0.5 - y) * 8, -6, 6);           // rotateX
                    const ry = clamp((x - 0.5) * 8, -6, 6);           // rotateY
                    card.classList.add('is-tilting');
                    card.style.transform = `perspective(1000px) rotateX(${rx}deg) rotateY(${ry}deg)`;
                };
                const onLeave = () => {
                    rect = null;
                    card.classList.remove('is-tilting');
                    card.style.transform = '';
                };
                card.addEventListener('mousemove', onMove);
                card.addEventListener('mouseleave', onLeave);
                card.addEventListener('touchmove', e => {
                    const t = e.touches[0]; if (!t) return;
                    onMove(t);
                }, { passive: true });
                card.addEventListener('touchend', onLeave);
            });
        })();
        document.addEventListener("DOMContentLoaded", () => {
            const videos = document.querySelectorAll("video.lazy-video");

            const lazyLoad = (video) => {
                if (video.dataset.src) {
                    const source = document.createElement("source");
                    source.src = video.dataset.src;
                    source.type = "video/mp4";
                    video.appendChild(source);
                    video.load();
                    video.play().catch(() => { });
                    video.removeAttribute("data-src");
                }
            };

            if ("IntersectionObserver" in window) {
                const observer = new IntersectionObserver((entries, obs) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            lazyLoad(entry.target);
                            obs.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.25 });

                videos.forEach(v => observer.observe(v));
            } else {
                videos.forEach(lazyLoad);
            }
        });

    </script>

    <section class="relative bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">

            <!-- Left media side -->
            <div class="relative h-[500px] lg:h-auto overflow-hidden">
                <video autoplay muted loop playsinline preload="none"
                    class="lazy-video absolute inset-0 w-full h-full object-cover"
                    data-src="<?= $base ?>/assets/video/OfficeTechnologyConnection(1080p,h264)(1).mp4">
                </video>

                <!-- optional overlay -->
                <div class="absolute inset-0 bg-gradient-to-tr from-black/40 via-transparent to-transparent"></div>
            </div>

            <!-- Right content side -->
            <div class="relative bg-gradient-to-br from-orange-600 to-blue-700 text-white flex items-center">
                <div class="px-8 py-20 lg:px-16 max-w-xl">

                    <span class="block text-sm font-semibold tracking-wider uppercase text-white/80">QueryTel</span>

                    <h2 class="mt-3 text-3xl md:text-5xl font-extrabold leading-tight">
                        Experience Technology<br>
                        <span class="py-1 rounded">That Moves the Future</span>
                    </h2>

                    <p class="mt-5 text-lg text-white/80">
                        We fuse innovation with design, turning AR, VR, and collaboration into
                        powerful experiences that redefine what’s possible.
                    </p>

                    <a href="#explore"
                        class="mt-8 inline-flex items-center gap-2 rounded-lg border border-white/30 bg-white/10 px-5 py-3 text-sm font-semibold uppercase tracking-wide hover:bg-white/20 transition">
                        Get in Touch
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="relative isolate overflow-hidden bg-slate-950 text-white py-36 md:py-44">
        <!-- Background accents -->
        <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10">
            <div
                class="absolute inset-0 bg-[radial-gradient(60%_60%_at_20%_20%,rgba(249,115,22,.08),transparent_60%),radial-gradient(50%_50%_at_80%_10%,rgba(56,189,248,.10),transparent_65%),radial-gradient(70%_70%_at_50%_100%,rgba(255,255,255,.05),transparent_70%)]">
            </div>
            <div
                class="absolute left-1/2 top-1/2 h-[1100px] w-[1100px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/5 blur-[240px]">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6">
            <!-- Header -->
            <div class="grid md:grid-cols-12 gap-10 items-start">
                <div class="md:col-span-6 lg:col-span-7">
                    <h2 class="text-5xl md:text-7xl font-extrabold leading-[1.05] tracking-tight">
                        <span class="block">Innovation</span>
                        <span
                            class="block bg-gradient-to-r from-orange-400 via-white to-sky-400 bg-clip-text text-transparent gradient-sweep">without
                            compromise</span>
                    </h2>
                    <p class="mt-6 text-lg md:text-xl text-slate-300/90 leading-relaxed max-w-2xl">
                        We are building what comes next in AR and VR, IoT, cybersecurity, and intelligent networking. We
                        are thinking immersive training on real headsets, smart sensors that act without constant cloud
                        calls, and network access that adjusts based on real behavior. Our goal is not just to ship
                        features but to deliver systems that work reliably, scale safely, and solve something.
                    </p>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <span class="px-3 py-1 text-sm rounded-full bg-white/10 ring-1 ring-white/10">AR/VR</span>
                        <span class="px-3 py-1 text-sm rounded-full bg-white/10 ring-1 ring-white/10">AI &amp;
                            Automation</span>
                        <span
                            class="px-3 py-1 text-sm rounded-full bg-white/10 ring-1 ring-white/10">Cloud‑Native</span>
                        <span class="px-3 py-1 text-sm rounded-full bg-white/10 ring-1 ring-white/10">Zero‑Trust</span>
                        <span class="px-3 py-1 text-sm rounded-full bg-white/10 ring-1 ring-white/10">Edge / IoT</span>
                        <span class="px-3 py-1 text-sm rounded-full bg-white/10 ring-1 ring-white/10">Realtime
                            Video</span>
                        <span class="px-3 py-1 text-sm rounded-full bg-white/10 ring-1 ring-white/10">Data
                            Platforms</span>
                    </div>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="#contact"
                            class="inline-flex items-center justify-center rounded-xl bg-white text-slate-950 px-5 py-3 font-semibold ring-1 ring-white/10 hover:opacity-90 transition">Request
                            an expert</a>

                    </div>
                </div>

                <!-- Meaningful Copy -->
                <div class="md:col-span-6 lg:col-span-5">
                    <div class="relative rounded-2xl bg-white/5 ring-1 ring-white/10 p-6 md:p-8 backdrop-blur">
                        <p class="text-slate-300 leading-relaxed">
                            QueryTel is actively deploying warehouse-grade IT solutions across Canada, including
                            hardened network infrastructure, AI-powered video surveillance, and identity-based remote
                            access. From cold-rated CAT6 cabling to redundant 10G fiber, our systems are built for
                            uptime in the harshest operational environments.
                        </p>

                        <p class="mt-6 text-sm text-slate-400">
                            We design for real-world conditions—freezer zones, moving forklifts, and zero-margin
                            downtime windows.
                        </p>


                    </div>
                </div>

            </div>

            <!-- What we will work on: Pillars -->
            <div class="mt-20 grid lg:grid-cols-3 gap-6">
                <!-- Immersive Workflows -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-orange-500/40 to-sky-500/40 blur opacity-30 group-hover:opacity-60 transition">
                    </div>
                    <div class="relative h-full rounded-2xl bg-white/5 ring-1 ring-white/10 p-7">
                        <h3 class="text-2xl font-bold">Immersive Workflows</h3>
                        <p class="mt-2 text-slate-300">
                            We are building hands-on AR and VR tools for real training, live remote support, and
                            interactive product simulations. These run on actual devices, not in slides or labs.
                        </p>
                        <div class="mt-4 text-sm text-slate-400">Stack: Unity, WebXR, Three.js, WASM</div>
                    </div>
                </div>

                <!-- Intelligent Video -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-sky-500/40 to-indigo-500/40 blur opacity-30 group-hover:opacity-60 transition">
                    </div>
                    <div class="relative h-full rounded-2xl bg-white/5 ring-1 ring-white/10 p-7">
                        <h3 class="text-2xl font-bold">Intelligent Video</h3>
                        <p class="mt-2 text-slate-300">
                            Our video stack adds context in real time. Expect sharper calls, instant captions, and voice
                            cues that help teams move faster without repeating themselves.
                        </p>
                        <div class="mt-4 text-sm text-slate-400">Stack: WebRTC, GPU processing, media servers, Whisper
                            ASR</div>
                    </div>
                </div>

                <!-- Adaptive Security -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-indigo-500/40 to-orange-500/40 blur opacity-30 group-hover:opacity-60 transition">
                    </div>
                    <div class="relative h-full rounded-2xl bg-white/5 ring-1 ring-white/10 p-7">
                        <h3 class="text-2xl font-bold">Adaptive Security</h3>
                        <p class="mt-2 text-slate-300">
                            We are rolling out identity based access systems that learn how your users behave and
                            respond when something feels off. Secure, automatic, and low effort.
                        </p>
                        <div class="mt-4 text-sm text-slate-400">Stack: OIDC, TLS, BPF, SIEM and orchestration</div>
                    </div>
                </div>
            </div>

            <div class="mt-6 grid lg:grid-cols-3 gap-6">
                <!-- Cloud Native Platforms -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-sky-500/40 to-orange-500/40 blur opacity-30 group-hover:opacity-60 transition">
                    </div>
                    <div class="relative h-full rounded-2xl bg-white/5 ring-1 ring-white/10 p-7">
                        <h3 class="text-2xl font-bold">Cloud Native Platforms</h3>
                        <p class="mt-2 text-slate-300">
                            Apps that scale without stress. Every deploy is observable, reversible, and built to survive
                            traffic spikes or failed releases.
                        </p>
                        <div class="mt-4 text-sm text-slate-400">Stack: Kubernetes, Argo, Terraform, OpenTelemetry</div>
                    </div>
                </div>

                <!-- Edge and IoT -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-orange-500/40 to-indigo-500/40 blur opacity-30 group-hover:opacity-60 transition">
                    </div>
                    <div class="relative h-full rounded-2xl bg-white/5 ring-1 ring-white/10 p-7">
                        <h3 class="text-2xl font-bold">Edge and IoT</h3>
                        <p class="mt-2 text-slate-300">
                            Smart devices that work even when offline, and sync when ready. Perfect for field
                            deployments, remote locations, and real time monitoring.
                        </p>
                        <div class="mt-4 text-sm text-slate-400">Stack: MQTT, WebSockets, TinyML, RTSP</div>
                    </div>
                </div>

                <!-- Data and Automation -->
                <div class="group relative">
                    <div
                        class="absolute -inset-1 rounded-2xl bg-gradient-to-tr from-indigo-500/40 to-sky-500/40 blur opacity-30 group-hover:opacity-60 transition">
                    </div>
                    <div class="relative h-full rounded-2xl bg-white/5 ring-1 ring-white/10 p-7">
                        <h3 class="text-2xl font-bold">Data and Automation</h3>
                        <p class="mt-2 text-slate-300">
                            We build clean data pipelines that turn raw events into decisions. No more waiting for
                            reports. Automations act on your behalf while the data flows.
                        </p>
                        <div class="mt-4 text-sm text-slate-400">Stack: Kafka, DuckDB, dbt, Airflow, LLM tools</div>
                    </div>
                </div>
            </div>


            <!-- Moving keywords strip -->
            <div class="mt-16 overflow-hidden">
                <div class="flex gap-8 whitespace-nowrap animate-marquee text-sm tracking-wide text-slate-300/80">
                    <span>WebRTC</span><span>Unity</span><span>Whisper‑ASR</span><span>Kubernetes</span><span>Terraform</span><span>OpenTelemetry</span><span>Zero‑Trust</span><span>mTLS</span><span>Edge
                        AI</span><span>MQTT</span><span>Kafka</span><span>dbt</span><span>DuckDB</span><span>Airflow</span><span>WebXR</span><span>Three.js</span>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes gradientShift {
            0% {
                background-position: 0% 50%
            }

            100% {
                background-position: 200% 50%
            }
        }

        .gradient-sweep {
            background-size: 200% 100%;
            animation: gradientShift 9s linear infinite;
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-marquee {
            animation: marquee 22s linear infinite;
        }

        @media (prefers-reduced-motion: reduce) {

            .gradient-sweep,
            .animate-marquee {
                animation: none !important;
            }
        }
    </style>


    <!-- CTA -->
    <section class="py-16 bg-gray-100 text-center">
        <div class="max-w-3xl mx-auto px-6">
            <h2 class="text-3xl font-semibold mb-4">Need a SOC with real humans behind it?</h2>
            <p class="text-gray-600 mb-6">
                We’ll map your signals, plug in our runbooks, and set SLAs that fit your risk profile.
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
                <textarea rows="4" name="message" placeholder="Tell us about your environment (users, tools, goals)…"
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


    <?php include('footer.php'); ?>
</body>

</html>