<?php $base = "/Querytel_CA"; ?>
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

        /* The dropdown */
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

        /* Hover bridge: a tiny invisible zone between trigger and menu */
        .nav-hover-group::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 100%;
            height: var(--hover-bridge);
            /* adjust if needed */
        }

        /* For right-side nested menus, add a bridge on the side */
        .dropdown .nav-hover-group::after {
            left: 100%;
            top: 0;
            width: var(--hover-bridge);
            height: 100%;
        }

        /* Open state class (managed by JS) */
        .nav-hover-group.open>.dropdown {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
            transform: translateY(0);
        }

        /* Desktop hover fallback (still okay) */
        @media (hover:hover) and (pointer:fine) {
            .nav-hover-group:hover>.dropdown {
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: translateY(0);
            }
        }

        /* Respect reduced motion */
        @media (prefers-reduced-motion: reduce) {
            .dropdown {
                transition: none;
                transform: none;
            }
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
            <a role="menuitem" href="<?= $base ?>/it-services-cybersecurity-cloud-solutions/"
                class="hover:text-black transition focus-ring">About Us</a>
            <a role="menuitem" href="<?= $base ?>/cloud-security/" class="hover:text-black transition focus-ring">Cloud
                Security</a>
            <a role="menuitem" href="<?= $base ?>/warehousing-solutions-and-network-infrastructure/"
                class="hover:text-black transition focus-ring">Warehousing</a>
            <div class="nav-hover-group">
                <button type="button" class="hover:text-black transition focus-ring" aria-haspopup="true"
                    aria-expanded="false" aria-controls="nav-solutions-menu">
                    Solutions
                </button>
                <div id="nav-solutions-menu" class="dropdown bg-white shadow-lg rounded min-w-[240px] mt-2 p-2"
                    role="menu" aria-label="Solutions">
                    <a role="menuitem" href="<?= $base ?>/managedservices/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Managed Services</a>
                    <a role="menuitem" href="<?= $base ?>/officeconnect/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Office Connect</a>
                    <a role="menuitem" href="<?= $base ?>/officeconnectplans/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Office Connect Plans</a>

                    <!-- Cyber Cloud Services (nested) -->
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

                    <!-- Cybersecurity (nested) -->
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
                            <!-- Malwarebytes submenu -->
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
                            <a role="menuitem" href="<?= $base ?>/fortianalyzer/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">FortiAnalyzer</a>
                            <a role="menuitem" href="<?= $base ?>/fortinetfirewalls/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Fortinet Firewalls</a>
                            <a role="menuitem" href="<?= $base ?>/sdwanassessment/"
                                class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">SD-WAN Assessment</a>
                        </div>
                    </div>
                </div>
            </div>
            <a role="menuitem" href="<?= $base ?>/services/" class="hover:text-black transition focus-ring">Services</a>

            <!-- Solutions -->


            <!-- Industry -->
            <div class="nav-hover-group">
                <button type="button" class="hover:text-black transition focus-ring" aria-haspopup="true"
                    aria-expanded="false" aria-controls="nav-industry-menu">
                    Industry
                </button>
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

            <!-- More -->
            <div class="nav-hover-group">
                <button type="button" class="hover:text-black transition focus-ring" aria-haspopup="true"
                    aria-expanded="false" aria-controls="nav-more-menu">
                    More
                </button>
                <div id="nav-more-menu" class="dropdown bg-white shadow-lg rounded min-w-[220px] mt-2 p-2" role="menu"
                    aria-label="More">
                    <a role="menuitem" href="<?= $base ?>/intrusionprevension/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Intrusion Prevention</a>
                    <a role="menuitem" href="<?= $base ?>/careers/"
                        class="block px-4 py-2 text-sm hover:bg-gray-100 focus-ring">Careers</a>
                </div>
            </div>

            <a role="menuitem" href="<?= $base ?>/contactus/" class="hover:text-black transition focus-ring">Contact</a>
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
            <button id="mobileMenuClose" class="focus-ring" aria-label="Close menu">
                ✕
            </button>
        </div>
        <div class="p-4 space-y-2 overflow-y-auto">
            <a class="block py-2" href="<?= $base ?>/">Home</a>
            <a class="block py-2" href="<?= $base ?>/it-services-cybersecurity-cloud-solutions/">About Us</a>
            <a class="block py-2" href="<?= $base ?>/cloud-security/">Cloud Security</a>
            <a class="block py-2" href="<?= $base ?>/warehousing-solutions-and-network-infrastructure/">Warehousing</a>
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
                            <a class="block py-2" href="<?= $base ?>/fortianalyzer/">FortiAnalyzer</a>
                            <a class="block py-2" href="<?= $base ?>/fortinetfirewalls/">Fortinet Firewalls</a>
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
                </div>
            </details>
            <a class="block py-2" href="<?= $base ?>/remotesupport/">Remote Support</a>
            <a class="block py-2" href="<?= $base ?>/contactus/">Contact</a>
        </div>
    </nav>

    <script>
        // Desktop: click toggling + keyboard control for dropdown buttons
        (function () {
            const btns = document.querySelectorAll('header [aria-haspopup="true"]');
            btns.forEach(btn => {
                const menuId = btn.getAttribute('aria-controls');
                const menu = menuId ? document.getElementById(menuId) : null;

                // Click toggles (desktop fallback)
                btn.addEventListener('click', (e) => {
                    const expanded = btn.getAttribute('aria-expanded') === 'true';
                    btn.setAttribute('aria-expanded', String(!expanded));
                    if (menu) {
                        const open = !expanded;
                        menu.style.opacity = open ? '1' : '';
                        menu.style.visibility = open ? 'visible' : '';
                        menu.style.pointerEvents = open ? 'auto' : '';
                        menu.style.transform = open ? 'translateY(0)' : '';
                    }
                });

                // Close on Escape
                btn.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') {
                        btn.setAttribute('aria-expanded', 'false');
                        if (menu) { menu.removeAttribute('style'); }
                        btn.focus();
                    }
                });
            });

            // Click outside to close
            document.addEventListener('click', (e) => {
                const header = e.target.closest('header');
                if (!header) {
                    btns.forEach(btn => {
                        btn.setAttribute('aria-expanded', 'false');
                        const menuId = btn.getAttribute('aria-controls');
                        const menu = menuId ? document.getElementById(menuId) : null;
                        if (menu) menu.removeAttribute('style');
                    });
                }
            });
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
            menu.addEventListener('click', (e) => {
                if (e.target === menu) closeMenu();
            });
        })();
    </script>
    <script>
        // Gentle hover intent with a close delay and gap tolerance
        (function () {
            const groups = document.querySelectorAll('.nav-hover-group');

            groups.forEach(group => {
                let closeTimer = null;
                const dropdown = group.querySelector(':scope > .dropdown');
                const trigger = group.querySelector(':scope > button, :scope > a, :scope > [aria-haspopup="true"]');

                if (!dropdown || !trigger) return;

                const open = () => {
                    clearTimeout(closeTimer);
                    group.classList.add('open');
                    trigger.setAttribute('aria-expanded', 'true');
                };
                const close = () => {
                    group.classList.remove('open');
                    trigger.setAttribute('aria-expanded', 'false');
                };
                const closeLater = () => {
                    clearTimeout(closeTimer);
                    closeTimer = setTimeout(close, parseInt(getComputedStyle(document.documentElement).getPropertyValue('--dropdown-delay')) || 260);
                };

                // Entering trigger or dropdown keeps it open
                trigger.addEventListener('mouseenter', open);
                dropdown.addEventListener('mouseenter', open);

                // Leaving trigger or dropdown starts the delayed close
                trigger.addEventListener('mouseleave', closeLater);
                dropdown.addEventListener('mouseleave', closeLater);

                // Keyboard: open on focus, close on Escape
                trigger.addEventListener('focus', open);
                trigger.addEventListener('keydown', (e) => { if (e.key === 'Escape') { close(); trigger.blur(); } });
            });

            // Click outside closes all
            document.addEventListener('click', (e) => {
                if (!e.target.closest('header')) {
                    document.querySelectorAll('.nav-hover-group.open').forEach(g => {
                        g.classList.remove('open');
                        const t = g.querySelector(':scope > [aria-haspopup="true"]');
                        if (t) t.setAttribute('aria-expanded', 'false');
                    });
                }
            });
        })();
    </script>

</header>