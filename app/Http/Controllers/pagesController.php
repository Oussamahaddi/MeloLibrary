<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class pagesController extends Controller
{
    // load all pages
    public function index() {
        $musics = DB::table('music')->get();
        return view('Pages.index', [
            'playlists' => auth()->user() ? auth()->user()->playlist()->get() : "",
            'musics' => $musics
        ]);
    }

    public function playlist() {
        $playlists = User::find(auth()->id())->playlist;
        return view('Pages.playlist', [
            'playlists' => $playlists
        ]);
    }

    public function signlePlaylist(Playlist $playlist) {
        $playlists = User::find(auth()->id())->playlist;
        $user = $playlist->user;
        return view('Pages.singlePlaylist', [
            'playlists' => $playlists,
            'playlist' => $playlist,
            'user' => $user
        ]);
    }
}
