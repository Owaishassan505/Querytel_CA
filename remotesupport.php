<?php $base = "https://itcold.com" ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Remote Support - Querytel Inc</title>
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

    <!-- HERO: Remote Support (balanced orange/blue) -->
    <section class="bg-gradient-to-br from-orange-400 overflow-hidden relative text-white to-blue-700 via-orange-700">
        <div class="absolute inset-0 pointer-events-none"
            style="background-image: radial-gradient(ellipse at 20% 10%, rgba(255,255,255,.15), transparent 40%), radial-gradient(ellipse at 80% 120%, rgba(255,255,255,.08), transparent 35%);">
        </div>

        <div class="max-w-7xl mx-auto px-6 py-24 grid md:grid-cols-2 gap-12 items-center">
            <div class="relative z-10">
                <div
                    class="inline-flex items-center gap-2 rounded-full bg-white/10 ring-1 ring-white/20 px-3 py-1 text-sm">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    Live technicians online
                </div>

                <h1 class="mt-4 text-4xl md:text-5xl font-bold leading-tight">
                    Remote support in <span class="underline underline-offset-4 decoration-white/60">minutes</span>, not
                    hours.
                </h1>

                <p class="mt-5 text-lg text-orange-50">
                    Secure one-click session. No installs, no fuss. Enter your code and we’ll take it from there.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="#remote-support-form"
                        class="inline-flex items-center justify-center rounded-lg bg-white text-orange-600 font-semibold px-6 py-3 hover:bg-orange-50 transition">
                        Connect to Technician
                    </a>
                    <a href="tel:+18444478379"
                        class="inline-flex items-center justify-center rounded-lg bg-white/10 ring-1 ring-white/30 text-white px-6 py-3 hover:bg-white/15 transition">
                        Or call +1-844-447-8379
                    </a>
                </div>

                <div class="mt-6 flex items-center gap-4 text-sm text-white/80">
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg>
                        Encrypted sessions
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg>
                        North America-wide coverage
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M9 12.75 7.5 11.25l-3 3L9 18l10.5-10.5-1.5-1.5z" />
                        </svg>
                        Windows • macOS
                    </div>
                </div>
            </div>

            <div class="relative">
                <div class="absolute -inset-8   rounded-full animate-[pulse_5s_ease-in-out_infinite]">
                </div>
                <div
                    class="relative z-10  text-neutral-800 rounded-2xl h-full shadow-2xl ring-1 ring-black/5 p-6 backdrop-blur flex justify-center items-center">

                    <!-- Big Illustration -->
                    <img src="<?= $base . '/assets/images/undraw_solution-mindset_pit7.svg' ?>"
                        alt="Remote Support Illustration" class="w-full max-w-sm rounded-lg object-contain h-full">

                </div>
            </div>


        </div>
    </section>



    <!-- FORM: LogMeIn Rescue (functional fields preserved) -->
    <section id="remote-support-form" class="bg-white py-16">
        <div class="max-w-3xl mx-auto px-6">
            <div class="text-center">
                <h2 class="text-3xl font-bold text-neutral-900">Connect to a Technician</h2>
                <p class="mt-3 text-gray-600">Paste the code your technician gave you and hit connect.</p>
            </div>

            <div class="mt-10 bg-white rounded-2xl border border-neutral-200 shadow-sm p-6 md:p-8">
                <form action="https://secure.logmeinrescue.com/Customer/Code.aspx" method="post" name="logmeinsupport"
                    class="space-y-6" onsubmit="return rsHandleSubmit(event)">

                    <div>
                        <label for="rescue-code" class="block text-sm font-medium text-neutral-800">
                            Support Code
                        </label>
                        <input id="rescue-code" name="Code" type="text" required
                            class="mt-2 w-full rounded-lg border border-neutral-300 bg-neutral-50 px-4 py-3 text-neutral-900 placeholder-neutral-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-orange-500"
                            placeholder="Enter code" autocomplete="one-time-code" />
                        <p class="mt-2 text-xs text-neutral-500">Your technician provides this code.</p>
                    </div>

                    <!-- Hidden fields (unchanged / optional) -->
                    <input maxlength="64" name="tracking0" type="hidden" />
                    <input maxlength="5" name="language" type="hidden" />
                    <input name="hostederrorhandling" type="hidden" />

                    <div class="pt-2">
                        <button type="submit"
                            class="inline-flex items-center justify-center rounded-lg bg-orange-600 px-6 py-3 font-semibold text-white hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-orange-500 disabled:opacity-60 disabled:cursor-not-allowed"
                            id="rescue-submit">
                            Connect to Technician
                        </button>
                    </div>
                </form>

                <div class="mt-6 text-sm text-neutral-500">
                    Having trouble? Call us at <span class="font-medium text-neutral-700">+1-844-447-8379</span>.
                </div>
            </div>
        </div>
    </section>

    <script>
        // Keep functionality intact; just trim/guard UX without changing field names or action.
        function rsHandleSubmit(e) {
            const codeInput = document.getElementById('rescue-code');
            const submitBtn = document.getElementById('rescue-submit');
            if (!codeInput) return true;
            codeInput.value = (codeInput.value || '').trim();
            if (!codeInput.value) return false;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Connecting...';
            return true; // allow form to post to LogMeIn Rescue
        }
    </script>


    <section class="bg-neutral-900 text-white py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h1 class="text-3xl md:text-4xl font-bold">
                Receive Remote Assistance Support from QueryTel
            </h1>
            <p class="mt-4 text-white/80 max-w-4xl">
                Remote Assistance Support from QueryTel allows a QueryTel support professional in another location
                to view your computer screen and work on your computer over a secure connection.
            </p>
        </div>
    </section>

    <!-- AGREEMENT SECTION -->
    <section class="bg-white py-16">
        <div class="max-w-6xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-extrabold text-neutral-900">
                Agreement For <span class="text-[#f97316]">QueryTel Services</span>
            </h2>
            <div class="mt-3 h-[2px] w-24 bg-neutral-200"></div>

            <div class="mt-8 space-y-5 text-[15px] leading-7 text-neutral-700">
                <p>
                    WHEN YOU CLICK <span class="font-bold text-[#f97316]">‘CONNECT TO TECHNICIAN’</span>,
                    YOU ACCEPT AND AGREE TO BE BOUND BY
                    <span class="font-semibold text-[#f97316]">THIS AGREEMENT</span>,
                    THE <span class="underline decoration-[#f97316]">WEBSITE TERMS OF USE</span> AND
                    <span class="underline decoration-[#f97316]">PRIVACY STATEMENT</span>, AND THE POLICIES PROVIDED ON
                    THIS WEBSITE,
                    ALL OF WHICH ARE INCORPORATED INTO AND FORM PART OF THIS AGREEMENT.
                    YOU ALSO REPRESENT THAT YOU HAVE READ AND UNDERSTAND
                    <span class="font-semibold text-[#f97316]">ALL OF THE PROVISIONS</span> OF THIS AGREEMENT.
                    IN THE EVENT OF A CONFLICT BETWEEN THIS AGREEMENT AND YOUR
                    CURRENT SERVICES AGREEMENT WITH QUERYTEL (IF ANY),
                    THE TERMS AND CONDITIONS OF YOUR CURRENT SERVICES AGREEMENT WITH QUERYTEL CONTROLS.
                    YOU MUST ACCEPT THIS AGREEMENT BEFORE YOU CAN PURCHASE OR USE QUERYTEL SERVICES FROM THIS WEBSITE.
                </p>

                <p>
                    This Agreement for QueryTel Services (<span class="italic text-[#f97316]">‘the agreement’</span>)
                    is entered into by and between the entity ordering the services
                    (<span class="italic font-semibold text-[#f97316]">‘you’, ‘your’ or ‘customer’</span>)
                    and the closest QueryTel affiliate located in your country or region, unless we designate otherwise
                    in
                    Section 9 below (<span class="italic font-semibold text-[#f97316]">‘we’, ‘us’ or ‘our’</span>).
                    <span class="italic text-[#f97316]">‘Affiliate’</span> means any legal entity that you or we own,
                    which owns you or us,
                    or which is under common ownership with you or us.
                    <span class="italic text-[#f97316]">‘Ownership’</span> means more than 50% ownership.
                </p>
            </div>
        </div>
    </section>

    <!-- AGREEMENT COMPONENT: Clean, Microsoft-style, JS-free -->
    <section id="qt-agreement" class="bg-white">
        <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-12 gap-8">

            <!-- Sticky mini-TOC -->
            <aside class="md:col-span-4 lg:col-span-3">
                <div class="sticky top-6 rounded-xl border border-neutral-200 bg-neutral-50 p-4">
                    <h3 class="text-sm font-semibold text-neutral-900">On this page</h3>
                    <nav class="mt-3 space-y-1 text-sm">
                        <a href="#qa-1" class="block rounded px-2 py-1 hover:bg-neutral-100">1. SERVICES</a>
                        <a href="#qa-2" class="block rounded px-2 py-1 hover:bg-neutral-100">2. OWNERSHIP AND
                            LICENSE</a>
                        <a href="#qa-3" class="block rounded px-2 py-1 hover:bg-neutral-100">3. CONFIDENTIALITY</a>
                        <a href="#qa-4" class="block rounded px-2 py-1 hover:bg-neutral-100">4. WARRANTIES,
                            DISCLAIMER</a>
                        <a href="#qa-5" class="block rounded px-2 py-1 hover:bg-neutral-100">5. LIMITATION OF LIABILITY,
                            EXCLUSIONS</a>
                        <a href="#qa-6" class="block rounded px-2 py-1 hover:bg-neutral-100">6. TAXES</a>
                        <a href="#qa-7" class="block rounded px-2 py-1 hover:bg-neutral-100">7. TERMINATION</a>
                        <a href="#qa-8" class="block rounded px-2 py-1 hover:bg-neutral-100">8. MISCELLANEOUS</a>
                        <a href="#qa-9" class="block rounded px-2 py-1 hover:bg-neutral-100">9. QUERYTEL CONTRACTING
                            ENTITY</a>
                    </nav>
                </div>
            </aside>

            <!-- Accordion body -->
            <div class="md:col-span-8 lg:col-span-9">
                <header class="mb-6">
                    <h2 class="text-2xl md:text-3xl font-bold text-neutral-900">Agreement for QueryTel Services</h2>
                    <p class="text-sm text-neutral-500">Last updated: January 2019</p>
                </header>

                <div class="space-y-4">

                    <!-- Item -->
                    <details id="qa-1" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm" open>
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">1. SERVICES.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p>We agree to use commercially reasonable efforts to provide the services you purchase as
                                described on the services Web site (otherwise known as the ‘customer services guide’).
                                The Web site URL for the customer services guide is <a
                                    href="http://support.querytel.com"
                                    class="text-blue-600 underline">http://support.querytel.com</a>. If the URL changes
                                for any reason, we will provide the new URL to you upon your request. Our ability to
                                deliver the services depends upon your full and timely cooperation, as well as the
                                accuracy and completeness of any information you provide.</p>
                        </div>
                    </details>

                    <details id="qa-2" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm">
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">2. OWNERSHIP AND
                                LICENSE.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p><strong>A. Fixes:</strong> We grant you a non-exclusive, perpetual, fully paid-up license
                                to use and reproduce the fix we or our designee deliver to you for your internal use
                                only. Fixes are not for resale or distribution to unaffiliated third parties. Except as
                                otherwise provided herein, the license rights granted to fixes are governed by the
                                license agreement for the affected product or, if the fix is not offered for a specific
                                product, any other use terms we provide. Your use of the product is governed by the
                                license agreement for the product. You are responsible for paying any product licensing
                                fees. ‘Product(s)’ means any computer code, web-based services, or materials comprising
                                commercially released, pre-release or beta products (whether licensed for a fee or no
                                charge) and any derivatives of the foregoing we or our designee make available to you
                                for a license which is published by us, our affiliates or a third-party. ‘Fixes’ means
                                product fixes that we either release generally (such as commercial product service
                                packs) or that we or our designee provide to you when performing services (such as
                                workarounds, patches, hot-fixes, updates, bug fixes, beta fixes, and beta builds) and
                                any derivatives of the foregoing. You may not modify, reverse engineer, decompile,
                                disassemble, change the file name of or combine with any non-querytel computer code any
                                fixes delivered to you.</p>

                            <p><strong>B. Pre-Existing Work:</strong> All rights in any computer code or non-code based
                                written materials ‘materials’) developed or otherwise obtained by or for us or our
                                affiliates, or you or your affiliates independent of this agreement (‘pre-existing
                                work’) shall remain the sole property of the party providing the pre-existing work.
                                During the performance of the services, each party grants to the other party (and our
                                contractors as necessary) a temporary, non-exclusive license to use, reproduce and
                                modify any of its pre-existing work provided solely for the performance of services. We
                                grant you a non-exclusive, perpetual, fully paid-up license to use, reproduce and modify
                                (if applicable) our pre-existing work, excluding products, in the form delivered to you
                                that we leave with you at the conclusion of our performance of services for use with any
                                developments (if applicable). The license rights granted to our pre-existing work are
                                limited to your internal use only and are not for resale or distribution to unaffiliated
                                third parties.</p>

                            <p><strong>C. Developments:</strong> We grant you a non-exclusive, perpetual right to use,
                                reproduce and modify any computer code or materials (except for fixes or pre-existing
                                work) that we leave with you at the conclusion of our performance of the services
                                (‘developments’) for your internal use only. Developments are not for resale or
                                distribution to unaffiliated third parties.</p>

                            <p><strong>D. Sample Code:</strong> In addition to the rights set out in the Developments
                                section above, you are also granted a non-exclusive, perpetual right to reproduce and
                                distribute the object code form of any computer code provided by us for the purpose of
                                illustration (‘sample code’) provided that you agree:</p>
                            <ul class="list-disc pl-6">
                                <li>(i) not to use our name, logo, or trademarks for marketing your computer product in
                                    which the sample code is embedded;</li>
                                <li>(ii) to include a valid copyright notice on your computer product in which the
                                    sample code is embedded; and</li>
                                <li>(iii) to indemnify, hold harmless, and defend us and our suppliers from and against
                                    any claims or lawsuits, including attorneys’ fees, that arise or result from the use
                                    or distribution of the sample code.</li>
                            </ul>

                            <p><strong>E. Open Source License Restrictions:</strong> Because specific third party
                                license terms require that computer code be generally</p>
                            <ul class="list-disc pl-6">
                                <li>(i) disclosed in source code form to third parties;</li>
                                <li>(ii) licensed to third parties for the purpose of making derivative works; or</li>
                                <li>(iii) redistributable to third parties at no charge (collectively, ‘open-source
                                    license terms’), the license rights that each party has granted to any computer code
                                    (or any intellectual property associated therewith) do no include any license,
                                    right, power or authority to incorporate, modify, combine and/or distribute that
                                    computer code with any other computer code in a manner which would subject the
                                    other’s computer code to open source license terms. Furthermore, each party warrants
                                    that it will not provide or give to the other party computer code that is governed
                                    by open source license terms.</li>
                            </ul>

                            <p><strong>F. Affiliates Rights:</strong> You may sublicense the rights contained in this
                                section to your affiliates, but your affiliates may not sub-license these rights, and
                                your affiliatesâ€™ use must be consistent with these license terms contained herein.</p>

                            <p><strong>G. Reservation of rights:</strong> All rights not expressly granted in this
                                section are reserved.</p>
                        </div>
                    </details>

                    <details id="qa-3" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm">
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">3. CONFIDENTIALITY.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p>The terms and conditions of this agreement are confidential, and any and all information
                                identified by either party as ‘confidential’ and/or ‘proprietary,’ or which, under all
                                of the circumstances, ought reasonably to be treated as confidential and/or proprietary
                                (‘confidential information’), will not be disclosed by the receiving party to any third
                                person without the express consent of the other party except under the terms of this
                                agreement for five (5) years following the date of its disclosure. These confidentiality
                                obligations shall not apply to any information which,</p>
                            <ul class="list-disc pl-6">
                                <li>(i) became known to receive party from a source other than disclosing party other
                                    than by the breach of an obligation of confidentiality owed to disclosing party,
                                </li>
                                <li>(ii) is, or becomes, available to the general public other than through a breach by
                                    the receiving party, or</li>
                                <li>(iii) is developed through the independent efforts of the receiving party.</li>
                            </ul>
                            <p>We may use any technical information we derive from providing services related to our
                                products for problem resolution, troubleshooting, product functionality enhancements and
                                fixes, and for our knowledge base. We agree not to identify you or disclose any of your
                                confidential information in any item in the knowledge base.</p>
                        </div>
                    </details>

                    <details id="qa-4" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm">
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">4. WARRANTIES,
                                DISCLAIMER.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p><strong>A. NO WARRANTY:</strong> TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, WE
                                DISCLAIM AND EXCLUDE ALL REPRESENTATIONS, WARRANTIES, AND CONDITIONS WHETHER EXPRESS,
                                IMPLIED, OR STATUTORY, INCLUDING BUT NOT LIMITED TO REPRESENTATIONS, WARRANTIES, OR
                                CONDITIONS OF TITLE, NON INFRINGEMENT, SATISFACTORY CONDITION OR QUALITY,
                                MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE, WITH RESPECT TO ANY SERVICES, OR
                                OTHER MATERIALS OR INFORMATION PROVIDED BY US.</p>
                            <p><strong>B. Application of local laws:</strong> If applicable law gives you any implied
                                terms, despite the exclusions and limitations in this agreement, then to the extent
                                permitted by applicable law, your remedies are limited as determined by us, in the case
                                of services to either</p>
                            <ul class="list-disc pl-6">
                                <li>(i) re-supply of the services or</li>
                                <li>(ii) the cost of the re-supply of the services (if any), and in the case of goods to
                                    either</li>
                                <li>(i) replacement of the goods or</li>
                                <li>(ii) correction of defects in the goods.</li>
                            </ul>
                            <p>The order in which these limited remedies are provided will be determined by us.</p>
                        </div>
                    </details>

                    <details id="qa-5" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm">
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">5. LIMITATION OF
                                LIABILITY, EXCLUSIONS.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p>TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW:</p>
                            <ul class="list-disc pl-6 space-y-2">
                                <li>1) OUR TOTAL LIABILITY IS LIMITED TO THE AMOUNT YOU HAVE PAID FOR THE SERVICES
                                    REGARDLESS OF THE REASON FOR YOUR CLAIM;</li>
                                <li>2) NEITHER PARTY WILL BE LIABLE TO THE OTHER PARTY FOR ANY CONSEQUENTIAL, SPECIAL,
                                    INDIRECT, OR INCIDENTAL DAMAGES, LOSS OF PROFITS, OR LOSS OF BUSINESS, FOR ANY
                                    MATTER RELATED TO THIS AGREEMENT, ANY SERVICES, OR ANY OTHER MATERIALS OR
                                    INFORMATION WE PROVIDE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGES OR IF
                                    SUCH POSSIBILITY WAS REASONABLY FORESEEABLE, AND</li>
                                <li>3) IN THE EVENT SERVICES OR ANY SERVICES ARE PROVIDED TO YOU FREE OF CHARGE, OUR
                                    TOTAL LIABILITY TO YOU WILL NOT EXCEED CAD$5.00 OR ITS EQUIVALENT IN LOCAL CURRENCY.
                                    THIS EXCLUSION OF LIABILITY DOES NOT APPLY TO EITHER PARTY’S LIABILITY TO THE OTHER
                                    FOR VIOLATION OF ITS CONFIDENTIALITY OBLIGATION, THE OTHER PARTY’S INTELLECTUAL
                                    PROPERTY RIGHTS, OR IN THE EVENT OF FRAUD, GROSS NEGLIGENCE, OR INTENTIONAL
                                    MISCONDUCT OR FOR DEATH OR PERSONAL INJURY CAUSED BY THAT PARTY’S NEGLIGENCE.
                                    BECAUSE SOME STATES AND JURISDICTIONS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF
                                    LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, THE ABOVE LIMITATION MAY NOT
                                    APPLY.</li>
                            </ul>
                        </div>
                    </details>

                    <details id="qa-6" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm">
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">6. TAXES.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p>The amounts to be paid to us under this agreement do not include any foreign, U.S.
                                federal, state, provincial, local, municipal, or other governmental taxes (including
                                without limitation any applicable value-added, or sales or use taxes) that are owned by
                                you solely as a result of entering into this agreement. We are not liable for any taxes
                                that you are legally obligated to pay. All such taxes (including but not limited to net
                                income or gross receipts taxes, franchise taxes, and/or property taxes) shall be your
                                financial responsibility.</p>
                        </div>
                    </details>

                    <details id="qa-7" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm">
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">7. TERMINATION.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p>Either party may terminate this agreement if the other party is</p>
                            <ul class="list-disc pl-6">
                                <li>(i) in material breach or default of any obligation that is not cured within 30
                                    calendar days notice of such breach or</li>
                                <li>(ii) fails to pay any invoice that is more than 60 calendar days outstanding.</li>
                            </ul>
                            <p>You agree to pay all fees for services performed and expenses incurred.</p>
                        </div>
                    </details>

                    <details id="qa-8" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm">
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">8. MISCELLANEOUS.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p>This agreement constitutes the parties’ entire agreement concerning the subject matter
                                hereof and supersedes any other prior and contemporaneous communications. All notices,
                                authorizations, and requests given or made in connection with this agreement must be
                                sent by post, express courier, or facsimile to the addresses indicated by both parties.
                                Notices will be deemed delivered on the date shown on the postal return receipt or on
                                the courier or facsimile confirmation of delivery. You may not assign this agreement
                                without our written consent, which consent will not be unreasonably withheld. You and we
                                agree to comply with all international and national laws that apply to this agreement.
                                This agreement is governed by the laws of the State of Washington if the services were
                                purchased in the United States, the laws of Ireland if purchased in any country or
                                region in Europe, Middle East or Africa (‘EMEA’), or the laws of the jurisdiction where
                                the affiliate delivering the services is located if purchased outside the United States
                                or EMEA. Any action brought under this agreement shall be brought in federal or state
                                court in the State of Washington if the services were purchased in the United States,
                                the courts of Ireland if the services were purchased in any country or region in EMEA,
                                or the courts of the jurisdiction where the affiliate delivering the services is located
                                if purchased outside the United States or EMEA. Notwithstanding, this does not prevent
                                either party from seeking injunctive relief with respect to a violation of intellectual
                                property rights or confidentiality obligations in any appropriate jurisdiction. The
                                sections regarding restrictions on use, fees, confidentiality, ownership and license, no
                                other warranties, limitations of liability, termination, and miscellaneous of this
                                agreement will survive any termination or expiration of this agreement. If a court holds
                                any provision of this agreement to be illegal, invalid, or unenforceable, the remaining
                                provisions will remain in full force and effect, and the parties will amend the
                                agreement to give effect to the stricken clause to the maximum extent possible. No
                                waiver of any breach of this agreement will be a waiver of any other breach, and no
                                waiver will be effective unless made in writing and signed by an authorized
                                representative of the waiving party. Apart from the payment of any amounts due, neither
                                party shall be liable for performance delays or for non-performance due to causes beyond
                                its reasonable control. It is the express wish of the parties that this agreement is
                                drawn up in English.</p>
                        </div>
                    </details>

                    <details id="qa-9" class="group rounded-xl border border-neutral-200 bg-white p-5 shadow-sm">
                        <summary class="flex cursor-pointer items-center justify-between gap-4">
                            <span class="text-base md:text-lg font-semibold text-neutral-900">9. QUERYTEL CONTRACTING
                                ENTITY.</span>
                            <svg class="h-5 w-5 text-neutral-500 transition group-open:rotate-180" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 10.17l3.71-2.94a.75.75 0 11.94 1.16l-4.24 3.36a.75.75 0 01-.94 0L5.21 8.39a.75.75 0 01.02-1.18z" />
                            </svg>
                        </summary>
                        <div class="mt-3 text-[15px] leading-7 text-neutral-800 space-y-4">
                            <p>The QueryTel contracting entity for this agreement is QueryTel Inc. North America if you
                                are
                                located in the following countries/regions: Australia, Bangladesh, Hong Kong, India,
                                Indonesia, Korea, Malaysia, New Zealand, Philippines, Singapore, Sri-Lanka, Taiwan,
                                Thailand, and Vietnam. The QueryTel contracting entity for this agreement is QueryTel
                                Inc. North America, Limited if you are located in any country in Europe, Middle East, or
                                Africa. Last updated: January 2019</p>
                        </div>
                    </details>

                </div>
            </div>
        </div>
    </section>

    <!-- NOTE SECTION - Microsoft Style Card -->
    <section class="bg-neutral-50 py-16">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-white border border-neutral-200 shadow-sm rounded-2xl p-8">
                <h2 class="text-2xl font-bold tracking-tight text-neutral-900 flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m0-4h.01M12 20.5a8.5 8.5 0 110-17 8.5 8.5 0 010 17z" />
                    </svg>
                    Note:
                </h2>
                <div class="mt-3 h-0.5 w-16 bg-orange-500/80"></div>

                <div class="mt-6 space-y-6 text-[15px] leading-7 text-neutral-700">
                    <p>
                        LogMeIn (LMI) Rescue is a 3rd party remote assistance product used to provide remote support to
                        QueryTel customers.
                        QueryTel support uses the <span class="font-semibold text-orange-600">Enterprise version</span>
                        of LogMeIn Rescue as the primary
                        Remote Desktop Assistance tool to troubleshoot and resolve customer issues.
                    </p>

                    <p>
                        With LogMeIn Rescue, QueryTel support engineers can <span
                            class="font-semibold text-orange-600">view or share control</span>
                        of the remote computer, chat, and highlight sections of the customer’s screen without needing to
                        pre-install software.
                    </p>

                    <p>
                        LogMeIn Rescue is a <span class="font-semibold text-orange-600">reactive, permission-based
                            support tool</span>.
                        No permanent software is installed on a customer’s device, and engineers can only connect with
                        the
                        <span class="font-semibold text-orange-600">customer’s explicit permission</span>, granted each
                        time support is requested.
                        Support will only be initiated from this site.
                    </p>

                    <p class="text-neutral-600">
                        This product information should not be considered an endorsement by QueryTel.
                        QueryTel may <span class="font-semibold text-orange-600">discontinue</span> the use of this tool
                        without prior notice.
                    </p>
                </div>
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
                class="inline-block bg-neutral-900 text-white px-6 py-3 rounded hover:bg-neutral-800 transition">Let’s
                Talk</a>
        </div>
    </section>

    <!-- CONTACT FORM -->
    <section id="contact" class="py-20 bg-gray-50">
        <div class="max-w-3xl mx-auto px-6">
            <h3 class="text-2xl font-semibold mb-8 text-center">Get In Touch</h3>
            <form class="space-y-6" action="sendmail.php" method="POST">
                <div class="grid md:grid-cols-2 gap-6">
                    <input type="text" name="name" placeholder="Your Name"
                        class="w-full border border-black px-4 py-3 rounded" required />
                    <input type="email" name="email" placeholder="Email Address"
                        class="w-full border border-black px-4 py-3 rounded" required />
                </div>
                <input type="tel" name="phone" placeholder="Phone Number"
                    class="w-full border border-black px-4 py-3 rounded" required />
                <textarea rows="4" name="message" placeholder="Your Message"
                    class="w-full border border-black px-4 py-3 rounded resize-none" required></textarea>
                <div class="text-center">
                    <button type="submit"
                        class="bg-neutral-900 text-white px-8 py-3 rounded hover:bg-neutral-800 transition">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </section>
    <?php include("footer.php"); ?>

</body>

</html>