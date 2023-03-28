<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Support\Facades\DB;

class SingerController extends Controller
{
    public function singer()
    {
        // $singer = new Singer;
        // $singer->name = "faris";
        // $singer->save();

        return DB::table('singer_songs')->get();
        //     ->delete(['id' => 8]);

        // $songids = [1, 2];
        // $singer->song()->attach($songids);
    }
}