<footer class="bg-[#f3f3f3] text-sm text-neutral-600 border-t border-neutral-200">
    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-4 gap-10">

        <!-- Column 1: Logo + Brief + NAP + Social Media -->
        <div>
            <img src="<?= $base . '/assets/images/querytel.png' ?>" alt="QueryTel Logo" class="h-10 mb-4"
                loading="lazy" />


            <b>QueryTel</b> <br>
            <p>Empowering businesses with reliable managed IT, cybersecurity, and scalable infrastructure since
                1995.</p>

            <div class="mt-4 space-y-1">
                <p><strong>Address:</strong> 7025 Tomken Road, Suite 244, Mississauga, ON L5S 1R6, Canada</p>
                <p><strong>Hours:</strong> Mon–Fri 8:00–17:00 (local)</p>
                <p><strong>Tel:</strong> <a href="tel:+18444478379" class="hover:underline">+1-844-447-8379</a></p>
                <p><strong>Email:</strong> <a href="mailto:callback@querytel.com"
                        class="hover:underline">callback@querytel.com</a></p>
            </div>

            <!-- Social Media -->

            <div class="mt-6">
                <h4 class="text-neutral-800 font-semibold mb-2">Follow Us</h4>
                <div class="flex space-x-4">

                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/company/querytel-inc" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-blue-700 transition" aria-label="LinkedIn">
                        <i class="fab fa-linkedin fa-lg"></i>
                    </a>

                    <!-- X / Twitter -->
                    <a href="https://x.com/askquerytel" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-black transition" aria-label="X">
                        <i class="fab fa-x-twitter fa-lg"></i>
                    </a>

                    <!-- Instagram -->
                    <a href="https://www.instagram.com/askquerytel" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-pink-600 transition" aria-label="Instagram">
                        <i class="fab fa-instagram fa-lg"></i>
                    </a>

                    <!-- Facebook -->
                    <a href="https://www.facebook.com/querytel" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-blue-600 transition" aria-label="Facebook">
                        <i class="fab fa-facebook-f fa-lg"></i>
                    </a>
                    <a href="https://www.youtube.com/@querytel9280" target="_blank" rel="noopener noreferrer"
                        class="text-neutral-500 hover:text-red-600 transition" aria-label="YouTube">
                        <i class="fab fa-youtube fa-lg"></i>
                    </a>

                </div>
            </div>

        </div>



        <!-- Column 2: Main Pages (exactly as navbar top-level) -->
        <div>
            <h4 class="text-neutral-800 font-semibold mb-3">Pages</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/" class="hover:underline">Home</a></li>
                <li><a href="<?= $base ?>/aboutus/" class="hover:underline">About
                        Us</a></li>
                <li><a href="<?= $base ?>/cloud-security/" class="hover:underline">Cloud Security</a></li>
                <li><a href="<?= $base ?>/warehousing-solutions-and-network-infrastructure/"
                        class="hover:underline">Warehousing</a></li>
                <li><a href="<?= $base ?>/services/" class="hover:underline">Services</a></li>
                <li><a href="<?= $base ?>/contactus/" class="hover:underline">Contact</a></li>
                <li><a href="<?= $base ?>/careers/" class="hover:underline">Careers</a></li>
            </ul>
        </div>

        <!-- Column 3: Solutions (matches dropdown) -->
        <div>
            <h4 class="text-neutral-800 font-semibold mb-3">Solutions</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/managedservices/" class="hover:underline">Managed Services</a></li>
                <li><a href="<?= $base ?>/officeconnect/" class="hover:underline">Office Connect</a></li>
                <li><a href="<?= $base ?>/officeconnectplans/" class="hover:underline">Office Connect Plans</a></li>
            </ul>

            <h5 class="mt-4 font-semibold text-neutral-800">Cyber Cloud Services</h5>
            <ul class="mt-2 space-y-2">
                <li><a href="<?= $base ?>/cyberbackup/" class="hover:underline">Cyber Backup</a></li>
                <li><a href="<?= $base ?>/cyberprotect/" class="hover:underline">Cyber Protect</a></li>
                <li><a href="<?= $base ?>/cybernotary/" class="hover:underline">Cyber Notary</a></li>
                <li><a href="<?= $base ?>/cyberfiles/" class="hover:underline">Cyber Files</a></li>
                <li><a href="<?= $base ?>/disasterrecoverycloud/" class="hover:underline">Disaster Recovery Cloud</a>
                </li>
            </ul>
        </div>

        <!-- Column 4: Cybersecurity · Industry · Support (all from navbar) -->
        <div>
            <h4 class="text-neutral-800 font-semibold mb-3">Cybersecurity</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/malwarebytesforhome/" class="hover:underline">Malwarebytes for Home</a></li>
                <li><a href="<?= $base ?>/malwarebytesforbusiness/" class="hover:underline">Malwarebytes for
                        Business</a></li>
                <li><a href="<?= $base ?>/soc24/" class="hover:underline">SOC 24</a></li>
                <!-- <li><a href="<?= $base ?>/fortinetfirewalls/" class="hover:underline">Fortinet Firewalls</a></li> -->
                <li><a href="<?= $base ?>/sdwanassessment/" class="hover:underline">SD-WAN Assessment</a></li>
            </ul>

            <h4 class="text-neutral-800 font-semibold mt-6 mb-3">Industry</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/retail/" class="hover:underline">Retail</a></li>
                <li><a href="<?= $base ?>/healthcare/" class="hover:underline">Healthcare</a></li>
                <li><a href="<?= $base ?>/generaloffice/" class="hover:underline">General Office</a></li>
            </ul>

            <h4 class="text-neutral-800 font-semibold mt-6 mb-3">Support</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/remotesupport/" class="hover:underline">Remote Support</a></li>
                <li><a href="https://helpdesk.querytel.com/portal/en/home" target="_blank" rel="noopener noreferrer"
                        class="hover:underline">Support Portal</a></li>
                <li><a href="https://cpxsp1-bell.solutions.sip.bell.ca/Login/" target="_blank" rel="noopener noreferrer"
                        class="hover:underline">Office Connect C-Portal</a></li>
            </ul>
        </div>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bottom bar -->
    <div class="border-t border-neutral-200 text-center text-xs py-6 bg-[#eeeeee]">
        &copy; 2025 QueryTel Inc. All rights reserved.
    </div>

    <!-- SiteNavigationElement JSON-LD (mirrors navbar items) -->
    <script type="application/ld+json">
  {
    "@context":"https://schema.org",
    "@type":"SiteNavigationElement",
    "name":[
      "Home","About Us","Cloud Security","Warehousing","Services",
      "Managed Services","Office Connect","Office Connect Plans",
      "Cyber Backup","Cyber Protect","Cyber Notary","Cyber Files","Disaster Recovery Cloud",
      "Malwarebytes for Home","Malwarebytes for Business","FortiAnalyzer","Fortinet Firewalls","SD-WAN Assessment",
      "Retail","Healthcare","General Office","Remote Support","Contact","Careers"
    ],
    "url":[
      "<?= $base ?>/",
      "<?= $base ?>/aboutus/",
      "<?= $base ?>/cloud-security/",
      "<?= $base ?>/warehousing-solutions-and-network-infrastructure/",
      "<?= $base ?>/services/",
      "<?= $base ?>/managedservices/",
      "<?= $base ?>/officeconnect/",
      "<?= $base ?>/officeconnectplans/",
      "<?= $base ?>/cyberbackup/",
      "<?= $base ?>/cyberprotect/",
      "<?= $base ?>/cybernotary/",
      "<?= $base ?>/cyberfiles/",
      "<?= $base ?>/disasterrecoverycloud/",
      "<?= $base ?>/malwarebytesforhome/",
      "<?= $base ?>/malwarebytesforbusiness/",
      "<?= $base ?>/soc24/",
      
      "<?= $base ?>/sdwanassessment/",
      "<?= $base ?>/retail/",
      "<?= $base ?>/healthcare/",
      "<?= $base ?>/generaloffice/",
      "<?= $base ?>/remotesupport/",
      "<?= $base ?>/contactus/",
      "<?= $base ?>/careers/"
    ]
  }
  </script>
</footer>