<?php

namespace App\Http\Controllers;

use App\Models\Music;
use App\Models\Playlist;
use App\Models\PlaylistMusic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaylistMusicsController extends Controller
{
    public function addToPlaylist(Playlist $playlist, Music $music) {
        // dd($playlist, $music);
        $formField = [
            'music_id' => $music->id,
            'playlist_id' => $playlist->id
        ];
        // dd($formField);
        PlaylistMusic::create($formField);

        return redirect('/')->with('message', 'Music add to playlist succesfuly');
    }
}
