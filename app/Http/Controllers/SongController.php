<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Singer;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function song()
    {
        // $song = new Song;
        // $song->title = '295 Song';
        // $song->save();

    }
    public function getSong($id)
    {
        $data = Song::find($id)->show;
        dd($data);
    }
}