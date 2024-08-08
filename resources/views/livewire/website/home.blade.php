<div>
    <main class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-slate-700 dark:text-slate-300">
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
            <div class="w-1/2 shadow-xl p-4 rounded-lg bg-slate-100 text-slate-700 -rotate-12 hover:rotate-0 transition-all">
                <img src="{{ asset('static/profile_beach.jpeg') }}" alt=""
                    class="w-full rounded-md"
                >
                <p class="mt-2 text-center font-mono">This is me</p>
            </div>
            <div class="w-1/2 -ml-8 shadow-xl p-4 rounded-lg bg-slate-100 text-slate-700 rotate-6 hover:rotate-0 transition-all">
                <img src="{{ asset('static/me-and-the-boss.webp') }}" alt=""
                    class="w-full aspect-square object-cover rounded-md"
                >
                <p class="mt-2 text-center font-mono">Me + The Boss</p>
            </div>
        </section>

        <section class="py-12">
            <p class="text-xs font-medium uppercase text-emerald-500 dark:text-emerald-400">Projects</p>

            <div class="mt-6">
                <a href="https://linkd.page?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="linkd">Linkd</a>
                <p>
                    A privacy-focused, link in bio platform. Free for individuals, and affordable to all business sizes.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://voicebits.co?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="voicebits">Voicebits</a>
                <p>
                    Yet another podcast hosting provider.
                </p>
            </div>
        </section>

        <section class="py-12">
            <p class="text-xs font-medium uppercase text-emerald-500 dark:text-emerald-400">Client work</p>

            <div class="mt-6">
                <a href="https://urbeuniversity.edu?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="urbe">urbeuniversity.edu</a>
                <p>
                    The main website for URBE University. I also built their custom landing pages platform, and Admissions portal.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://sosmetaxservices.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="sosme">sosmetaxservices.com</a>
                <p>
                    The main website for SOSME Accounting & Taxes Services, LLC - an accounting and taxes office in Pembroke Pines, Fl.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://merceylaw.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="merceylaw">merceylaw.com</a>
                <p>
                    The main website for MVL Law Firm, LLC - an inmigration law firm operating in South Florida.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://www.tpbsgroup.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="tpbs">tpbsgroup.com</a>
                <p>
                    The main website for TPBS Corp, an accounting and taxes office in Miami, Fl.
                </p>
            </div>
            <div class="mt-6">
                <a href="https://mjacctax.com?utm_source=elvisbgdotdev" class="dark:text-white hover:text-emerald-500 transition-all font-semibold" target="mjacctax">mjacctax.com</a>
                <p>
                    {{__("The main website for MJ Accounting and Taxes Services, LLC - an accounting and taxes office in Miami, Fl.")}}
                </p>
            </div>
        </section>
    </main>


    {{-- <footer class="bg-white dark:bg-slate-700/80 py-24">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 text-slate-300">
            @livewire('website.contact')
        </div>
    </footer> --}}
</div>
