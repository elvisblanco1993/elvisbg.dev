<div>
    <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-zinc-700 dark:text-zinc-300">
        <section class="py-12">
            <div class="">
                <p class="text-xs font-medium uppercase text-emerald-500 dark:text-emerald-400">About Me</p>
                <p class="mt-3 text-xl">Hi there! My name is Elvis Blanco Gonzalez.</p>
                <p class="mt-6">
                    I'm a full stack developer who loves helping others build a better web experience. With several years of experience, I've honed my skills in creating intuitive and engaging interfaces, as well as ensuring everything runs smoothly behind the scenes.
                </p>
                <p class="mt-3">
                    I’m pretty active on <a href="https://x.com/_ebglez" class="link" target="_x">Twitter</a> and <a href="https://www.linkedin.com/in/elvis-blanco-gonzalez-313b29109" target="_linkedin" class="link">Linkedin</a>, where I chat about the projects I'm working on and share my thoughts on all things tech. Feel free to join the conversation — I’d love to connect!
                </p>
            </div>
        </section>

        <section class="py-12 flex items-center justify-center">
            <div class="w-1/2 shadow-xl p-4 rounded-lg bg-zinc-100 text-zinc-700 -rotate-12 hover:rotate-0 transition-all">
                <img src="{{ asset('static/profile_beach.jpeg') }}" alt=""
                    class="w-full rounded-md"
                >
                <p class="mt-2 text-center font-mono">This is me</p>
            </div>
            <div class="w-1/2 -ml-8 shadow-xl p-4 rounded-lg bg-zinc-100 text-zinc-700 rotate-6 hover:rotate-0 transition-all">
                <img src="{{ asset('static/me-and-the-boss.webp') }}" alt=""
                    class="w-full aspect-square object-cover rounded-md"
                >
                <p class="mt-2 text-center font-mono">Me + The Boss</p>
            </div>
        </section>

        <section class="py-12">
            <p class="text-xs font-medium uppercase text-emerald-500 dark:text-emerald-400">Projects</p>

            <div class="mt-6">
                <a href="#" class="dark:text-white hover:text-emerald-500 transition-all font-semibold">Tinycat</a>
                <p>
                    A secure, easy-to-use client portal designed for small and medium-sized accounting firms. (Currently in private beta)
                </p>
            </div>
            <div class="mt-6">
                <a href="https://linkd.page?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="linkd">Linkd</a>
                <p>
                    A privacy-first link-in-bio platform that’s free for individuals and budget-friendly for businesses of all sizes.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://voicebits.co?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="voicebits">Voicebits</a>
                <p>
                    Your new go-to podcast hosting provider – offering reliable services for creators at every level.
                </p>
            </div>
        </section>

        <section class="py-12">
            <p class="text-xs font-medium uppercase text-emerald-500 dark:text-emerald-400">Client work</p>
            <div class="mt-6">
                <a href="https://steelcommandercorp.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="urbe">steelcommandercorp.com</a>
                <p>
                    Collaborated closely with Steel Commander's IT Director to develop an advanced internal Sales and Project Management CRM, streamlining operations and improving team efficiency. Also played a key role in enhancing their employee learning platform and crafting a fresh, user-friendly landing page infrastructure.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://urbeuniversity.edu?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="urbe">urbeuniversity.edu</a>
                <p>
                    Designed and developed the core website for URBE University, elevating its digital presence. Additionally, I created a custom landing page platform and an Admissions portal to simplify the enrollment process and engage prospective students seamlessly.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://sosmetaxservices.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="sosme">sosmetaxservices.com</a>
                <p>
                    Built the main website for SOSME Accounting & Taxes Services, LLC, a trusted accounting and tax office based in Pembroke Pines, FL. The website highlights their services while providing a professional, easy-to-navigate platform for clients seeking expert financial guidance.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://merceylaw.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="merceylaw">merceylaw.com</a>
                <p>
                    Developed the main website for MVL Law Firm, LLC, a premier immigration law firm in South Florida. The site offers an informative, approachable experience for clients navigating the complex world of immigration law.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://www.tpbsgroup.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="tpbs">tpbsgroup.com</a>
                <p>
                    Created the main website for TPBS Corp, a prominent accounting and tax services firm in Miami, FL. The website showcases their services while offering an intuitive interface to connect with clients seeking reliable financial advice.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://mjacctax.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="mjacctax">mjacctax.com</a>
                <p>
                    Designed and launched the main website for MJ Accounting and Tax Services, LLC, a leading accounting firm in Miami, FL. The site delivers clear, concise information about their tax and accounting services, helping local clients manage their finances with ease.
                </p>
            </div>
        </section>
    </main>


    <footer>
        <div class="bg-white dark:bg-zinc-700/80 py-24">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-zinc-300">
                @livewire('website.contact')
            </div>
        </div>
        <div class="bg-zinc-900/80 py-24">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-zinc-300">
                @livewire('website.subscribe')
            </div>
        </div>
    </footer>
</div>
