<?php

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

Route::get('/posts', function () {
    $posts = DB::table('posts')->get();

    return view('posts.show', compact('posts'));
});


Route::get('/flights', function () {
    // $flights = DB::table('flights')->get();
    $flights = App\Flights::get();

    return view('flights.show', compact('flights'));
});