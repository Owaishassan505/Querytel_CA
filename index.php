<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description"
    content="QueryTel Inc is Canada's trusted IT services provider offering managed IT, cloud hosting, cybersecurity, hardware solutions, and flexible financing for businesses." />
  <meta name="keywords"
    content="QueryTel, IT Services Canada, Cloud Hosting, Cybersecurity, Managed IT, Laptop Financing, Tech Solutions Toronto, Lenovo HP Dell Microsoft" />
  <meta name="author" content="QueryTel Inc" />
  <link rel="canonical" href="https://querytel.com/" />

  <!-- Open Graph Meta (Social Previews) -->
  <meta property="og:title" content="QueryTel Inc – Managed IT, Cloud, and Laptop Financing" />
  <meta property="og:description"
    content="Flexible IT solutions and secure cloud infrastructure for Canadian businesses. Trusted by top brands." />
  <meta property="og:image" content="https://querytel.com/wp-content/uploads/2025/07/mynetwork.drawio.png" />
  <meta property="og:url" content="https://querytel.com/" />
  <meta property="og:type" content="website" />

  <!-- Twitter Meta -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="QueryTel Inc – Managed IT, Cloud, and Laptop Financing" />
  <meta name="twitter:description"
    content="Flexible IT solutions and secure cloud infrastructure for Canadian businesses. Trusted by top brands." />
  <meta name="twitter:image" content="https://querytel.com/wp-content/uploads/2025/07/mynetwork.drawio.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <title>QueryTel - Home</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
            floatY: {
              "0%, 100%": { transform: "translateY(0)" },
              "50%": { transform: "translateY(-20px)" },
            },
          },
          animation: {
            fadeInRight: "fadeInRight 0.8s ease-out forwards",
            fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
            fadeIn: "fadeIn 1s ease-out forwards",
            floatY: "floatY 4s ease-in-out infinite",
          },
        },
      },
    };
  </script>

  <!-- Inside <head> -->
  <style>
    .hero-slider {
      display: flex;
      transition: transform 0.6s ease-in-out;
      width: 300%;
    }

    .hero-slide {
      width: 100%;
      flex-shrink: 0;
    }

    @keyframes sliderLoop {
      0% {
        transform: translateX(0);
      }

      33% {
        transform: translateX(0);
      }

      34% {
        transform: translateX(-100%);
      }

      66% {
        transform: translateX(-100%);
      }

      67% {
        transform: translateX(-200%);
      }

      99% {
        transform: translateX(-200%);
      }

      100% {
        transform: translateX(0);
      }
    }

    .hero-slider.auto {
      animation: sliderLoop 15s infinite;
    }

    @keyframes scrollLogo {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .animate-scrollLogo {
      animation: scrollLogo 40s linear infinite;
    }
  </style>
</head>

<body class="bg-white text-neutral-900 font-sans">
  <!-- NAVBAR -->
  <?php include("navbar.php"); ?>

  <section id="heroSlider" class="relative overflow-hidden py-0 sm:py-24">
    <div class="max-w-7xl mx-auto px-6 relative">
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <!-- Slide 1 -->
            <li class="glide__slide">
              <div class="grid md:grid-cols-2 gap-12 items-center min-h-[650px]">
                <div>
                  <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-neutral-900 leading-tight">
                    Digital Infrastructure<br />Made Human.
                  </h1>
                  <p class="mt-6 text-lg text-gray-600">
                    Your network doesn’t need to be complex. We simplify the
                    backbone of your tech so you can focus on what matters —
                    growth, speed, and control.
                  </p>
                  <div class="mt-8 flex gap-4">
                    <a href="#services"
                      class="bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">Explore
                      Services</a>
                    <a href="#video"
                      class="border border-neutral-900 text-neutral-900 px-6 py-3 rounded hover:bg-neutral-100 transition">Watch
                      Demo</a>
                  </div>
                </div>
                <div>
                  <img src="https://querytel.com/wp-content/uploads/2025/07/mynetwork.drawio.png"
                    alt="Digital Infrastructure" class="w-full rounded-lg shadow-md" />
                </div>
              </div>
            </li>

            <!-- Slide 2 -->
            <li class="glide__slide">
              <div class="grid md:grid-cols-2 gap-12 items-center min-h-[650px]">
                <div>
                  <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-neutral-900 leading-tight">
                    Scale Securely.<br />Stay Ahead.
                  </h1>
                  <p class="mt-6 text-lg text-gray-600">
                    Whether it’s cloud, hybrid, or something you made in a
                    panic last year — we secure it, streamline it, and
                    future-proof it without breaking stuff.
                  </p>
                  <div class="mt-8 flex gap-4">
                    <a href="#services"
                      class="bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">Explore
                      Services</a>
                    <a href="#contact"
                      class="border border-neutral-900 text-neutral-900 px-6 py-3 rounded hover:bg-neutral-100 transition">Talk
                      to Us</a>
                  </div>
                </div>
                <div>
                  <img src="https://querytel.com/wp-content/uploads/2025/06/Depositphotos_281544310_XL-2048x801.jpg"
                    alt="Cloud Security" class="w-full rounded-lg shadow-md" />
                </div>
              </div>
            </li>

            <!-- Slide 3 -->
            <li class="glide__slide">
              <div class="grid md:grid-cols-2 gap-12 items-center min-h-[650px]">
                <div>
                  <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-neutral-900 leading-tight">
                    Centralized Visibility.<br />Real-time Control.
                  </h1>
                  <p class="mt-6 text-lg text-gray-600">
                    One screen to rule them all. Monitor, automate, and
                    dominate your infrastructure from a single, clean
                    dashboard. No more guessing games.
                  </p>
                  <div class="mt-8 flex gap-4">
                    <a href="#video"
                      class="bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">Watch Demo</a>
                    <a href="#contact"
                      class="border border-neutral-900 text-neutral-900 px-6 py-3 rounded hover:bg-neutral-100 transition">Get
                      Support</a>
                  </div>
                </div>
                <div>
                  <img src="https://querytel.com/wp-content/uploads/2025/06/Depositphotos_529470832_XL-2048x1365.jpg"
                    alt="Centralized Monitoring" class="w-full rounded-lg shadow-md" />
                </div>
              </div>
            </li>
          </ul>
        </div>

        <!-- Arrows -->
        <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-4 z-10" data-glide-el="controls">
          <!-- Left arrow -->
          <button class="glide__arrow glide__arrow--left text-xl text-gray-500 hover:text-black transition"
            data-glide-dir="<">
            ‹
          </button>

          <!-- Dots -->
          <div class="glide__bullets flex gap-2" data-glide-el="controls[nav]">
            <button class="glide__bullet w-3 h-3 rounded-full bg-neutral-400 opacity-70 hover:opacity-100"
              data-glide-dir="=0"></button>
            <button class="glide__bullet w-3 h-3 rounded-full bg-neutral-400 opacity-70 hover:opacity-100"
              data-glide-dir="=1"></button>
            <button class="glide__bullet w-3 h-3 rounded-full bg-neutral-400 opacity-70 hover:opacity-100"
              data-glide-dir="=2"></button>
          </div>

          <!-- Right arrow -->
          <button class="glide__arrow glide__arrow--right text-xl text-gray-500 hover:text-black transition"
            data-glide-dir=">">
            ›
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section id="services" class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-3xl font-bold text-center mb-12 text-neutral-900">
        Our Core Services
      </h2>

      <div class="grid md:grid-cols-3 gap-10">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition text-center">
          <div class="text-4xl mb-4 text-orange-500">🔒</div>
          <h3 class="text-xl font-semibold mb-2">Cyber Security</h3>
          <p class="text-gray-600 text-sm mb-3">
            Our cyber security services offer more than just regular firewall
            and anti-virus protection. Our proactive security mechanism will
            secure your business against cyber-attacks and vulnerabilities.
          </p>
          <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">READ MORE</a>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition text-center">
          <div class="text-4xl mb-4 text-orange-500">☁️</div>
          <h3 class="text-xl font-semibold mb-2">Cloud Backup</h3>
          <p class="text-gray-600 text-sm mb-3">
            We store your critical data in the centrally monitored cloud
            backup systems.
          </p>
          <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">READ MORE</a>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition text-center">
          <div class="text-4xl mb-4 text-orange-500">⚙️</div>
          <h3 class="text-xl font-semibold mb-2">Managed Services</h3>
          <p class="text-gray-600 text-sm mb-3">
            We offer cost-effective and tailored managed services in line with
            your company’s needs.
          </p>
          <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">READ MORE</a>
        </div>

        <!-- Card 4 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition text-center">
          <div class="text-4xl mb-4 text-orange-500">💻</div>
          <h3 class="text-xl font-semibold mb-2">
            Hardware & Cloud Solution
          </h3>
          <p class="text-gray-600 text-sm mb-3">
            We offer first-class hardware and cloud solutions from prestigious
            brands like Lenovo, HP, Microsoft, etc.
          </p>
          <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">READ MORE</a>
        </div>

        <!-- Card 5 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition text-center">
          <div class="text-4xl mb-4 text-orange-500">🖥️</div>
          <h3 class="text-xl font-semibold mb-2">
            Cloud Hosting & Co-Location
          </h3>
          <p class="text-gray-600 text-sm mb-3">
            We deliver faster and full-fledged cloud-based VPS solutions that
            will enhance your IT infrastructure’s security.
          </p>
          <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">READ MORE</a>
        </div>

        <!-- Card 6 -->
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition text-center">
          <div class="text-4xl mb-4 text-orange-500">👔</div>
          <h3 class="text-xl font-semibold mb-2">Business Solution</h3>
          <p class="text-gray-600 text-sm mb-3">
            We will manage all your vendors and provide your business goods,
            printing, delivery equipment at affordable rates.
          </p>
          <a href="#" class="text-orange-600 text-sm font-semibold hover:underline">READ MORE</a>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO SECTION -->
  <section id="video" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
      <!-- Who We Are Block -->
      <div>
        <h2 class="text-3xl font-bold mb-4">Who we are?</h2>
        <p class="text-lg text-neutral-700 font-semibold mb-3">
          Most trusted Managed IT Services provider company
        </p>
        <p class="text-gray-600">
          QueryTel Inc has been providing Managed IT services across Canada
          since 1995; with almost two decades of experience in servicing
          clients, we bring the best of what we have learned to fulfill your
          company’s needs.
        </p>
      </div>

      <!-- Video Embed with Floating SVG Circle Behind -->
      <div class="relative w-full flex justify-center items-center">
        <!-- Floating Hollow SVG Circle -->
        <svg
          class="absolute left-1/2 -translate-x-1/2 -translate-y-1/2 w-[360px] h-[360px] md:w-[420px] md:h-[420px] text-indigo-500 z-0 drop-shadow-[0_0_10px_rgba(99,102,241,0.4)] animate-floatY"
          viewBox="0 0 300 300" xmlns="http://www.w3.org/2000/svg">
          <circle cx="150" cy="150" r="130" stroke="currentColor" stroke-width="16" fill="none" />
        </svg>

        <!-- Video iframe -->
        <div class="relative z-10 rounded-lg overflow-hidden shadow-xl w-full max-w-xl aspect-video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/l0kDQtjy_BM?si=pxo_A4a8whLPGA1w"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12 items-center">
      <!-- Left: Our Clients -->
      <div>
        <h3 class="text-2xl font-bold text-neutral-900 mb-4">Our Clients</h3>
        <div class="h-0.5 w-10 bg-neutral-300 mb-6"></div>
        <p class="text-gray-600 text-sm leading-relaxed">
          VersaCold Logistics Services, Americold Logistics, LLC, Novacold
          Logistics-Halifax, Cervini Painting & Decorating Ltd, Sunnyside
          Window & Eaves Cleaning Ltd, Urban Electrical Contractors, Affinity
          Luxury Car Rentals, Bell Canada, Roehampton, GSK, Nova Cold, Gordon
          Food Service, and Syncrude Energy.
        </p>
      </div>

      <!-- Center: Image -->
      <div class="flex justify-center">
        <img src="https://querytel.com/wp-content/uploads/2021/10/professional-experience-1-429-x-469.png"
          alt="Happy clients" class="rounded-lg shadow-md w-full max-w-md" />
      </div>

      <!-- Right: 26 Years Experience -->
      <div>
        <h3 class="text-4xl font-bold text-orange-600 leading-tight">
          <span class="block">26 years</span>
          <span class="text-neutral-900">of professional<br />experience</span>
        </h3>
        <div class="h-0.5 w-10 bg-neutral-300 my-6"></div>
        <p class="text-gray-600 text-sm leading-relaxed">
          With over 50 consultants all over Canada and over 26 years of
          experience in the industry, we aim to provide the best customer
          service and service offering available for your business!
        </p>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="text-2xl font-bold text-center text-neutral-900 mb-10">
        Our Partners
      </h2>

      <!-- Scrolling logo container with proper spacing and duplication -->
      <div class="relative w-full overflow-hidden">
        <div class="flex gap-24 items-center animate-scrollLogo whitespace-nowrap px-4">
          <!-- Each logo inside a fixed-width flexbox with padding -->
          <div class="flex-shrink-0 w-48 flex justify-center items-center">
            <img src="https://logo.clearbit.com/microsoft.com"
              class="h-12 w-auto grayscale hover:grayscale-0 transition duration-300 hover:scale-105" alt="Microsoft" />
          </div>
          <div class="flex-shrink-0 w-48 flex justify-center items-center">
            <img src="https://logo.clearbit.com/hp.com"
              class="h-12 w-auto grayscale hover:grayscale-0 transition duration-300 hover:scale-105" alt="HP" />
          </div>
          <div class="flex-shrink-0 w-48 flex justify-center items-center">
            <img src="https://logo.clearbit.com/lenovo.com"
              class="h-12 w-auto grayscale hover:grayscale-0 transition duration-300 hover:scale-105" alt="Lenovo" />
          </div>
          <div class="flex-shrink-0 w-48 flex justify-center items-center">
            <img src="https://logo.clearbit.com/fortinet.com"
              class="h-12 w-auto grayscale hover:grayscale-0 transition duration-300 hover:scale-105" alt="Fortinet" />
          </div>
          <div class="flex-shrink-0 w-48 flex justify-center items-center">
            <img src="https://logo.clearbit.com/gsk.com"
              class="h-12 w-auto grayscale hover:grayscale-0 transition duration-300 hover:scale-105" alt="GSK" />
          </div>
          <div class="flex-shrink-0 w-48 flex justify-center items-center">
            <img src="https://logo.clearbit.com/bell.ca"
              class="h-12 w-auto grayscale hover:grayscale-0 transition duration-300 hover:scale-105"
              alt="Bell Canada" />
          </div>
          <div class="flex-shrink-0 w-48 flex justify-center items-center">
            <img src="https://logo.clearbit.com/gfs.com"
              class="h-12 w-auto grayscale hover:grayscale-0 transition duration-300 hover:scale-105" alt="GFS" />
          </div>
          <div class="flex-shrink-0 w-48 flex justify-center items-center">
            <img src="https://logo.clearbit.com/exxonmobil.com"
              class="h-12 w-auto grayscale hover:grayscale-0 transition duration-300 hover:scale-105" alt="Syncude" />
          </div>

          <!-- Repeat for infinite scroll -->
          <!-- Optional: Clone the same structure again -->
        </div>
      </div>
    </div>
  </section>

  <section id="laptop-financing" class="bg-[#0f101e] text-white py-24">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
      <!-- Left Content -->
      <div>
        <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-6">
          Less Than 0%* Financing On <br />
          <span class="text-white font-extrabold">Leading Laptop Brands</span>
        </h2>
        <div class="space-y-10 text-sm">
          <!-- Point 1 -->
          <div>
            <div class="flex items-center gap-3 font-bold text-white mb-1">
              <span class="text-xl text-orange-500">●</span> Flexible Payment
              Solutions
            </div>
            <p class="text-gray-300">
              QueryTel Inc Flexible Payment Solutions is partnering with some
              of the biggest technology brands to help you sell more, and
              support your customer’s new demand for virtual working.
            </p>
          </div>
          <!-- Point 2 -->
          <div>
            <div class="flex items-center gap-3 font-bold text-white mb-1">
              <span class="text-xl text-orange-500">●</span> Pay Less
            </div>
            <p class="text-gray-300">
              Cut a check today or pay less over time on select laptop
              devices.
            </p>
          </div>
          <!-- Point 3 -->
          <div>
            <div class="flex items-center gap-3 font-bold text-white mb-1">
              <span class="text-xl text-orange-500">●</span> Unlock
              Promotional Pricing
            </div>
            <p class="text-gray-300">
              Contact us today to unlock your promotional pricing!
            </p>
          </div>
        </div>
      </div>

      <!-- Right Image + Features -->
      <div class="space-y-10">
        <img src="https://querytel.com/wp-content/uploads/2021/10/leading-laptop-2-1024x512.jpg" alt="Laptop Financing"
          class="rounded-lg shadow-lg w-full" />

        <div class="space-y-6 text-sm text-white">
          <div class="flex items-center gap-4">
            <div class="text-orange-500 text-2xl">💰</div>
            <p class="font-semibold">Cheaper Than Paying Cash</p>
          </div>
          <div class="flex items-center gap-4">
            <div class="text-orange-500 text-2xl">🖥️</div>
            <p class="font-semibold">Helps You Manage Technology Lifecycle</p>
          </div>
          <div class="flex items-center gap-4">
            <div class="text-orange-500 text-2xl">🚀</div>
            <p class="font-semibold">Accelerate Your As-A-Service Journey</p>
          </div>
        </div>

        <!-- Logos -->
        <div class="flex flex-wrap items-center gap-6 pt-4">
          <img src="https://logo.clearbit.com/microsoft.com" alt="Microsoft" class="h-6 md:h-8 w-auto" />
          <img src="https://logo.clearbit.com/dell.com" alt="Dell" class="h-6 md:h-8 w-auto" />
          <img src="https://logo.clearbit.com/lenovo.com" alt="Lenovo" class="h-6 md:h-8 w-auto" />
          <img src="https://logo.clearbit.com/hp.com" alt="HP" class="h-6 md:h-8 w-auto" />
          <img src="https://logo.clearbit.com/intel.com" alt="Intel" class="h-6 md:h-8 w-auto" />
          <img src="https://logo.clearbit.com/windows.com" alt="Windows" class="h-6 md:h-8 w-auto" />
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT FORM -->
  <section id="contact" class="py-20 bg-gray-50">
    <div class="max-w-3xl mx-auto px-6">
      <h3 class="text-2xl font-semibold mb-8 text-center">Get In Touch</h3>
      <form class="space-y-6">
        <div class="grid md:grid-cols-2 gap-6">
          <input type="text" placeholder="Your Name" class="w-full border border-black px-4 py-3 rounded" required />
          <input type="email" placeholder="Email Address" class="w-full border border-black px-4 py-3 rounded"
            required />
        </div>
        <input type="tel" placeholder="Phone Number" class="w-full border border-black px-4 py-3 rounded" required />
        <textarea rows="4" placeholder="Your Message" class="w-full border border-black px-4 py-3 rounded resize-none"
          required></textarea>
        <div class="text-center">
          <button type="submit" class="bg-neutral-900 text-white px-8 py-3 rounded hover:bg-neutral-800 transition">
            Send Message
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- Mobile Sidebar Overlay -->
  <div id="mobileSidebar" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black bg-opacity-40" onclick="toggleSidebar()"></div>

    <!-- Sidebar Panel -->
    <div
      class="absolute right-0 top-0 h-full w-72 bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out"
      id="sidebarPanel">
      <div class="flex justify-between items-center p-4 border-b">
        <span class="text-lg font-semibold">Menu</span>
        <button onclick="toggleSidebar()" class="text-2xl leading-none">
          &times;
        </button>
      </div>
      <nav class="p-4 space-y-4 text-sm font-medium text-gray-700">
        <a href="/" class="block">Home</a>
        <a href="/it-services-cybersecurity-cloud-solutions/" class="block">About Us</a>
        <a href="/cloud-security/" class="block">Cloud Security</a>
        <a href="/warehousing-solutions-and-network-infrastructure/" class="block">Warehousing</a>

        <details class="group">
          <summary class="cursor-pointer">Industry</summary>
          <div class="ml-4 mt-1 space-y-1">
            <a href="/retail/" class="block">Retail</a>
            <a href="/healthcare/" class="block">Healthcare</a>
            <a href="/generaloffice/" class="block">General Office</a>
          </div>
        </details>

        <details class="group">
          <summary class="cursor-pointer">Solutions</summary>
          <div class="ml-4 mt-1 space-y-1">
            <a href="/managedservices/" class="block">Managed Services</a>
            <a href="/officeconnect/" class="block">Office Connect</a>
            <a href="/officeconnectplans/" class="block">Office Connect Plans</a>
            <a href="/cybercloudservices/" class="block">Cyber Cloud Services</a>
            <a href="/malwarebytes/" class="block">Cyber Security</a>
          </div>
        </details>

        <details class="group">
          <summary class="cursor-pointer">More</summary>
          <div class="ml-4 mt-1 space-y-1">
            <a href="/thermographiccamera/" class="block">Thermographic Camera</a>
            <a href="/intrusionprevension/" class="block">Intrusion Prevention</a>
            <a href="/careers/" class="block">Careers</a>
          </div>
        </details>

        <details class="group">
          <summary class="cursor-pointer">Support</summary>
          <div class="ml-4 mt-1 space-y-1">
            <a href="/remotesupport/" class="block">Remote Support</a>
            <a href="https://helpdesk.querytel.com/portal/en/home" class="block">Support Portal</a>
            <a href="https://cpxsp1-bell.solutions.sip.bell.ca/Login/" class="block">Office Connect C-Portal</a>
          </div>
        </details>

        <a href="/contactus/" class="block">Contact</a>
      </nav>
    </div>
  </div>
  <?php include("footer.php"); ?>
</body>
<script>
  const sliderTrack = document.getElementById("sliderTrack");
  const indicators = document.querySelectorAll("[data-slide]");
  let currentSlide = 0;
  const totalSlides = indicators.length;

  function goToSlide(index) {
    sliderTrack.style.transform = `translateX(-${index * 100}%)`;
    currentSlide = index;
    indicators.forEach((dot, i) => {
      dot.classList.toggle("bg-neutral-900", i === index);
    });
  }

  indicators.forEach((btn) =>
    btn.addEventListener("click", () =>
      goToSlide(parseInt(btn.dataset.slide))
    )
  );

  setInterval(() => {
    goToSlide((currentSlide + 1) % totalSlides);
  }, 7000); // Auto-slide every 7s

  function toggleSidebar() {
    const sidebar = document.getElementById("mobileSidebar");
    const panel = document.getElementById("sidebarPanel");
    const isOpen = !sidebar.classList.contains("hidden");

    if (isOpen) {
      panel.classList.add("translate-x-full");
      setTimeout(() => sidebar.classList.add("hidden"), 300);
    } else {
      sidebar.classList.remove("hidden");
      setTimeout(() => panel.classList.remove("translate-x-full"), 10);
    }
  }
</script>
<script>
  new Glide(".glide", {
    type: "carousel",
    autoplay: 5000,
    hoverpause: true,
    animationDuration: 800,
  }).mount();
</script>

</html>