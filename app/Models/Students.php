<?php

namespace App\Models;
use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }
}
