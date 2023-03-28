<?php

namespace App\Http\Controllers;

use \App\Models\Member;
use Illuminate\Http\Request;

class MutatorController extends Controller
{
    public function mutator()
    {
        return Member::all();
    }
}