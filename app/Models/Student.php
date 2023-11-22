<?php

namespace App\Models;

use App\Models\Enrollment;
use App\Models\StudentProgress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function enrollments(){
        return $this->belongsTo(Enrollment::class);
    }

    public function studentProgress(){
        return $this->belongsTo(StudentProgress::class);
    }
}
