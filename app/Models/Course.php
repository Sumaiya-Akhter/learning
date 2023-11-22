<?php

namespace App\Models;

use App\Models\Section;
use App\Models\Teacher;
use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }

    public function sections(){
        return $this->belongsTo(Section::class);
    }

    public function enrollments(){
        return $this->belongsTo(Enrollment::class);
    }
}
