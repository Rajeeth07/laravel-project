<?php

use App\Models\Grade;
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

Route::get('/grades', function () {
    $grades=Grade::all();
    return view('grade.index',compact('grades'));
});
Route::get('/grades/{id}', function ($id) {
    $grades=Grade::find($id);
    $students=Grade::find($id)->students;
    return view('grade.show',compact('students','grades'));
});
