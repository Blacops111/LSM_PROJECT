<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Discussion;
use App\Models\User;

class DiscussionSeeder extends Seeder
{
    public function run()
    {
        $students = User::where('role', 'student')->get();

        // Create discussions by random students
        foreach ($students as $student) {
            Discussion::factory(3)->create([
                'user_id' => $student->id
            ]);
        }
    }
}
