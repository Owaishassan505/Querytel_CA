<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>QueryTel Fluent Sheet/Modal Mockup</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --accent: #D83B01;
            --surface: #ffffff;
            --surface-2: rgba(255, 255, 255, .86);
            --stroke: #e6e6e6;
            --radius: 14px;
            --shadow: 0 10px 30px rgba(0, 0, 0, .14), 0 2px 8px rgba(0, 0, 0, .06);
            --overlay: rgba(12, 12, 12, .45);
            --blur: 8px;
            --t-fade: 160ms;
            --t-sheet: 180ms;
            --curve: cubic-bezier(.2, .8, .2, 1);
        }

        html {
            color-scheme: light;
        }

        .qt-overlay {
            background: var(--overlay);
            backdrop-filter: saturate(150%) blur(var(--blur));
        }

        .qt-card {
            background: var(--surface);
            border: 1px solid var(--stroke);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
        }

        .qt-btn {
            border-radius: 6px;
            font-weight: 600;
            line-height: 1;
        }

        .qt-btn-primary {
            background: var(--accent);
            color: #fff;
            font-size: 1.125rem;
            padding: 1rem 2.5rem;
        }

        .qt-btn-primary:hover {
            filter: brightness(.92);
        }


        /* closed by default */
        #qt-root {
            display: none;
        }

        /* only show when we add .is-open */
        #qt-root.is-open {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }


        .qt-btn-secondary {
            background: var(--surface-2);
            color: #1b1b1b;
            border: 1px solid #dcdcdc;
        }

        .qt-btn-secondary:hover {
            background: rgba(255, 255, 255, .92);
            border-color: #cfcfcf;
        }

        .focus-ring:focus-visible {
            outline: 3px solid color-mix(in oklab, var(--accent) 60%, transparent);
            outline-offset: 2px;
        }

        .variant-modal {
            /* width:min(98vw,1280px);  enable if you want wider */
            margin-left: auto;
            margin-right: auto;

            /* you added this; remove if you want true vertical centering */
        }

        .variant-sheet {
            width: min(96vw, 1024px);
        }

        .variant-full {
            width: 100vw;
            height: 100vh;
            border-radius: 0;
        }

        .media-zoom img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .media-gradient {
            pointer-events: none;
            position: absolute;
            inset-inline: 0;
            bottom: 0;
            height: 80px;
            background: linear-gradient(to top, rgba(0, 0, 0, .40), transparent);
        }

        @media (prefers-reduced-motion:no-preference) {
            .enter-backdrop {
                animation: qtFade var(--t-fade) ease-out forwards;
            }

            .enter-sheet {
                animation: qtSheet var(--t-sheet) var(--curve) forwards;
            }

            .enter-rise {
                animation: qtRise 220ms ease-out both;
            }

            .stagger>* {
                opacity: 0;
                transform: translateY(6px);
                animation: qtRise 240ms ease-out forwards;
            }

            .stagger>*:nth-child(2) {
                animation-delay: .06s
            }

            .stagger>*:nth-child(3) {
                animation-delay: .12s
            }

            .stagger>*:nth-child(4) {
                animation-delay: .18s
            }

            .stagger>*:nth-child(5) {
                animation-delay: .24s
            }

            .media-zoom img {
                animation: qtZoom .6s ease-out forwards;
            }

            @keyframes qtFade {
                from {
                    opacity: 0
                }

                to {
                    opacity: 1
                }
            }

            @keyframes qtSheet {
                from {
                    opacity: 0;
                    transform: translateY(10px) scale(.985)
                }

                to {
                    opacity: 1;
                    transform: translateY(0) scale(1)
                }
            }

            @keyframes qtRise {
                from {
                    opacity: 0;
                    transform: translateY(6px)
                }

                to {
                    opacity: 1;
                    transform: translateY(0)
                }
            }

            @keyframes qtZoom {
                from {
                    transform: scale(1.02)
                }

                to {
                    transform: scale(1)
                }
            }
        }

        @media (prefers-reduced-motion:reduce) {

            .enter-backdrop,
            .enter-sheet,
            .enter-rise,
            .stagger>*,
            .media-zoom img {
                animation: none !important;
            }
        }

        @media (max-width:767px) {
            .variant-modal .media-optional {
                display: none;
            }
        }

        .qt-divider {
            height: 1px;
            background: var(--stroke);
        }

        .qt-pill {
            display: inline-block;
            font-size: .75rem;
            font-weight: 700;
            padding: .375rem .5rem;
            border: 1px solid #dcdcdc;
            border-radius: 9999px;
            color: #3a3a3a;
            background: #fafafa;
        }
    </style>

</head>

