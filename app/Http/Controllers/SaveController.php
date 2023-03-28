<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    public function getData(Request $req)
    {
        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->save();
        return 'form save successfully';
    }
}