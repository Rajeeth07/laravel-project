<?php

use App\Models\Employee;
use App\Models\Designation;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee', function () {
    $employees=Employee::all();
    return view('employee.index',compact('employees'));
});

Route::get('/employee/{id}', function ($id) {
    $employee=Employee::find($id);
    return view('employee.show',compact('employee'));
});
Route::get('/designation', function () {
    $designations=Designation::all();
    return view('designation.index',compact('designations'));
});
Route::get('/designation/{id}', function ($id) {
    $designation=Designation::find($id);
    $employees=Designation::find($id)->employees;
    return view('employee.show',compact('designation','employees'));
});