<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UsersController;
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
Route::get('/register', [ClientController::class, 'create']);

// store client data
Route::post('/store', [ClientController::class, 'store']);

// login form
// Route::get('/login', [ClientController::class, 'login']);

