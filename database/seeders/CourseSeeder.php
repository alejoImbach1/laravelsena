<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory()->count(10)->create();
        $courses = Course::all();
        foreach ($courses as $course) {
            Storage::copy('default/reflexión_sobre_programación.pdf', 'public/files/'.$course->file_pdf);
        }
    }
}
