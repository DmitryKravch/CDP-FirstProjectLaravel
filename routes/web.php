<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowPosts;
use App\Http\Controllers\Admin\AdminPosts;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/post', function (){
//    return view('fff');
//});
Route::get('/',
    [
        ShowPosts::class, 'main',
    ]
);
//Route::get('/', function (){
//   return view ('menu');
//});

Route::get('/admin',
    [
        AdminPosts::class, 'index',
    ]
);
//Route::post('/posts', [AdminPosts::class, 'store']);
