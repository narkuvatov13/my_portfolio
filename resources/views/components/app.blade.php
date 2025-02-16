<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

<body class="font-sans antialiased bg-white dark:bg-slate-900 ">

    <x-navbar></x-navbar>

    {{ $slot }}

    <div class="mb-96 mt-96 p-96 bg-white">
        <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus pariatur voluptatum dolor, nobis iusto animi quae? Sed, ratione accusamus mollitia laudantium quae dignissimos sit exercitationem doloribus, modi dolorem repudiandae esse.</h1>
    </div>
    <x-frontend-layout>
        <div class="flex justify-center mb-96 mt-96">
            <button class="bg-slate-900 hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-400 focus:ring-offset-2 focus:ring-offset-slate-50 text-white font-semibold h-12 px-6 rounded-lg w-full flex items-center justify-center sm:w-auto dark:bg-sky-500 dark:highlight-white/20 dark:hover:bg-sky-400">Test</button>

        </div>


    </x-frontend-layout>

</body>

</html>