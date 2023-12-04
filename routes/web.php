<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Http\Controllers\PlaylistController;

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

Route::get('/', [Index::class, 'index'])->name('save-playlist');

Route::get('/playlist', [PlaylistController::class, 'index'])->name('playlist');

Route::get('/playlist/details/{id}', [PlaylistController::class, 'viewPlaylist'])->name('playlist-view');

Route::get('/playlist/create', [PlaylistController::class, 'create'])->name('playlist.save');

Route::get('/playlist/update/{id}', [PlaylistController::class, 'update'])->name('playlist.edit');

Route::post('/playlist/create', [PlaylistController::class, 'createPlaylist'])->name('playlist.create');

Route::post('/playlist/update', [PlaylistController::class, 'updatePlaylist'])->name('playlist.update');

Route::get('/playlist/edit/music/{id}', [PlaylistController::class, 'editMusicPlaylistView'])->name('playlist.editmusicview');

Route::post('/playlist/edit/music/', [PlaylistController::class, 'editMusicPlaylist'])->name('playlist.editmusic');

Route::get('/playlist/delete/music/{id}', [PlaylistController::class, 'deleteMusicPlaylist'])->name('playlist.deletemusic');

Route::get('/playlist/edit/{id}', [PlaylistController::class, 'editPlaylistView'])->name('playlist.viewedit');

Route::post('/playlist/edit', [PlaylistController::class, 'editPlaylist'])->name('playlist.editname');

Route::get('/playlist/remove/{id}', [PlaylistController::class, 'removePlaylist'])->name('playlist.remove');
