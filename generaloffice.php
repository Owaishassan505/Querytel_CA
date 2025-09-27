<?php $base = "" ?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>General Office - Querytel Inc</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link rel="icon" href="<?= $base . '/assets/images/querytel-icon.png' ?>" sizes="any" />
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-57GG72GW');</script>
    <!-- End Google Tag Manager -->

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

<body class="bg-white text-neutral-900 font-sans">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-57GG72GW" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php include("navbar.php"); ?>

    <!-- HERO -->
    <section class="bg-white py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-12 gap-12 items-center">
            <div class="lg:col-span-7 opacity-0 animate-fadeInLeft">

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-semibold tracking-tight leading-tight">
                    Looking to Grow your Business?
                </h1>
                <p class="mt-4 text-xl font-semibold text-[color:var(--accent)]">Our Hardware Can Help</p>
                <p class="mt-6 max-w-2xl text-base leading-relaxed text-neutral-700">
                    Standardize your office stack with reliable devices, secure networks, and software that scales
                    without drama.
                </p>
                <div class="mt-10 flex flex-col gap-3 sm:flex-row sm:items-center">
                    <a href="#request-expert"
                        class="qt-btn qt-btn-primary inline-flex items-center justify-center px-6 py-3 text-sm transition-colors duration-150">
                        Request an expert
                    </a>
                    <a href="<?= $base ?>/contactus"
                        class="qt-btn qt-btn-secondary inline-flex items-center justify-center px-6 py-3 text-sm transition-colors duration-150">
                        Talk to Sales
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 opacity-0 animate-fadeInRight delay-200">
                <div class="mx-auto max-w-lg">
                    <div class="rounded-2xl border border-black/10 bg-white p-4">
                        <div
                            class="aspect-[16/10] w-full overflow-hidden rounded-xl border border-black/5 bg-white p-6">
                            <img src="<?php echo $base; ?>/assets/images/general-office-hero.jpg"
                                alt="General Office Overview" class="w-full h-full object-cover" />

                        </div>
                        <div class="mt-4 flex items-center justify-between gap-4">
                            <div>
                                <p class="text-sm font-medium text-neutral-800">Office overview</p>
                                <p class="text-xs text-neutral-500">Devices, voice, software, security</p>
                            </div>
                            <span
                                class="rounded-full bg-[color:var(--accent)]/10 px-3 py-1 text-xs font-semibold text-[color:var(--accent)]">Live</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FEATURES / CARDS -->
    <section class="bg-[#f9f9f9] py-32 sm:py-36" id="solutions">
        <div class="max-w-[1440px] mx-auto px-6">
            <header class="text-center mb-24 sm:mb-28" data-aos="fade-up">
                <div class="qt-line mb-6"></div>
                <h2 class="text-[40px] sm:text-[56px] font-light text-[#1B1B1B] leading-tight tracking-tight">
                    Looking to Grow your Business? <br />
                    <span class="font-semibold text-[color:var(--accent)]">Our Hardware Can Help</span>
                </h2>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-8 xl:gap-x-12 gap-y-16 xl:gap-y-24">
                <!-- Card 1 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="<?php echo $base; ?>/assets/images/Img_32949129.jpg"
                            alt="Customized Hardware Solutions"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3 tracking-tight">Customized Hardware
                            Solutions</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Secure and reliable networking hardware customized to your exact requirements.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="<?php echo $base; ?>/assets/images/yealink-phone.png"
                            alt="Cost-effective VoIP Phone Systems"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3 tracking-tight">Cost-effective VoIP
                            Phone Systems</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Our user-friendly VoIP phones increase employee productivity with remote accessibility.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="<?php echo $base; ?>/assets/images/workspace.jpg"
                            alt="Ergonomic and Affordable Desktop Hardware"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3 tracking-tight">Ergonomic and
                            Affordable Desktop Hardware</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Portable, ergonomic, state-of-the-art desktops to boost efficiency and customer service.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="<?php echo $base; ?>/assets/images/office-4.jpg"
                            alt="Sales-Boosting Wireless Technologies"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3 tracking-tight">Sales-Boosting Wireless
                            Technologies</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Site-wide coverage for fast, reliable connectivity that lifts sales and customer
                            satisfaction.
                        </p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="<?php echo $base; ?>/assets/images/office-5.jpg" alt="Licensed Software"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3 tracking-tight">Licensed Software</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            20+ world-class partners. Only the latest, most cost-effective licensed software solutions.
                        </p>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="qt-card overflow-hidden group" data-aos="fade-up" data-aos-delay="500">
                    <div class="h-2 bg-[color:var(--accent)]"></div>
                    <div class="relative bg-[#FAFAFA] aspect-[3/2]">
                        <img src="<?php echo $base; ?>/assets/images/office-6.jpg" alt="Top-Notch Security"
                            class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" />
                    </div>
                    <div class="p-8">
                        <h3 class="text-[22px] font-semibold text-[#1B1B1B] mb-3 tracking-tight">Top-Notch Security</h3>
                        <p class="text-[16px] text-[#4A4A4A] leading-relaxed">
                            Top-of-the-line security hardware to protect your most confidential and critical I.T. data.
                        </p>
                    </div>
                </div>

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
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script> AOS.init({ duration: 800, easing: 'ease-out-cubic' }); </script>
</body>

</html>