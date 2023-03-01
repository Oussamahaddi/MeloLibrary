<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\UsersController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

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

// home page that load recent play
Route::get('/', [pagesController::class, 'index']);

// register form
Route::get('/register', [UsersController::class, 'create']);

// store client data
Route::post('/store', [UsersController::class, 'store']);

// login form
Route::get('/login', [UsersController::class, 'login']);
// ->middleware('auth')

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

