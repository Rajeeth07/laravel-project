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
/*
Route::get('/stu', function () {
    $students=Student::all();
    return view('student.index',compact('students'));
});
Route::get('/stu/{id}', function ($id) {
    $student=Student::find($id);
    return view('student.show',compact('student'));
});

Route::get('/grades', function () {
    $grades=Grade::all();
    return view('grade.index',compact('grades'));
});
Route::get('/grades/{id}', function ($id) {
    $grade=Grade::find($id);
    $students=Grade::find($id)->students;
    return view('grade.show',compact('students','grade'));
});
Route::get('/subjects/{id}', function ($id) {
    $subject=Subject::find($id);
    return view('subject.show',compact('subject'));
});
Route::get('/subjects', function () {
    $subjects=Subject::all();
    return view('subject.index',compact('subjects'));
});
*/

//Route::get('/stu',[StudentController::class,'index']);

 
//Route::resource('stu', StudentController::class);
//Route::resource('subjects', SubjectController::class);
//Route::resource('grades', GradeController::class);
Route::resources([
    '/students'=>StudentController::class,
    '/subjects'=>SubjectController::class,
    'grades'=>GradeController::class
]);
