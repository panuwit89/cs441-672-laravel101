<x-layouts.main>
    <h1 class="text-5xl">
        Create New Playlist
    </h1>

    <form action="{{ route('playlists.store') }}" method="POST">

        @csrf
        <div>
            <label for="playlist_name">Playlist Name</label>
            <input type="text" id="playlist_name" name="name">
        </div>

        <div>
            <label for="playlist_access">Playlist Accessibility</label>
            <select id="playlist_access" name="accessibility">
                <option value="PUBLIC" selected>Public</option>
                <option value="PRIVATE">Private</option>
            </select>>
        </div>


        <div>
            <button type="submit">CREATE</button>
        </div>
    </form>
</x-layouts.main>
