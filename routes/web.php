<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\komenController;
use App\Models\forum;
use App\Models\upload;
use App\Models\koment;
use App\Models\komenta;

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


/* Routing for upload*/ 
Route::get('upload', [UploadController::class, 'index']);
Route::post('upload-store', [UploadController::class, 'store']);
Route::get('explore', [UploadController::class, 'view']);
Route::get('step/{id}', [UploadController::class, 'details']);

/* Routing for forum*/ 
Route::get('ask', [PostController::class, 'index']);
Route::post('ask-store', [PostController::class, 'store']);
Route::get('forum', [PostController::class, 'view']);
Route::get('detail/{id}', [PostController::class, 'details']);

/* Routing for komen*/ 
Route::post('/savefr/{slug}/{id}',[komenController::class,'store1'])->middleware('auth')->name('savefr');
Route::post('/savest/{slug}/{id}',[komenController::class,'store2'])->middleware('auth')->name('savest');

Route::get('/', function () {
    $uploadController = new UploadController();
    $hmrecent = $uploadController->viewrc();
    
    $uploadController = new UploadController();
    $hmexp = $uploadController->viewhm();
    
    return view('home', compact('hmrecent', 'hmexp'));
})->name('home');



Route::view('/lihatdata', 'lihatdata')->name('lihatdata');
Route::view('/updatedata', 'updatedata')->name('updatedata');

Route::get('lihatdata/{id}', [UserController::class, 'lihat']);
Route::get('editdata/{id}', [UserController::class, 'edit']);
Route::patch('updatedata/{id}', [UserController::class, 'update']);
Route::delete('hapus{id}', [UserController::class, 'destroy']);

/*Sudah Benar*/
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

Route::view('/admindb', 'admindb')->name('admindb');
Route::get('admindb', [UserController::class, 'show'])->middleware('auth')->name('admin');
Route::get('/admindb', [UserController::class, 'show'])->middleware('auth')->name('admin');
Route::get('/tambah', [UserController::class, 'tambah'])->middleware('auth')->name('tambah');

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
