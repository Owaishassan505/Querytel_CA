<?php $base = "/Querytel_CA"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - Querytel Inc</title>
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
          Let’s connect — your solution starts here.
        </h1>
        <p class="mt-6 text-lg text-gray-600">
          Reach out to us across Canada for IT, cloud, and managed service
          inquiries. We're always ready to talk tech or solve real-world
          problems.
        </p>
        <div class="mt-8 flex gap-4 opacity-0 animate-fadeIn delay-500">
          <a href="#contact"
            class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">
            Send Message
          </a>
          <a href="#map"
            class="inline-block border border-neutral-900 text-neutral-900 px-6 py-3 rounded hover:bg-neutral-100 transition">
            Find Us
          </a>
        </div>
      </div>

      <!-- Image Column -->
      <div class="opacity-0 animate-fadeInRight delay-200">
        <img src="<?= $base ?>/assets/images/undraw_chat-with-ai_ir62.png" alt="Chat With AI Illustration"
          class="w-full max-w-md mx-auto" />

      </div>
    </div>
  </section>

  <section class="bg-white py-24">
    <!-- HERO -->
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-5xl font-bold text-neutral-900">
        Let’s Talk
      </h1>
      <p class="mt-4 text-gray-600 text-lg">
        Reach out to us at any of our locations across Canada.
      </p>
    </div>
  </section>

  <!-- CONTACT CARDS -->
  <section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 lg:grid-cols-3 gap-10">
      <!-- Toronto -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition group">
        <div class="flex items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-blue-600 transition-transform transform group-hover:scale-125 group-hover:text-blue-800"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17.657 16.657L13.414 12.414M15 10a3 3 0 11-6 0 3 3 0 016 0zm9 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <h2 class="text-xl font-semibold">Toronto HQ</h2>
        </div>
        <p class="text-gray-600 text-sm mb-2">
          7025 Tomken Road, Suite #244<br />
          Mississauga, ON L5S 1R6
        </p>
        <p class="text-sm text-gray-500 mb-4">
          Mon – Fri · 8:00 a.m. – 5:00 p.m. EST
        </p>
        <p class="text-gray-700 font-medium">Email:</p>
        <p class="text-sm">callback@querytel.com</p>
      </div>

      <!-- Phone Directory -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition group">
        <div class="flex items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-green-600 transition-transform transform group-hover:scale-125 group-hover:text-green-800"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5h2l3.6 7.59-1.35 2.44a1 1 0 00.91 1.48H19v-2H9.42a.25.25 0 01-.23-.16L9.2 14h7.55a1 1 0 00.96-.74l3-10A1 1 0 0019.8 2H5.21l-.94-2H1v2h2l3.6 7.59L5.25 13h14.1l-1.4 5H6v2h12a1 1 0 001-1v-1a1 1 0 00-.99-1H7.42l.58-1.06a.25.25 0 00.02-.22L7 14.1" />
          </svg>
          <h2 class="text-xl font-semibold">Phone Directory</h2>
        </div>
        <ul class="text-sm text-gray-700 space-y-1">
          <li><strong>Toll-Free:</strong> +1-844-447-8379</li>
          <li><strong>GTA:</strong> 416-477-1380</li>
          <li><strong>Montreal:</strong> 514-257-5250</li>
          <li><strong>Halifax:</strong> 902-701-4239</li>
          <li><strong>Calgary:</strong> 403-691-1018</li>
          <li><strong>Edmonton:</strong> 780-628-2868</li>
          <li><strong>Fort McMurray:</strong> 587-557-1278</li>
        </ul>
      </div>

      <!-- Calgary -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition group">
        <div class="flex items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-red-600 transition-transform transform group-hover:scale-125 group-hover:text-red-800"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 9V7a4 4 0 00-8 0v2a4 4 0 00-4 4v4h16v-4a4 4 0 00-4-4z" />
          </svg>
          <h2 class="text-xl font-semibold">Calgary Office</h2>
        </div>
        <p class="text-gray-600 text-sm mb-2">
          144 – 4 Avenue SW, Suite #1600<br />
          Sun Life Plaza West Tower<br />
          Calgary, AB T2P 3N4
        </p>
        <p class="text-sm text-gray-500">
          Mon – Fri · 9:00 a.m. – 3:00 p.m. MST
        </p>
      </div>

      <!-- Edmonton -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition group">
        <div class="flex items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-yellow-600 transition-transform transform group-hover:scale-125 group-hover:text-yellow-800"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M17 20h5V4H2v16h5m10 0V4m0 0H7v16h10z" />
          </svg>
          <h2 class="text-xl font-semibold">Edmonton Office</h2>
        </div>
        <p class="text-gray-600 text-sm mb-2">
          101 Street NW, 34th Floor, Suite #10180<br />
          Edmonton, AB T5J 3S4
        </p>
        <p class="text-sm text-gray-500">
          Mon – Fri · 9:00 a.m. – 3:00 p.m. MST
        </p>
      </div>

      <!-- Halifax -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition group">
        <div class="flex items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-indigo-600 transition-transform transform group-hover:scale-125 group-hover:text-indigo-800"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 11c0 1.38-1.12 2.5-2.5 2.5S7 12.38 7 11s1.12-2.5 2.5-2.5S12 9.62 12 11zm5 0c0 1.38-1.12 2.5-2.5 2.5S12 12.38 12 11s1.12-2.5 2.5-2.5S17 9.62 17 11zm5 0c0 1.38-1.12 2.5-2.5 2.5S17 12.38 17 11s1.12-2.5 2.5-2.5S22 9.62 22 11z" />
          </svg>
          <h2 class="text-xl font-semibold">Halifax Office</h2>
        </div>
        <p class="text-gray-600 text-sm mb-2">
          99 Wyse Rd, Suite #1100<br />
          Dartmouth, NS B3A 4S5
        </p>
        <p class="text-sm text-gray-500">
          Mon – Fri · 9:00 a.m. – 6:00 p.m. AST
        </p>
      </div>

      <!-- Support -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition group">
        <div class="flex items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-purple-600 transition-transform transform group-hover:scale-125 group-hover:text-purple-800"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M18 13a4 4 0 01-4 4H8l-4 4V5a2 2 0 012-2h12a2 2 0 012 2v8z" />
          </svg>
          <h2 class="text-xl font-semibold">Support & Helpdesk</h2>
        </div>
        <p class="text-gray-600 text-sm mb-2">
          Mon–Fri · 9:00 a.m. – 6:00 p.m.
        </p>
        <p class="text-gray-700 font-medium">Portal:</p>
        <p class="text-sm mb-2">
          <a href="https://helpdesk.querytel.com/portal/en/home" class="text-blue-600 hover:underline">
            helpdesk.querytel.com
          </a>
        </p>
        <p class="text-gray-700 font-medium">Email:</p>
        <p class="text-sm">support@querytel.com</p>
      </div>
    </div>
  </section>

  <!-- MAP EMBED -->
  <section class="py-16 bg-white" id="map">
    <div class="w-full">
      <div class="w-full aspect-video overflow-hidden">
        <section class="py-16 bg-white">
          <h2 class="text-2xl font-bold text-neutral-900 mb-6 text-center">
            Find Us on the Map
          </h2>
          <div class="w-full">
            <div class="w-full aspect-video overflow-hidden">
              <iframe id="map-iframe"
                data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d369421.4094649415!2d-79.68477!3d43.666791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3f02ae724ab3%3A0x5d9af5abd43879f8!2s7025%20Tomken%20Rd%2C%20Mississauga%2C%20ON%20L5T%202J8%2C%20Canada!5e0!3m2!1sen!2sus!4v1754486829326!5m2!1sen!2sus"
                width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </section>
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
  <?php include("footer.php"); ?>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const iframe = document.querySelector("#map-iframe");
      if (!iframe) return;

      const observer = new IntersectionObserver(
        (entries) => {
          if (entries[0].isIntersecting) {
            iframe.src = iframe.dataset.src;
            observer.disconnect();
          }
        },
        { rootMargin: "200px" }
      );

      observer.observe(iframe);
    });
  </script>
</body>

</html>