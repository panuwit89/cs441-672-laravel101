<x-layouts.main>
    <h1 class="text-5xl py-8 ">My Playlists</h1>

    <div>
        <a href="{{ route('playlists.create') }}" class="px-4 py-2 bg-green-300 shadow-md">
            Create New Playlist
        </a>
    </div>

    <div>
        @foreach($playlists as $playlist)
            <div class="text-3xl mt-8">
                <a class="border-4 border-red-600" href="{{ route('playlists.show', ['playlist' => $playlist]) }}">
                    {{ $playlist->name }}
                </a>
            </div>
        @endforeach
    </div>
</x-layouts.main>
