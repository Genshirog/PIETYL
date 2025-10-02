<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/attendance/index', function () {
    return view('attendance.index');
});
