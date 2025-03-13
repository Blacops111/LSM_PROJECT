<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Course;
use App\Models\Assignment;

class ClearDummyDataSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Remove dummy users
        User::where('email', 'like', '%dummy%')->delete();

        // Remove all assignments
        Assignment::truncate();

        // Remove all courses
        Course::truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->command->info('All dummy data has been cleared successfully.');
    }
}