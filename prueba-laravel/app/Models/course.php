<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\teacher;
use app\Models\student;
use app\Models\academicPeriod;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    public function teacher()
    {
        return $this->belongsTo(teacher::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

    public function academicPeriod()
    {
        return $this->hasMany(academicPeriod::class);
    }
}