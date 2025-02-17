<!DOCTYPE html>
<html
    x-data="{ isDarkMode: localStorage.getItem('dark') === 'true'}"
    x-init="$watch('isDarkMode', value => localStorage.setItem('dark',value))"
    x-bind:class="{ 'dark': isDarkMode }"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <!-- AlpineJs -->
    <!-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> -->


    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=merriweather-sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet" />
    <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> -->
</head>

<body class="font-sans antialiased bg-white dark:bg-slate-900">

    <x-navbar></x-navbar>

    <div class="px-16">
        {{ $slot }}
    </div>
    <!-- <div class="mt-96 mb-96 ">sadasd</div> -->
    <x-footer></x-footer>
</body>

</html>