<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Models\Subject;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/{page?}',function ($page){
    return view('pages.'.$page);
});
