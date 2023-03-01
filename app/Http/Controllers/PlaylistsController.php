<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;

class PlaylistsController extends Controller
{
    public function playlistForm() {
        return view('users.playlist');
    }
    public function addPlaylist(Request $request) {
        // dd($request->file('image'));
        $formField = $request->validate([
            'name' => 'required',
            'image' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $formField['image'] = $request->file('image')->store('upload', 'public');
        }

        // dd($formField);
        Playlist::create($formField);

        return redirect('/')->with('message', 'playlist succesfully created ^^');
    }
}
