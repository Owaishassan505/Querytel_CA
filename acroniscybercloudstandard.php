<?php $base = "/Querytel_CA"; ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Acronis Cyber Cloud Standard - Querytel Inc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    keyframes: { fadeInUp: { "0%": { opacity: 0, transform: "translateY(16px)" }, "100%": { opacity: 1, transform: "translateY(0)" } } },
                    animation: { fadeInUp: "fadeInUp .7s ease-out forwards" }
                }
            }
        }
    </script>
</head>

<body class="bg-white text-neutral-900 font-sans">
    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="relative overflow-hidden bg-white">
        <svg class="pointer-events-none absolute -top-10 -right-10 w-[520px] h-[520px] text-slate-100"
            viewBox="0 0 600 600" fill="none" aria-hidden="true">
            <defs>
                <linearGradient id="acc-std-accent" x1="0" y1="0" x2="1" y2="1">
                    <stop offset="0%" stop-color="currentColor" stop-opacity=".6" />
                    <stop offset="100%" stop-color="currentColor" stop-opacity="0" />
                </linearGradient>
            </defs>
            <circle cx="300" cy="300" r="300" fill="url(#acc-std-accent)" />
        </svg>

        <div class="max-w-7xl mx-auto px-6 py-28 md:py-32">
            <div class="max-w-3xl opacity-0 animate-fadeInUp">
                <span class="inline-block text-xs font-semibold tracking-widest text-orange-600 uppercase">
                    Acronis Cyber Cloud
                </span>
                <h1 class="mt-3 text-4xl md:text-6xl font-bold tracking-tight leading-tight">
                    Acronis Cyber Cloud
                </h1>
                <p class="mt-5 text-lg md:text-xl text-neutral-600">
                    Standard plans focused on reliable cloud backup with simple, centralized control.
                </p>
                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#plans"
                        class="bg-neutral-900 text-white px-6 py-3 rounded-lg hover:bg-neutral-800 transition">
                        View Plans
                    </a>
                    <a href="<?= $base ?>/contactus"
                        class="border border-neutral-900 text-neutral-900 px-6 py-3 rounded-lg hover:bg-neutral-100 transition">
                        Talk to an Expert
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- STRIP -->
    <section class="bg-slate-900">
        <div class="max-w-7xl mx-auto px-6 py-8 text-center">
            <h2 class="text-white text-2xl md:text-3xl font-extrabold tracking-wide">
                ACRONIS CYBER CLOUD STANDARD
            </h2>
            <p class="mt-3 text-slate-300 text-sm md:text-base">
                Only Backup
            </p>
        </div>
    </section>

    <!-- PLANS -->
    <section id="plans" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">
            <?php
            $plans = [
                ["title" => "Cloud Backup 50", "storage" => "50GB Cloud Storage"],
                ["title" => "Cloud Backup 100", "storage" => "100GB Cloud Storage"],
                ["title" => "Cloud Backup 200", "storage" => "200GB Cloud Storage"],
            ];
            $features = [
                "Physical Servers = Unlimited",
                "Virtual Machines = Unlimited",
                "Microsoft Active Directory",
                "Microsoft SQL Server",
                "Centralized Web-Based Console",
                "Acronis Cyber Files Cloud",
                "Local Storage",
            ];
            foreach ($plans as $p):
                ?>
                <article
                    class="rounded-2xl bg-slate-800/90 ring-1 ring-black/10 p-8 text-center text-white shadow-[0_18px_60px_rgba(2,6,23,.18)]">
                    <p class="text-[11px] tracking-widest text-orange-400 font-semibold">MONTHLY</p>
                    <h3 class="mt-2 text-3xl font-extrabold leading-tight"><?= $p["title"]; ?></h3>
                    <p class="mt-2 text-orange-400 text-xs uppercase font-semibold">Call For Pricing</p>

                    <div class="mt-6 space-y-4">
                        <div class="border-t border-white/10 pt-4 text-sm"><?= $p["storage"]; ?></div>
                        <?php foreach ($features as $f): ?>
                            <div class="border-t border-white/10 pt-4 text-sm"><?= $f; ?></div>
                        <?php endforeach; ?>
                    </div>

                    <a href="<?= $base ?>/contactus"
                        class="mt-8 inline-block bg-orange-500 hover:bg-orange-600 text-white text-sm font-semibold px-5 py-2 rounded">
                        Buy Now
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <?php include("footer.php"); ?>
</body>

</html>