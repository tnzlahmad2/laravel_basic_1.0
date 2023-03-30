<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Hash;
use PhpParser\Node\Stmt\TryCatch;

// use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($flag)
    {
        $query = User::select('name', 'email');

        if ($flag == 1) {
            $query->where('status', 1);
        } elseif ($flag == 0) {
            // $query->where('status', 0);
        } else {
            return response()->json([
                "message" => "bad request"
            ], 400);
        }
        // echo count($user);
        $user = $query->get();
        if (count($user) > 0) {
            $response = [
                "message" => count($user) . " " . "user found",
                "data" => $user,
                "status" => 1,
            ];
        } else {
            $response = [
                "message" => count($user) . "user found",
                "status" => 0,
            ];
        }
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Show the form for edit a existing resource.
     */
    public function edit()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     "name" => ["required"],
        //     "email" => ["required", "email"],
        //     "password" => ["required", "min:6"],
        // ]);
        // p($request->all());

        $validator = Validator::make($request->all(), [
            "name" => ["required"],
            "email" => ["required", "email", 'unique:users,email'],
            "password" => ["required", "min:4"],
            "confirmed_password" => ["required"]
        ]);
        if ($validator->fails()) {
            return response($validator->messages(), 400);
        } else {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ];
            DB::beginTransaction();
            try {
                $userData = User::create($data);
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                $userData = null;
                p($e->getMessage());
            }
            if ($userData != null) {
                return response([
                    'message' => 'User Register Successfully'
                ], 200);
            } else {
                return response([
                    'message' => 'Internal server error'
                ], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::find($id);

        if ($data != null) {
            $response = [
                'message' => 'response click',
                'status' => 1,
                'data' => $data
            ];
        } else {
            $response = [
                'message' => 'response not click',
                'status' => 0,
            ];
        }
        return response()->json($response, 200);
        // ($data);
    }



    /**
     * Show the form for change password the specified resource.
     */
    public function changePassword(Request $request, $id)
    {
        $data = User::find($id);
        dd($data);

        if (is_null($data)) {
            return response()->json([
                'message' => 'user data is not existed',
                'status' => 0
            ], 404);
        } else {
            if ($data->password == $request['old_password']) {
                if ($request['new_password'] == $request['confirm_password']) {
                    DB::beginTransaction();
                    try {
                        $data->password = $request['new_password'];
                        $data->save();
                        DB::commit();
                    } catch (\Exception $err) {
                        $data = null;
                        DB::rollBack();
                    }
                    if (is_null($data)) {
                        return response()->json([
                            'status' => 0,
                            'message' => 'internal server error',
                            'error' => $err->getMessage(),
                        ], 500);
                    } else {
                        return response()->json([
                            'status' => 1,
                            'message' => 'user data is updated successfully',
                        ], 200);
                    }
                } else {
                    return response()->json([
                        'message' => 'new password and confirmed password does not match',
                        'status' => 0
                    ], 400);
                }
            } else {
                return response()->json([
                    'message' => 'old password does not match',
                    'status' => 0
                ], 400);
            }
        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        // p($request->all());
        // die;
        if (is_null($data)) {
            return response()->json([
                'status' => 0,
                'message' => 'internal server error',
            ], 404);
        } else {
            DB::beginTransaction();
            try {
                $data->name = $request['name'];
                $data->email = $request['email'];
                $data->address = $request['address'];
                $data->contact = $request['contact'];
                $data->save();
                DB::commit();
            } catch (\Exception $err) {
                DB::rollBack();
                $data = null;
            }
            if (is_null($data)) {
                return response()->json([
                    'status' => 0,
                    'message' => 'internal server error',
                    'error' => $err->getMessage(),
                ], 500);
            } else {
                return response()->json([
                    'status' => 1,
                    'message' => 'user data is updated successfully',
                ], 200);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find($id);
        if ($data != null) {
            DB::beginTransaction();
            try {
                $data->delete();
                DB::commit();
                $response = [
                    'message' => 'successfully deleted records',
                    'status' => 1,
                ];
                $responseCode = 200;
            } catch (\Exception $e) {
                DB::rollBack();
                $response = [
                    'message' => 'Internal server error',
                    'status' => 1,
                ];
                $responseCode = 500;
            }
        } else {
            $response = [
                'message' => 'user record does not exist',
                'status' => 0,
            ];
            $responseCode = 404;
        }
        return response()->json($response, $responseCode);
    }
}