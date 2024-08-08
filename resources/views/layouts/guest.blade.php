<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class=" selection:bg-teal-100 selection:text-teal-900">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <!-- Fathom - beautiful, simple website analytics -->
        @if (request()->routeIs('login') && request()->routeIs('register'))
            <script src="https://cdn.usefathom.com/script.js" data-site="SBIGASGI" defer></script>
        @endif

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="bg-gray-100 dark:bg-gray-800">
        <div class="font-sans text-gray-900 dark:text-gray-50 antialiased">
            {{ $slot }}
        </div>

        @stack('modals')
        @livewireScripts
    </body>
</html>
