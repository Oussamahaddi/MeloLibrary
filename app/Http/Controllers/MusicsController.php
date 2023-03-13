<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class MusicsController extends Controller
{
    public function musicForm() {
        $playlist = DB::table('playlists')->get();
        return view('Dash.admin.music');
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

        $uploadAudio = Cloudinary::uploadFile($request->file('music_audio')->getRealPath(),[
            'folder' => 'Music'
        ])->getSecurePath();
        // dd($uploadAudio);
        $uploadImage = Cloudinary::uploadFile($request->file('music_image')->getRealPath(),[
            'folder' => 'CoverMusic'
        ])->getSecurePath();
        // $formField['music_image'] = $request->file('music_image')->store('upload/image', 'public');
        // $formField['music_audio'] = $request->file('music_audio')->store('upload/music', 'public');
        // dd($uploadAudio);

        Music::create([
            'music_image' => $uploadImage,
            'music_audio' => $uploadAudio,
            'music_name' => $request->music_name,
            'artist_group' => $request->artist_group,
        ]);

        return redirect('/admin/music')->with('message', 'Music succesfully created ^^');
    }

    public function removeMusic($id) {
        // dd($id);
        $music = Music::find($id);
        $music->delete();
        return redirect('/admin/music')->with('message', 'Music deleted');
    }
}
