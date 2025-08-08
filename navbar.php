<?php $base = "/Querytel_CA"; ?>
<header class="border-b border-gray-200 bg-white sticky top-0 z-50">

    <style>
        .nav-hover-group {
            position: relative;
        }

        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.2s ease, transform 0.2s ease;
            transform: translateY(10px);
            z-index: 999;
        }

        .nav-hover-group.show .dropdown {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateY(0);
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.nav-hover-group').forEach(group => {
                let timeout;

                group.addEventListener('mouseenter', () => {
                    clearTimeout(timeout);
                    group.classList.add('show');
                });

                group.addEventListener('mouseleave', () => {
                    timeout = setTimeout(() => {
                        group.classList.remove('show');
                    }, 200); // ← Delay before closing
                });

                const dropdown = group.querySelector('.dropdown');
                if (dropdown) {
                    dropdown.addEventListener('mouseenter', () => {
                        clearTimeout(timeout);
                        group.classList.add('show');
                    });
                    dropdown.addEventListener('mouseleave', () => {
                        timeout = setTimeout(() => {
                            group.classList.remove('show');
                        }, 200);
                    });
                }
            });
        });
    </script>


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

            <div class="nav-hover-group">
                <button class="hover:text-black transition">Industry</button>
                <div class="dropdown bg-white shadow-lg rounded min-w-[220px] mt-2 p-2">
                    <a href="<?= $base ?>/retail" class="block px-4 py-2 text-sm hover:bg-gray-100">Retail</a>
                    <a href="<?= $base ?>/healthcare" class="block px-4 py-2 text-sm hover:bg-gray-100">Healthcare</a>
                    <a href="<?= $base ?>/generaloffice" class="block px-4 py-2 text-sm hover:bg-gray-100">General
                        Office</a>
                </div>
            </div>

            <div class="nav-hover-group">
                <button class="hover:text-black transition">Solutions</button>
                <div class="dropdown bg-white shadow-lg rounded min-w-[240px] mt-2 p-2">
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

            <div class="nav-hover-group">
                <button class="hover:text-black transition">More</button>
                <div class="dropdown bg-white shadow-lg rounded min-w-[220px] mt-2 p-2">
                    <a href="<?= $base ?>/thermographiccamera"
                        class="block px-4 py-2 text-sm hover:bg-gray-100">Thermographic Camera</a>
                    <a href="<?= $base ?>/intrusionprevension"
                        class="block px-4 py-2 text-sm hover:bg-gray-100">Intrusion Prevention</a>
                    <a href="<?= $base ?>/careers" class="block px-4 py-2 text-sm hover:bg-gray-100">Careers</a>
                </div>
            </div>

            <div class="nav-hover-group">
                <button class="hover:text-black transition">Support</button>
                <div class="dropdown bg-white shadow-lg rounded min-w-[220px] mt-2 p-2">
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

        <div class="md:hidden">
            <button onclick="toggleSidebar()" class="text-gray-700 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>
</header>