<nav class="bg-teal-800">
    <div class='w-full py-3 border-b'>
        <div class='flex justify-between px-20 items-center font-semibold'>
            <div>
                <h1 class="text-3xl text-white">Laravel101</h1>
            </div>
            <div class='flex xl:gap-10 md:gap-8  gap-2'>
                <a href="{{ route('about') }}" class="my-nav-bar">About</a>
                <a href="{{ route('songs.index') }}" class="my-nav-bar">Songs</a>
                <a href="{{ route('artists.index') }}" class="my-nav-bar">Artists</a>
                @auth
                    <a href="{{ route('playlists.index') }}" class="my-nav-bar">Playlists</a>

                @endauth
            </div>
            <div class="space-x-4">
                @guest
                    <a href="{{ route('login') }}" class="my-nav-bar">Login</a>
                    <a href="{{ route('register') }}" class="my-nav-bar">Register</a>
                @else
                    <p class="inline-block text-white text-2xl">
                        {{ auth()->user()->name }}
                    </p>
                    <form action="{{ route('logout') }}" method="POST" class="inline-block">
                        @csrf
                        <button class="my-nav-bar" type="submit">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>
