<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class ListController extends Controller
{
    public function list()
    {
        $data = Member::paginate('3');
        return view('pages.list', ['members' => $data]);
    }
}