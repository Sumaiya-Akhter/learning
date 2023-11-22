<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function courses(){
        return $this->hasMany(Course::class);
    }
}
