<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Playlist extends Model
{
    use HasFactory;

    // relationship that mean a playlist belong to a specific user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function playlistMusic() {
        return $this->hasMany(PlaylistMusic::class, 'playlist_id');
    }
}
