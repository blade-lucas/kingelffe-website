<a href="{{ $url }}" class="hover:transition duration-300 hover:scale-105">
    <div class="h-72 w-64 bg-slate-400 border-black border-2 rounded">
        <img src="{{ asset('images/' . $img) }}" alt="{{ $title }}">
        <div class="items-center justify-center pt-12">
            <h1 class="text-white text-2xl text-center font-semibold" style="text-shadow: black 1px 0 10px;">
                {{ $title }}
            </h1>
        </div>
    </div>
</a>
