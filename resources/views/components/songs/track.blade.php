{{--<li class="flex items-center py-4 px-6 hover:bg-gray-100">--}}
{{--    <span class="text-gray-700 text-lg font-medium mr-4">{{ $song['id'] }}</span>--}}
{{--    <a href="{{ url($song['url']) }}" target="_blank"><img class="w-12 h-12 rounded-full object-cover mr-4 cursor-pointer" src={{ url($song['image']) }} alt="Artist"></a>--}}
{{--    <div class="flex-1">--}}
{{--        <h3 class="text-lg font-medium text-gray-800">{{ $song['title'] }}</h3>--}}
{{--        <h4 class="text-gray-600 text-base">{{ $song['artist'] }}</h4>--}}
{{--        <h4 class="text-gray-600 text-base">{{ $song['album'] }}</h4>--}}
{{--    </div>--}}
{{--    <span class="text-gray-600 text-base">{{ $song['duration']['minutes'] }}:{{ $song['duration']['seconds'] }}</span>--}}
{{--</li>--}}

<li class="flex items-center py-4 px-6 hover:bg-gray-100">
    <div class="flex-1">
        <h3 class="text-lg font-medium text-gray-800">{{ $song->title }}</h3>
        <h4 class="text-gray-600 text-base">{{ $song->artist->name }}</h4>
    </div>
</li>

