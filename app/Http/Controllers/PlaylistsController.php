<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaylistsController extends Controller
{
    public function playlistForm() {
        $playlist = DB::table('playlists')->get();
        return view('users.playlist' , [
            'playlists' => $playlist
        ]);
    }
    public function addPlaylist(Request $request) {
        
        $formField = $request->validate([
            'name' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $formField['image'] = $request->file('image')->store('upload/image', 'public');
        }

        Playlist::create($formField);

        return redirect('/playlist')->with('message', 'playlist succesfully created ^^');
    }
}
