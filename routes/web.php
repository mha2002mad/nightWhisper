<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function (Request $request) {
    return view('login');
});

route::get('/chat', function () {
    return view('chatView');
});