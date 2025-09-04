<?php $base = "https://itcold.com" ?>
<header class="border-b border-gray-200 bg-white sticky top-0 z-50">
    <style>
        :root {
            --dropdown-ease: 150ms;
            --dropdown-delay: 260ms;
            --hover-bridge: 12px;
        }

        .nav-hover-group {
            position: relative;
        }

        .dropdown {
            position: absolute;
            top: calc(100% + 0px);
            left: 0;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transform: translateY(10px);
            transition: opacity var(--dropdown-ease) ease, transform var(--dropdown-ease) ease, visibility var(--dropdown-ease) ease;
            z-index: 50;
        }

        .dropdown-right {
            left: 100%;
            top: 0;
            margin-left: .5rem;
        }

        .nav-hover-group::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            height: var(--hover-bridge);
        }

        .dropdown .nav-hover-group::after {
            left: 100%;
            top: 0;
            width: var(--hover-bridge);
            height: 100%;
        }

        .nav-hover-group.open>.dropdown {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateY(0);
        }

        @media (hover:hover) and (pointer:fine) {
            .nav-hover-group:hover>.dropdown {
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: translateY(0);
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .dropdown {
                transition: none;
                transform: none;
            }
        }

        .focus-ring:focus {
            outline: 2px solid #111827;
            outline-offset: 2px;
            border-radius: 6px;
        }
    </style>

    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center" role="navigation" aria-label="Main">
        <a href="<?= $base ?>/" class="flex items-center gap-2">
            <img src="https://querytel.com/wp-content/uploads/2021/09/cropped-QueryTel-Logo-350-x-100.png"
                alt="QueryTel Logo" class="h-12 w-auto" />
        </a>

        <!-- Desktop Nav -->
        <nav class="hidden md:flex space-x-6 text-sm font-medium text-gray-700 items-center" role="menubar"
            aria-label="Primary">
            <a role="menuitem" href="<?= $base ?>/" class="hover:text-black transition focus-ring">Home</a>
            <a role="menuitem" href="<?= $base ?>/aboutus/" class="hover:text-black transition focus-ring">About Us</a>
            <a role="menuitem" href="<?= $base ?>/cloud-security/" class="hover:text-black transition focus-ring">Cloud
                Security</a>
            <a role="menuitem" href="<?= $base ?>/warehousing-solutions-and-network-infrastructure/"
                class="hover:text-black transition focus-ring">Warehousing</a>
            <a role="menuitem" href="<?= $base ?>/devandmarketing/" class="hover:text-black transition focus-ring">Dev &
                Marketing</a>

            <div class="nav-hover-group">
                <button type="button" class="hover:text-black transition focus-ring" aria-haspopup="true"
                    aria-expanded="false" aria-controls="nav-solutions-menu">Solutions</button>
                <div id="nav-solutions-menu" class="dropdown bg-white shadow-lg rounded min-w-[240px] mt-2 p-2"
                    role="menu" aria-label="Solutions">
                    <a role="menuitem" href="<?= $base ?>/managedservices/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Managed Services</a>
                    <a role="menuitem" href="<?= $base ?>/officeconnect/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Office Connect</a>
                    <a role="menuitem" href="<?= $base ?>/officeconnectplans/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Office Connect Plans</a>

                    <div class="nav-hover-group">
                        <button type="button"
                            class="w-full flex items-center justify-between px-4 py-2 text-sm hover:bg-gray-100 focus-ring"
                            aria-haspopup="true" aria-expanded="false" aria-controls="nav-cybercloud-menu">
                            Cyber Cloud Services
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="nav-cybercloud-menu"
                            class="dropdown dropdown-right bg-white shadow-lg rounded min-w-[240px] p-2" role="menu"
                            aria-label="Cyber Cloud Services">
                            <a role="menuitem" href="<?= $base ?>/cyberbackup/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Cyber Backup</a>
                            <a role="menuitem" href="<?= $base ?>/cyberprotect/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Cyber Protect</a>
                            <a role="menuitem" href="<?= $base ?>/cybernotary/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Cyber Notary</a>
                            <a role="menuitem" href="<?= $base ?>/cyberfiles/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Cyber Files</a>
                            <a role="menuitem" href="<?= $base ?>/disasterrecoverycloud/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Disaster Recovery Cloud</a>
                        </div>
                    </div>

                    <div class="nav-hover-group">
                        <button type="button"
                            class="w-full flex items-center justify-between px-4 py-2 text-sm hover:bg-gray-100 focus-ring"
                            aria-haspopup="true" aria-expanded="false" aria-controls="nav-cybersec-menu">
                            Cybersecurity
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div id="nav-cybersec-menu"
                            class="dropdown dropdown-right bg-white shadow-lg rounded min-w-[215px] p-2" role="menu"
                            aria-label="Cybersecurity">
                            <div class="nav-hover-group">
                                <button type="button"
                                    class="w-full flex items-center justify-between px-4 py-2 text-sm hover:bg-gray-100 focus-ring"
                                    aria-haspopup="true" aria-expanded="false" aria-controls="nav-mb-menu">
                                    Malwarebytes
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <div id="nav-mb-menu"
                                    class="dropdown dropdown-right bg-white shadow-lg rounded min-w-[218px] p-2"
                                    role="menu" aria-label="Malwarebytes">
                                    <a role="menuitem" href="<?= $base ?>/malwarebytesforhome/"
                                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Malwarebytes for
                                        Home</a>
                                    <a role="menuitem" href="<?= $base ?>/malwarebytesforbusiness/"
                                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Malwarebytes for
                                        Business</a>
                                </div>
                            </div>
                            <a role="menuitem" href="<?= $base ?>/soc24/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">SOC 24</a>
                            <!-- <a role="menuitem" href="<?= $base ?>/fortinetfirewalls/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Fortinet Firewalls</a> -->
                            <a role="menuitem" href="<?= $base ?>/sdwanassessment/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">SD-WAN Assessment</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a role="menuitem" href="<?= $base ?>/SaaS/" class="hover:text-black transition focus-ring">SaaS</a> -->
            <a role="menuitem" href="<?= $base ?>/services/" class="hover:text-black transition focus-ring">Services</a>
            <a role="menuitem" href="<?= $base ?>/futureglimpse/" class="hover:text-black transition focus-ring">Future
                Glimpses</a>

            <div class="nav-hover-group">
                <button type="button" class="hover:text-black transition focus-ring" aria-haspopup="true"
                    aria-expanded="false" aria-controls="nav-industry-menu">Industry</button>
                <div id="nav-industry-menu" class="dropdown bg-white shadow-lg rounded min-w-[220px] mt-2 p-2"
                    role="menu" aria-label="Industry">
                    <a role="menuitem" href="<?= $base ?>/retail/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Retail</a>
                    <a role="menuitem" href="<?= $base ?>/healthcare/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Healthcare</a>
                    <a role="menuitem" href="<?= $base ?>/generaloffice/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">General Office</a>
                </div>
            </div>

            <div class="nav-hover-group">
                <button type="button" class="hover:text-black transition focus-ring" aria-haspopup="true"
                    aria-expanded="false" aria-controls="nav-more-menu">More</button>
                <div id="nav-more-menu" class="dropdown bg-white shadow-lg rounded min-w-[220px] mt-2 p-2" role="menu"
                    aria-label="More">
                    <a role="menuitem" href="<?= $base ?>/intrusionprevension/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Intrusion Prevention</a>
                    <a role="menuitem" href="<?= $base ?>/remotesupport/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Remote Support</a>
                    <a role="menuitem" href="<?= $base ?>/careers/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Careers</a>

                </div>
            </div>


            <a role="menuitem" href="<?= $base ?>/contactus/" class="hover:text-black transition focus-ring">Contact</a>
            <a role="menuitem" href="https://brokerband.com" target="_blank" rel="noopener"
                class="hover:text-black transition focus-ring">Online Store</a>
        </nav>

        <!-- Mobile menu button -->
        <div class="md:hidden">
            <button id="mobileMenuBtn" class="text-gray-700 focus-ring" aria-controls="mobileMenu" aria-expanded="false"
                aria-label="Open menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Sidebar -->
    <nav id="mobileMenu"
        class="md:hidden fixed inset-y-0 left-0 w-80 max-w-[85%] bg-white shadow-2xl translate-x-[-100%] transition-transform duration-200 z-50"
        aria-label="Mobile" aria-hidden="true">
        <div class="p-4 border-b flex items-center justify-between">
            <span class="font-semibold">Menu</span>
            <button id="mobileMenuClose" class="focus-ring" aria-label="Close menu">✕</button>
        </div>
        <div class="p-4 space-y-2 overflow-y-auto">
            <a class="block py-2" href="<?= $base ?>/">Home</a>
            <a class="block py-2" href="<?= $base ?>/aboutus/">About Us</a>
            <a class="block py-2" href="<?= $base ?>/cloud-security/">Cloud Security</a>
            <a class="block py-2" href="<?= $base ?>/warehousing-solutions-and-network-infrastructure/">Warehousing</a>
            <a class="block py-2" href="<?= $base ?>/devandmarketing/">Development & Marketing</a>
            <!-- <a class="block py-2" href="<?= $base ?>/SaaS/">SaaS</a> -->
            <a class="block py-2" href="<?= $base ?>/services/">Services</a>
            <details>
                <summary class="py-2 cursor-pointer select-none">Solutions</summary>
                <div class="pl-4 space-y-2">
                    <a class="block py-2" href="<?= $base ?>/managedservices/">Managed Services</a>
                    <a class="block py-2" href="<?= $base ?>/officeconnect/">Office Connect</a>
                    <a class="block py-2" href="<?= $base ?>/officeconnectplans/">Office Connect Plans</a>
                    <details>
                        <summary class="py-2 cursor-pointer select-none">Cyber Cloud Services</summary>
                        <div class="pl-4 space-y-2">
                            <a class="block py-2" href="<?= $base ?>/cyberbackup/">Cyber Backup</a>
                            <a class="block py-2" href="<?= $base ?>/cyberprotect/">Cyber Protect</a>
                            <a class="block py-2" href="<?= $base ?>/cybernotary/">Cyber Notary</a>
                            <a class="block py-2" href="<?= $base ?>/cyberfiles/">Cyber Files</a>
                            <a class="block py-2" href="<?= $base ?>/disasterrecoverycloud/">Disaster Recovery Cloud</a>
                        </div>
                    </details>
                    <details>
                        <summary class="py-2 cursor-pointer select-none">Cybersecurity</summary>
                        <div class="pl-4 space-y-2">
                            <a class="block py-2" href="<?= $base ?>/malwarebytesforhome/">Malwarebytes for Home</a>
                            <a class="block py-2" href="<?= $base ?>/malwarebytesforbusiness/">Malwarebytes for
                                Business</a>
                            <a class="block py-2" href="<?= $base ?>/soc24/">SOC 24</a>
                            <!-- <a class="block py-2" href="<?= $base ?>/fortinetfirewalls/">Fortinet Firewalls</a> -->
                            <a class="block py-2" href="<?= $base ?>/sdwanassessment/">SD-WAN Assessment</a>
                        </div>
                    </details>
                </div>
            </details>
            <details>
                <summary class="py-2 cursor-pointer select-none">Industry</summary>
                <div class="pl-4 space-y-2">
                    <a class="block py-2" href="<?= $base ?>/retail/">Retail</a>
                    <a class="block py-2" href="<?= $base ?>/healthcare/">Healthcare</a>
                    <a class="block py-2" href="<?= $base ?>/generaloffice/">General Office</a>
                </div>
            </details>
            <details>
                <summary class="py-2 cursor-pointer select-none">More</summary>
                <div class="pl-4 space-y-2">
                    <a class="block py-2" href="<?= $base ?>/intrusionprevension/">Intrusion Prevention</a>
                    <a class="block py-2" href="<?= $base ?>/careers/">Careers</a>
                    <a class="block py-2" href="<?= $base ?>/remotesupport/">Remote Support</a>
                </div>
            </details>

            <a class="block py-2" href="<?= $base ?>/contactus/">Contact</a>
            <a class="block py-2" href="https://brokerband.com" target="_blank" rel="noopener">Online Store</a>
        </div>
    </nav>

    <script>
        // Desktop: unify click + keyboard with the same 'open' class
        (function () {
            const groups = document.querySelectorAll('header .nav-hover-group');

            function closeAll(except) {
                groups.forEach(g => {
                    if (g !== except) {
                        g.classList.remove('open');
                        const t = g.querySelector(':scope > [aria-haspopup="true"]');
                        if (t) t.setAttribute('aria-expanded', 'false');
                    }
                });
            }

            groups.forEach(group => {
                const trigger = group.querySelector(':scope > button,[aria-haspopup="true"]');
                const dropdown = group.querySelector(':scope > .dropdown');
                if (!trigger || !dropdown) return;

                // Click toggle
                trigger.addEventListener('click', (e) => {
                    const isOpen = group.classList.contains('open');
                    if (isOpen) {
                        group.classList.remove('open');
                        trigger.setAttribute('aria-expanded', 'false');
                    } else {
                        closeAll(group);
                        group.classList.add('open');
                        trigger.setAttribute('aria-expanded', 'true');
                    }
                });

                // Keyboard
                trigger.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') {
                        group.classList.remove('open');
                        trigger.setAttribute('aria-expanded', 'false');
                        trigger.blur();
                    }
                });

                // Hover intent with delay
                let closeTimer = null;
                const open = () => { clearTimeout(closeTimer); closeAll(group); group.classList.add('open'); trigger.setAttribute('aria-expanded', 'true'); };
                const closeLater = () => { clearTimeout(closeTimer); closeTimer = setTimeout(() => { group.classList.remove('open'); trigger.setAttribute('aria-expanded', 'false'); }, parseInt(getComputedStyle(document.documentElement).getPropertyValue('--dropdown-delay')) || 260); };

                trigger.addEventListener('mouseenter', open);
                dropdown.addEventListener('mouseenter', open);
                trigger.addEventListener('mouseleave', closeLater);
                dropdown.addEventListener('mouseleave', closeLater);
            });

            // Click outside closes all
            document.addEventListener('click', (e) => { if (!e.target.closest('header')) closeAll(); });
        })();

        // Mobile menu
        (function () {
            const body = document.body;
            const menu = document.getElementById('mobileMenu');
            const openBtn = document.getElementById('mobileMenuBtn');
            const closeBtn = document.getElementById('mobileMenuClose');

            function openMenu() {
                menu.style.transform = 'translateX(0)';
                menu.setAttribute('aria-hidden', 'false');
                openBtn.setAttribute('aria-expanded', 'true');
                body.style.overflow = 'hidden';
            }
            function closeMenu() {
                menu.style.transform = '';
                menu.setAttribute('aria-hidden', 'true');
                openBtn.setAttribute('aria-expanded', 'false');
                body.style.overflow = '';
            }

            openBtn.addEventListener('click', openMenu);
            closeBtn.addEventListener('click', closeMenu);
            document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeMenu(); });
            menu.addEventListener('click', (e) => { if (e.target === menu) closeMenu(); });
        })();
    </script>
</header>