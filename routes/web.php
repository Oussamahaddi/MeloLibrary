<?php

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MusicsController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\DashboardsController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('', function () {
    return view('test');
});


// home page that load recent play
Route::get('/', [pagesController::class, 'index']);

// register form
Route::get('/register', [UsersController::class, 'create']);
// store client data
Route::post('/store', [UsersController::class, 'store']);

// login form
Route::get('/login', [UsersController::class, 'login'])->name('login');

// handle the authentification if admin go to dashboard
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/admin/dashboard',[DashboardsController::class, 'index']);
    Route::get('/admin/music', [DashboardsController::class, 'music']);
    Route::get('/admin/artist', [DashboardsController::class, 'artist']);
    // create music form
    Route::get('/admin/createMusic', [MusicsController::class, 'musicForm']);
    // store music on database
    Route::post('/admin/storemusic', [MusicsController::class, 'addMusic']);
    // delete music with id
    Route::get('/admin/deleteMusic/{id}',[MusicsController::class, 'removeMusic']);
});

// log in user
Route::post('/users/authentification' , [UsersController::class , 'authentification']);

// log out
Route::get('/logout', [UsersController::class, 'logout']);

// playlist page
Route::get('/playlist', [pagesController::class, 'playlist']);

// load create playlist form
Route::get('/createPlaylist', [PlaylistsController::class, 'playlistForm']);
// load create playlist form
Route::post('/storeplaylist', [PlaylistsController::class, 'addPlaylist']);

// load create playlist form
Route::get('/admin/createMusic', [MusicsController::class, 'musicForm']);
// load create playlist form
Route::post('/admin/storemusic', [MusicsController::class, 'addMusic']);

////////////////////////////////// dashboard ////////////////////////////////////////

