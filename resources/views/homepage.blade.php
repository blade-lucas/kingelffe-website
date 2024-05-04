<x-layout>
    <div class="container-xxl homepageContainerBG border border-black border-2 rounded-lg" style="margin-top: 80px;">
        <img src="{{ asset('images/Kingelffe.png') }}" alt="kingelffe" class="profileImg">
        <h1 class="text-center font-semibold xxl dark:text-white ">Kingelffe</h1>
    </div>

    <div class="container-xxl mt-3 mb-3 rounded-lg border border-black border-2 bgColor">
        <h1 class="text-center text-xl mt-3 mb-3">Welcome to Kingelffe's Official Site</h1>

        <div class="row">
            <div><h1 class="text-center xl dark:text-gray-400">Servers</h1></div>
            <p class="text-center text-lg mb-3">I have played on a bunch of servers in my time making content, these are my currently active ones!</p>
            <div class="col-sm-1"></div>
            <div class="col-sm-5 mb-3 mb-sm-0">
                <h1 class="text-center text-xl">PleasantCraft</h1>
                <div class="card">
                    <img src="{{ asset('images/HomePageBanner.png') }}" class="card-img-top" alt="Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Special title treatment</h5>
                        <a href="#" class="btn btn-primary">More About PleasantCraft</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <h1 class="text-center text-xl">Twitch SMP</h1>
                <div class="card">
                    <img src="{{ asset('images/TwitchSMP.png') }}" class="card-img-top" alt="Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Special title treatment</h5>
                        <a href="#" class="btn btn-primary">More About Twitch SMP</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <hr class="mt-5">

        <div class="row mt-5">
            <h1 class="xl text-center dark:text-gray-400">Become Part of the Community</h1>
            <p class="text-center">
                Join the Discord community today to keep up to date with all my content and more!
            </p>
            <img src="{{ asset('images/logos/discordLogoLarge.png') }}" alt="discord" href="#" style="width: 20%; margin-left: auto; margin-right: auto;">
        </div>

        <hr class="mt-5">

        <div class="row mt-5">
            <div><h1 class="text-center xl dark:text-gray-400">Join The King's Court</h1></div>
            <p class="text-center text-lg mb-3">
                Want to join an amazing community server run by the King himself? Click below to learn more about the King's Court Viewer SMP!
            </p>
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="card">
                    <img src="{{ asset('images/KingsCourt.png') }}" class="card-img-top" alt="Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Special title treatment</h5>
                        <a href="#" class="btn btn-primary">More About Kings Court</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>

        <hr class="mt-5">
    </div>
</x-layout>
