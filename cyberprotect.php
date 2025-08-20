<?php $base = "/Querytel_CA"; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cyber Protect — QueryTel</title>
    <meta name="description"
        content="Next-gen cyber protection: backup, anti-malware, patching, and recovery in one lightweight platform." />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brandorange: '#f97316',
                        brandblue: '#1e40af',
                    },
                    keyframes: {
                        fadeUp: { "0%": { opacity: 0, transform: "translateY(12px)" }, "100%": { opacity: 1, transform: "translateY(0)" } }
                    },
                    animation: { fadeUp: "fadeUp .6s ease-out forwards" },
                    boxShadow: { soft: "0 8px 30px rgba(0,0,0,.08)" }
                }
            }
        }

    </script>
</head>

<body class="bg-white text-neutral-900 antialiased">
    <?php include("navbar.php"); ?>

    <!-- HERO (short) -->
    <section class="relative overflow-hidden text-white">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-orange-600 to-brandblue"></div>
        <div class="absolute inset-0" style="background-image:
       radial-gradient(80rem 40rem at 10% -10%,rgba(255,255,255,.15),transparent 60%),
       radial-gradient(60rem 30rem at 110% 120%,rgba(255,255,255,.08),transparent 40%);"></div>

        <div class="relative max-w-7xl mx-auto px-6 pt-20 pb-16 grid md:grid-cols-2 gap-10 items-center">
            <div class="animate-fadeUp">
                <p
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 ring-1 ring-white/20 px-3 py-1 text-sm">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span> Cyber Cloud Services
                </p>
                <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">Cyber Protect</h1>
                <p class="mt-4 text-orange-50 max-w-xl">
                    Unified protection that blends backup, anti-malware, vulnerability assessment, and instant recovery
                    managed from one console.
                </p>
                <div class="mt-7 flex flex-wrap gap-3">
                    <a href="#plans"
                        class="inline-flex rounded-lg bg-white text-orange-600 font-semibold px-5 py-3 hover:bg-orange-50">See
                        Plans</a>
                    <a href="#highlights"
                        class="inline-flex rounded-lg bg-white/10 ring-1 ring-white/30 px-5 py-3 hover:bg-white/15">Key
                        Highlights</a>
                </div>
            </div>
            <div class="relative animate-fadeUp md:delay-150">
                <div class="absolute -inset-8 bg-white/10 blur-3xl rounded-full"></div>
                <div class="relative z-10 bg-white/95 rounded-2xl ring-1 ring-black/5 p-6 shadow-soft">
                    <img src="<?= $base ?>/assets/images/CYBER-SECURITY.webp" alt="Cyber Protect"
                        class="w-full h-72 object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- SHORT HIGHLIGHTS -->
    <section id="highlights" class="bg-neutral-50 py-12 border-y border-neutral-200">
        <div class="max-w-7xl mx-auto px-6 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="rounded-xl bg-white p-5 border border-neutral-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <span class="h-10 w-10 grid place-items-center rounded-lg bg-orange-100 text-orange-700">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l7 3v6c0 5-3.4 9.7-7 11-3.6-1.3-7-6-7-11V5l7-3z" />
                        </svg>
                    </span>
                    <h3 class="font-semibold">Active Defense</h3>
                </div>
                <p class="mt-2 text-sm text-neutral-700">Behavior-based anti-malware with rollback, signed deletes, and
                    MFA.
                </p>
            </div>
            <div class="rounded-xl bg-white p-5 border border-neutral-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <span class="h-10 w-10 grid place-items-center rounded-lg bg-blue-100 text-blue-700">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M3 5h18v12H3zM2 19h20v2H2z" />
                        </svg>
                    </span>
                    <h3 class="font-semibold">Unified Console</h3>
                </div>
                <p class="mt-2 text-sm text-neutral-700">Backup, AV, patching, and recovery are controlled from one
                    pane.
                </p>
            </div>
            <div class="rounded-xl bg-white p-5 border border-neutral-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <span class="h-10 w-10 grid place-items-center rounded-lg bg-emerald-100 text-emerald-700">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 11h5v-2h-4V6h-2v7z" />
                        </svg>
                    </span>
                    <h3 class="font-semibold">Rapid Recovery</h3>
                </div>
                <p class="mt-2 text-sm text-neutral-700">Granular restore or image-level instant recovery in minutes.
                </p>
            </div>
            <div class="rounded-xl bg-white p-5 border border-neutral-200 shadow-sm hover:shadow-md transition">
                <div class="flex items-center gap-3">
                    <span class="h-10 w-10 grid place-items-center rounded-lg bg-violet-100 text-violet-700">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M4 6a2 2 0 012-2h12a2 2 0 012 2v2H4V6zm0 4h16v4H4v-4zm0 6h16v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2z" />
                        </svg>
                    </span>
                    <h3 class="font-semibold">Hardening + Patching</h3>
                </div>
                <p class="mt-2 text-sm text-neutral-700">Auto vulnerability scan, prioritized patches, and safe reboots.
                </p>
            </div>
        </div>
    </section>

    <section class="bg-slate-900 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">Acronis Protect Cloud Features</h2>
                <div class="mt-4 h-px w-24 bg-white/20 mx-auto"></div>
            </div>

            <div class="mt-10 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card -->
                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <!-- bolt/shield -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l7 3v6c0 5-3.4 9.7-7 11-3.6-1.3-7-6-7-11V5l7-3z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Simplified Onboarding</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Discover assets and deploy a single lightweight agent remotely for anti-malware, backup,
                        patching, and more.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 11h5v-2h-4V6h-2v7z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Zero-Day Malware & Ransomware</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Behavior-based detection, rollback, and signed deletes guard against evolving threats.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M10 2h4l1 4h4l-3 3 1 4-4-2-4 2 1-4-3-3h4l1-4z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Compliance & Forensics</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Image-based backups plus forensic metadata (free space, memory dumps) to meet strict
                        requirements.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 5h18v12H3zM2 19h20v2H2z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Better SLAs</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Improve availability KPIs with proactive, active, and reactive cyber protection layers.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 21l-8-4V7l8-4 8 4v10l-8 4zm-1-7v2h2v-2h-2zm0-8v6h2V6h-2z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Post-Attack Recovery</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Lower risk with malware scans of backups, isolated restore locations and curated definitions.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l7 3v6c0 5-3.4 9.7-7 11-3.6-1.3-7-6-7-11V5l7-3z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Protection for Key Files</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Data Protection Map gives at-a-glance visibility of covered data across your estate.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h10v2H4z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Centralized Patching</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Patch more than Microsoft covers the client software estate from one multitenant tool.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 3h18v2H3zm2 4h14v2H5zm-2 4h18v2H3zm2 4h14v2H5z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Demonstrate Value</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Transparent reporting and vulnerability assessment tie service to outcomes for easier renewals.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M5 3h14v4H5zM3 9h18v4H3zm2 6h14v4H5z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Real-Time Doc Protection</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Continuous data protection saves critical file changes immediately, even between backups.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M6 7h12v2H6zm0 4h12v2H6zm0 4h8v2H6z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Eliminate Complexity</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Integrate cybersecurity and data protection into one platform, fewer swivel-chairs, and lower
                        cost.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 4l4 8H8l4-8zm0 16a2 2 0 110-4 2 2 0 010 4z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Auto-Response to Threats</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Adjust scans and backup schedules automatically based on real-time alerts from the SOC.
                    </p>
                </article>

                <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
                    <div class="flex items-center gap-3">
                        <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M11 21h2V7h-2v14zM5 21h2V11H5v10zm12 0h2V3h-2v18z" />
                            </svg>
                        </span>
                        <h3 class="font-semibold text-white text-sm md:text-base">Minimal Downtime</h3>
                    </div>
                    <p class="mt-3 text-sm text-slate-300">
                        Streamline maintenance with health checks, on-time patching, and improved Active Protection.
                    </p>
                </article>
            </div>
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

    <!-- Tiny reveal animation (optional) -->
    <script>
            (function () {
                const sections = document.querySelectorAll('section [class*="grid"], section .rounded-2xl');
                const io = new IntersectionObserver((es) => {
                    es.forEach(e => {
                        if (!e.isIntersecting) return;
                        e.target.style.opacity = 0;
                        e.target.style.transform = 'translateY(10px)';
                        requestAnimationFrame(() => {
                            e.target.style.transition = 'opacity .5s ease, transform .5s ease';
                            e.target.style.opacity = 1;
                            e.target.style.transform = 'translateY(0)';
                        });
                        io.unobserve(e.target);
                    });
                }, { threshold: .15 });
                sections.forEach(el => io.observe(el));
            })();
    </script>
</body>

</html>