<?php

namespace App\Models;

use App\Models\Course;
use App\Models\TeacherAuthorization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    
    public function courses(){
        return $this->belongsTo(Course::class);
    }

    public function teacherAuthorization(){
        return $this->hasMany(TeacherAuthorization::class);
    }
    
}
