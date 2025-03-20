<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kingelffe Homepage</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/general.css') }}">

    <!--Navbar-->
    <div class="flex justify-center p-2 text-white space-x-12">
        <a href="/homepageV2">
            <h1 class="font-semibold text-md {{ request()->is("homepageV2") ? "text-blue-400" : 'text-white' }} hover:font-black">Home</h1>
        </a>
        <a href="/aboutV2">
            <h1 class="text-md font-semibold {{ request()->is("aboutV2") ? "text-blue-400" : 'text-white' }} hover:font-black">About</h1>
        </a>
        <a href="/galleryV2">
            <h1 class="text-md font-semibold {{ request()->is("galleryV2") ? "text-blue-400" : 'text-white' }} hover:font-black">Gallery</h1>
        </a>
        <a href="/serverV2">
            <h1 class="text-md font-semibold {{ request()->is("serverV2") || request()->is("wikiV2") ? "text-blue-400" : 'text-white' }} hover:font-black">Server</h1>
        </a>
        <a href="/downloadsV2">
            <h1 class="text-md font-semibold {{ request()->is("downloadsV2") ? "text-blue-400" : 'text-white' }} hover:font-black">Downloads</h1>
        </a>
    </div>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-r from-slate-500 to-slate-800 h-full flex flex-col min-h-screen">
    <main class="flex-grow">
        <!--Content-->
        {{ $slot }}
    </main>
</body>

<footer class="footer mt-auto">
    <div class="bg-slate-600 flex p-2" style="border-top-width: 3px; border-top-color: black;">
        <p>&copy;Copyright 2024</p>
    </div>
</footer>
</html>
