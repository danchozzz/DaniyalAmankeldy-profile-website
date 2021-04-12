<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use app\Models\Post;
use App\Http\Controllers\postcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/2', function () {
    return view('2');
})->name('2');
Route::get('/3', function () {
    return view('3');
})->name('3');

Route::get('post/create', function() {
    DB::table('post') ->insert( [
        'title' => 'News',
        'body' => 'sdu became the best university in the universe'
    ]);
});

Route::get('post', [postcontroller::class,'index']);