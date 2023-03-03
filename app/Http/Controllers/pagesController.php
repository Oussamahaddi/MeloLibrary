<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pagesController extends Controller
{
    // load all pages
    public function index() {
        $playlist = DB::table('playlists')->get();
        return view('Pages.index', [
            'playlists' => $playlist
        ]);
    }

    public function playlist() {
        $playlist = DB::table('playlists')->get();
        return view('Pages.playlist', [
            'playlists' => $playlist
        ]);

    }
}
