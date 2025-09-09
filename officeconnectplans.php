<?php $base = "" ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Office Connect Plans — QueryTel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        accent: "#D83B01",
                    },
                    keyframes: {
                        fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
                        fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } },
                        rise: { from: { opacity: 0, transform: "translateY(8px)" }, to: { opacity: 1, transform: "translateY(0)" } }
                    },
                    animation: {
                        fadeInRight: "fadeInRight .8s ease-out forwards",
                        fadeInLeft: "fadeInLeft .8s ease-out forwards",
                        fadeIn: "fadeIn 1s ease-out forwards",
                        rise: "rise .28s ease-out both"
                    },
                    boxShadow: {
                        "fluent": "0 1px 3px rgba(0,0,0,.06), 0 10px 24px rgba(0,0,0,.06)",
                        "fluent-strong": "0 2px 6px rgba(0,0,0,.08), 0 14px 32px rgba(0,0,0,.10)"
                    },
                    borderRadius: { fluent: "14px" }
                }
            }
        }
    </script>

    <style>
        :root {
            --stroke: #e5e7eb;
            --muted: #5f6b7a;
            --green: #107C10;
            --red: #D13438;
        }

        .oc-card {
            background: #fff;
            border: 1px solid var(--stroke);
            border-radius: 14px;
            box-shadow: var(--fluent, 0 1px 3px rgba(0, 0, 0, .06), 0 10px 24px rgba(0, 0, 0, .06));
        }

        .oc-btn {
            border-radius: 8px;
            font-weight: 700;
        }

        .oc-btn-primary {
            background: #D83B01;
            color: #fff;
        }

        .oc-btn-primary:hover {
            filter: brightness(.94);
        }

        .oc-btn-ghost {
            background: #fff;
            color: #111827;
            border: 1px solid var(--stroke);
        }

        .oc-btn-ghost:hover {
            background: #fafafa;
        }

        .tick,
        .xmark {
            width: 18px;
            height: 18px;
            border-radius: 9999px;
            display: inline-grid;
            place-items: center;
            font-size: 12px;
            font-weight: 800;
            line-height: 1;
        }

        .tick {
            background: var(--green);
            color: #fff
        }

        .xmark {
            background: var(--red);
            color: #fff
        }

        .zebra tbody tr:nth-child(even) {
            background: #fafafa;
        }

        th,
        td {
            border-bottom: 1px solid var(--stroke);
        }

        .badge {
            display: inline-block;
            font-size: .72rem;
            font-weight: 800;
            letter-spacing: .02em;
            padding: .28rem .54rem;
            border-radius: 9999px;
            background: #fff3ec;
            color: #D83B01;
            border: 1px solid #ffd9c6;
        }

        @keyframes floatFast {

            0%,
            100% {
                transform: translateY(-8px);
            }

            50% {
                transform: translateY(8px);
            }
        }

        .animate-float-fast {
            animation: floatFast 3s ease-in-out infinite;
        }
    </style>
</head>

