<?php
// database/seeders/JobSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run()
    {
        $jobs = [
            'Software Developer',
            'Web Analyst',
            'Web Developer',
            'Database Developer'
        ];

        foreach ($jobs as $job) {
            Job::create(['job' => $job]);
        }
    }
}