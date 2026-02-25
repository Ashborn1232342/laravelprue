<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Student;
use app\Models\Course;
use app\Models\Grade;

class Enrollments extends Model
{
    /** @use HasFactory<\Database\Factories\EnrollmentsFactory> */
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(student::class);
    }

    public function course()
    {
        return $this->belongsTo(course::class);
    }

    public function grade()
    {
        return $this->belongsTo(grade::class);
    }
}