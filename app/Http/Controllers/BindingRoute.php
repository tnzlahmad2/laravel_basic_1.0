<?php

namespace App\Http\Controllers;

use App\Models\Member;
use \App\Models\Store;
use Illuminate\Http\Request;


class BindingRoute extends Controller
{
    function routeBinding(Store $id)
    {
        // $data = Store::all($id);
        dd($id);

        // return $key;
    }
}