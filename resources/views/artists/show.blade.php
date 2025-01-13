<x-layouts.main>

    <h1 class="text-5xl">
        <img class="w-48 h-48" src="{{ $artist->artist_image }}" alt="{{ $artist->name }}">
        {{ $artist->name }}
    </h1>

    <div class="my-4">
        @can('update', $artist)
            <a class="inline-block py-2 px-4 border border-gray-700 bg-pink-100"
               href="{{ route('artists.edit', ['artist' => $artist]) }}">
                Edit This Artist
            </a>
        @endcan
        <a class="inline-block py-2 px-4 border border-gray-700 bg-pink-100"
           href="{{ route('artists.songs.create', ['artist' => $artist]) }}">
            Add Song
        </a>
    </div>

    <h2 class="text-3xl">
        {{ $artist->songs->count() }} Songs
    </h2>

    @foreach($artist->songs as $song)
        <x-songs.track :song="$song"></x-songs.track>
    @endforeach

</x-layouts.main>
