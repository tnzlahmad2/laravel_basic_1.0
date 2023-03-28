<?php

namespace App\Http\Controllers;

use \App\Models\Member;
use Illuminate\Http\Request;

class ModifyController extends Controller
{
    public function accessor()
    {
        return Member::all();
    }
}