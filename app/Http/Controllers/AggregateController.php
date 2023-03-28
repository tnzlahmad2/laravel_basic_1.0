<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AggregateController extends Controller
{
    function aggregate()
    {
        return DB::table('members')->avg('id');
    }
}