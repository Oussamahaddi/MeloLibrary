<?php

namespace App\Models;

use App\Models\Music;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlaylistMusic extends Model
{
    use HasFactory;

    protected $table = 'playlist_musics';
    public function music() {
        return $this->belongsTo(Music::class, 'music_id');
    }
    public function playlist() {
        return $this->belongsTo(Playlist::class, 'playlist_id');
    }
}
