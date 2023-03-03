<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistMusicController extends Controller
{
    public function index($id) {

        return view('Pages.playlistmusic', [
            'playlistmusic'
        ]);
    }


}
