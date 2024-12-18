<nav class="bg-teal-800">
    <div class='w-full py-3 border-b'>
        <div class='flex justify-between px-20 items-center font-semibold'>
            <div>
                <h1 class="text-3xl text-white">Laravel101</h1>
            </div>
            <div class='flex xl:gap-10 md:gap-8  gap-2'>
                <a href="{{ route('about') }}" class="my-nav-bar">About</a>
                <a href="{{ route('songs.index') }}" class="my-nav-bar">Songs</a>
            </div>
        </div>
    </div>
</nav>
