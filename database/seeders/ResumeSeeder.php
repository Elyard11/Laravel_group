<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resumes; // Correct model name

class ResumeSeeder extends Seeder
{
    public function run()
    {
        // Create 9 dummy resume records (one for each name in the list)
        Resumes::factory(9)->create();  // Using the 'Resumes' factory
    }
}
