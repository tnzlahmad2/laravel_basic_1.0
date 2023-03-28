<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function joinC()
    {
        // dd('');
        // return DB::table('members')
        //     ->join('teams', 'members.id', '=', 'teams.memberID')->get();

        return DB::table('teams')->get();

    }
}