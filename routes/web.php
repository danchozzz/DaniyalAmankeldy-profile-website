<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\postcontroller;
use App\Models\UserInfo;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LocalizatioController;
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

Route::get('/{lang}', function ($lang) {
    App::setlocale($lang);
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
Route::get('post/create', function() {
    return view('post.create');
});
Route::post('post/create', [postcontroller::class, 'store'])->name('add-post');
Route::get('post/{id}', [postcontroller::class, 'get_post']);

Route::get('/userInfo', [UserController::class, 'index']);
Route::get('/userInfo/create', function(){
    return view('info.create');
});
Route::post('userInfo/create', [UserController::class, 'store'])->name('add-user');

Route::get('mail/send', [MailController::class, 'send']);

