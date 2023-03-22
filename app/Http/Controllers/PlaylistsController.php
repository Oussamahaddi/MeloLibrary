<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Playlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class PlaylistsController extends Controller
{
    public function playlistForm() {
        $playlists = User::find(2)->playlist;;
        return view('users.playlist' , [
            'playlists' => $playlists
        ]);
    }
    public function addPlaylist(Request $request) {
        
        $formField = $request->validate([
            'name' => 'required',
            'image' => ''
        ]);
        if ($request->hasFile('image')) {
            $uploadImage = Cloudinary::uploadFile($request->file('image')->getRealPath(),[
                'folder' => 'Playlist image'
            ])->getSecurePath();
            $formField['image'] = $uploadImage;
        }
        // get the if from the auth helper when login
        $formField['user_id'] = auth()->id();

        Playlist::create($formField);

        return redirect('/playlist')->with('message', 'playlist succesfully created ^^');
    }

    public function editPlaylistForm(Playlist $playlist) {
        return view();
    }

    public function storeEditPlaylist(Request $request) {
        $formField = $request->validate([
            
        ]);
    }
    public function deletePlaylist(Playlist $playlist) {
        $playlist->delete();
        return redirect('/playlist')->with('message', 'Playlist delete successfuly U_U');
    }
}
