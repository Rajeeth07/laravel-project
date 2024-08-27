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
Route::get('/students', function () {
    $students=Student::all();
    return view('student.index',compact('students'));
});
Route::get('students/{id}', function ($id) {
    $student=Student::find($id);
    return view('student.show',compact('student'));
});
Route::get('/subjects', function () {
    $subjects=Subject::all();
    return view('subject.index',compact('subjects'));
});
Route::get('subjects/{id}', function ($id) {
    $subject=Subject::find($id);
    return view('subject.show',compact('subject'));
});
Route::get('/grades', function () {
    $grades=Grade::all();
    return view('grade.index',compact('grades'));
});
Route::get('grades/{id}', function ($id) {
    $grade=Grade::find($id);
    $students=Grade::find($id)->students;
    return view('grade.show',compact('grade','students'));
});
Route::get('/{p}', [StudentController::class, 'index']);
// Route::get('/{page}', function ($page) {
//     return view('pages.'.$page);
// });

