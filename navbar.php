<?php $base = "/Querytel_CA"; ?>
<header class="border-b border-gray-200 bg-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <a href="<?= $base ?>/" class="flex items-center gap-2">
            <img src="https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png"
                alt="QueryTel Logo" class="h-12 w-auto" />
        </a>

        <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700 items-center">
            <a href="<?= $base ?>/index" class="hover:text-black transition">Home</a>
            <a href="<?= $base ?>/it-services-cybersecurity-cloud-solutions" class="hover:text-black transition">About
                Us</a>
            <a href="<?= $base ?>/cloud-security" class="hover:text-black transition">Cloud Security</a>
            <a href="<?= $base ?>/warehousing-solutions-and-network-infrastructure"
                class="hover:text-black transition">Warehousing</a>

            <!-- Dropdown: Industry -->
            <div class="relative group">
                <button class="hover:text-black transition">Industry</button>
                <div
                    class="absolute left-0 top-full min-w-[220px] mt-2 p-2 bg-white shadow-lg rounded z-50 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200">
                    <a href="<?= $base ?>/retail" class="block px-4 py-2 text-sm hover:bg-gray-100">Retail</a>
                    <a href="<?= $base ?>/healthcare" class="block px-4 py-2 text-sm hover:bg-gray-100">Healthcare</a>
                    <a href="<?= $base ?>/generaloffice" class="block px-4 py-2 text-sm hover:bg-gray-100">General
                        Office</a>
                </div>
            </div>

            <!-- Dropdown: Solutions -->
            <div class="relative group">
                <button class="hover:text-black transition">Solutions</button>
                <div
                    class="absolute left-0 top-full min-w-[240px] mt-2 p-2 bg-white shadow-lg rounded z-50 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200">
                    <a href="<?= $base ?>/managedservices" class="block px-4 py-2 text-sm hover:bg-gray-100">Managed
                        Services</a>
                    <a href="<?= $base ?>/officeconnect" class="block px-4 py-2 text-sm hover:bg-gray-100">Office
                        Connect</a>
                    <a href="<?= $base ?>/officeconnectplans" class="block px-4 py-2 text-sm hover:bg-gray-100">Office
                        Connect Plans</a>
                    <a href="<?= $base ?>/cybercloudservices" class="block px-4 py-2 text-sm hover:bg-gray-100">Cyber
                        Cloud Services</a>
                    <a href="<?= $base ?>/malwarebytes" class="block px-4 py-2 text-sm hover:bg-gray-100">Cyber
                        Security</a>
                </div>
            </div>

            <!-- Dropdown: More -->
            <div class="relative group">
                <button class="hover:text-black transition">More</button>
                <div
                    class="absolute left-0 top-full min-w-[220px] mt-2 p-2 bg-white shadow-lg rounded z-50 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200">
                    <a href="<?= $base ?>/thermographiccamera"
                        class="block px-4 py-2 text-sm hover:bg-gray-100">Thermographic Camera</a>
                    <a href="<?= $base ?>/intrusionprevension"
                        class="block px-4 py-2 text-sm hover:bg-gray-100">Intrusion Prevention</a>
                    <a href="<?= $base ?>/careers" class="block px-4 py-2 text-sm hover:bg-gray-100">Careers</a>
                </div>
            </div>

            <!-- Dropdown: Support -->
            <div class="relative group">
                <button class="hover:text-black transition">Support</button>
                <div
                    class="absolute left-0 top-full min-w-[220px] mt-2 p-2 bg-white shadow-lg rounded z-50 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200">
                    <a href="<?= $base ?>/remotesupport" class="block px-4 py-2 text-sm hover:bg-gray-100">Remote
                        Support</a>
                    <a href="https://helpdesk.querytel.com/portal/en/home"
                        class="block px-4 py-2 text-sm hover:bg-gray-100">Support Portal</a>
                    <a href="https://cpxsp1-bell.solutions.sip.bell.ca/Login/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100">Office Connect C-Portal</a>
                </div>
            </div>

            <a href="<?= $base ?>/contactus" class="hover:text-black transition">Contact</a>
        </nav>

        <!-- Mobile Toggle Button -->
        <div class="md:hidden">
            <button onclick="toggleSidebar()" class="text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</header>