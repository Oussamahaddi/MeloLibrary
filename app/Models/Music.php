<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    
    use HasFactory;

    // protected $table = 'music';
    public function playlistMusic() {
        return $this->hasMany(PlaylistMusic::class, 'music_id');
    }

    public function musicLike() {
        return $this->hasMany(MusicLike::class, 'music_id');
    }
}
