<?php

namespace App\Http\Controllers;

use \App\Models\Member;
use \App\Models\Store;
use Illuminate\Http\Request;

class OTORelationController extends Controller
{
    public function oneToOneRelation()
    {
        return Member::find(1)->relation;
        // return Store::all();
    }
}