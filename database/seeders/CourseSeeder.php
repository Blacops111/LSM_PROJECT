<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\User;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $teacher = User::where('role', 'teacher')->first();

        // Create some courses
        Course::factory(5)->create([
            'user_id' => $teacher->id
        ]);
    }
}
