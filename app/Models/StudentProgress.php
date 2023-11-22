<?php

namespace App\Models;

use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentProgress extends Model
{
    use HasFactory;

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
}
