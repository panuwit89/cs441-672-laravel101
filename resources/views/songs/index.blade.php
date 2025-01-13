{{--<x-layouts.main>--}}
{{--<body class="bg-gradient-to-r from-teal-800 to-teal-200">--}}
{{--    <div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-8 drop-shadow-lg">--}}
{{--        <div class="bg-gray-300 py-2 px-4">--}}
{{--            <h2 class="text-xl font-semibold text-gray-800">Song Playlist</h2>--}}
{{--        </div>--}}
{{--        <ul class="divide-y divide-gray-200">--}}
{{--            @foreach($songs as $song)--}}
{{--                <x-songs.track :song="$song"></x-songs.track>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</x-layouts.main>--}}

<x-layouts.main>
<body class="bg-gradient-to-r from-teal-800 to-teal-200">
    <div class="bg-white shadow-md rounded-md overflow-hidden max-w-lg mx-auto mt-8 drop-shadow-lg">
        <div class="bg-gray-300 py-2 px-4">
            <h2 class="text-xl font-semibold text-gray-800">Song Playlist</h2>
        </div>
        <ul class="divide-y divide-gray-200">
            @foreach($songs as $song)
                <li class="flex items-center py-4 px-6 hover:bg-gray-100">
                    <span class="text-gray-700 text-lg font-medium mr-4">{{ $song['id'] }}</span>
                    <a href="{{ url($song['url']) }}" target="_blank"><img class="w-12 h-12 rounded-full object-cover mr-4 cursor-pointer" src={{ url($song['image']) }} alt="Artist"></a>
                    <div class="flex-1">
                        <h3 class="text-lg font-medium text-gray-800">{{ $song['title'] }}</h3>
                        <h4 class="text-gray-600 text-base">{{ $song['artist'] }}</h4>
                        <h4 class="text-gray-600 text-base">{{ $song['album'] }}</h4>
                    </div>
                    <span class="text-gray-600 text-base">{{ $song['duration']['minutes'] }}:{{ $song['duration']['seconds'] }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</x-layouts.main>
