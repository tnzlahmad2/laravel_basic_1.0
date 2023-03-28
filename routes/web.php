<?php

use App\Http\Controllers\AggregateController;
use App\Http\Controllers\CRUDController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ModifyController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\BindingRoute;

use \Illuminate\Support\Str;


// use App\Http\Controllers\ListController;
// use App\Http\Controllers\paginationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// $data = 'hi , tanzeel';
// // $data = Str::camel($data);
// $data = Str::of($data)
//     ->ucfirst($data)
//     ->replaceFirst("hi", "hello", $data);
// echo "$data";

Route::get('/', function () {
    return view('welcome');
});



// Route::get('list', [ListController::class, "list"]);
// Route::get('pagination', [PaginationController::class, "pagination"]);
// Route::post('add', [SaveController::class, 'getData']);

// Route::POST('add', [SaveController::class, 'getData']);
// Route::view('add', 'pages.save');

// Route::get('del', [DeleteController::class, 'delete'])->name('members');
// Route::get('delete/{id}', [DeleteController::class, 'deleteData'])->name('member.delete');

// Route::get('edit/{id}', [DeleteController::class, 'editData'])->name('member.edit');

// Route::get('crud', [CRUDController::class, 'crud'])->name('member.crud');
// Route::get('aggregate', [AggregateController::class, 'aggregate'])->name('member.aggregate');
// Route::get('join', [JoinController::class, 'joinC'])->name('member.join');

// Route::get('modify', [ModifyController::class, 'accessor'])->name('member.accessor');
// Route::get('mutator', [MutatorController::class, 'mutator'])->name('member.mutator');

// Route::get('form', [FormController::class, 'getData'])->name('member.getData');

// Route::get('one', [OTORelationController::class, 'oneToOneRelation'])->name('member.one');

// Route::get('song', [SongController::class, 'song'])->name('member.songsName');
// Route::get('singer', [SingerController::class, 'singer'])->name('member.singerName');

// Route::get('get/{id}', [SongController::class, 'getSong']);

Route::get('route/{id}', [BindingRoute::class, 'routeBinding']);