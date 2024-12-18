<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index() {
        $songs = collect([
            [
               'id' => 1,
               'title' => 'Supernova',
               'artist' => 'Aespa',
               'album' => 'Armageddon',
               'duration' => [
                   'minutes' => 3,
                   'seconds' => 14,
               ],
               'image' => '/images/aespa_img.jpg',
               'url' => 'https://images.workpointtoday.com/workpointnews/2022/06/10001226/1654794744_52479_2222222222222222222222.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Bad',
                'artist' => 'Wave To Earth',
                'album' => '0.1 flaws and all',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 24,
                ],
                'image' => '/images/wavetoearth_img.jpeg',
                'url' => 'https://saratogafalcon.org/wp-content/uploads/2023/03/wavetoearth-1024x683.jpeg'
            ],
            [
                'id' => 3,
                'title' => 'ยังไงก็ได้ไป',
                'artist' => 'Season Five',
                'album' => 'ยังไงก็ได้ไป - Single',
                'duration' => [
                    'minutes' => 5,
                    'seconds' => 53,
                ],
                'image' => '/images/seasonfive_img.jpg',
                'url' => 'https://www.fungjaizine.com/wp-content/uploads/2018/09/PR-%E0%B8%8B%E0%B8%B5%E0%B8%8B%E0%B8%B1%E0%B8%99%E0%B9%84%E0%B8%9F%E0%B8%9F%E0%B9%8C-1024x625.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Where the wind blows',
                'artist' => 'Ado',
                'album' => 'UTA SONGS ONE PIECE FILM RED',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 32,
                ],
                'image' => '/images/ado_img.jpg',
                'url' => 'https://lh3.googleusercontent.com/lLZR5YHXD07VDegkcILMPO6PGQ_YX9Ak32eQxDv5AqzBty6Xh3vaCMtNt9bgtS9mSb9Gsqo6ZkAWoQ=w2880-h1200-p-l90-rj'
            ],
            [
                'id' => 5,
                'title' => 'Forget it',
                'artist' => 'Yorushika',
                'album' => 'Forget it',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 47,
                ],
                'image' => '/images/yorushika_img.jpg',
                'url' => 'https://upload.wikimedia.org/wikipedia/commons/2/27/Yorushika_Logo.jpg'
            ]

        ]);

//        return $songs; // return from collect function = json file
        return view('songs.index', [
            'songs' => $songs,
            'songs_count' => count($songs),
        ]);
    }
}
