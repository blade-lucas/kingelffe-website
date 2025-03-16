<x-baseLayout>
    <section class="py-3 h-full">
        <h1 class="text-4xl font-black text-center text-white p-3">King's Court Viewer Server</h1>
        <div class="flex heroServer gap-4 h-[70%] pt-3 justify-end items-end p-5">
            <h1 class="text-3xl font-black text-white" style="text-shadow: black 1px 0 10px;">Welcome to the King's Court</h1>
        </div>
        <div class="flex justify-center pt-6">
            <h1 class="text-white text-xl font-semibold">Want to Join the Server? Click <a href="#" class="hover:text-blue-700"><u>HERE</u></a> for the IP and Instructions!</h1>
        </div>
    </section>

    <h1 class="text-4xl font-black text-center text-white pb-3">Dynmap</h1>
    <div class="flex justify-center pt-3 pb-24">
        <iframe src="https://dynmap.kingelffe.com/" title="Dynmap" style="width: 1000px;height: 500px"></iframe>
    </div>
    <div class="h-full">
        <h1 class="text-4xl font-black text-center text-white p-3">Moderators</h1>
        <div class="flex gap-16 bg-slate-500 h-[60%] p-3 items-center justify-center">
            <a href="#" class="previous roundButton" style="text-decoration: none; display: inline-block; padding: 8px 16px;">&#8249;</a>
            <div class="h-64 w-44">
                <h1 class="text-white font-semibold text-2xl text-center" style="text-shadow: black 1px 0 10px;">Utahraptorfun</h1>
                <img src="{{ asset('images/avatars/utahAvatar.png') }}" alt="utah">
                <h1 class="text-white font-bold text-xl text-center" style="text-shadow: black 1px 0 10px;">Moderator</h1>
            </div>

            <div class="h-64 w-44">
                <h1 class="text-white font-semibold text-2xl text-center" style="text-shadow: black 1px 0 10px;">PinkedDuck</h1>
                <img src="{{ asset('images/avatars/pinkedduckAvatar.png') }}" alt="pinkedduck">
                <h1 class="text-white font-bold text-xl text-center" style="text-shadow: black 1px 0 10px;">Admin</h1>
            </div>

            <div class="h-80 w-48">
                <h1 class="text-white font-semibold text-2xl text-center pb-2" style="text-shadow: black 1px 0 10px;">Kingelffe</h1>
                <img src="{{ asset('images/avatars/kingelffeAvatar.png') }}" alt="kingelffe" class="bg-slate-600 rounded p-2">
                <h1 class="text-white font-bold text-xl text-center pt-2" style="text-shadow: black 1px 0 10px;">Owner</h1>
            </div>

            <div class="h-64 w-44">
                <h1 class="text-white font-semibold text-2xl text-center" style="text-shadow: black 1px 0 10px;">JBMDeck</h1>
                <img src="{{ asset('images/avatars/jbmdeckAvatar.png') }}" alt="jbmdeck">
                <h1 class="text-white font-bold text-xl text-center" style="text-shadow: black 1px 0 10px;">Admin</h1>
            </div>

            <div class="h-64 w-44">
                <h1 class="text-white font-semibold text-2xl text-center" style="text-shadow: black 1px 0 10px;">DixieRoseYT</h1>
                <img src="{{ asset('images/avatars/dixieAvatar.png') }}" alt="dixie">
                <h1 class="text-white font-bold text-xl text-center" style="text-shadow: black 1px 0 10px;">Moderator</h1>
            </div>

            <a href="#" class="next roundButton" style="text-decoration: none; display: inline-block; padding: 8px 16px;">&#8250;</a>
        </div>
        <h1 class="text-center text-white font-semibold text-2xl p-5">All Staff members are listed here, Please respect what they say!</h1>
    </div>

    <div class="pb-24">
        <h1 class="text-4xl font-black text-center text-white p-3">Server Wiki</h1>
        <div class="flex justify-center gap-10 pt-8 pb-8">
            <a href="#" class="hover:transition duration-300 hover:scale-105">
                <div class="h-72 w-64 bg-slate-400 border-black border-2 rounded">
                    <img src="{{ asset('images/background.png') }}" alt="about">
                    <div class="items-center justify-center pt-12">
                        <h1 class="text-white text-2xl text-center font-semibold" style="text-shadow: black 1px 0 10px;">Server Info</h1>
                    </div>
                </div>
            </a>
            <a href="#" class="hover:transition duration-300 hover:scale-105">
                <div class="h-72 w-64 bg-slate-400 border-black border-2 rounded">
                    <img src="{{ asset('images/background.png') }}" alt="plugins">
                    <div class="items-center justify-center pt-12">
                        <h1 class="text-white text-2xl text-center font-semibold" style="text-shadow: black 1px 0 10px;">Plugins</h1>
                    </div>
                </div>
            </a>
            <a href="#" class="hover:transition duration-300 hover:scale-105">
                <div class="h-72 w-64 bg-slate-400 border-black border-2 rounded">
                    <img src="{{ asset('images/background.png') }}" alt="commands">
                    <div class="items-center justify-center pt-12">
                        <h1 class="text-white text-2xl text-center font-semibold" style="text-shadow: black 1px 0 10px;">Commands</h1>
                    </div>
                </div>
            </a>
            <a href="#" class="hover:transition duration-300 hover:scale-105">
                <div class="h-72 w-64 bg-slate-400 border-black border-2 rounded">
                    <img src="{{ asset('images/background.png') }}" alt="tutorials">
                    <div class="items-center justify-center pt-12">
                        <h1 class="text-white text-2xl text-center font-semibold" style="text-shadow: black 1px 0 10px;">Tutorials</h1>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex justify-center">
            <a href="/wiki/welcome" class="bg-blue-500 text-white text-xl font-semibold px-8 py-2 rounded border-black border-2 hover:font-bold hover:bg-blue-400 hover:border-white">Server Wiki</a>
        </div>
    </div>

</x-baseLayout>
