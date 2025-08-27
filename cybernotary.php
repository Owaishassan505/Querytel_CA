<?php $base = "https://itcold.com" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cyber Notary - QueryTel</title>
  <meta name="description"
    content="Tamper-evident document notarization with blockchain-backed proofs, time-stamping, and easy verification." />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { brandorange: "#f97316", brandblue: "#1e40af" },
          keyframes: {
            fadeUp: {
              "0%": { opacity: 0, transform: "translateY(12px)" },
              "100%": { opacity: 1, transform: "translateY(0)" },
            },
          },
          animation: { fadeUp: "fadeUp .6s ease-out forwards" },
          boxShadow: { soft: "0 10px 35px rgba(2,6,23,.08)" },
        },
      },
    };
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
  <style>
    [data-animate] {
      opacity: 0;
      transform: translateY(10px);
      transition: 0.5s ease;
    }
  </style>
</head>

<body class="bg-white text-neutral-900 antialiased">
  <?php include("navbar.php"); ?>

  <!-- HERO (short, balanced) -->
  <section class="relative overflow-hidden text-white">
    <div class="absolute inset-0 bg-gradient-to-br from-orange-500 via-orange-600 to-brandblue"></div>
    <div class="absolute inset-0" style="
          background-image: radial-gradient(
              80rem 40rem at 10% -10%,
              rgba(255, 255, 255, 0.14),
              transparent 60%
            ),
            radial-gradient(
              60rem 30rem at 110% 120%,
              rgba(255, 255, 255, 0.08),
              transparent 40%
            );
        "></div>

    <div class="relative max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">
      <div data-animate>
        <p class="inline-flex items-center gap-2 rounded-full bg-white/10 ring-1 ring-white/20 px-3 py-1 text-sm">
          <!-- cloud+shield -->
          <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M7 11a5 5 0 0 1 9.8-1.5A4.002 4.002 0 0 1 16 18H8a4 4 0 0 1-1-7.87c.01.29.04.58.1.87Z" />
            <path d="M17 12.5c.9.5 2 .8 3 .9v2.3c0 2.3-1.4 4.5-3.5 5.3-2.1-.8-3.5-3-3.5-5.3v-2.3c1-.1 2.1-.4 3-.9Z" />
          </svg>
          Cyber Cloud Services
        </p>

        <h1 class="mt-3 text-4xl md:text-5xl font-bold leading-tight">
          Cyber Notary
        </h1>
        <p class="mt-4 text-orange-50 text-lg">
          Create tamper-evident proofs for files, contracts, and records with
          cryptographic hashing, time-stamps, and blockchain-backed
          verification.
        </p>
        <div class="mt-7 flex flex-col sm:flex-row gap-4">
          <a href="#how"
            class="inline-flex justify-center rounded-lg bg-white text-orange-600 font-semibold px-6 py-3 hover:bg-orange-50 transition">How
            it works</a>
          <a href="#plans"
            class="inline-flex justify-center rounded-lg bg-white/10 ring-1 ring-white/30 px-6 py-3 hover:bg-white/15 transition">Pricing</a>
        </div>
        <div class="mt-5 flex flex-wrap items-center gap-4 text-sm text-white/85">
          <!-- SHA-256 hashing (hash grid) -->
          <span class="inline-flex items-center gap-2">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M4 4h6v6H4V4Zm0 10h6v6H4v-6Zm10-10h6v6h-6V4Zm0 10h6v6h-6v-6Z" />
            </svg>
            SHA-256 hashing
          </span>

          <!-- RFC 3161 time-stamp (clock) -->
          <span class="inline-flex items-center gap-2">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M12 2a10 10 0 1 0 .001 20.001A10 10 0 0 0 12 2Zm1 5h-2v6h5v-2h-3V7Z" />
            </svg>
            RFC 3161 time-stamp
          </span>

          <!-- Public verification (globe+check) -->
          <span class="inline-flex items-center gap-2">
            <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path
                d="M12 2a10 10 0 1 0 .001 20.001A10 10 0 0 0 12 2Zm0 2c1.7 0 3.2.6 4.4 1.6-1 .2-2.1.4-3.4.4-1.6 0-3-.3-4.2-.7A7.99 7.99 0 0 1 12 4Zm-6.5 6c.3-.9.8-1.7 1.4-2.4 1.4.6 3.2 1 5.1 1s3.7-.4 5.1-1c.6.7 1.1 1.5 1.4 2.4-1.7.6-4 1-6.5 1s-4.8-.4-6.5-1Zm.1 4c-.2-.6-.3-1.2-.3-1.8 1.8.6 4.3 1 6.7 1s4.9-.4 6.7-1c0 .6-.1 1.2-.3 1.8-1.9.6-4.3 1-6.4 1s-4.5-.4-6.4-1Zm2 3.3A8 8 0 0 0 12 20c1.8 0 3.5-.6 4.8-1.7-1.5.3-3.1.5-4.8.5s-3.3-.2-4.8-.5Z" />
              <path d="M17.5 10.8l1.8 1.8 3-3-1.4-1.4-1.6 1.6-.4-.4-1.4 1.4Z" />
            </svg>
            Public verification
          </span>
        </div>
      </div>

      <!-- Compact visual -->
      <div class="relative" data-animate>
        <div class="absolute -inset-8 blur-3xl rounded-full"></div>
        <div class="relative z-10 rounded-2xl shadow-2xl ring-1 ring-black/5 p-6">
          <!-- Inline SVG: Digital Notary -->
          <svg viewBox="0 0 720 420" class="w-full h-64 md:h-80" role="img" aria-labelledby="notaryTitle notaryDesc">
            <title id="notaryTitle">Cyber Notary Illustration</title>
            <desc id="notaryDesc">
              A document with a shield check and a timestamp badge
              representing notarization and verification.
            </desc>

            <defs>
              <!-- Brand gradients -->
              <linearGradient id="gAccent" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#f97316" />
                <stop offset="100%" stop-color="#1e40af" />
              </linearGradient>
              <linearGradient id="gSoft" x1="0%" y1="0%" x2="0%" y2="100%">
                <stop offset="0%" stop-color="#ffffff" />
                <stop offset="100%" stop-color="#f3f4f6" />
              </linearGradient>
              <!-- subtle shadow -->
              <filter id="softShadow" x="-20%" y="-20%" width="140%" height="140%">
                <feDropShadow dx="0" dy="10" stdDeviation="12" flood-color="#0f172a" flood-opacity=".15" />
              </filter>
              <!-- dotted backdrop pattern -->
              <pattern id="dots" width="12" height="12" patternUnits="userSpaceOnUse">
                <circle cx="1.5" cy="1.5" r="1.5" fill="#e5e7eb" />
              </pattern>
            </defs>

            <!-- Soft background shapes -->
            <g opacity=".75">
              <ellipse cx="120" cy="80" rx="140" ry="60" fill="url(#gAccent)" opacity=".08" />
              <ellipse cx="610" cy="330" rx="160" ry="70" fill="url(#gAccent)" opacity=".06" />
            </g>

            <!-- Card background -->
            <rect x="40" y="30" width="640" height="360" rx="18" fill="url(#gSoft)" stroke="#e5e7eb"
              filter="url(#softShadow)" />

            <!-- Left panel (patterned) -->
            <rect x="60" y="60" width="220" height="300" rx="14" fill="url(#dots)" />
            <rect x="60" y="60" width="220" height="300" rx="14" fill="#fff" opacity=".55" />

            <!-- Main document -->
            <g transform="translate(300,70)">
              <!-- sheet -->
              <path d="M0 0h260a10 10 0 0 1 10 10v250a10 10 0 0 1-10 10H18a18 18 0 0 1-18-18V0Z" fill="#ffffff"
                stroke="#e5e7eb" />
              <!-- fold -->
              <path d="M260 0v56a10 10 0 0 1-10 10h-56L260 0Z" fill="url(#gAccent)" opacity=".12" />
              <!-- lines -->
              <g stroke="#cbd5e1" stroke-width="2">
                <line x1="28" y1="48" x2="220" y2="48" />
                <line x1="28" y1="74" x2="220" y2="74" />
                <line x1="28" y1="100" x2="220" y2="100" />
                <line x1="28" y1="126" x2="220" y2="126" />
                <line x1="28" y1="152" x2="220" y2="152" />
                <line x1="28" y1="178" x2="220" y2="178" />
              </g>

              <!-- Shield badge -->
              <g transform="translate(28,196)">
                <path d="M48 0c14 8 31 12 48 14v36c0 36-22 70-48 82-26-12-48-46-48-82v-36c17-2 34-6 48-14Z"
                  fill="url(#gAccent)" opacity=".90" />
                <path d="M39 66l-14-14-11 11 25 25 40-40-11-11-29 29Z" fill="#fff" />
              </g>
            </g>

            <!-- Chain link (hashing) -->
            <g transform="translate(95,130)">
              <rect x="0" y="0" width="90" height="36" rx="18" fill="#fde7d6" />
              <rect x="66" y="0" width="90" height="36" rx="18" fill="#dbeafe" />
              <rect x="54" y="12" width="48" height="12" rx="6" fill="url(#gAccent)" />
            </g>

            <!-- Timestamp badge -->
            <g transform="translate(520,270)" filter="url(#softShadow)">
              <circle cx="0" cy="0" r="42" fill="url(#gAccent)" />
              <circle cx="0" cy="0" r="36" fill="#ffffff" />
              <g fill="#1e293b">
                <rect x="-2" y="-18" width="4" height="20" rx="2" />
                <rect x="0" y="-2" width="16" height="4" rx="2" />
              </g>
              <!-- tiny check overlay -->
              <path d="M-10 10l6 6 12-12" fill="none" stroke="#16a34a" stroke-width="4" stroke-linecap="round"
                stroke-linejoin="round" />
            </g>

            <!-- Title ribbon -->
            <g transform="translate(84,76)">
              <rect x="0" y="0" width="168" height="34" rx="8" fill="url(#gAccent)" opacity=".12" />
              <rect x="10" y="8" width="148" height="18" rx="4" fill="#111827" opacity=".06" />
            </g>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS (short 3-step) -->
  <section id="how" class="bg-white py-14">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold tracking-tight">How it works</h2>
        <p class="mt-3 text-neutral-600">
          Simple three-step flow for users and developers.
        </p>
      </div>

      <div class="mt-10 grid md:grid-cols-3 gap-6">
        <article class="rounded-xl border border-neutral-200 p-6 bg-white hover:shadow-soft transition" data-animate>
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-600">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M4 6h16v12H4zM2 19h20v2H2z" />
              </svg>
            </span>
            <h3 class="font-semibold">Upload or Hash</h3>
          </div>
          <p class="mt-2 text-sm text-neutral-700">
            Send the file or its SHA-256 hash via portal or API.
          </p>
        </article>

        <article class="rounded-xl border border-neutral-200 p-6 bg-white hover:shadow-soft transition" data-animate>
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-600">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2l7 3v6c0 5-3.4 9.7-7 11-3.6-1.3-7-6-7-11V5l7-3z" />
              </svg>
            </span>
            <h3 class="font-semibold">Time-stamp & Anchor</h3>
          </div>
          <p class="mt-2 text-sm text-neutral-700">
            We time-stamp, sign, and anchor the proof to a public ledger.
          </p>
        </article>

        <article class="rounded-xl border border-neutral-200 p-6 bg-white hover:shadow-soft transition" data-animate>
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-600">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
              </svg>
            </span>
            <h3 class="font-semibold">Verify Anywhere</h3>
          </div>
          <p class="mt-2 text-sm text-neutral-700">
            Share a certificate & link so anyone can verify authenticity.
          </p>
        </article>
      </div>
    </div>
  </section>

  <section id="acronis-notary" class="py-20 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-6">
      <header class="max-w-4xl">
        <p class="text-sm font-semibold tracking-wide text-neutral-500">ACRONIS CYBER CLOUD</p>
        <h2 class="mt-1 text-3xl md:text-4xl font-extrabold tracking-tight text-neutral-900">Part of Acronis Cyber Cloud
        </h2>
        <div class="mt-4 h-px w-24 bg-neutral-300"></div>
        <p class="mt-4 text-neutral-600">
          Notary Cloud integrates with Acronis Cyber Cloud to deliver notarization, eSignature, and verification
          alongside
          backup, DR, and file sync & share—one platform, smooth onboarding, higher ARPU.
        </p>
      </header>

      <div class="mt-12 grid gap-8 md:grid-cols-3">
        <!-- Notarization -->
        <article
          class="group relative rounded-[14px] bg-white border border-neutral-200 transition-all duration-300
               hover:-translate-y-1 hover:border-[#D83B01]/30 hover:shadow-[0_8px_28px_rgba(0,0,0,.08)] focus-within:shadow-[0_8px_28px_rgba(0,0,0,.10)]">
          <div class="p-6">
            <div class="flex items-center gap-2">
              <span class="inline-block h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">Notarization Service</h3>
            </div>
            <p class="mt-2 text-neutral-600">Anchor any file type to a blockchain ledger for independent proof of
              integrity and time.</p>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/Notarization-service.png"
                alt="Documents notarized and anchored to blockchain"
                class="w-full aspect-[16/10] object-fill h-64 transition-transform duration-500 ease-out group-hover:scale-[1.015]" />
            </figure>
          </div>
          <div
            class="pointer-events-none absolute inset-0 rounded-[14px] ring-0 group-hover:ring-2 group-hover:ring-[#D83B01]/15 transition">
          </div>
        </article>

        <!-- eSignature -->
        <article
          class="group relative rounded-[14px] bg-white border border-neutral-200 transition-all duration-300
               hover:-translate-y-1 hover:border-[#D83B01]/30 hover:shadow-[0_8px_28px_rgba(0,0,0,.08)] focus-within:shadow-[0_8px_28px_rgba(0,0,0,.10)]">
          <div class="p-6">
            <div class="flex items-center gap-2">
              <span class="inline-block h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">eSignature Service</h3>
            </div>
            <p class="mt-2 text-neutral-600">Collect compliant digital signatures from every party with a frictionless
              flow.</p>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/notary-cloud-e-signature.jpg"
                alt="Digital signature illustration"
                class="w-full aspect-[16/10] object-fill h-64 transition-transform duration-500 ease-out group-hover:scale-[1.015]" />
            </figure>
          </div>
          <div
            class="pointer-events-none absolute inset-0 rounded-[14px] ring-0 group-hover:ring-2 group-hover:ring-[#D83B01]/15 transition">
          </div>
        </article>

        <!-- Verification -->
        <article
          class="group relative rounded-[14px] bg-white border border-neutral-200 transition-all duration-300
               hover:-translate-y-1 hover:border-[#D83B01]/30 hover:shadow-[0_8px_28px_rgba(0,0,0,.08)] focus-within:shadow-[0_8px_28px_rgba(0,0,0,.10)]">
          <div class="p-6">
            <div class="flex items-center gap-2">
              <span class="inline-block h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">Verification Service</h3>
            </div>
            <p class="mt-2 text-neutral-600">Instantly confirm authenticity of notarized files from any device,
              anywhere.</p>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/verification-service.jpg"
                alt="Verification target over document"
                class="w-full aspect-[16/10] object-fill h-64 transition-transform duration-500 ease-out group-hover:scale-[1.015]" />
            </figure>
          </div>
          <div
            class="pointer-events-none absolute inset-0 rounded-[14px] ring-0 group-hover:ring-2 group-hover:ring-[#D83B01]/15 transition">
          </div>
        </article>
      </div>

      <div class="mt-12 flex items-center justify-between gap-6 flex-wrap">
        <p class="text-sm text-neutral-500">Unified experience across services. Seamless onboarding. Enterprise-grade
          trust.</p>
        <a href="<?= $base ?? '' ?>/contactus?s=acronis-notary"
          class="inline-flex items-center gap-2 rounded-lg border border-neutral-200 bg-white px-4 py-2 text-sm font-semibold text-neutral-800
                hover:border-[#D83B01]/40 hover:shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-[#D83B01]">
          Talk to an expert
          <svg aria-hidden="true" viewBox="0 0 20 20" class="h-4 w-4">
            <path fill="currentColor"
              d="M7.2 4.8a1 1 0 0 1 1.4-1.4l6 6a1 1 0 0 1 0 1.4l-6 6a1 1 0 1 1-1.4-1.4L11.6 11H3a1 1 0 1 1 0-2h8.6L7.2 4.8Z" />
          </svg>
        </a>
      </div>
    </div>
  </section>

  <section id="included-services" class="py-24 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-6">
      <header class="text-center">
        <p class="text-sm font-semibold tracking-wider text-neutral-500">ACRONIS CYBER CLOUD</p>
        <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-neutral-900">Included Services</h2>
        <div class="mt-4 h-px w-24 mx-auto bg-neutral-300"></div>
        <p class="mt-4 text-neutral-600 max-w-3xl mx-auto">
          Notary, eSignature, and verification—delivered with a calm, Fluent-inspired UI.
        </p>
      </header>

      <div class="mt-14 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- 1: Ethereum Blockchain -->
        <article
          class="group relative rounded-2xl border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_16px_40px_rgba(0,0,0,.06)]
                     overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_22px_54px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-1 bg-[#D83B01]"></span>
          <div class="p-7">
            <div class="flex items-center gap-2">
              <span class="h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">Ethereum Blockchain</h3>
            </div>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/ETHEREUM-BLOCKCHAIN.jpg" alt="Ethereum Blockchain"
                class="w-full aspect-[16/10] object-cover transition-transform duration-500 ease-out group-hover:scale-[1.015]">
            </figure>
            <div class="mt-6 h-px w-full bg-neutral-100"></div>
            <p class="mt-4 leading-relaxed text-neutral-600">
              Tamper-resistant verification on a distributed ledger—high availability, independent proof.
            </p>
          </div>
        </article>

        <!-- 2: Easy-to-Use Web Interface -->
        <article
          class="group relative rounded-2xl border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_16px_40px_rgba(0,0,0,.06)]
                     overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_22px_54px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-1 bg-[#D83B01]"></span>
          <div class="p-7">
            <div class="flex items-center gap-2">
              <span class="h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">Easy-to-Use Web Interface</h3>
            </div>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/Web-interface.jpg" alt="Web Interface"
                class="w-full aspect-[16/10] object-cover transition-transform duration-500 ease-out group-hover:scale-[1.015]">
            </figure>
            <div class="mt-6 h-px w-full bg-neutral-100"></div>
            <p class="mt-4 leading-relaxed text-neutral-600">
              Ready UI for quick onboarding and effortless daily use.
            </p>
          </div>
        </article>

        <!-- 3: Smooth Integration via API -->
        <article
          class="group relative rounded-2xl border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_16px_40px_rgba(0,0,0,.06)]
                     overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_22px_54px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-1 bg-[#D83B01]"></span>
          <div class="p-7">
            <div class="flex items-center gap-2">
              <span class="h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">Smooth Integration via API</h3>
            </div>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/SMOOTH-INTEGRATION-VIA-API.jpg" alt="API Integration"
                class="w-full aspect-[16/10] object-cover transition-transform duration-500 ease-out group-hover:scale-[1.015]">
            </figure>
            <div class="mt-6 h-px w-full bg-neutral-100"></div>
            <p class="mt-4 leading-relaxed text-neutral-600">
              Plug into your apps using the Notary Cloud backend—clean, predictable, documented.
            </p>
          </div>
        </article>

        <!-- 4: Any Type of Data -->
        <article
          class="group relative rounded-2xl border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_16px_40px_rgba(0,0,0,.06)]
                     overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_22px_54px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-1 bg-[#D83B01]"></span>
          <div class="p-7">
            <div class="flex items-center gap-2">
              <span class="h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">Any Type of Data</h3>
            </div>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/any-type-of-data.jpg" alt="Any Type of Data"
                class="w-full aspect-[16/10] object-cover transition-transform duration-500 ease-out group-hover:scale-[1.015]">
            </figure>
            <div class="mt-6 h-px w-full bg-neutral-100"></div>
            <p class="mt-4 leading-relaxed text-neutral-600">
              Notarize/eSign docs, images, video, audio—no format anxiety.
            </p>
          </div>
        </article>

        <!-- 5: Trusted, Independent Verification -->
        <article
          class="group relative rounded-2xl border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_16px_40px_rgba(0,0,0,.06)]
                     overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_22px_54px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-1 bg-[#D83B01]"></span>
          <div class="p-7">
            <div class="flex items-center gap-2">
              <span class="h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">Trusted, Independent Verification</h3>
            </div>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/independent-verification.jpg" alt="Independent Verification"
                class="w-full aspect-[16/10] object-cover transition-transform duration-500 ease-out group-hover:scale-[1.015]">
            </figure>
            <div class="mt-6 h-px w-full bg-neutral-100"></div>
            <p class="mt-4 leading-relaxed text-neutral-600">
              Verify via UI or directly on-chain from any device, anytime.
            </p>
          </div>
        </article>

        <!-- 6: Comprehensive White-Labeling -->
        <article
          class="group relative rounded-2xl border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_16px_40px_rgba(0,0,0,.06)]
                     overflow-hidden transition-all duration-300 hover:-translate-y-1 hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_22px_54px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-1 bg-[#D83B01]"></span>
          <div class="p-7">
            <div class="flex items-center gap-2">
              <span class="h-2 w-2 rounded-full bg-[#D83B01]"></span>
              <h3 class="text-xl font-semibold text-neutral-900">Comprehensive White-Labeling</h3>
            </div>
            <figure class="mt-6 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/COMPREHENSIVE-WHITE-LABELING.jpg" alt="White Labeling"
                class="w-full aspect-[16/10] object-cover transition-transform duration-500 ease-out group-hover:scale-[1.015]">
            </figure>
            <div class="mt-6 h-px w-full bg-neutral-100"></div>
            <p class="mt-4 leading-relaxed text-neutral-600">
              Ship under your brand—name, logo, URLs, and colors—without reinventing UX.
            </p>
          </div>
        </article>
      </div>
    </div>
  </section>


  <section id="benefits" class="py-24 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-6">
      <header class="text-center">
        <h2 class="text-4xl font-extrabold tracking-tight text-neutral-900">
          Top 5 Benefits of Acronis Cyber Notary Cloud
        </h2>
        <div class="mt-4 h-px w-24 mx-auto bg-neutral-300"></div>
      </header>

      <div class="mt-14 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- CARD TEMPLATE (repeat 5x) -->
        <!-- 1 -->
        <article
          class="group relative rounded-[14px] border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_14px_36px_rgba(0,0,0,.06)]
               overflow-hidden transition-all duration-300 hover:-translate-y-[2px] hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_20px_50px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-[3px] bg-[#D83B01]"></span>
          <div class="p-7 flex flex-col h-full">
            <div class="flex items-center gap-3">
              <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                <!-- Fluent-style file-check icon -->
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M8 3h6l4 4v12a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z" stroke="currentColor"
                    stroke-width="1.5" />
                  <path d="M14 3v4h4" stroke="currentColor" stroke-width="1.5" />
                  <path d="M8.5 14.5 10.8 17l4.7-5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </span>
              <h3 class="text-lg font-semibold text-neutral-900">Verify a file is unchanged</h3>
            </div>
            <p class="mt-4 text-neutral-600 leading-relaxed">
              Prove integrity for contracts, media, medical records, leases, loans, and more.
            </p>
          </div>
        </article>

        <!-- 2 -->
        <article
          class="group relative rounded-[14px] border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_14px_36px_rgba(0,0,0,.06)]
               overflow-hidden transition-all duration-300 hover:-translate-y-[2px] hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_20px_50px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-[3px] bg-[#D83B01]"></span>
          <div class="p-7 flex flex-col h-full">
            <div class="flex items-center gap-3">
              <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                <!-- camera/play icon -->
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <rect x="4" y="6" width="12" height="12" rx="2" stroke="currentColor" stroke-width="1.5" />
                  <path d="M16 10.5 20 8v8l-4-2.5V10.5z" stroke="currentColor" stroke-width="1.5" fill="none" />
                  <path d="M9 9v6l4-3-4-3z" fill="currentColor" />
                </svg>
              </span>
              <h3 class="text-lg font-semibold text-neutral-900">Confirm creation date</h3>
            </div>
            <p class="mt-4 text-neutral-600 leading-relaxed">
              Establish when creative works originated—videos, photos, audio, etc.
            </p>
          </div>
        </article>

        <!-- 3 -->
        <article
          class="group relative rounded-[14px] border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_14px_36px_rgba(0,0,0,.06)]
               overflow-hidden transition-all duration-300 hover:-translate-y-[2px] hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_20px_50px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-[3px] bg-[#D83B01]"></span>
          <div class="p-7 flex flex-col h-full">
            <div class="flex items-center gap-3">
              <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                <!-- receipt icon -->
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M7 4h10v16l-2-1-2 1-2-1-2 1-2-1V4z" stroke="currentColor" stroke-width="1.5" />
                  <path d="M9 8h6M9 11h6M9 14h6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                </svg>
              </span>
              <h3 class="text-lg font-semibold text-neutral-900">Prove bills were paid</h3>
            </div>
            <p class="mt-4 text-neutral-600 leading-relaxed">
              Back up financial and insurance documents with tamper-evident proof.
            </p>
          </div>
        </article>

        <!-- 4 -->
        <article
          class="group relative rounded-[14px] border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_14px_36px_rgba(0,0,0,.06)]
               overflow-hidden transition-all duration-300 hover:-translate-y-[2px] hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_20px_50px_rgba(0,0,0,.10)]">
          <span class="absolute inset-x-0 -top-px h-[3px] bg-[#D83B01]"></span>
          <div class="p-7 flex flex-col h-full">
            <div class="flex items-center gap-3">
              <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                <!-- contract stamp icon -->
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M7 3h8l3 3v12a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3z" stroke="currentColor"
                    stroke-width="1.5" />
                  <path d="M15 3v4h4" stroke="currentColor" stroke-width="1.5" />
                  <circle cx="12" cy="14" r="2.5" stroke="currentColor" stroke-width="1.5" />
                </svg>
              </span>
              <h3 class="text-lg font-semibold text-neutral-900">Substantiate document existence</h3>
            </div>
            <p class="mt-4 text-neutral-600 leading-relaxed">
              Prove a legal document existed at a point in time—NDAs, contracts, property records.
            </p>
          </div>
        </article>

        <!-- 5 -->
        <article
          class="group relative rounded-[14px] border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_14px_36px_rgba(0,0,0,.06)]
               overflow-hidden transition-all duration-300 hover:-translate-y-[2px] hover:shadow-[0_2px_8px_rgba(0,0,0,.08),0_20px_50px_rgba(0,0,0,.10)] md:col-span-2 lg:col-span-1">
          <span class="absolute inset-x-0 -top-px h-[3px] bg-[#D83B01]"></span>
          <div class="p-7 flex flex-col h-full">
            <div class="flex items-center gap-3">
              <span
                class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                <!-- signature icon -->
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                  <path d="M4 17c3-1 4.5-5 6-5 2 0 1 5 4 5 2 0 2.5-2 4-5" stroke="currentColor" stroke-width="1.5"
                    stroke-linecap="round" />
                  <path d="M4 20h16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                  <path d="M14 4l6 6" stroke="currentColor" stroke-width="1.5" />
                  <path d="M20 4l-6 6" stroke="currentColor" stroke-width="1.5" />
                </svg>
              </span>
              <h3 class="text-lg font-semibold text-neutral-900">Prove who signed & when</h3>
            </div>
            <p class="mt-4 text-neutral-600 leading-relaxed">
              Establish signer identity and timestamp for digital contracts, POs, policies, petitions, and more.
            </p>
          </div>
        </article>
      </div>
    </div>
  </section>
  <section id="notary-advantage" class="py-24 bg-neutral-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
        <!-- Copy column -->
        <div>
          <p class="text-sm font-semibold tracking-wider text-neutral-500">WHY IT MATTERS</p>
          <h2 class="mt-2 text-4xl font-extrabold tracking-tight text-neutral-900">
            Gain the Acronis Cyber Notary Cloud Advantage
          </h2>

          <div class="mt-6 h-px w-16 bg-neutral-300"></div>

          <p class="mt-6 text-lg leading-8 text-neutral-700">
            Notary Cloud provides blockchain-based notarization, eSigning, and verification for organizations of any
            size.
            It creates a cryptographic fingerprint of each file and anchors it to a public blockchain, delivering
            independent proof of <span class="font-medium text-neutral-900">authenticity</span> and
            <span class="font-medium text-neutral-900">time of existence</span>.
          </p>

          <p class="mt-4 leading-7 text-neutral-700">
            Built for service providers, it helps healthcare, legal, manufacturing, and finance verify the integrity of
            business-critical data while improving transparency and reducing risk—without adding friction for users.
          </p>

          <ul class="mt-8 space-y-3">
            <li class="flex items-start gap-3">
              <span
                class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                <svg viewBox="0 0 20 20" width="14" height="14" fill="none" aria-hidden="true">
                  <path d="M5 10.5l2.5 2.5L15 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </span>
              <p class="text-neutral-800">Blockchain-anchored integrity with independent verification.</p>
            </li>
            <li class="flex items-start gap-3">
              <span
                class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                <svg viewBox="0 0 20 20" width="14" height="14" fill="none" aria-hidden="true">
                  <path d="M5 10.5l2.5 2.5L15 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </span>
              <p class="text-neutral-800">eSignature + notarization in a single, streamlined flow.</p>
            </li>
            <li class="flex items-start gap-3">
              <span
                class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                <svg viewBox="0 0 20 20" width="14" height="14" fill="none" aria-hidden="true">
                  <path d="M5 10.5l2.5 2.5L15 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
                </svg>
              </span>
              <p class="text-neutral-800">Designed for providers: faster onboarding, higher trust.</p>
            </li>
          </ul>
        </div>

        <!-- Media / feature card -->
        <aside class="relative rounded-2xl border border-neutral-200 bg-white shadow-[0_1px_3px_rgba(0,0,0,.06),0_18px_48px_rgba(0,0,0,.08)]
                    overflow-hidden">
          <span class="absolute inset-x-0 -top-px h-1 bg-[#D83B01]"></span>

          <div class="p-6">
            <h3 class="text-lg font-semibold text-neutral-900">All-in-One Protection</h3>
            <div class="mt-4 overflow-hidden rounded-xl ring-1 ring-neutral-200">
              <img src="<?= $base ?? '' ?>/assets/images/All-in-one-protection.jpg"
                alt="Acronis all-in-one protection illustration" class="w-full aspect-[16/9] object-cover" />
            </div>

            <ul class="mt-6 grid gap-3">
              <li class="flex items-start gap-3">
                <span
                  class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                  <svg viewBox="0 0 20 20" width="14" height="14" fill="none" aria-hidden="true">
                    <path d="M5 10.5l2.5 2.5L15 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <span class="text-neutral-800">Backup-as-a-Service with ransomware defense</span>
              </li>
              <li class="flex items-start gap-3">
                <span
                  class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                  <svg viewBox="0 0 20 20" width="14" height="14" fill="none" aria-hidden="true">
                    <path d="M5 10.5l2.5 2.5L15 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <span class="text-neutral-800">Integrated data protection and cybersecurity</span>
              </li>
              <li class="flex items-start gap-3">
                <span
                  class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-[#D83B01]/10 text-[#D83B01] ring-1 ring-[#D83B01]/20">
                  <svg viewBox="0 0 20 20" width="14" height="14" fill="none" aria-hidden="true">
                    <path d="M5 10.5l2.5 2.5L15 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" />
                  </svg>
                </span>
                <span class="text-neutral-800">Disaster-Recovery-as-a-Service</span>
              </li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>


  <!-- FEATURES GRID (Acronis Protect Cloud) -->
  <section class="bg-slate-900 py-16">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center">
        <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-white">
          Acronis Protect Cloud Features
        </h2>
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
            <h3 class="font-semibold text-white text-sm md:text-base">
              Simplified Onboarding
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Discover assets and deploy a single lightweight agent for
            anti-malware, backup, patching and more — remotely.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 11h5v-2h-4V6h-2v7z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Zero-Day Malware & Ransomware
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Behavior-based detection, rollback and signed deletes guard
            against evolving threats.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M10 2h4l1 4h4l-3 3 1 4-4-2-4 2 1-4-3-3h4l1-4z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Compliance & Forensics
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Image-based backups plus forensic metadata (free space, memory
            dumps) to meet strict requirements.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 5h18v12H3zM2 19h20v2H2z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Better SLAs
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Improve availability KPIs with proactive, active and reactive
            layers of cyber protection.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 21l-8-4V7l8-4 8 4v10l-8 4zm-1-7v2h2v-2h-2zm0-8v6h2V6h-2z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Post-Attack Recovery
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Lower risk with malware scans of backups, isolated restore
            locations and curated definitions.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2l7 3v6c0 5-3.4 9.7-7 11-3.6-1.3-7-6-7-11V5l7-3z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Protection for Key Files
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Data Protection Map gives at-a-glance visibility of covered data
            across your estate.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M4 6h16v2H4zm0 5h16v2H4zm0 5h10v2H4z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Centralized Patching
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Patch more than Microsoft — cover client software estate from one
            multitenant tool.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M3 3h18v2H3zm2 4h14v2H5zm-2 4h18v2H3zm2 4h14v2H5z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Demonstrate Value
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Clear reporting and vuln-assessment tie service to outcomes for
            easier renewals.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M5 3h14v4H5zM3 9h18v4H3zm2 6h14v4H5z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Real-Time Doc Protection
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Continuous data protection saves critical file changes immediately
            — even between backups.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M6 7h12v2H6zm0 4h12v2H6zm0 4h8v2H6z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Eliminate Complexity
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Integrate cybersecurity and data protection into one platform —
            less swivel-chair, lower cost.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 4l4 8H8l4-8zm0 16a2 2 0 110-4 2 2 0 010 4z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Auto-Response to Threats
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Adjust scans and backup schedules automatically based on real-time
            alerts from the SOC.
          </p>
        </article>

        <article class="rounded-xl bg-slate-800/60 border border-white/10 p-5 hover:border-white/20 transition">
          <div class="flex items-center gap-3">
            <span class="h-9 w-9 grid place-items-center rounded-lg bg-orange-500/15 text-orange-400">
              <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M11 21h2V7h-2v14zM5 21h2V11H5v10zm12 0h2V3h-2v18z" />
              </svg>
            </span>
            <h3 class="font-semibold text-white text-sm md:text-base">
              Minimal Downtime
            </h3>
          </div>
          <p class="mt-3 text-sm text-slate-300">
            Streamline maintenance with health checks, on-time patching, and
            improved Active Protection.
          </p>
        </article>
      </div>
    </div>
  </section>
  <!-- CTA -->
  <section class="py-20 bg-white text-center" data-aos="fade-up" id="request-expert">
    <div class="max-w-4xl mx-auto px-6">
      <a href="<?= $base ?>/contactus"
        class="qt-btn qt-btn-primary inline-block px-10 py-4 text-lg transition-colors duration-150">
        Request an Expert
      </a>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-6">
      <h3 class="text-2xl font-semibold mb-8 text-center">Get In Touch</h3>
      <form class="space-y-6" action="sendmail.php" method="POST">
        <div class="grid md:grid-cols-2 gap-6">
          <input type="text" name="name" placeholder="Your Name" class="w-full border border-black px-4 py-3 rounded"
            required />
          <input type="email" name="email" placeholder="Email Address"
            class="w-full border border-black px-4 py-3 rounded" required />
        </div>
        <input type="tel" name="phone" placeholder="Phone Number" class="w-full border border-black px-4 py-3 rounded"
          required />
        <textarea rows="4" name="message" placeholder="Your Message"
          class="w-full border border-black px-4 py-3 rounded resize-none" required></textarea>
        <div class="text-center">
          <button type="submit" class="bg-neutral-900 text-white px-8 py-3 rounded hover:bg-neutral-800 transition">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>
  <?php include("footer.php"); ?>

  <script>
    // Tiny reveal-on-scroll to match other pages
    const io = new IntersectionObserver(
      (entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            e.target.style.opacity = 1;
            e.target.style.transform = "translateY(0)";
          }
        });
      },
      { threshold: 0.12 }
    );
    document
      .querySelectorAll("[data-animate]")
      .forEach((el) => io.observe(el));
  </script>
</body>

</html>