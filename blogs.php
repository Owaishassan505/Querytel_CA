<?php
/**
 * QueryTel — blogs.php (Static, full design restored)
 * - Exactly like the dynamic design we had earlier.
 * - All layout preserved: hero, featured, filters UI, tags, grid, pagination.
 * - Everything is static HTML with hardcoded content.
 * - Placeholder function `getBlogs()` at bottom for future dynamic hookup.
 */
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>QueryTel Journal — IT, Security & Cloud</title>
    <meta name="description" content="Field-tested insights on IT, cybersecurity, networking, and cloud." />
    <meta name="theme-color" content="#0f172a" />
    <link rel="icon" href="/favicon.ico" sizes="any" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html {
            scroll-behavior: smooth
        }

        .mesh-bg:before {
            content: "";
            position: absolute;
            inset: -10%;
            filter: blur(60px);
            background:
                radial-gradient(40% 40% at 20% 30%, rgba(37, 99, 235, .25) 0%, transparent 70%),
                radial-gradient(35% 35% at 80% 20%, rgba(249, 115, 22, .25) 0%, transparent 70%),
                radial-gradient(45% 45% at 60% 80%, rgba(14, 165, 233, .22) 0%, transparent 70%);
            z-index: -1
        }
    </style>
</head>

<body class="bg-white text-neutral-900 font-sans">
    <?php include 'navbar.php'; ?>

    <!-- HERO -->
    <section class="relative isolate overflow-hidden bg-gradient-to-br from-white via-brand-50 to-white">
        <div class="mesh-bg absolute inset-0"></div>
        <div class="max-w-7xl mx-auto px-6 md:px-12 py-20 md:py-28 grid lg:grid-cols-[1.2fr_1fr] gap-12 items-center">
            <div>
                <span
                    class="inline-flex items-center gap-2 text-[11px] font-semibold tracking-widest text-orange-600 uppercase">
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span>
                    QueryTel Journal
                </span>
                <h1 class="mt-3 text-4xl md:text-6xl font-bold leading-[1.05]">Practical IT. <span
                        class="text-blue-700">Zero fluff.</span></h1>
                <p class="mt-4 text-lg text-neutral-700 max-w-2xl">Hands-on guides and opinions on security, networking,
                    cloud, and continuity — written like you actually ship.</p>

                <!-- Quick Highlights (replacing fake form + tags) -->
                <div class="mt-6 grid grid-cols-2 gap-4 max-w-xl">
                    <div class="rounded-xl border border-neutral-200 bg-white p-4 shadow-sm">
                        <p class="text-sm font-semibold text-orange-600">Trending Topic</p>
                        <h3 class="mt-1 text-base font-medium text-neutral-900">Zero Trust Security</h3>
                        <p class="mt-1 text-sm text-neutral-600">Why clinics are adopting it fast.</p>
                    </div>
                    <div class="rounded-xl border border-neutral-200 bg-white p-4 shadow-sm">
                        <p class="text-sm font-semibold text-blue-600">Deep Dive</p>
                        <h3 class="mt-1 text-base font-medium text-neutral-900">Wi-Fi 7 for Healthcare</h3>
                        <p class="mt-1 text-sm text-neutral-600">Latency, roaming, and safe upgrades.</p>
                    </div>
                </div>

                <div class="mt-4 flex flex-wrap gap-2 text-xs">
                    <span class="rounded-full bg-neutral-100 px-3 py-1">Featured</span>
                    <span class="rounded-full bg-neutral-100 px-3 py-1">Guides</span>
                    <span class="rounded-full bg-neutral-100 px-3 py-1">Insights</span>
                    <span class="rounded-full bg-neutral-100 px-3 py-1">Case Studies</span>
                </div>

            </div>
            <div class="relative">
                <div class="rounded-2xl bg-white/70 backdrop-blur ring-1 ring-black/5 shadow p-6">
                    <div class="text-sm font-semibold text-neutral-700">Most Read This Month</div>
                    <ul class="mt-4 space-y-4 text-sm">
                        <li class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium text-neutral-900">Wi-Fi 7 in Hospitals: Worth It Yet?</h4>
                                <p class="text-xs text-neutral-500">Jul 19, 2025 • Networking</p>
                            </div>
                            <span class="text-xs font-semibold text-orange-600">8 min read</span>
                        </li>
                        <li class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium text-neutral-900">Zero Trust for Clinics</h4>
                                <p class="text-xs text-neutral-500">Aug 5, 2025 • Security</p>
                            </div>
                            <span class="text-xs font-semibold text-orange-600">5 min read</span>
                        </li>
                        <li class="flex justify-between items-start">
                            <div>
                                <h4 class="font-medium text-neutral-900">Backups that Actually Restore</h4>
                                <p class="text-xs text-neutral-500">Jul 3, 2025 • Continuity</p>
                            </div>
                            <span class="text-xs font-semibold text-orange-600">5 min read</span>
                        </li>
                    </ul>
                    <div class="mt-6 text-xs text-neutral-500">
                        Updated weekly • Curated by QueryTel engineers
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- FEATURED -->
    <section class="py-12">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <article class="group relative overflow-hidden rounded-2xl bg-white ring-1 ring-black/5 shadow-sm">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <!-- Media -->
                    <div class="relative h-72 md:h-full">
                        <picture>
                            <source srcset="/assets/images/blog-resilient-hospital-networks.avif" type="image/avif" />
                            <source srcset="/assets/images/blog-resilient-hospital-networks.webp" type="image/webp" />
                            <img src="/assets/images/blog-resilient-hospital-networks.jpg"
                                alt="Diagram of redundant hospital network topology" loading="lazy"
                                class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]" />
                        </picture>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-black/10 to-transparent"></div>
                        <span
                            class="absolute left-4 top-4 inline-flex items-center rounded-full bg-white/90 px-3 py-1 text-[11px] font-semibold text-neutral-900 ring-1 ring-black/10">
                            Featured
                        </span>
                    </div>

                    <!-- Content -->
                    <div class="p-8 md:p-10 lg:p-12">
                        <a href="#"
                            class="block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded">
                            <h2 class="text-2xl md:text-3xl font-bold leading-tight">
                                Building Resilient Hospital Networks in 2025
                            </h2>
                        </a>
                        <p class="mt-3 text-neutral-700">
                            A practical blueprint for redundancy, segmentation, and secure access across multi-site
                            hospitals.
                        </p>

                        <div class="mt-5 flex flex-wrap items-center gap-3 text-sm text-neutral-600">
                            <time datetime="2025-08-10">Aug 10, 2025</time>
                            <span aria-hidden="true">•</span>
                            <span>7 min read</span>
                            <span aria-hidden="true">•</span>
                            <span
                                class="inline-flex items-center gap-2 rounded-full bg-blue-50 px-2.5 py-0.5 text-xs font-medium text-blue-700 ring-1 ring-blue-200">
                                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M12 2a10 10 0 00-3.16 19.47c.5.09.68-.22.68-.48l-.01-1.68c-2.78.61-3.37-1.16-3.37-1.16-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.61.07-.61 1 .07 1.53 1.05 1.53 1.05.89 1.52 2.34 1.08 2.91.83.09-.66.35-1.08.64-1.33-2.22-.25-4.56-1.11-4.56-4.93 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.64 0 0 .84-.27 2.75 1.02a9.56 9.56 0 015 0c1.91-1.29 2.75-1.02 2.75-1.02.55 1.37.2 2.39.1 2.64.64.7 1.03 1.59 1.03 2.68 0 3.83-2.34 4.68-4.57 4.93.36.31.69.92.69 1.86l-.01 2.76c0 .27.18.58.69.48A10 10 0 0012 2z" />
                                </svg>
                                Healthcare IT
                            </span>
                        </div>

                        <div class="mt-6">
                            <a href="#"
                                class="inline-flex items-center gap-2 rounded-md bg-neutral-900 px-4 py-2 font-semibold text-white shadow-sm transition hover:bg-neutral-800 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                                Read article
                                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- GRID -->
    <main class="py-12">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <article
                    class="group relative overflow-hidden rounded-2xl bg-white ring-1 ring-black/5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="relative aspect-[16/9] w-full">
                        <img src="/assets/images/blog-zero-trust.jpg" alt="Clinic workstation with security overlay"
                            loading="lazy"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]" />
                        <span
                            class="absolute left-3 top-3 rounded-full bg-emerald-50 px-2.5 py-0.5 text-[11px] font-semibold text-emerald-700 ring-1 ring-emerald-100">Security</span>
                        <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-black/30 to-transparent">
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 text-xs text-neutral-600">
                            <time datetime="2025-08-05">Aug 5, 2025</time><span aria-hidden="true">•</span><span>5 min
                                read</span>
                        </div>
                        <a href="#"
                            class="mt-2 block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded">
                            <h3 class="text-lg font-semibold leading-snug">Zero Trust for Clinics: A Starter Guide</h3>
                        </a>
                        <p class="mt-1 text-sm text-neutral-700">
                            Cut through the buzzword—small clinics can adopt Zero Trust without a million-dollar budget.
                        </p>
                    </div>
                </article>

                <!-- Card 2 -->
                <article
                    class="group relative overflow-hidden rounded-2xl bg-white ring-1 ring-black/5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="relative aspect-[16/9] w-full">
                        <img src="/assets/images/blog-wifi7.jpg" alt="Wi-Fi 7 access points in a hospital corridor"
                            loading="lazy"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]" />
                        <span
                            class="absolute left-3 top-3 rounded-full bg-sky-50 px-2.5 py-0.5 text-[11px] font-semibold text-sky-700 ring-1 ring-sky-100">Networking</span>
                        <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-black/30 to-transparent">
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 text-xs text-neutral-600">
                            <time datetime="2025-07-19">Jul 19, 2025</time><span aria-hidden="true">•</span><span>8 min
                                read</span>
                        </div>
                        <a href="#"
                            class="mt-2 block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded">
                            <h3 class="text-lg font-semibold leading-snug">Wi-Fi 7 in Hospitals: Worth It Yet?</h3>
                        </a>
                        <p class="mt-1 text-sm text-neutral-700">
                            Latency-sensitive vitals, interference hellscapes, and how to phase upgrades sanely.
                        </p>
                    </div>
                </article>

                <!-- Card 3 -->
                <article
                    class="group relative overflow-hidden rounded-2xl bg-white ring-1 ring-black/5 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="relative aspect-[16/9] w-full">
                        <img src="/assets/images/blog-backups-restore.jpg" alt="Backup drives and recovery dashboard"
                            loading="lazy"
                            class="absolute inset-0 h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.03]" />
                        <span
                            class="absolute left-3 top-3 rounded-full bg-amber-50 px-2.5 py-0.5 text-[11px] font-semibold text-amber-700 ring-1 ring-amber-100">Continuity</span>
                        <div class="absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-black/30 to-transparent">
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 text-xs text-neutral-600">
                            <time datetime="2025-07-03">Jul 3, 2025</time><span aria-hidden="true">•</span><span>5 min
                                read</span>
                        </div>
                        <a href="#"
                            class="mt-2 block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded">
                            <h3 class="text-lg font-semibold leading-snug">Backups that Actually Restore</h3>
                        </a>
                        <p class="mt-1 text-sm text-neutral-700">
                            Snapshots are not a strategy. Test restores, offsite copies, and ransomware drills.
                        </p>
                    </div>
                </article>
            </div>

            <!-- Pagination (static) -->
            <nav class="mt-10 flex items-center justify-between" aria-label="Pagination">
                <p class="text-sm text-neutral-600">Page 1 of 1 · 5 posts</p>
                <div class="flex items-center gap-2">
                    <button disabled
                        class="rounded-md border border-neutral-300 bg-white px-4 py-2 text-sm font-medium text-neutral-400"
                        aria-disabled="true">Previous</button>
                    <button disabled
                        class="rounded-md border border-neutral-300 bg-white px-4 py-2 text-sm font-medium text-neutral-400"
                        aria-disabled="true">Next</button>
                </div>
            </nav>

            <!-- CTA -->
            <section
                class="mt-16 rounded-2xl bg-gradient-to-br from-neutral-900 via-neutral-800 to-neutral-900 p-8 text-white shadow-sm">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-3 items-center">
                    <div class="md:col-span-2">
                        <h3 class="text-2xl font-bold">Need help with a rollout or audit?</h3>
                        <p class="mt-2 text-neutral-300">Talk to engineers who design, secure, and ship enterprise
                            infrastructure.</p>
                    </div>
                    <div class="flex items-center md:justify-end">
                        <a href="/contactus"
                            class="inline-flex items-center justify-center gap-2 rounded-md bg-white px-5 py-3 font-semibold text-neutral-900 shadow-sm transition hover:bg-neutral-100 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-400">
                            Request an expert
                            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M13 5l7 7-7 7-1.5-1.5L16 13H4v-2h12l-4.5-4.5L13 5z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>


    <?php include 'footer.php'; ?>

    <script>
        // Placeholder for future hookup
        function getBlogs() {
            // Replace static cards with dynamic render later
            return [];
        }
    </script>
</body>

</html>