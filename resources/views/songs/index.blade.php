<x-layouts.main>
<body class="bg-gradient-to-r from-teal-800 to-teal-200">
    <div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-8 drop-shadow-lg">
        <div class="bg-gray-300 py-2 px-4">
            <h2 class="text-xl font-semibold text-gray-800">Song Playlist</h2>
        </div>
        <ul class="divide-y divide-gray-200">
            @foreach($songs as $song)
                <x-songs.track :song="$song"></x-songs.track>
            @endforeach
        </ul>
    </div>
</body>
</x-layouts.main>
