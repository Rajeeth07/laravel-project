<?php

namespace App\Models;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    use HasFactory;
    public function empolyees()
    {
        return $this->hasMany(Employee::class);
    }
}
