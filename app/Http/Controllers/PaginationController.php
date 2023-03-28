<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagination;


class paginationController extends Controller
{
    public function pagination()
    {
        // echo (Pagination::all());
        $page = Pagination::all();
        return view('pages.list', ['pagination' => $page]);
    }
}