<?php

namespace App\Models;

use App\Models\Section;
use App\Models\StudentProgress;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;
    
    public function sections(){
        return $this->hasMany(Section::class);
    }

    public function studentProgress(){
        return $this->belongsTo(StudentProgress::class);
    }
}