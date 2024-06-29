<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', $data = ["name" => "Dicky Aris Munandar"]);
});

Route::get('/greeting', function () {
    return 'hello world';
});

use Illuminate\Http\Request;
 
Route::get('/users', function (Request $request) {
    return view('welcome', $data = ["name" => "Dicky Aris Munandar", "request" => $request->input("")]);
});


use App\Http\Controllers\DefaultController;
 
// Route::get('/user/{id}', [DefaultController::class, 'tambah']);

Route::get('/user/{nomor}', [DefaultController::class, 'tambah']);
