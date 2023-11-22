<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function lessons(){
        return $this->belongsTo(Lesson::class);
    }
}
