<x-layouts.main>

    <h1 class="text-5xl py-4">Artists</h1>

    @can('create', \App\Models\Artist::class)
        <div>
            <a href="{{ route('artists.create') }}" class="px-4 py-2 bg-green-300 shadow-md">
                Create New Artist
            </a>
        </div>
    @endcan

    {{ $artists->links() }}

    @foreach($artists as $artist)
        <div class="mt-4">
            <a href="{{ route('artists.show', ['artist' => $artist]) }}">
                <img src="{{ $artist->image_path }}" alt="" class="w-16">
                <p>{{ $artist->name }}</p>
            </a>
        </div>
    @endforeach

</x-layouts.main>
