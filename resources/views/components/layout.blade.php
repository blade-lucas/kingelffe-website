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

    <nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary justify-center">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link {{ request()->is("/") ? "bg-gray-200 rounded" : 'bg-body-tertiary' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is("about") ? "bg-gray-200 rounded" : 'bg-body-tertiary' }}" href="/about">About Kingelffe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is("gallery") ? "bg-gray-200 rounded" : 'bg-body-tertiary' }}" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is("server") ? "bg-gray-200 rounded" : 'bg-body-tertiary' }}" href="/server">King's Court Server</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is("downloads") ? "bg-gray-200 rounded" : 'bg-body-tertiary' }}" href="/downloads">Downloads</a>
            </li>
        </ul>
    </nav>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bgImage h-full">

    {{ $slot }}

</body>

<footer class="footer">
    <div class="navbar navbar-expand-lg bg-body-tertiary justify-center">
        <img src="{{ asset('images/logos/youtube.png') }}" alt="Youtube" height="25px" width="25px" style="margin-right: 10px">
        <img src="{{ asset('images/logos/twitch.png') }}" alt="Twitch" height="25px" width="25px" style="margin-right: 10px">
        <img src="{{ asset('images/logos/twitter.png') }}" alt="Twitter" height="25px" width="25px" style="margin-right: 10px">
        <img src="{{ asset('images/logos/instagram.png') }}" alt="Instagram" height="25px" width="25px" style="margin-right: 10px">
        <img src="{{ asset('images/logos/discord.png') }}" alt="Discord" height="25px" width="25px" style="margin-right: 10px">
    </div>
</footer>
</html>

<!--
<a href="https://www.flaticon.com/free-icons/instagram-logo" title="instagram logo icons">Instagram logo icons created by Freepik - Flaticon</a>
<a href="https://www.flaticon.com/free-icons/brands-and-logotypes" title="brands and logotypes icons">Brands and logotypes icons created by Freepik - Flaticon</a>
<a href="https://www.flaticon.com/free-icons/social-network" title="social network icons">Social network icons created by riajulislam - Flaticon</a>
<a href="https://www.flaticon.com/free-icons/twitch" title="twitch icons">Twitch icons created by Enamo Studios - Flaticon</a>
<a href="https://www.flaticon.com/free-icons/discord" title="discord icons">Discord icons created by Freepik - Flaticon</a>
-->
