<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function getData(Request $req)
    {
        // $member = new Member;
        // $member->name = $req->name;
        // $member->email = $req->email;
        // $member->save();

        // return Team::all();
        return DB::table('members')
            ->get();
        // ->delete(['id' => 2]);

    }
}