<body class="bg-white text-neutral-900 font-sans">
    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="bg-white py-24 border-b border-gray-100">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="animate-fadeInLeft">
                <span class="badge">Office Connect</span>
                <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight text-neutral-900">
                    Office Connect Plans
                </h1>
                <p class="mt-4 text-lg text-gray-700 max-w-xl">
                    Modern voice for modern teams. Clean admin, intelligent routing, and pricing that’s easy to explain.
                </p>
                <div class="mt-8 flex gap-3">
                    <a href="#pricing" class="oc-btn oc-btn-primary px-6 py-3">View Plans</a>
                    <a href="<?= $base ?>/contactus" class="oc-btn oc-btn-ghost px-6 py-3">Talk to Sales</a>
                </div>
            </div>
            <div class="animate-fadeInRight">
                <img src="<?= $base ?>/assets/images/office-connect2.jpg" alt="Office Connect Illustration"
                    class="w-full max-w-lg mx-auto rounded-xl shadow-fluent" />
            </div>
        </div>
    </section>

    <!-- VALUE BLURB -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-2xl md:text-3xl font-semibold">Simple tiers. Enterprise Results.</h2>
            <p class="mt-3 text-gray-600">You can choose the plan that fits today's scale features without switching
                platforms.</p>
        </div>
    </section>

    <!-- PRICING -->
    <section id="pricing" class="py-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-6">
            <!-- Basic -->
            <article class="oc-card p-6 hover:shadow-fluent-strong transition animate-rise">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold">Basic</h3>
                    <span class="badge">Starter</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-bold">$19.99</div>
                    <div class="text-sm text-gray-600">per user / month</div>
                </div>
                <ul class="mt-6 space-y-3 text-[15px] text-gray-700">
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Unlimited local calling</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Voicemail-to-email</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Desktop & mobile apps</li>
                </ul>
                <a href="<?= $base ?>/contactus?s=office-connect-basic"
                    class="oc-btn oc-btn-ghost mt-6 inline-block px-6 py-3 w-full text-center">Choose Basic</a>
            </article>

            <!-- Standard -->
            <article class="oc-card p-6 ring-2 ring-accent/20 hover:shadow-fluent-strong transition animate-rise">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold">Standard</h3>
                    <span class="badge">Most popular</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-bold">$24.99</div>
                    <div class="text-sm text-gray-600">per user / month</div>
                </div>
                <ul class="mt-6 space-y-3 text-[15px] text-gray-700">
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Everything in Basic</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Auto-attendant / IVR</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Call queues & ring groups</li>
                </ul>
                <a href="<?= $base ?>/contactus?s=office-connect-standard"
                    class="oc-btn oc-btn-primary mt-6 inline-block px-6 py-3 w-full text-center">Choose Standard</a>
            </article>

            <!-- Premium -->
            <article class="oc-card p-6 hover:shadow-fluent-strong transition animate-rise">
                <div class="flex items-center justify-between">
                    <h3 class="text-xl font-semibold">Premium</h3>
                    <span class="badge">Enterprise</span>
                </div>
                <div class="mt-4">
                    <div class="text-4xl font-bold">$29.99</div>
                    <div class="text-sm text-gray-600">per user / month</div>
                </div>
                <ul class="mt-6 space-y-3 text-[15px] text-gray-700">
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Everything in Standard</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Call recording + retention</li>
                    <li class="flex items-center gap-3"><span class="tick">✓</span> Analytics & API access</li>
                </ul>
                <a href="<?= $base ?>/contactus?s=office-connect-premium"
                    class="oc-btn oc-btn-ghost mt-6 inline-block px-6 py-3 w-full text-center">Choose Premium</a>
            </article>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-extrabold text-neutral-900 text-center">Features</h2>
            <div class="h-px w-20 bg-orange-500 mx-auto mt-2 mb-10"></div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 rounded-lg shadow-sm">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="text-left py-4 px-6 font-semibold text-gray-800">Features</th>
                            <th class="text-center py-4 px-6 font-semibold text-gray-800">Basic</th>
                            <th class="text-center py-4 px-6 font-semibold text-gray-800">Standard</th>
                            <th class="text-center py-4 px-6 font-semibold text-gray-800">Premium</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 text-gray-700">
                        <tr>
                            <td class="py-3 px-6">Call forwarding, Call return</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6">Call transfer, Conference calling</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6">Hunt group</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6">Basic voicemail</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6">Port your existing number</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6">Sequential ring</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6">Simultaneous ring personal</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                        <tr>
                            <td class="py-3 px-6">Call park, Call pickup</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                        <tr class="bg-orange-50 font-semibold">
                            <td class="py-3 px-6 text-orange-600">US &amp; Canada long distance 2400 minutes</td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                            <td class="text-center"><span class="text-green-500 text-xl">✔</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-extrabold text-neutral-900 text-center">
                Base User Features
            </h2>
            <div class="h-1 w-20 bg-orange-500 mx-auto mt-4 mb-10"></div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 text-left shadow-md">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 text-gray-900 font-semibold">Features</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Basic</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Standard</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Premium</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="p-4 text-gray-700">Advice of charge, Authentication</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Barge-in exempt, Basic call logs</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Call waiting</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Calling line ID delivery blocking</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Calling name delivery</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Calling name retrieval</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Calling number delivery</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Calling party category</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Charge number</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Client call control</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Customer originated trace</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Connected line identification – presentation and restriction
                            </td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">External calling line ID delivery</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Intercept user</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Internal calling line ID delivery</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Malicious call trace</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Phone status monitoring</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Physical location</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Preferred carrier user, Privacy</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Service scripts user</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">SMDI message desk</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Third-party MWI control</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Third-party voice mail support</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Zone calling restrictions</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-extrabold text-neutral-900 text-center">
                Base Group
            </h2>
            <div class="h-1 w-20 bg-orange-500 mx-auto mt-4 mb-10"></div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 text-left shadow-md">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 text-gray-900 font-semibold">Features</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Basic</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Standard</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Premium</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="p-4 text-gray-700">Call capacity management</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Emergency zones</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Intercept group</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">LDAP integration</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Outgoing call plan</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Voice messaging group (portal)</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-extrabold text-neutral-900 text-center">
                Business Line User Features
            </h2>
            <div class="h-1 w-20 bg-orange-500 mx-auto mt-4 mb-10"></div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 text-left shadow-md">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 text-gray-900 font-semibold">Features</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Basic</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Standard</th>
                            <th class="p-4 text-center text-gray-900 font-semibold">Premium</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="p-4 text-gray-700">Call forwarding always</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Call forwarding busy</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Call forwarding no answer</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Call forwarding not reachable</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Communication barring – user control</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Directory number hunting</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Flash call hold</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Last number redial</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-gray-700">Three-way calling</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                            <td class="p-4 text-center text-green-500">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Standard Enterprise User Features</h2>
            <div class="h-1 w-24 bg-orange-500 mb-8"></div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 text-center">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 text-left text-gray-700 font-semibold">Features</th>
                            <th class="p-4 font-semibold">BASIC</th>
                            <th class="p-4 font-semibold">STANDARD</th>
                            <th class="p-4 font-semibold">PREMIUM</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="p-4 text-left">Anonymous call rejection</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Automatic callback</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Call me now</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Diversion inhibitor</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Do not disturb</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Flexible seating guest</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Group night forwarding</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Hoteling guest</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Security classification</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Speed dial 100, Speed dial 8</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Standard Enterprise Group Features</h2>
            <div class="h-1 w-24 bg-orange-500 mb-8"></div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 text-center">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 text-left text-gray-700 font-semibold">Features</th>
                            <th class="p-4 font-semibold">BASIC</th>
                            <th class="p-4 font-semibold">STANDARD</th>
                            <th class="p-4 font-semibold">PREMIUM</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="p-4 text-left">Group paging</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Service scripts group</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Premium Enterprise User Features</h2>
            <div class="h-1 w-24 bg-orange-500 mb-8"></div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 text-center">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 text-left text-gray-700 font-semibold">Features</th>
                            <th class="p-4 font-semibold">BASIC</th>
                            <th class="p-4 font-semibold">STANDARD</th>
                            <th class="p-4 font-semibold">PREMIUM</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="p-4 text-left">Alternate numbers</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Automatic hold/retrieve</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Busy lamp field</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Call centre monitoring</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Call forwarding selective</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Call notify</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Custom ringback user</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Custom ringback user - video</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Directed call pickup</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Directed call pickup with barge-in</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Executive/executive-assistant</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Hoteling host</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">MOH/VOH enhancement</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">N-way call</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Pre-altering announcement</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Priority alert, Push to talk</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Selective call acceptance</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Selective call rejection</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Shared call appearance 10+</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Toll Free Number</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Virtual on-net enterprise extensions</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Enhanced Group Services Package</h2>
            <div class="h-1 w-24 bg-orange-500 mb-8"></div>

            <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 text-center">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 text-left text-gray-700 font-semibold">Features</th>
                            <th class="p-4 font-semibold">BASIC</th>
                            <th class="p-4 font-semibold">STANDARD</th>
                            <th class="p-4 font-semibold">PREMIUM</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr>
                            <td class="p-4 text-left">Account/authorization codes</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Custom ringback group</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Custom ringback group - video</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Enhanced outgoing calling plan</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Instant group call</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Music on hold</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                        <tr>
                            <td class="p-4 text-left">Music on hold – video</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-red-500 text-xl">✘</td>
                            <td class="p-4 text-green-500 text-xl">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Personal Mobility Package</h2>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse text-sm">
                    <thead>
                        <tr>
                            <th class="bg-white text-left py-3 px-4 font-semibold text-gray-700 w-1/3">Features</th>
                            <th class="bg-orange-500 text-white py-3 px-4 text-center">BASIC</th>
                            <th class="bg-orange-500 text-white py-3 px-4 text-center">STANDARD</th>
                            <th class="bg-orange-500 text-white py-3 px-4 text-center">PREMIUM</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Call forwarding (always, busy, no answer, not reachable)
                            </td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">CommPilot Call Manager</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">CommPilot Express</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">In call service activation</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Location-based calling</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Multiple call arrangement</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Outlook integration</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Remote office, Sequential Ring</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Shared call appearance (5)</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Simultaneous ring personal</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Two-stage dialing</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Voice portal calling</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Voice messaging-user</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">Voice messaging-user-video</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                        <tr>
                            <td class="py-3 px-4 text-gray-700">MWI delivery to mobile endpoint</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-red-500">✘</td>
                            <td class="text-center text-green-500">✔</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="max-w-6xl mx-auto my-12 px-4">
        <h2 class="text-2xl font-bold mb-6 border-b-2 border-orange-500 inline-block pb-1">
            Additional Add-On
        </h2>

        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="w-full text-sm text-left border border-gray-200">
                <thead class="bg-gray-100 text-gray-800 uppercase text-xs">
                    <tr>
                        <th class="px-6 py-4">Features</th>
                        <th class="px-6 py-4">Monthly Recurring Charge (MRC)</th>
                        <th class="px-6 py-4">Non-Recurring Charge (NRC)</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-700">Auto-Attendant (Standard)</td>
                        <td class="px-6 py-4 text-center">$12.00 </td>
                        <td class="px-6 py-4 text-center">$105.00</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-700">Receptionist</td>
                        <td class="px-6 py-4 text-center">$35.00 </td>
                        <td class="px-6 py-4 text-center">$110.00</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-700">Bundled Connectivity</td>
                        <td class="px-6 py-4 text-center">Call</td>
                        <td class="px-6 py-4 text-center">Call</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 font-medium text-gray-700">Equipment</td>
                        <td class="px-6 py-4 text-center">Call</td>
                        <td class="px-6 py-4 text-center">Call</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-gray-50 py-20">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-neutral-900">Ready to modernize your voice?</h2>
            <p class="mt-4 text-gray-600 max-w-2xl mx-auto">QueryTel Office Connect brings clarity, simplicity, and
                reliability to every call.</p>
            <div class="mt-8 flex justify-center gap-4">
                <a href="<?= $base ?>/contactus?s=office-connect" class="oc-btn oc-btn-primary px-8 py-4">Request a
                    Demo</a>
                <a href="#pricing" class="oc-btn oc-btn-ghost px-8 py-4">See Pricing</a>
            </div>
        </div>
    </section>

    <?php include("footer.php"); ?>
</body>

</html>