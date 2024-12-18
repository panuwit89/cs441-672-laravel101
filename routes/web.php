<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect()->route('about'); // เปลี่ยนชื่อ route ตามที่นิสิตกำหนด
});

Route::get('/hello', function () {
    return route('hello');
})->name('hello');

Route::get('/hello/{name}/{age?}', function ($name,$age = null) {
    return [
        'greeting' => "Hello {$name}",
        'age' => $age
    ]; // return json
})->name('hello.age');

//Route::get('/hello/{id}', function ($id) {
//    return "Hello {$id}";
//})->name('hello.id');

//Route::post('/about', [AboutController::class, 'index'])->name('about');

Route::get('/about', [AboutController::class, 'index'])->name('about');

//Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

Route::get('/songs', [SongController::class, 'index'])->name('songs.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
