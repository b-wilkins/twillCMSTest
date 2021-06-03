<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
});

//Route::get('posts/{slug}', function () {
//    return 'hello'; // view('posts');
//});

Route::name('post.index')->get('posts', [PostController::class, 'index']);
Route::name('post.show')->get('posts/{slug}', [PostController::class, 'show']);
//Route::name('posts.show')->get('posts', '\App\Http\Controllers\PostController@show');


//Route::get('posts/{slug}', 'Admin\PostController@show'); //->name('posts');
//Route::get('posts/{slug}', 'PostController@show'); //->name('posts');

// Route::resource('vehicle', 'VehicleController')->only('show', 'create', 'store', 'update');
// Route::post('/requests/{request}/reopen', 'RequestsController@reopen')->name('requests.reopen');
