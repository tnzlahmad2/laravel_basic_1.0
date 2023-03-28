<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SingerSong extends Model
{
    use HasFactory;
    public function showMany()
    {
        return $this->belongsToMany(Song::class, 'singer_songs', 'singer_id', 'song_id');
    }
}