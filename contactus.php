<?php $base = "https://itcold.com" ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Contact QueryTel Inc — Sales & Support in North America</title>
  <meta name="description"
    content="Reach QueryTel Inc for managed IT, cloud, and cybersecurity. Call Toronto HQ or open a support ticket. Mon–Fri, 8am–5pm. North America-wide coverage." />
  <meta name="robots" content="index,follow,max-image-preview:large" />
  <link rel="canonical" href="https://querytel.com/contactus/" />
  <link rel="alternate" hreflang="en-ca" href="https://querytel.com/contactus/" />
  <meta name="theme-color" content="#0f172a" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Contact QueryTel Inc — Sales & Support in North America" />
  <meta property="og:description"
    content="Speak with a local expert or reach our helpdesk. Toronto HQ and North America-wide service." />
  <meta property="og:url" content="https://querytel.com/contactus/" />
  <meta property="og:site_name" content="QueryTel Inc." />
  <meta property="og:locale" content="en_CA" />
  <meta property="og:image"
    content="https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Contact QueryTel Inc — Sales & Support in North America" />
  <meta name="twitter:description" content="Call our Toronto HQ or open a support ticket. Mon–Fri, 8am–5pm." />
  <meta name="twitter:image"
    content="https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png" />

  <!-- Icons -->
  <link rel="icon" href="/favicon.ico" sizes="any" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

  <!-- Performance hints -->
  <link rel="preconnect" href="https://cdn.tailwindcss.com" crossorigin>
  <link rel="dns-prefetch" href="https://cdn.tailwindcss.com">

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Tailwind config (kept) -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          keyframes: {
            fadeInRight: { "0%": { opacity: 0, transform: "translateX(50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
            fadeInLeft: { "0%": { opacity: 0, transform: "translateX(-50px)" }, "100%": { opacity: 1, transform: "translateX(0)" } },
            fadeIn: { "0%": { opacity: 0 }, "100%": { opacity: 1 } }
          },
          animation: {
            fadeInRight: "fadeInRight 0.8s ease-out forwards",
            fadeInLeft: "fadeInLeft 0.8s ease-out forwards",
            fadeIn: "fadeIn 1s ease-out forwards"
          }
        }
      }
    };
  </script>

  <!-- Schema: Organization -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"Organization",
    "@id":"https://querytel.com/#org",
    "name":"QueryTel Inc.",
    "url":"https://querytel.com/",
    "logo":"https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png",
    "sameAs":["https://www.linkedin.com/company/querytel"]
  }
  </script>

  <!-- Schema: ContactPage -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"ContactPage",
    "@id":"https://querytel.com/contactus/#contactpage",
    "url":"https://querytel.com/contactus/",
    "name":"Contact QueryTel Inc",
    "inLanguage":"en-CA",
    "about":{"@id":"https://querytel.com/#org"},
    "primaryImageOfPage":{"@type":"ImageObject","url":"https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png"},
    "lastReviewed":"2025-08-18",
    "breadcrumb":{"@id":"https://querytel.com/contactus/#breadcrumb"}
  }
  </script>

  <!-- Schema: BreadcrumbList -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"BreadcrumbList",
    "@id":"https://querytel.com/contactus/#breadcrumb",
    "itemListElement":[
      {"@type":"ListItem","position":1,"name":"Home","item":"https://querytel.com/"},
      {"@type":"ListItem","position":2,"name":"Contact Us","item":"https://querytel.com/contactus/"}
    ]
  }
  </script>

  <!-- Schema: LocalBusiness (HQ info for trust) -->
  <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"LocalBusiness",
    "@id":"https://querytel.com/#hq",
    "name":"QueryTel Inc — Toronto HQ",
    "url":"https://querytel.com/",
    "image":"https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png",
    "telephone":"+1-416-477-1380",
    "address":{
      "@type":"PostalAddress",
      "streetAddress":"7025 Tomken Road, Suite 244",
      "addressLocality":"Mississauga",
      "addressRegion":"ON",
      "postalCode":"L5S 1R6",
      "addressCountry":"CA"
    },
    "openingHoursSpecification":[{
      "@type":"OpeningHoursSpecification",
      "dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens":"08:00",
      "closes":"17:00"
    }],
    "parentOrganization":{"@id":"https://querytel.com/#org"}
  }
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
          Let’s connect <br> Your solution starts here.
        </h1>
        <p class="mt-6 text-lg text-gray-600">
          Contact us across North America for IT, cloud, and managed service inquiries. We're always ready to discuss
          tech or
          solve real-world problems.
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
        Reach out to us at any of our locations across North America.
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
          <h2 class="text-xl font-semibold">Toronto Office</h2>
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
          Mon – Fri · 9:00 a.m. – 5:00 p.m. MST
        </p>
        <p class="text-gray-700 font-medium mt-2">Email:</p>
        <p class="text-sm">callback@querytel.com</p>
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
          Mon – Fri · 9:00 a.m. – 5:00 p.m. MST
        </p>
        <p class="text-gray-700 font-medium mt-2">Email:</p>
        <p class="text-sm">callback@querytel.com</p>
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
          Mon – Fri · 9:00 a.m. – 5:00 p.m. AST
        </p>
        <p class="text-gray-700 font-medium mt-2">Email:</p>
        <p class="text-sm">callback@querytel.com</p>
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
        <!-- <p class="text-gray-600 text-sm mb-2">
          Mon–Fri · 9:00 a.m. – 6:00 p.m.
        </p> -->
        <p class="text-gray-700 font-medium">Phone</p>
        <p class="text-sm mb-2 text-gray-700">+1-844-447-8379</p>
        <p class="text-gray-700 font-medium">Portal:</p>
        <p class="text-sm mb-2">
          <a href="https://helpdesk.querytel.com/portal/en/home" class="text-blue-600 hover:underline">
            helpdesk.querytel.com
          </a>
        </p>
        <p class="text-gray-700 font-medium">Email:</p>
        <p class="text-sm">support@querytel.com</p>
      </div>
      <!-- USA Office -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition group">
        <div class="flex items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-red-500 transition-transform transform group-hover:scale-125 group-hover:text-red-700"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 4a1 1 0 011-1h5l2 2h8a1 1 0 011 1v2H3V4zM3 8h18v11a1 1 0 01-1 1H4a1 1 0 01-1-1V8z" />
          </svg>
          <h2 class="text-xl font-semibold">USA Office</h2>
        </div>
        <p class="text-gray-600 text-sm mb-2">
          100 Park Avenue, Suite #1600<br />
          New York, NY 10017, USA
        </p>
        <p class="text-sm text-gray-500 mb-4">
          Mon – Fri · 9:00 a.m. – 5:00 p.m. EST
        </p>
        <p class="text-gray-700 font-medium">Email:</p>
        <p class="text-sm">callback@querytel.com</p>
      </div>

      <!-- UAE Office -->
      <div class="bg-white p-6 rounded-lg shadow hover:shadow-md transition group">
        <div class="flex items-center gap-3 mb-4">
          <svg xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 text-amber-500 transition-transform transform group-hover:scale-125 group-hover:text-amber-700"
            fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M12 2l2 7h7l-5.5 4.5L17 22l-5-3.5L7 22l1.5-8.5L3 9h7l2-7z" />
          </svg>
          <h2 class="text-xl font-semibold">UAE Office</h2>
        </div>
        <p class="text-gray-600 text-sm mb-2">
          Zentral Building <br />
          World Trade Centre<br />
          Dubai, UAE
        </p>
        <p class="text-sm text-gray-500 mb-4">
          Sun – Thu · 9:00 a.m. – 5:00 p.m. GST
        </p>
        <p class="text-gray-700 font-medium">Email:</p>
        <p class="text-sm">callback@querytel.com</p>
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
                data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d369421.4094649415!2d-79.68477!3d43.666791!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3f02ae724ab3%3A0x5d9af5abd43879f8!2s7025%20Tomken%20Rd%2C%20Mississauga%2C%20ON%20L5T%202J8%2C%20North America!5e0!3m2!1sen!2sus!4v1754486829326!5m2!1sen!2sus"
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