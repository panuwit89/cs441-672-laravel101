<?php

namespace App\Repositories;

use App\Models\Artist;
use App\Models\Song;
use App\Repositories\Traits\SimpleCRUD;
use Illuminate\Database\Eloquent\Collection;

class ArtistRepository
{
    use SimpleCRUD;
    private string $model = Artist::class;

    public function filterByName(string $name): Collection
    {
        return $this->model::where('name', 'LIKE', "%$name%")->get();
    }

    public function filterBySongId(int $id): Artist
    {
        return $this->model::where('song_id', $id)->firstOrFail();
    }

    public function isExists(string $name, int $id = null): bool
    {
        $query = $this->model::query();
        $query = $query->where('name', $name);
        if ($id) {
            $query = $query->where('id', '<>', $id);
        }
        return $query->exists();
    }

    public function addSong(Artist $artist, mixed $attributes) {
        $song = new Song();
        $song->title = $attributes['title'];
        $song->duration = $attributes['duration'];
        return $artist->songs()->save($song);
    }
}
