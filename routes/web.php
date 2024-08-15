<?php

use App\Models\Employee;
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