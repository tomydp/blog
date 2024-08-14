<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// $posts = [
//     ['title' => 'First post'],
//     ['title' => 'Second post'],
//     ['title' => 'Third post'],
//     ['title' => 'Fourth post']
// ];

Route::view('/', 'welcome')->name('home');
Route::view('/contacto', 'contact')->name('contact');
// Route::view('/blog', 'blog', ['posts' => $posts])->name('blog');
Route::view('/nosotros', 'about')->name('about');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
// Route::get('/blog', function () {
//     $posts = [
//         ['title' => 'First post'],
//         ['title' => 'Second post'],
//         ['title' => 'Third post'],
//         ['title' => 'Fourth post']
//     ];

//     return view('blog', ['posts' => $posts]);
// })->name('blog');


// Route::match(['put', 'patch'], '/', function() {
    // Usar varias Peticiones y "ANY" para todas
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
