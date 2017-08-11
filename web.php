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
    return view('Welcome'); // welcome.blade1.php
});

Route ::get ( '/1	', function (){
	return view('helloomb'); // hello.omb.php
});

Route ::get ( '/2	', function (){
	return view('helloomb2'); // hello.omb2.php
});

Route ::get ( '/3	', function (){
	return view('helloomb3'); // hello.omb3.php
});
