<?php $base = "" ?><!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cyber Backup Cloud - QueryTel</title>
    <meta name="description"
        content="Air-gapped, encrypted, policy-driven cloud backup for endpoints, servers, and SaaS. Instant recovery. Ransomware-safe snapshots." />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { brandorange: '#f97316', brandblue: '#1e40af' },
                    boxShadow: {
                        'soft': '0 10px 30px -12px rgba(2,8,23,.15)',
                        'glow-orange': '0 10px 40px -10px rgba(249,115,22,.35)',
                    },
                    keyframes: {
                        fadeUp: { "0%": { opacity: 0, transform: "translateY(18px)" }, "100%": { opacity: 1, transform: "translateY(0)" } },
                        float: { "0%,100%": { transform: "translateY(-4px)" }, "50%": { transform: "translateY(4px)" } },
                        shine: { "0%": { transform: "translateX(-120%)" }, "100%": { transform: "translateX(220%)" } },
                        ringPulse: {
                            "0%": { boxShadow: "0 0 0 0 rgba(249,115,22,.35)" },
                            "70%": { boxShadow: "0 0 0 12px rgba(249,115,22,0)" },
                            "100%": { boxShadow: "0 0 0 0 rgba(249,115,22,0)" }
                        }
                    },
                    animation: {
                        fadeUp: "fadeUp .6s ease-out forwards",
                        float: "float 6s ease-in-out infinite",
                        ringPulse: "ringPulse 2.8s ease-out infinite",
                    },
                    backdropBlur: { xs: '2px' }
                }
            }
        }
            <!-- Google Tag Manager -->
            < script > (function (w, d, s, l, i) {
                w[l] = w[l] || []; w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                }); var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-57GG72GW');</script>
    <!-- End Google Tag Manager -->

    </script>
    <style>
        /* AOS-lite: reveal on scroll */
        [data-animate] {
            opacity: 0;
            transform: translateY(18px);
            transition: opacity .7s ease, transform .7s ease;
        }

        [data-animate].in {
            opacity: 1;
            transform: translateY(0);
        }

        @media (prefers-reduced-motion: reduce) {
            [data-animate] {
                opacity: 1 !important;
                transform: none !important;
            }

            .animate-fadeUp,
            .animate-float,
            .animate-ringPulse {
                animation: none !important;
            }
        }

        /* Button shimmer line */
        .btn-shine {
            position: relative;
            overflow: hidden;
        }

        .btn-shine::after {
            content: "";
            position: absolute;
            inset: 0 auto 0 -40%;
            width: 40%;
            transform: skewX(-18deg);
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .35), transparent);
            opacity: 0;
            transition: opacity .25s ease;
        }

        .btn-shine:hover::after {
            animation: shine 1.2s ease;
            opacity: 1;
        }

        /* Parallax blobs (hero) */
        .blob {
            position: absolute;
            filter: blur(42px);
            opacity: .28;
        }
    </style>
</head>

