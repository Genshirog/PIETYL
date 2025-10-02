<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/attendance/index', function () {
    return view('attendance.index');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.index');
});
Route::get('/admin/employee', function () {
    return view('admin.employee.index');
});