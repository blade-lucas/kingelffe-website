<x-baseLayout>
    <section class="py-3 h-full">
        <h1 class="text-4xl font-black text-center text-white p-3">King's Court Server Wiki</h1>
        <div class="flex heroServer gap-4 h-[70%] pt-3 justify-end items-end p-5">
            <h1 class="text-3xl font-black text-white" style="text-shadow: black 1px 0 10px;">King's Court Wiki</h1>
        </div>
    </section>

    <hr class="solid">
    <div class="flex justify-center p-2 text-white space-x-12">
        <a href="/wiki/welcome" id="serverInfo">
            <h1 class="font-semibold text-md hover:font-black">Server Info</h1>
        </a>
        <a href="/wiki/plugins-overview" id="plugins">
            <h1 class="font-semibold text-md hover:font-black">Plugins</h1>
        </a>
        <a href="/wiki/basic-commands" id="commands">
            <h1 class="font-semibold text-md hover:font-black">Commands</h1>
        </a>
        <a href="/wiki/how-to-join" id="tutorials">
            <h1 class="font-semibold text-md hover:font-black">Tutorials</h1>
        </a>
    </div>
    <hr class="solid mb-3">

    <div class="h-full">
        <div class="bg-slate-500 h-[85%]">
            <div class="flex justify-center items-center bg-slate-400 h-[35%] gap-4">
                <a href="#" class="previous roundButton" style="text-decoration: none; display: inline-block; padding: 8px 16px;">&#8249;</a>

                @php
                    $wikiEntries = DB::table('wiki')->get();
                @endphp

                <x-wikiCard>
                    <x-slot:title>
                        {{ $wikiEntries[3]->wiki_name }}
                    </x-slot:title>
                </x-wikiCard>
                <x-wikiCard>
                    <x-slot:title>
                        {{ $wikiEntries[4]->wiki_name }}
                    </x-slot:title>
                </x-wikiCard>
                <x-focusWikiCard>
                    <x-slot:title>
                        {{ $wikiEntries[0]->wiki_name }}
                    </x-slot:title>
                </x-focusWikiCard>
                <x-wikiCard>
                    <x-slot:title>
                        {{ $wikiEntries[1]->wiki_name }}
                    </x-slot:title>
                </x-wikiCard>
                <x-wikiCard>
                    <x-slot:title>
                        {{ $wikiEntries[2]->wiki_name }}
                    </x-slot:title>
                </x-wikiCard>

                <a href="#" class="next roundButton" style="text-decoration: none; display: inline-block; padding: 8px 16px;">&#8250;</a>
            </div>
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</x-baseLayout>
