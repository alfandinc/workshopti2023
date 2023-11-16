<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/testing', [PostController::class, 'index']);


Route::resource('mahasiswa', MahasiswaController::class);

// GET /posts - Index (show all posts)
// GET /posts/create - Create (show the form to create a new post)
// POST /posts - Store (save a new post)
// GET /posts/{id} - Show (show a specific post)
// GET /posts/{id}/edit - Edit (show the form to edit a specific post)
// PUT/PATCH /posts/{id} - Update (update a specific post)
// DELETE /posts/{id} - Destroy (delete a specific post)