<body class="h-full bg-white text-neutral-900">
    <main class="max-w-5xl mx-auto px-6 py-16">
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight">Fluent-style Sheet/Modal Mockup</h1>
        <p class="mt-3 text-neutral-600">Microsoft vibe. Soft corners, acrylic backdrop, gentle motion.</p>

        <div class="mt-8 flex flex-wrap gap-3">
            <button class="qt-btn qt-btn-primary focus-ring" data-open="modal">Open Center Modal</button>
            <button class="qt-btn qt-btn-secondary px-5 py-2.5 focus-ring" data-open="sheet">Open Right Sheet</button>
            <button class="qt-btn qt-btn-secondary px-5 py-2.5 focus-ring" data-open="full">Open Fullscreen (mobile
                feel)</button>
        </div>

        <p class="mt-10 text-sm text-neutral-500">Tip: resize window to see responsive behavior. ESC closes. Tab cycles
            focus.</p>
    </main>

    <div id="qt-root" class="fixed inset-0 z-50 hidden" aria-hidden="true">
        <div id="qt-backdrop" class="absolute inset-0 qt-overlay opacity-0"></div>
        <div class="container mx-auto">
            <section id="qt-panel" role="dialog" aria-modal="true" aria-labelledby="qt-title"
                class="relative mx-auto my-6 max-h-[92vh] overflow-hidden qt-card opacity-0 grid grid-cols-1 md:grid-cols-2">
                <div id="qt-media" class="hidden md:block relative bg-neutral-100 media-zoom">
                    <img id="qt-img" alt="" class="absolute inset-0 w-full h-full object-cover" />
                    <div
                        class="pointer-events-none absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-black/40 to-transparent">
                    </div>
                </div>
                <div class="flex min-h-0 flex-col">
                    <header class="px-6 md:px-8 pt-6">
                        <div class="flex items-start gap-3">
                            <span id="qt-pill"
                                class="text-xs font-semibold px-2 py-[6px] rounded-full border border-neutral-300 text-neutral-700 bg-neutral-50"></span>
                            <button id="qt-close" class="ml-auto qt-btn qt-btn-secondary px-3 py-1.5 text-sm focus-ring"
                                aria-label="Close">Close</button>
                        </div>
                        <h2 id="qt-title"
                            class="mt-4 text-[26px] md:text-[34px] leading-tight font-semibold tracking-tight"></h2>
                    </header>
                    <main class="flex-1 min-h-0 overflow-y-auto px-6 md:px-8 pb-6">
                        <article id="qt-body" class="mt-4 space-y-4 text-neutral-900 stagger"></article>
                        <div class="mt-8 flex flex-col sm:flex-row gap-3">
                            <button id="qt-primary" class="qt-btn qt-btn-primary focus-ring">Primary action</button>
                            <button id="qt-secondary"
                                class="qt-btn qt-btn-secondary px-6 py-3 text-base focus-ring">Secondary</button>
                        </div>
                    </main>
                </div>
            </section>
        </div>
    </div>

    <script>
        const mock = {
            title: '24/7 Help Desk Support',
            pill: 'Managed Services',
            body: [
                'Round-the-clock user support with clear SLAs and fast triage. Looks like an app window, not a cheap popup.',
                'Smooth open/close animations, focus-trapped keyboard nav, and a glassy background like Windows.',
                'This is a drop-in replacement for your current modal system.'
            ],
            img: 'https://querytel.com/wp-content/uploads/2025/07/SAO.webp'
        };

        const root = document.getElementById('qt-root');
        const backdrop = document.getElementById('qt-backdrop');
        const panel = document.getElementById('qt-panel');
        const mediaWrap = document.getElementById('qt-media');
        const img = document.getElementById('qt-img');
        const titleEl = document.getElementById('qt-title');
        const pillEl = document.getElementById('qt-pill');
        const bodyEl = document.getElementById('qt-body');
        const closeBtn = document.getElementById('qt-close');

        function setVariant(v) {
            panel.classList.remove('variant-modal', 'variant-sheet', 'variant-full', 'md:grid-cols-2');
            mediaWrap.classList.add('hidden');
            if (v === 'modal') {
                panel.classList.add('variant-modal', 'md:grid-cols-2');
                mediaWrap.classList.remove('hidden');
                panel.style.marginLeft = 'auto';
                panel.style.marginRight = 'auto';
            } else if (v === 'sheet') {
                panel.classList.add('variant-sheet');
                panel.style.marginLeft = 'auto';
                panel.style.marginRight = '12px';
            } else {
                panel.classList.add('variant-full');
                panel.style.margin = '0';
                mediaWrap.classList.remove('hidden');
            }
        }

        function openUI({ variant = 'modal', title, pill, body = [], image }) {
            titleEl.textContent = title || '';
            pillEl.textContent = pill || '';
            bodyEl.innerHTML = body.map((p, i) => `<p class="${i === 0 ? 'text-[18px] md:text-[19px] leading-8' : 'text-[16px] md:text-[17px] leading-7'} text-neutral-800">${p}</p>`).join('');
            if (image) { img.src = image; img.alt = title || 'Preview'; mediaWrap.classList.remove('hidden'); }

            root.classList.add('is-open');              // was: remove('hidden')
            root.removeAttribute('aria-hidden');

            backdrop.classList.remove('enter-backdrop');
            panel.classList.remove('enter-sheet');
            void root.offsetWidth;
            setVariant(variant);

            backdrop.classList.add('enter-backdrop');
            panel.classList.add('enter-sheet');
            document.documentElement.classList.add('overflow-hidden');
            closeBtn.focus({ preventScroll: true });
            trapFocus(panel);
        }

        function closeUI() {
            root.classList.remove('is-open');           // was: add('hidden')
            root.setAttribute('aria-hidden', 'true');
            document.documentElement.classList.remove('overflow-hidden');
        }
        document.querySelectorAll('[data-open]').forEach(btn => {
            btn.addEventListener('click', () => {
                const type = btn.getAttribute('data-open');
                openUI({ variant: type, title: mock.title, pill: mock.pill, body: mock.body, image: mock.img });
            })
        });

        backdrop.addEventListener('click', closeUI);
        closeBtn.addEventListener('click', closeUI);
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape' && !root.classList.contains('hidden')) closeUI(); });

        function trapFocus(container) {
            const selectors = 'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])';
            const nodes = () => [...container.querySelectorAll(selectors)];
            container.addEventListener('keydown', e => {
                if (e.key !== 'Tab') return;
                const f = nodes();
                if (!f.length) return;
                const first = f[0], last = f[f.length - 1];
                if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
                else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
            });
        }
    </script>
</body>

</html>