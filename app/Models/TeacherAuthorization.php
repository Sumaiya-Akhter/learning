<?php

namespace App\Models;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherAuthorization extends Model
{
    use HasFactory;

    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
}
