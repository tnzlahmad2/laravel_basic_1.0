<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get("/users", function () {
//     return "hammad";
// });

// Route::post("/users", function () {
//     return response()->json("api hit successfully");
// });

// Route::delete("/users/{id}", function ($id) {
//     return response("delete" . $id, 200);
// });

// Route::put("/users/{id}", function ($id) {
//     return response("put" . $id, 200);
// });

// Route::get("test", function () {
//     p("working");
// });

Route::post('user', [UserController::class, 'store'])->name('user.store');
Route::get('user/{flag}', [UserController::class, 'index'])->name('user.get');
Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.delete');

Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
Route::patch('user/{id}', [UserController::class, 'changePassword'])
    ->name('user.specificUpdate');