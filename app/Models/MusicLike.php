<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicLike extends Model
{
    use HasFactory;

    // music_id belong to the table music id 
    public function music() {
        return $this->belongsTo(Music::class, 'music_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

}
