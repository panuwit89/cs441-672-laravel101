<x-layouts.main>

    <h1 class="text-5xl font-bold">
        {{ $playlist->name }}
    </h1>

    <div class="my-4">
        <a class="border-4 border-red-600" href="{{ route('playlists.edit', ['playlist' => $playlist]) }}">Edit This Playlist</a>

    </div>

    <h2 class="text-3xl">
        {{ $playlist->songs->count() }} Songs
    </h2>

    @foreach($playlist->songs as $song)
        <x-songs.track :song="$song"></x-songs.track>
    @endforeach

</x-layouts.main>
