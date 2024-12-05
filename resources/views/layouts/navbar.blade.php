<nav class="w-full py-6 bg-zinc-100/80 dark:bg-zinc-800/80 backdrop-blur-sm">
    <div class="mx-auto flex max-w-lg items-center justify-center gap-8 text-base md:max-w-none text-zinc-400">
        <a href="{{ route('home') }}" @class(["hover:text-zinc-900 dark:hover:text-white transition-all", "text-zinc-900 dark:text-white" => request()->routeIs('home')])>{{ __("Home") }}</a>
    </div>
</nav>
