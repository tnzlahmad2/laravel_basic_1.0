<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    function delete()
    {
        $data = Member::all();
        return view('pages.del', ['members' => $data]);
    }
    function deleteData($id)
    {
        // dd($name);
        $data = Member::find($id);
        $data->delete();
        return redirect()->route('members');
    }
    function editData($id)
    {
        $data = Member::find($id);
        return view('pages/update', ['data' => $data]);
    }
    public function update(Request $req)
    {
        $data = Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();
        return redirect('pages/del');
    }
}