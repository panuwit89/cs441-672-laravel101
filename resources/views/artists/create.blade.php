<x-layouts.main>
    <h1 class="text-5xl">
        Create New Artist
    </h1>

    <form action="{{ route('artists.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <label for="artist_name">Artist Name</label>
        @error('name')
        <p class="text-red-600 text-lg">
            {{ $message }}
        </p>
        @enderror
        <input class="border border-gray-400 @error('name') border-red-400 bg-red-100 @enderror" type="text" id="artist_name" name="name" value="{{ old('name') }}">

        <div>
            <label for="artist_image">Artist Image</label>
            @error('image')
                <p class="text-red-600 text-lg">
                    {{ $message }}
                </p>
            @enderror
            <input type="file" name="image" id="artist_image">
        </div>

        <div>
            <button type="submit">CREATE</button>
        </div>
    </form>
</x-layouts.main>
