<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::view('/', 'home')->name('home');
Route::view('/forum', 'forum')->name('forum');
Route::view('/explore', 'explore')->name('explore');
Route::view('/step1', 'step1')->name('step1');
Route::view('/ask', 'ask')->name('ask');

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
