<?php

use App\Http\Controllers\ArtistsController;
use App\Http\Controllers\BandsController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MusicsController;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\MusicLikesController;
use App\Http\Controllers\PlaylistMusicsController;

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


////////////////// admin \\\\\\\\\\\\\\\\\\\\\\\
// handle the authentification if admin go to dashboard
Route::middleware(['auth', 'isAdmin'])->group(function () {
    // pages of dashboard
    Route::get('/admin/dashboard',[DashboardsController::class, 'index']);
    Route::get('/admin/music', [DashboardsController::class, 'music']);
    Route::get('/admin/artist', [DashboardsController::class, 'artist']);
    Route::get('/admin/band', [DashboardsController::class, 'band']);

    /////////// Music \\\\\\\\\\\\\\\\
    // create music form
    Route::get('/admin/createMusic', [MusicsController::class, 'musicForm']);
    // store music on database
    Route::post('/admin/storemusic', [MusicsController::class, 'addMusic']);
    // delete music with id
    Route::get('/admin/deleteMusic/{id}',[MusicsController::class, 'removeMusic']);
    // edit music with id
    Route::get('/admin/editMusic/{music}',[MusicsController::class, 'editMusicForm']);
    // store the update music with id
    Route::put('/admin/storeEditMusic/{music}',[MusicsController::class, 'storeEditMusic']);

    /////////// Artist \\\\\\\\\\\\\\\\
    // show artist from
    Route::get('/admin/addArtist', [ArtistsController::class, 'artistForm']);
    // store artist
    Route::post('/admin/storeArtist', [ArtistsController::class, 'storeArtist']);
    // edit artist
    Route::get('/admin/editArtistForm/{artist}', [ArtistsController::class, 'editArtistForm']);
    // store edit artist
    Route::put('/admin/storeEditArtist/{artist}', [ArtistsController::class, 'storeEditArtist']);
    // delete artist
    Route::get('/admin/deleteArtist/{artist}', [ArtistsController::class, 'deleteArtist']);
    
    ///////////// Band \\\\\\\\\\\\\\\\\
    // show band form
    Route::get('/admin/createBandForm', [BandsController::class, 'createBandForm']);
    // store the band info
    Route::post('/admin/storeBand', [BandsController::class, 'storeBand']);
    // edit the bend form
    Route::get('/admin/editBandForm/{band}', [BandsController::class, 'editBandForm']);
    // store edit artist
    Route::put('/admin/storeEditBand/{band}', [BandsController::class, 'storeEditBand']);
    // delete band
    Route::get('/admin/deleteBand/{band}', [BandsController::class, 'deleteBand']);
});


////////////////// user \\\\\\\\\\\\\\\\\\\\\\
// home page that load recent play
Route::get('/', [pagesController::class, 'index']);
// register form
Route::get('/register', [UsersController::class, 'create'])->middleware('guest');
// store client data
Route::post('/store', [UsersController::class, 'store']);
// login form
Route::get('/login', [UsersController::class, 'login'])->name('login')->middleware('guest');
// log in user
Route::post('/users/authentification' , [UsersController::class , 'authentification']);
// log out
Route::get('/logout', [UsersController::class, 'logout']);

///// Playlist 
// playlist page
Route::get('/playlist', [pagesController::class, 'playlist'])->middleware('auth');
// load create playlist form
Route::get('/createPlaylist', [PlaylistsController::class, 'playlistForm'])->middleware('auth');
// load create playlist form
Route::post('/storeplaylist', [PlaylistsController::class, 'addPlaylist'])->middleware('auth');
// load single playlist page that has musics
Route::get('/playlist/{playlist}', [pagesController::class, 'signlePlaylist'])->middleware('auth');
// edit playlist
Route::get('/editPlaylist/{playlist}', [PlaylistsController::class, 'editPlaylistForm']);
// store edit playlist
Route::put('/storeEditPlaylist/{playlist}', [PlaylistsController::class , 'storeEditPlaylist']);
// delete playlist
Route::get('/deletePlaylist/{playlist}', [PlaylistsController::class, 'deletePlaylist']);


////////// playlist music
// add to playlist music 
Route::get('/addToPlaylist/{playlist}/{music}', [PlaylistMusicsController::class, 'addToPlaylist'])->middleware('auth');

// delete music from playlist
Route::get('/deleteMusic/{id}', [PlaylistMusicsController::class, 'deletePlaylistMusic'])->middleware('auth');


////////// music likes
// load liked music page
Route::get('/likedmusic', [pagesController::class, 'likedMusic'])->middleware('auth');
// load single 
Route::get('/singleMusic/{music}', [pagesController::class, 'singleMusic'])->middleware('auth');
// like music
Route::get('/likeMusic/{music}/{user}', [MusicLikesController::class, 'likeMusic'])->middleware('auth');
// unlike music
Route::get('/unlikeMusic/{music}/{user}', [MusicLikesController::class, 'unlikeMusic'])->middleware('auth');


////////// comments \\\\\\\\\\\
// store comment
Route::post('/comment/{music}', [CommentsController::class, 'storeComment']);