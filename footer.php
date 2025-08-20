<footer class="bg-[#f3f3f3] text-sm text-neutral-600 border-t border-neutral-200">
    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-4 gap-10">
        <!-- Column 1: Logo + Brief + NAP -->
        <div>
            <img src="https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png"
                alt="QueryTel Logo" class="h-10 mb-4" loading="lazy" />
            <p>Empowering Canadian businesses with reliable managed IT, cybersecurity, and scalable infrastructure since
                1995.</p>
            <div class="mt-4 space-y-1">
                <p><strong>HQ:</strong> 7025 Tomken Road, Suite 244, Mississauga, ON L5S 1R6, Canada</p>
                <p><strong>Hours:</strong> Mon–Sat 8:00–17:00 (local)</p>
                <p><strong>Tel:</strong> <a href="tel:+18444478379" class="hover:underline">+1-844-447-8379</a></p>
                <p><strong>Email:</strong> <a href="mailto:callback@querytel.com"
                        class="hover:underline">callback@querytel.com</a></p>
            </div>
        </div>

        <!-- Column 2: Main Pages (exactly as navbar top-level) -->
        <div>
            <h4 class="text-neutral-800 font-semibold mb-3">Pages</h4>
            <ul class="space-y-2">
                <li><a href="<?= $base ?>/" class="hover:underline">Home</a></li>
                <li><a href="<?= $base ?>/it-services-cybersecurity-cloud-solutions/" class="hover:underline">About
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
                <li><a href="<?= $base ?>/fortianalyzer/" class="hover:underline">FortiAnalyzer</a></li>
                <li><a href="<?= $base ?>/fortinetfirewalls/" class="hover:underline">Fortinet Firewalls</a></li>
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
      "<?= $base ?>/it-services-cybersecurity-cloud-solutions/",
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
      "<?= $base ?>/fortianalyzer/",
      "<?= $base ?>/fortinetfirewalls/",
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