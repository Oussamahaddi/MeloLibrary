<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicsController extends Controller
{
    public function musicForm() {
        $playlist = DB::table('playlists')->get();
        return view('users.music', [
            'playlists' => $playlist
        ]);
    }

    public function addMusic(Request $request) {
        // dd($request->all());
        $formField = $request->validate([
            'music_name' => 'required',
            'music_image' => 'required',
            'music_audio' => 'required|mimes:mp3',
            'artist_group' => 'required',
        ]);

        // dd($formField);

        $formField['music_image'] = $request->file('music_image')->store('upload/image', 'public');
        $formField['music_audio'] = $request->file('music_audio')->store('upload/music', 'public');

        // dd($formField);
        Music::create($formField);

        return redirect('/')->with('message', 'Music succesfully created ^^');
    }
}
