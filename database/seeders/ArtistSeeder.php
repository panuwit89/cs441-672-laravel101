<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artist = Artist::where('name', 'Aespa')->first();
        if($artist === null) {
            Artist::factory()->create(['name' => 'Aespa']);
        }

        $limit = 50;
        $exists = Artist::count();
        if ($exists < $limit) {
            Artist::factory()->count($limit - $exists)->create();
        }
//        Artist::factory()->count(50)->create();
    }
}
