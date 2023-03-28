<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    function crud()
    {
        // $data = DB::table('players')->where('name' , 'name')->get();
        // return view('pages.crud', ['data' => $data]);

        return DB::table('players')->where('id', 4)->update(['id' => 3]);


    }
}