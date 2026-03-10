<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use inertia\Inertia;
use App\Models\Teacher;
class TeacherController extends Controller
{
    Public function index()
    {
        $teachers = Teacher::all();
        //dd($teachers);
        return Inertia::render('teacher/Index', [
            //'teachers' => $teachers
        ]);
    }
}
