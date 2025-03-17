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
        <iframe src="https://dynmap.wumboclip.com/" title="Dynmap" style="width: 1000px;height: 500px"></iframe>
    </div>
    <div class="h-full">
        <h1 class="text-4xl font-black text-center text-white p-3">Moderators</h1>
        <div class="flex gap-16 bg-slate-500 h-[60%] p-3 items-center justify-center" id="users-container">
            <!-- Users will be dynamically injected here by AJAX -->
            @include('partials.minecraftUsers', ['usersToShow' => $usersToShow])
        </div>

        <div class="flex justify-center gap-4 p-3">
            <!-- Previous Button -->
            <a href="javascript:void(0);" class="previous roundButton" data-offset="{{ $prevOffset }}" style="text-decoration: none; display: inline-block; padding: 8px 16px;">&#8249;</a>
            <!-- Next Button -->
            <a href="javascript:void(0);" class="next roundButton" data-offset="{{ $nextOffset }}" style="text-decoration: none; display: inline-block; padding: 8px 16px;">&#8250;</a>
        </div>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handle the Next and Previous buttons
        document.querySelectorAll('.previous, .next').forEach(function (button) {
            button.addEventListener('click', function () {
                let offset = button.getAttribute('data-offset');

                // Make the AJAX request to fetch the new users
                fetch(`/serverV2/paginate?currentOffset=${offset}`, {
                    method: 'GET',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                })
                    .then(response => response.json())
                    .then(data => {
                        // Update the user list
                        document.getElementById('users-container').innerHTML = data.usersToShow;
                        // Update the next and previous offsets
                        document.querySelector('.next').setAttribute('data-offset', data.nextOffset);
                        document.querySelector('.previous').setAttribute('data-offset', data.prevOffset);
                    })
                    .catch(error => console.error('Error:', error));
            });
        });
    });
</script>
