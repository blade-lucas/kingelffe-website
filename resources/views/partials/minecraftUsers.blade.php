@foreach ($usersToShow as $user)
    <div class="h-64 w-44">
        <h1 class="text-white font-semibold text-2xl text-center" style="text-shadow: black 1px 0 10px;">
            {{ $user->username }}
        </h1>

        <!-- Image container with flexbox for horizontal centering -->
        <div class="flex justify-center">
            <img src="https://minotar.net/armor/body/{{ $user->uuid }}/100.png" alt="{{ $user->username }}">
        </div>

        <h1 class="text-white font-bold text-xl text-center" style="text-shadow: black 1px 0 10px;">
            {{ $user->usertype }}
        </h1>
    </div>
@endforeach
