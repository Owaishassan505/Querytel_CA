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
  <div class="max-w-6xl mx-auto px-6 space-y-24">
    <!-- Structured Cabling -->
    <div class="grid md:grid-cols-2 items-center gap-10">
      <img src="https://querytel.com/wp-content/uploads/2025/03/Depositphotos_522317172_XL-1-scaled.jpg"
        alt="Structured Cabling" class="rounded-lg shadow" />
      <div>
        <h2 class="text-2xl font-semibold mb-4">Structured Cabling</h2>
        <p class="text-gray-600 mb-4">
          Long-range Ethernet cable rated for extreme temperatures (up to
          300m). We minimize IDFs and terminate all cables at the MDF using
          redundant 10G fiber.
        </p>
        <ul class="space-y-2 text-gray-700 list-disc list-inside">
          <li>CAT 6 cabling for dry storage</li>
          <li>Cold-rated CAT 6 (-20°C)</li>
          <li>Redundant 10G fiber MDF ↔ IDF</li>
          <li>WAP placement based on racking layout</li>
        </ul>
      </div>
    </div>

    <!-- IT Infra Design -->
    <div class="grid md:grid-cols-2 items-center gap-10">
      <div class="md:order-2">
        <img src="https://querytel.com/wp-content/uploads/2025/03/Depositphotos_660220058_XL-1024x614.jpg"
          alt="IT Infrastructure" class="rounded-lg shadow" />
      </div>
      <div class="md:order-1">
        <h2 class="text-2xl font-semibold mb-4">
          IT & Network Infrastructure Design
        </h2>
        <p class="text-gray-600 mb-4">
          Consolidate legacy hardware and migrate essential workloads to the
          cloud while improving security and visibility.
        </p>
        <ul class="space-y-2 text-gray-700 list-disc list-inside">
          <li>IT/OT segregation for reduced risk</li>
          <li>Standardized naming for devices</li>
          <li>Redundant routing with HA failover</li>
          <li>Structured segmentation and labeling</li>
        </ul>
      </div>
    </div>

    <!-- Datacenter Ops -->
    <div class="grid md:grid-cols-2 items-center gap-10">
      <img
        src="https://querytel.com/wp-content/uploads/2025/03/Network-Infrastructure-Strategy-Best-Practices_blog.webp"
        alt="Datacenter" class="rounded-lg shadow" />
      <div>
        <h2 class="text-2xl font-semibold mb-4">Datacenter Operations</h2>
        <p class="text-gray-600 mb-4">
          We help you modernize by consolidating infrastructure, offloading to
          the cloud, and automating data workflows.
        </p>
        <ul class="space-y-2 text-gray-700 list-disc list-inside">
          <li>Hybrid cloud: On-prem, AWS, Azure</li>
          <li>WMS, 3PL & 4PL deployment</li>
          <li>VPN & secure remote access</li>
          <li>Edge compute for local data processing</li>
        </ul>
      </div>
    </div>

    <!-- End-User Compute -->
    <div class="grid md:grid-cols-2 items-center gap-10">
      <div class="md:order-2">
        <img src="https://querytel.com/wp-content/uploads/2025/03/ed9bcaf7-e1d4-42b8-96c0-056ad38ae827-1024x683.png"
          alt="Devices" class="rounded-lg shadow" />
      </div>
      <div class="md:order-1">
        <h2 class="text-2xl font-semibold mb-4">
          End-User Compute & Mobile Devices
        </h2>
        <p class="text-gray-600 mb-4">
          Customize all endpoints with security in mind. From passwordless
          auth to rugged mobile devices, we power the warehouse floor.
        </p>
        <ul class="space-y-2 text-gray-700 list-disc list-inside">
          <li>Warehouse-ready desktops & laptops</li>
          <li>Freezer-grade mobile devices with RFID</li>
          <li>Label printing from ReachTrucks & kiosks</li>
          <li>Windows Hello / Okta FastPass auth</li>
        </ul>
      </div>
    </div>

    <!-- Surveillance -->
    <div class="grid md:grid-cols-2 items-center gap-10">
      <img src="https://querytel.com/wp-content/uploads/2025/03/Depositphotos_227362768_XL-1-scaled.jpg"
        alt="Surveillance" class="rounded-lg shadow" />
      <div>
        <h2 class="text-2xl font-semibold mb-4">
          Surveillance & Intrusion Prevention
        </h2>
        <p class="text-gray-600 mb-4">
          Smart, connected surveillance that integrates with HRIS, entrance
          control, and truck verification.
        </p>
        <ul class="space-y-2 text-gray-700 list-disc list-inside">
          <li>Access control with PayClock & HRIS</li>
          <li>Automated truck entrance & plate scan</li>
          <li>AI dock door monitoring & alerts</li>
          <li>Biometric + intercom security layers</li>
        </ul>
      </div>
    </div>
  </div>

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
  <?php include("footer.php"); ?>
</body>

</html>