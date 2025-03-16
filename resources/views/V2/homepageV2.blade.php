<x-baseLayout>
    <section class="py-3 h-full">
        <div class="bgImageHome h-[80%] border-black border-2 text-white">
            <div class="container mx-auto flex items-center h-3/4">
                <div class="mx-auto flex w-1/4 rounded-lg">
                    <h1 class="text-5xl font-black" style="text-shadow: black 1px 0 10px;">Welcome to<br/>Kingelffe.com</h1>
                </div>
                <div class="mx-auto flex w-1/5">
                    <img src="{{ asset('images/kingelffeCircular.png') }}" alt="KingelffeAvatar">
                </div>
            </div>
            <div class="text-center">
                <p class="font-semibold" style="text-shadow: black 1px 0 10px;">The Official site of all things Kingelffe!</p>
            </div>
        </div>
        <div class="flex justify-center p-4 space-x-8">
            <a href="youtube">
                <img src="{{ asset('images/logos/youtube.png') }}" alt="Youtube" height="40px" width="40px" style="margin-right: 10px">
            </a>
            <a href="twitch">
                <img src="{{ asset('images/logos/twitch.png') }}" alt="Twitch" height="40px" width="40px" style="margin-right: 10px">
            </a>
            <a href="twitter">
                <img src="{{ asset('images/logos/twitter.png') }}" alt="Twitter" height="40px" width="40px" style="margin-right: 10px">
            </a>
            <a href="instagram">
                <img src="{{ asset('images/logos/instagram.png') }}" alt="Instagram" height="40px" width="40px" style="margin-right: 10px">
            </a>
            <a href="discord">
                <img src="{{ asset('images/logos/discord.png') }}" alt="Discord" height="40px" width="40px" style="margin-right: 10px">
            </a>
        </div>
    </section>
</x-baseLayout>
