<x-layouts.main>
    <h1 class="text-5xl">
        Edit Artist
    </h1>

    <form action="{{ route('artists.update', ['artist' => $artist]) }}" method="POST">

        @csrf
        @method('PUT')

        <label for="artist_name">Artist Name</label>
        @error('name')
            <p class="text-red-600 text-lg">{{ $message }}</p>
        @enderror
        <input class="border border-gray-400 @error('name') border-red-400 bg-red-100 @enderror" type="text" id="artist_name" name="name" value="{{ old('name', $artist->name) }}">

        <div>
            <button type="submit">UPDATE</button>
        </div>
    </form>

    @can('delete', $artist)
    <div class="mt-8">
        <h2 class="text-4xl">DANGER ZONE</h2>

        @if (session('error'))
            <p class="font-bold">{{ session('error') }}</p>
        @endif

        <form action="{{ route('artists.destroy', ['artist' => $artist]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-500 px-4 py-2 border shadow-sm border-red-500">Delete this artist</button>
        </form>
    </div>
    @endcan
</x-layouts.main>
