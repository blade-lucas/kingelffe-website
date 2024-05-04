<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about">About Kingelffe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="gallery">Gallery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="server">King's Court Server</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="downloads">Downloads</a>
            </li>
        </ul>
    </nav>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg">

    <?php echo $slot ?>

</body>

<footer>
    <nav class="navbar bg-body-tertiary justify-center">
        <div class="nav navbar-expand-lg">
            <img src="{{ asset('images/logos/youtubeLogoBlack.png') }}" alt="Youtube" height="25px" width="25px" style="margin-right: 10px">
            <img src="{{ asset('images/logos/twitchLogoBlack.png') }}" alt="Twitch" height="25px" width="25px" style="margin-right: 10px">
            <img src="{{ asset('images/logos/twitterLogoBlack.png') }}" alt="Twitter" height="25px" width="25px" style="margin-right: 10px">
            <img src="{{ asset('images/logos/instagramLogoBlack.png') }}" alt="Instagram" height="18px" width="23px" style="margin-right: 10px">
            <img src="{{ asset('images/logos/discordLogoBlack.png') }}" alt="Discord" height="25px" width="25px" style="margin-right: 10px">
        </div>
    </nav>
</footer>
</html>
