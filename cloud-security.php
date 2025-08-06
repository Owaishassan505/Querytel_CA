<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Microsoft-Style Services</title>
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
</head>

<body class="bg-white text-neutral-900 font-sans">
  <!-- HEADER -->
  <?php include("navbar.php"); ?>

  <!-- HERO -->

  <section class="bg-white py-24 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
      <!-- Text Column -->
      <div class="opacity-0 animate-fadeInLeft">
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-neutral-900 leading-tight">
          Enterprise-grade cloud solutions.<br />
          Built to scale.
        </h1>
        <p class="mt-6 text-lg text-gray-600">
          From firewalls to automation — streamline your infrastructure with
          secure, scalable technology tailored for modern enterprises.
        </p>
        <div class="mt-8 flex gap-4 opacity-0 animate-fadeIn delay-500">
          <a href="#services"
            class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">
            Explore Services
          </a>
          <a href="#contact"
            class="inline-block border border-neutral-900 text-neutral-900 px-6 py-3 rounded hover:bg-neutral-100 transition">
            Contact Sales
          </a>
        </div>
      </div>

      <!-- Image Column -->
      <div class="opacity-0 animate-fadeInRight delay-200">
        <img src="https://querytel.com/wp-content/uploads/2025/07/mynetwork.drawio.png" alt="Cloud Architecture"
          class="w-full rounded-lg shadow-md" />
      </div>
    </div>
  </section>

  <!-- SERVICES SECTION -->
  <section id="services" class="py-16">
    <div class="max-w-6xl mx-auto px-6 space-y-24">
      <!-- Service 1 -->
      <div class="grid md:grid-cols-2 items-center gap-10">
        <img src="https://querytel.com/wp-content/uploads/2025/06/Web-developer-application-to-cloud-server-1.jpg"
          alt="" class="rounded-lg shadow" />
        <div>
          <h2 class="text-2xl font-semibold mb-4">Scalable Security</h2>
          <p class="text-gray-600 mb-4">
            Our cloud-native firewall solutions scale with your workloads,
            ensuring protection without slowdowns.
          </p>
          <ul class="space-y-2 text-gray-700 list-disc list-inside">
            <li>DNS Security, App Control, Intrusion Prevention</li>
            <li>High Availability across regions</li>
            <li>Integrates with AWS, Azure, Hybrid</li>
          </ul>
        </div>
      </div>

      <!-- Service 2 -->
      <div class="grid md:grid-cols-2 items-center gap-10">
        <div class="md:order-2">
          <img src="https://querytel.com/wp-content/uploads/2025/06/Depositphotos_281544310_XL-2048x801.jpg" alt=""
            class="rounded-lg shadow" />
        </div>
        <div class="md:order-1">
          <h2 class="text-2xl font-semibold mb-4">Centralized Management</h2>
          <p class="text-gray-600 mb-4">
            Manage all policies and security from a single dashboard with
            intuitive control.
          </p>
          <ul class="space-y-2 text-gray-700 list-disc list-inside">
            <li>Unified policy assignment across clouds</li>
            <li>Live traffic & threat reporting</li>
            <li>Auto enforcement using metadata triggers</li>
          </ul>
        </div>
      </div>

      <!-- Service 3 -->
      <div class="grid md:grid-cols-2 items-center gap-10">
        <img src="https://querytel.com/wp-content/uploads/2025/06/Depositphotos_529470832_XL-2048x1365.jpg" alt=""
          class="rounded-lg shadow" />
        <div>
          <h2 class="text-2xl font-semibold mb-4">
            Advanced Threat Prevention
          </h2>
          <p class="text-gray-600 mb-4">
            Detect, block, and neutralize evolving threats using Fortinet's
            trusted intelligence.
          </p>
          <ul class="space-y-2 text-gray-700 list-disc list-inside">
            <li>Powered by FortiGuard Labs</li>
            <li>Ransomware & zero-day blocking</li>
            <li>Regulatory compliance built-in</li>
          </ul>
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
        class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">Let’s Talk</a>
    </div>
  </section>

  <!-- CONTACT FORM -->
  <section id="contact" class="py-20">
    <div class="max-w-3xl mx-auto px-6">
      <h3 class="text-2xl font-semibold mb-8 text-center">Contact Us</h3>
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
  <footer class="bg-[#f3f3f3] text-sm text-neutral-600 border-t border-neutral-200">
    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-4 gap-10">
      <!-- Column 1: Logo + Brief -->
      <div>
        <img src="https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png"
          alt="QueryTel Logo" class="h-10 mb-4" />
        <p>
          Empowering Canadian businesses with reliable managed IT,
          cybersecurity, and scalable infrastructure since 1995.
        </p>
      </div>

      <!-- Column 2: Solutions -->
      <div>
        <h4 class="text-neutral-800 font-semibold mb-3">Solutions</h4>
        <ul class="space-y-2">
          <li>
            <a href="/managedservices/" class="hover:underline">Managed Services</a>
          </li>
          <li>
            <a href="/cloud-security/" class="hover:underline">Cloud Security</a>
          </li>
          <li>
            <a href="/warehousing-solutions-and-network-infrastructure/" class="hover:underline">Warehousing</a>
          </li>
          <li>
            <a href="/cybercloudservices/" class="hover:underline">Cyber Cloud</a>
          </li>
        </ul>
      </div>

      <!-- Column 3: Company -->
      <div>
        <h4 class="text-neutral-800 font-semibold mb-3">Company</h4>
        <ul class="space-y-2">
          <li>
            <a href="/it-services-cybersecurity-cloud-solutions/" class="hover:underline">About Us</a>
          </li>
          <li><a href="/careers/" class="hover:underline">Careers</a></li>
          <li><a href="/contactus/" class="hover:underline">Contact</a></li>
          <li>
            <a href="/termsandconditions/" class="hover:underline">Terms & Conditions</a>
          </li>
        </ul>
      </div>

      <!-- Column 4: Support -->
      <div>
        <h4 class="text-neutral-800 font-semibold mb-3">Support</h4>
        <ul class="space-y-2">
          <li>
            <a href="/remotesupport/" class="hover:underline">Remote Support</a>
          </li>
          <li>
            <a href="https://helpdesk.querytel.com/portal/en/home" class="hover:underline">Support Portal</a>
          </li>
          <li>
            <a href="https://cpxsp1-bell.solutions.sip.bell.ca/Login/" class="hover:underline">Office Connect Portal</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="border-t border-neutral-200 text-center text-xs py-6 bg-[#eeeeee]">
      &copy; 2025 QueryTel Inc. All rights reserved.
    </div>
  </footer>
</body>

</html>