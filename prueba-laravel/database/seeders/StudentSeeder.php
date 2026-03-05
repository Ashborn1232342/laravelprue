<?php

namespace Database\Seeders;

use App\Models\student;
use App\Models\faculty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        student::factory()
            ->count(50)
            ->create();
    }
}