<body class="bg-white text-neutral-900 antialiased">
    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="relative overflow-hidden text-white">
        <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-orange-600 to-brandblue"></div>
        <div class="absolute inset-0" style="background-image:
      radial-gradient(80rem 40rem at 10% -10%,rgba(255,255,255,.15),transparent 60%),
      radial-gradient(60rem 30rem at 110% 120%,rgba(255,255,255,.08),transparent 40%);"></div>

        <!-- parallax blobs -->
        <span class="blob -top-16 -left-10 w-[380px] h-[380px] bg-white/30 rounded-full"
            style="animation:float 9s ease-in-out infinite;"></span>
        <span class="blob -bottom-20 -right-20 w-[460px] h-[460px] bg-white/25 rounded-full"
            style="animation:float 11s ease-in-out infinite;"></span>

        <div class="relative max-w-7xl mx-auto px-6 pt-20 pb-24 grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeUp" data-animate>
                <p
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 ring-1 ring-white/20 px-3 py-1 text-sm backdrop-blur-xs">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span> Cyber Cloud Services
                </p>
                <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">Cyber Cloud Backup</h1>
                <p class="mt-5 text-lg text-orange-50">
                    Air-gapped, encrypted, policy-driven backups for endpoints, servers, and SaaS. Fast recovery.
                    Ransomware-safe snapshots.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <!-- <a href="#plans"
                        class="btn-shine inline-flex justify-center rounded-lg bg-white text-orange-600 font-semibold px-6 py-3 hover:bg-orange-50 transition shadow-soft">
                        View Plans
                    </a> -->
                    <a href="<?= $base . '/contactus' ?>"
                        class="inline-flex justify-center rounded-lg bg-white/10 ring-1 ring-white/30 px-6 py-3 hover:bg-white/15 transition backdrop-blur-xs">
                        Request Demo
                    </a>
                </div>
                <div class="mt-6 flex flex-wrap items-center gap-4 text-sm text-white/85">
                    <span class="inline-flex items-center gap-2"><svg class="h-5 w-5" fill="currentColor">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg> AES-256 at rest</span>
                    <span class="inline-flex items-center gap-2"><svg class="h-5 w-5" fill="currentColor">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg> SOC 2 ready</span>
                    <span class="inline-flex items-center gap-2"><svg class="h-5 w-5" fill="currentColor">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg> Immutable backups</span>
                </div>
            </div>

            <div class="relative md:delay-150 animate-fadeUp" data-animate>
                <div class="absolute -inset-8   animate-float"></div>
                <div class="relative z-10    ring-1 ring-black/5 p-6 backdrop-blur">
                    <img src="<?= $base ?>/assets/images/undraw_cloud-hosting_tfeh.svg"
                        alt="Secure Cloud Backup Illustration" class="w-full h-72 object-contain">
                </div>
            </div>
        </div>
    </section>

    <!-- BREADCRUMB -->
    <nav class="max-w-7xl mx-auto px-6 py-4 text-sm text-neutral-600" data-animate>
        <a href="<?= $base ?>/" class="hover:text-neutral-900">Home</a>
        <span class="mx-2">/</span>
        <a href="<?= $base ?>/cybercloudservices" class="hover:text-neutral-900">Cyber Cloud Services</a>
        <span class="mx-2">/</span>
        <span class="text-neutral-900 font-medium">Cyber Backup Cloud</span>
    </nav>

    <!-- VALUE STRIP -->
    <section class="bg-neutral-50 py-10 border-y border-neutral-200">
        <div class="max-w-7xl mx-auto px-6 grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="flex items-start gap-3 group" data-animate>
                <div
                    class="h-10 w-10 rounded-lg bg-orange-100 text-orange-700 grid place-items-center font-bold group-hover:shadow-glow-orange transition">
                    90d</div>
                <div>
                    <div class="font-semibold">Retention</div>
                    <div class="text-sm text-neutral-600">Policy-based 7–90 days</div>
                </div>
            </div>
            <div class="flex items-start gap-3 group" data-animate>
                <div
                    class="h-10 w-10 rounded-lg bg-blue-100 text-blue-700 grid place-items-center font-bold group-hover:shadow-soft transition">
                    SaaS</div>
                <div>
                    <div class="font-semibold">M365/Google</div>
                    <div class="text-sm text-neutral-600">Mail, Drive, SharePoint</div>
                </div>
            </div>
            <div class="flex items-start gap-3 group" data-animate>
                <div
                    class="h-10 w-10 rounded-lg bg-emerald-100 text-emerald-700 grid place-items-center font-bold group-hover:shadow-soft transition">
                    DR</div>
                <div>
                    <div class="font-semibold">Instant restore</div>
                    <div class="text-sm text-neutral-600">Bare-metal & file</div>
                </div>
            </div>
            <div class="flex items-start gap-3 group" data-animate>
                <div
                    class="h-10 w-10 rounded-lg bg-violet-100 text-violet-700 grid place-items-center font-bold group-hover:shadow-soft transition">
                    IMM</div>
                <div>
                    <div class="font-semibold">Immutability</div>
                    <div class="text-sm text-neutral-600">Ransomware-hardened</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <!-- <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto" data-animate>
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight">Backups that don’t blink</h2>
                <p class="mt-4 text-neutral-600">Automated policies, zero-trust access, and immutable storage so
                    rollbacks are minutes, not days.</p>
            </div>

            <div class="mt-12 grid md:grid-cols-3 gap-8">
                <article
                    class="rounded-xl border border-neutral-200 p-6 hover:shadow-soft hover:-translate-y-0.5 transition will-change-transform"
                    data-animate>
                    <h3 class="font-semibold text-lg">Policy Engine</h3>
                    <p class="mt-2 text-neutral-600">Group devices, set frequency & retention, auto-apply on enroll.
                        Reports included.</p>
                    <ul class="mt-3 text-sm text-neutral-700 list-disc list-inside space-y-1">
                        <li>Hourly/daily/weekly</li>
                        <li>Geo-aware storage</li>
                        <li>Alerts & failed-job retries</li>
                    </ul>
                </article>

                <article
                    class="rounded-xl border border-neutral-200 p-6 hover:shadow-soft hover:-translate-y-0.5 transition will-change-transform"
                    data-animate>
                    <h3 class="font-semibold text-lg">Ransomware-safe</h3>
                    <p class="mt-2 text-neutral-600">Immutable snapshots with object-lock. MFA & signed deletes.</p>
                    <ul class="mt-3 text-sm text-neutral-700 list-disc list-inside space-y-1">
                        <li>AES-256 at rest, TLS 1.2+</li>
                        <li>RBAC + SSO</li>
                        <li>Air-gap copy optional</li>
                    </ul>
                </article>

                <article
                    class="rounded-xl border border-neutral-200 p-6 hover:shadow-soft hover:-translate-y-0.5 transition will-change-transform"
                    data-animate>
                    <h3 class="font-semibold text-lg">Fast Recovery</h3>
                    <p class="mt-2 text-neutral-600">Granular file restore, full image, and SaaS item-level rollback.
                    </p>
                    <ul class="mt-3 text-sm text-neutral-700 list-disc list-inside space-y-1">
                        <li>Bare-metal to dissimilar HW</li>
                        <li>Self-service portal</li>
                        <li>Point-in-time mail/drive</li>
                    </ul>
                </article>
            </div>
        </div>
    </section> -->

    <!-- WORKLOADS & COVERAGE -->
    <!-- <section class="bg-neutral-50 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center" data-animate>What you can back up</h2>
            <div class="mt-10 grid lg:grid-cols-3 gap-8">
                <div class="rounded-xl bg-white border border-neutral-200 p-6 hover:shadow-soft transition"
                    data-animate>
                    <h3 class="font-semibold">Endpoints</h3>
                    <p class="mt-2 text-neutral-600 text-sm">Windows 10/11, macOS Ventura+.</p>
                    <ul class="mt-3 text-sm text-neutral-700 space-y-1 list-disc list-inside">
                        <li>User folders & custom paths</li>
                        <li>External drives (opt-in)</li>
                        <li>Bandwidth throttling</li>
                    </ul>
                </div>
                <div class="rounded-xl bg-white border border-neutral-200 p-6 hover:shadow-soft transition"
                    data-animate>
                    <h3 class="font-semibold">Servers & VMs</h3>
                    <p class="mt-2 text-neutral-600 text-sm">Windows Server 2016+, Ubuntu/CentOS/RHEL.</p>
                    <ul class="mt-3 text-sm text-neutral-700 space-y-1 list-disc list-inside">
                        <li>Image & file-level backup</li>
                        <li>Application-aware (VSS)</li>
                        <li>VM snapshots (Hyper-V/VMware)</li>
                    </ul>
                </div>
                <div class="rounded-xl bg-white border border-neutral-200 p-6 hover:shadow-soft transition"
                    data-animate>
                    <h3 class="font-semibold">SaaS</h3>
                    <p class="mt-2 text-neutral-600 text-sm">Microsoft 365 & Google Workspace.</p>
                    <ul class="mt-3 text-sm text-neutral-700 space-y-1 list-disc list-inside">
                        <li>Exchange/Outlook mail & calendar</li>
                        <li>OneDrive/Drive & SharePoint</li>
                        <li>Point-in-time restore</li>
                    </ul>
                </div>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-6">
                <div class="rounded-xl border border-neutral-200 bg-white p-6" data-animate>
                    <div class="text-sm font-semibold text-orange-700 uppercase">Security</div>
                    <ul class="mt-3 text-sm text-neutral-700 space-y-1 list-disc list-inside">
                        <li>AES-256 at rest, TLS 1.2+ in transit</li>
                        <li>Immutability (S3 Object-Lock)</li>
                        <li>MFA + RBAC + IP allow-lists</li>
                    </ul>
                </div>
                <div class="rounded-xl border border-neutral-200 bg-white p-6" data-animate>
                    <div class="text-sm font-semibold text-orange-700 uppercase">SLA</div>
                    <ul class="mt-3 text-sm text-neutral-700 space-y-1 list-disc list-inside">
                        <li>RPO: as low as 1 hour*</li>
                        <li>RTO: minutes for file restore</li>
                        <li>99.9% service uptime</li>
                    </ul>
                    <p class="mt-2 text-xs text-neutral-500">*Depends on selected schedule/policy.</p>
                </div>
                <div class="rounded-xl border border-neutral-200 bg-white p-6" data-animate>
                    <div class="text-sm font-semibold text-orange-700 uppercase">Data residency</div>
                    <ul class="mt-3 text-sm text-neutral-700 space-y-1 list-disc list-inside">
                        <li>Primary: North America (default)</li>
                        <li>Optional geo-replica region</li>
                        <li>PIPEDA & SOC 2 aligned</li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->

    <!-- HOW IT WORKS -->
    <!-- <section class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <div data-animate>
                <h2 class="text-2xl md:text-3xl font-bold">How it works</h2>
                <ol class="mt-6 space-y-4 text-neutral-700">
                    <li><span class="font-semibold text-orange-600">1.</span> Enroll devices or connect SaaS
                        (M365/Google) via secure OAuth.</li>
                    <li><span class="font-semibold text-orange-600">2.</span> Apply backup policy (scope, schedule,
                        retention, region).</li>
                    <li><span class="font-semibold text-orange-600">3.</span> Monitor jobs & alerts; auto-remediation on
                        failure.</li>
                    <li><span class="font-semibold text-orange-600">4.</span> Restore granular files, images, or SaaS
                        items in minutes.</li>
                </ol>
                <div class="mt-8 flex gap-4">
                    <a href="#plans"
                        class="btn-shine inline-flex rounded-lg bg-orange-600 text-white px-6 py-3 font-semibold hover:bg-orange-700 shadow-glow-orange">See
                        Pricing</a>

                </div>
            </div>
            <div class="relative flex justify-center items-center" data-animate>
                <div class="absolute -inset-6 bg-orange-100 blur-3xl rounded-3xl opacity-60 animate-pulse"></div>
                <div class="relative z-10 rounded-2xl  flex justify-center items-center">
                    <script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js"
                        type="module"></script>
                    <dotlottie-wc src="https://lottie.host/11027459-9f66-4906-b9c5-6fa58c7488c5/TfHZmQ1f8D.lottie"
                        style="width: 450px; height: 450px" speed="1" autoplay loop>
                    </dotlottie-wc>
                </div>
            </div>

        </div>
    </section> -->

    <!-- PRICING -->
    <!-- <section id="plans" class="bg-neutral-50 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto" data-animate>
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight">Simple, usage-based pricing</h2>
                <p class="mt-3 text-neutral-600">Mix per-device and per-GB. Cancel anytime. Volume discounts available.
                </p>
            </div>

            <div class="mt-10 grid md:grid-cols-3 gap-6">

                <div class="rounded-2xl border border-neutral-200 bg-white p-6 hover:shadow-soft hover:-translate-y-0.5 transition"
                    data-animate>
                    <h3 class="font-semibold text-lg">Endpoints</h3>
                    <p class="mt-2 text-neutral-600">Windows/macOS laptops & desktops</p>
                    <div class="mt-4">
                        <div class="text-3xl font-bold">$4<span
                                class="text-base font-medium text-neutral-500">/device/mo</span></div>
                        <div class="mt-1 text-sm text-neutral-600">+ $0.06 / GB-month storage</div>
                    </div>
                    <ul class="mt-4 text-sm text-neutral-700 space-y-2">
                        <li>File-level backup & restore</li>
                        <li>Policy engine & reports</li>
                        <li>30–90 day retention</li>
                    </ul>
                    <a href="<?= $base . '/contactus' ?>"
                        class="mt-6 inline-flex w-full justify-center rounded-lg bg-orange-600 text-white px-4 py-2.5 font-semibold hover:bg-orange-700 btn-shine">Request
                        quote</a>
                </div>


                <div class="relative rounded-2xl border-2 border-orange-600 bg-white p-6 shadow-[0_8px_30px_rgba(249,115,22,.08)] hover:shadow-glow-orange hover:-translate-y-0.5 transition"
                    data-animate>
                    <div class="absolute -inset-px rounded-2xl pointer-events-none animate-ringPulse"></div>
                    <div
                        class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-orange-700 bg-orange-50 px-2 py-1 rounded">
                        Recommended</div>
                    <h3 class="mt-3 font-semibold text-lg">Servers & VMs</h3>
                    <p class="mt-2 text-neutral-600">Windows/Linux servers, VMware/Hyper-V</p>
                    <div class="mt-4">
                        <div class="text-3xl font-bold">$15<span
                                class="text-base font-medium text-neutral-500">/server/mo</span></div>
                        <div class="mt-1 text-sm text-neutral-600">+ $0.05 / GB-month storage</div>
                    </div>
                    <ul class="mt-4 text-sm text-neutral-700 space-y-2">
                        <li>Image & file-level backups</li>
                        <li>Application-aware (VSS)</li>
                        <li>Instant restores & DR-ready</li>
                    </ul>
                    <a href="<?= $base . '/contactus' ?>"
                        class="mt-6 inline-flex w-full justify-center rounded-lg bg-orange-600 text-white px-4 py-2.5 font-semibold hover:bg-orange-700 btn-shine">Request
                        quote</a>
                </div>


                <div class="rounded-2xl border border-neutral-200 bg-white p-6 hover:shadow-soft hover:-translate-y-0.5 transition"
                    data-animate>
                    <h3 class="font-semibold text-lg">SaaS</h3>
                    <p class="mt-2 text-neutral-600">Microsoft 365 & Google Workspace</p>
                    <div class="mt-4">
                        <div class="text-3xl font-bold">$2<span
                                class="text-base font-medium text-neutral-500">/user/mo</span></div>
                        <div class="mt-1 text-sm text-neutral-600">Includes 50 GB / user, then $0.02 / GB-month</div>
                    </div>
                    <ul class="mt-4 text-sm text-neutral-700 space-y-2">
                        <li>Mail, Drive/OneDrive, SharePoint</li>
                        <li>Point-in-time restore</li>
                        <li>Legal hold options</li>
                    </ul>
                    <a href="<?= $base . '/contactus' ?>"
                        class="mt-6 inline-flex w-full justify-center rounded-lg bg-orange-600 text-white px-4 py-2.5 font-semibold hover:bg-orange-700 btn-shine">Request
                        quote</a>
                </div>
            </div>


            <div class="mt-10 grid md:grid-cols-3 gap-6">
                <div class="rounded-xl bg-white border border-neutral-200 p-5 hover:shadow-soft transition"
                    data-animate>
                    <div class="text-sm font-semibold text-orange-700 uppercase">Long-term Archive</div>
                    <p class="mt-1 text-sm text-neutral-700">12–84 months retention</p>
                    <div class="mt-2 text-sm text-neutral-600">$0.015 / GB-month</div>
                </div>
                <div class="rounded-xl bg-white border border-neutral-200 p-5 hover:shadow-soft transition"
                    data-animate>
                    <div class="text-sm font-semibold text-orange-700 uppercase">Immutable Vault</div>
                    <p class="mt-1 text-sm text-neutral-700">Object-Lock + signed delete</p>
                    <div class="mt-2 text-sm text-neutral-600">$0.01 / GB-month</div>
                </div>
                <div class="rounded-xl bg-white border border-neutral-200 p-5 hover:shadow-soft transition"
                    data-animate>
                    <div class="text-sm font-semibold text-orange-700 uppercase">Geo-replica</div>
                    <p class="mt-1 text-sm text-neutral-700">Secondary Canadian region</p>
                    <div class="mt-2 text-sm text-neutral-600">$0.02 / GB-month</div>
                </div>
            </div>

            <p class="mt-6 text-xs text-neutral-500" data-animate>
                Prices in CAD. Taxes extra. Minimum monthly of $25 per tenant. Volume discounts start at 50
                devices/users or 10 TB stored. Egress for restores is included.
            </p>
        </div>
    </section> -->

    <!-- COMPLIANCE STRIP -->
    <section class="bg-white py-10 border-y border-neutral-200">
        <div class="max-w-7xl mx-auto px-6 flex flex-wrap items-center justify-center gap-6 text-sm text-neutral-700"
            data-animate>
            <span
                class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-neutral-50 border border-neutral-200">SOC
                2</span>
            <span
                class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-neutral-50 border border-neutral-200">PIPEDA</span>
            <span
                class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-neutral-50 border border-neutral-200">ISO
                27001</span>
            <span
                class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-neutral-50 border border-neutral-200">TLS
                1.2+</span>
            <span
                class="inline-flex items-center gap-2 px-3 py-2 rounded-lg bg-neutral-50 border border-neutral-200">AES-256</span>
        </div>
    </section>

    <!-- Acronis Cyber Cloud · Premium CTA strip -->
    <section class="relative overflow-hidden bg-neutral-50 py-20">
        <!-- ambient pattern -->
        <div class="pointer-events-none absolute inset-0 opacity-60" style="background:
        radial-gradient(80rem 40rem at -10% 0%, rgba(255,255,255,.8), transparent 60%),
        radial-gradient(60rem 30rem at 110% 120%, rgba(30,64,175,.08), transparent 40%);">
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-neutral-900">
                    Acronis <span
                        class="bg-gradient-to-r from-orange-600 to-blue-700 bg-clip-text text-transparent">Cyber
                        Cloud</span>
                </h2>
                <div class="mx-auto mt-5 flex items-center justify-center gap-3">
                    <span class="h-px w-24 bg-neutral-300"></span>
                    <span class="h-1.5 w-1.5 rounded-full bg-orange-500"></span>
                    <span class="h-px w-24 bg-neutral-300"></span>
                </div>
                <p class="mt-4 text-neutral-600">Choose your tier to match protection with performance.</p>
            </div>

            <!-- Cards -->
            <div class="mt-12 grid gap-6 md:grid-cols-3">
                <!-- Standard -->
                <a href="<?= $base . '/acroniscybercloudstandard' ?>"
                    class="group relative rounded-2xl p-[1px] bg-gradient-to-br from-orange-500/40 via-orange-400/20 to-blue-600/40 transition-shadow hover:shadow-[0_20px_60px_rgba(17,24,39,.15)] focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500">
                    <div
                        class="rounded-2xl bg-white/80 backdrop-blur-md ring-1 ring-black/5 p-6 flex items-center justify-between">
                        <div>
                            <div class="text-sm font-semibold text-orange-600">Standard</div>
                            <div class="mt-1 text-base font-medium text-neutral-900">Acronis Cyber Cloud Standard</div>
                            <p class="mt-2 text-sm text-neutral-600">Core backup & recovery for endpoints.</p>
                        </div>
                        <div
                            class="ml-6 grid h-11 w-11 place-items-center rounded-xl bg-orange-50 text-orange-600 ring-1 ring-orange-200/60 transition-transform group-hover:translate-x-0.5">
                            <!-- arrow -->
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.172 12 8.586 7.414 10 6l6 6-6 6-1.414-1.414L13.172 12z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- Advanced -->
                <a href="<?= $base . '/acroniscybercloudadvanced' ?>"
                    class="group relative rounded-2xl p-[1px] bg-gradient-to-br from-orange-500/50 via-orange-400/30 to-blue-700/50 transition-shadow hover:shadow-[0_20px_60px_rgba(17,24,39,.15)] focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500">
                    <div
                        class="rounded-2xl bg-white/85 backdrop-blur-md ring-1 ring-black/5 p-6 flex items-center justify-between">
                        <div>
                            <div
                                class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-wider text-orange-700">
                                <span
                                    class="rounded px-1.5 py-0.5 bg-orange-50 ring-1 ring-orange-200/60">Recommended</span>
                            </div>
                            <div class="mt-2 text-base font-medium text-neutral-900">Acronis Cyber Cloud Advanced</div>
                            <p class="mt-2 text-sm text-neutral-600">Image + file backup, anti-ransomware, rapid
                                restore.</p>
                        </div>
                        <div
                            class="ml-6 grid h-11 w-11 place-items-center rounded-xl bg-orange-50 text-orange-600 ring-1 ring-orange-200/60 transition-transform group-hover:translate-x-0.5">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.172 12 8.586 7.414 10 6l6 6-6 6-1.414-1.414L13.172 12z" />
                            </svg>
                        </div>
                    </div>
                </a>

                <!-- DR -->
                <a href="<?= $base . '/acroniscyberclouddisasterrecovery' ?>"
                    class="group relative rounded-2xl p-[1px] bg-gradient-to-br from-orange-500/40 via-orange-400/20 to-blue-600/40 transition-shadow hover:shadow-[0_20px_60px_rgba(17,24,39,.15)] focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500">
                    <div
                        class="rounded-2xl bg-white/80 backdrop-blur-md ring-1 ring-black/5 p-6 flex items-center justify-between">
                        <div>
                            <div class="text-sm font-semibold text-blue-700">Disaster Recovery</div>
                            <div class="mt-1 text-base font-medium text-neutral-900">Acronis Cyber Cloud Disaster
                                Recovery</div>
                            <p class="mt-2 text-sm text-neutral-600">Run workloads in the cloud during outages.</p>
                        </div>
                        <div
                            class="ml-6 grid h-11 w-11 place-items-center rounded-xl bg-orange-50 text-orange-600 ring-1 ring-orange-200/60 transition-transform group-hover:translate-x-0.5">
                            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13.172 12 8.586 7.414 10 6l6 6-6 6-1.414-1.414L13.172 12z" />
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- soft fade bottom -->
        <div class="pointer-events-none absolute inset-x-0 -bottom-8 h-12 bg-gradient-to-t from-black/5 to-transparent">
        </div>
    </section>

    <!-- Protecting the most valuable asset -->
    <section id="acronis-benefits" class="relative overflow-hidden bg-neutral-50 py-18">
        <!-- ambient gradient -->
        <div class="pointer-events-none absolute inset-0">
            <div
                class="absolute -inset-32 rounded-[56px] blur-3xl opacity-60
                bg-[radial-gradient(70%_55%_at_15%_10%,rgba(249,115,22,.10),transparent_60%),radial-gradient(60%_45%_at_85%_90%,rgba(30,64,175,.12),transparent_65%)]">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-6">
            <!-- Heading -->
            <div class="text-center max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-neutral-900">
                    Protecting a Business’s Most Valuable Asset<br class="hidden sm:block" />
                    <span
                        class="bg-gradient-to-r from-neutral-900 via-neutral-800 to-neutral-900 bg-clip-text text-transparent">
                        with Acronis Cyber Backup Cloud
                    </span>
                </h2>
                <div class="mx-auto mt-4 h-px w-24 bg-gradient-to-r from-transparent via-neutral-300 to-transparent">
                </div>
            </div>

            <!-- Grid -->
            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-3" data-animate-group>
                <!-- Card component -->
                <!-- 1 -->
                <article
                    class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)] focus-within:ring-2 focus-within:ring-orange-500/50">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-orange-100 text-orange-700">
                            <!-- shield icon -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l7 3v6c0 5-3.4 9.7-7 11-3.6-1.3-7-6-7-11V5l7-3z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Protection for Any Workload</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                One solution covers Windows and Linux servers/VMs, hypervisors, PCs, Macs, iOS and
                                Android, Microsoft on-prem apps, SAP HANA, Oracle DB, M365, Google Workspace, and
                                websites.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- 2 -->
                <article class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)]">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-blue-100 text-blue-700">
                            <!-- pricing -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M7 7h10v2H7V7zm0 4h10v2H7v-2zm0 4h6v2H7v-2z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Simple Pricing with No Upfront Costs</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                Eliminate capex: predictable monthly rates for systems and data, with affordable tiers
                                as you scale.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- 3 -->
                <article class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)]">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-violet-100 text-violet-700">
                            <!-- storage -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M4 6a2 2 0 012-2h12a2 2 0 012 2v2H4V6zm0 4h16v4H4v-4zm0 6h16v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Unmatched Storage Options</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                Comply with regulations and choose where to store data: on-prem, Acronis Cyber Cloud
                                Storage, public
                                clouds, or approved local providers.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- 4 -->
                <article class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)]">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-emerald-100 text-emerald-700">
                            <!-- gear -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M19.14 12.94a7.002 7.002 0 000-1.88l2.03-1.58-1.92-3.32-2.39.97a7.083 7.083 0 00-1.63-.95l-.36-2.54H9.13l-.36 2.54c-.58.23-1.12.54-1.63.95l-2.39-.97-1.92 3.32 2.03 1.58c-.08.62-.08 1.25 0 1.88L2.83 14.5l1.92 3.32 2.39-.97c.5.41 1.05.73 1.63.95l.36 2.54h5.04l.36-2.54c.58-.22 1.13-.54 1.63-.95l2.39.97 1.92-3.32-2.03-1.56zM12 15.5A3.5 3.5 0 1112 8a3.5 3.5 0 010 7.5z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Seamless Deployment</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                Turnkey BaaS lightweight agent, minimal prerequisites, and no heavy implementation
                                projects.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- 5 -->
                <article class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)]">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-sky-100 text-sky-700">
                            <!-- console -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 5h18v12H3zM2 19h20v2H2z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Intuitive, Self-Service Web Console</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                Touch-friendly console to back up & restore anywhere. Basic tasks, no MSP tickets
                                required.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- 6 -->
                <article class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)]">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-red-100 text-red-600">
                            <!-- shield-check -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l7 3v6c0 5-3.4 9.7-7 11-3.6-1.3-7-6-7-11V5l7-3z" />
                                <path d="M10.3 13.7l-2-2 1.4-1.4 0.6.6L14.3 7l1.4 1.4-5.4 5.3z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Proactive Anti-Ransomware Protection</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                Industry-leading, AI-based defense protects files, backups, and agents in real time,
                                then auto-restores.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- 7 -->
                <article class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)]">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-amber-100 text-amber-700">
                            <!-- clock -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 11h5v-2h-4V6h-2v7z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Customizable Backup Scheduling</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                Manual or automated schedules monthly, weekly, daily, hourly, or every 10 minutes.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- 8 -->
                <article class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)]">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-purple-100 text-purple-700">
                            <!-- layers -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 3l9 5-9 5-9-5 9-5zm0 8l9 5-9 5-9-5 9-5z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Flexible Retention Policies</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                Define per-device or pooled policies to keep indefinitely, or cap by count/duration to
                                manage cost.
                            </p>
                        </div>
                    </div>
                </article>

                <!-- 9 -->
                <article class="group relative rounded-2xl border border-neutral-200 bg-white/90 backdrop-blur p-6 shadow-[0_8px_30px_rgba(0,0,0,.06)]
                       transition hover:-translate-y-0.5 hover:shadow-[0_14px_40px_rgba(0,0,0,.12)]">
                    <div class="flex items-start gap-4">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-teal-100 text-teal-700">
                            <!-- datacenter -->
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 4h18v5H3V4zm0 6h18v5H3v-5zm0 6h18v4H3v-4z" />
                            </svg>
                        </span>
                        <div>
                            <h3 class="font-semibold text-neutral-900">Secure Cloud Data Centers</h3>
                            <p class="mt-2 text-sm leading-6 text-neutral-700">
                                Secure Cloud Data Centers
                                Tier-IV designed facilities with ISO 27001 and related certifications and PIPEDA-aligned
                                residency options.

                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Optional: staggered reveal if you haven't added it yet on the page -->
    <script>
        (function () {
            const grp = document.querySelector('#acronis-benefits [data-animate-group]');
            if (!grp) return;
            const io = new IntersectionObserver((es) => {
                es.forEach(e => {
                    if (!e.isIntersecting) return;
                    e.target.querySelectorAll('article').forEach((card, i) => {
                        card.style.opacity = 0;
                        card.style.transform = 'translateY(10px) scale(.995)';
                        setTimeout(() => {
                            card.style.transition = 'opacity .5s ease, transform .5s ease';
                            card.style.opacity = 1;
                            card.style.transform = 'translateY(0) scale(1)';
                        }, 80 * i);
                    });
                    io.unobserve(e.target);
                });
            }, { threshold: .25 });
            io.observe(grp);
        })();
    </script>

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

    <script>
        // Scroll reveal (AOS-lite)
        const els = Array.from(document.querySelectorAll('[data-animate]'));
        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
            })
        }, { threshold: .12, rootMargin: '0px 0px -40px 0px' });
        els.forEach(el => io.observe(el));

        // Gentle parallax for hero blobs (mousemove)
        const hero = document.querySelector('section.relative.overflow-hidden.text-white');
        const blobs = hero ? hero.querySelectorAll('.blob') : [];
        if (hero && blobs.length) {
            hero.addEventListener('pointermove', (e) => {
                const r = hero.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - .5;
                const y = (e.clientY - r.top) / r.height - .5;
                blobs.forEach((b, i) => {
                    const depth = (i + 1) * 6; // different layers
                    b.style.transform = `translate(${x * depth}px, ${y * depth}px)`;
                });
            });
        }
    </script>
</body>

</html>