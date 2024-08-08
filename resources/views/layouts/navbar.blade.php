<nav class="w-full py-6 bg-gray-100/80 dark:bg-gray-800/80 backdrop-blur">
    <div class="mx-auto flex max-w-lg items-center justify-center gap-8 text-base md:max-w-none text-gray-400">
        <a href="{{ route('home') }}" @class(["hover:text-gray-900 dark:hover:text-white transition-all", "text-gray-900 dark:text-white" => request()->routeIs('home')])>{{ __("Home") }}</a>
    </div>
</nav>
