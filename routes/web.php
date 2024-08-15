<?php

use App\Models\Students;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stu', function () {
    $students=Students::all();
    return view('student.index',compact('students'));
});
Route::get('/stu/{id}', function ($id) {
    $students=Students::find($id);
    return view('student.show',compact('students'));
});
