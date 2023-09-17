<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;

    protected $table = 'musics';

    public function playlists()
    {
        return $this->belongsTo(Playlist::class, 'id', 'id_playlist');
    }
}
