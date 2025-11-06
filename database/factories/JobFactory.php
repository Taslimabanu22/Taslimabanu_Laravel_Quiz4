<?php

// database/factories/JobFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Job;

class JobFactory extends Factory {
    protected $model = Job::class;

    public function definition() {
        $jobs = ['Software Developer', 'Web Analyst', 'Web Developer', 'Database Developer'];
        return [
            'job' => $this->faker->randomElement($jobs),
        ];
    }
}
