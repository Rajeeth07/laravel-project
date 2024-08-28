<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Models\Subject;

Route::get('/', function () {
    $studentsCount=Student::get()->count();
        $subjectsCount=Subject::get()->count();
        $gradesCount=Grade::get()->count();
        return view('pages.index',compact('studentsCount','subjectsCount','gradesCount'));
});

Route::resource('dashboard/students', StudentController::class);
Route::resource('dashboard/subjects', SubjectController::class);
Route::resource('dashboard/grades', GradeController::class);

