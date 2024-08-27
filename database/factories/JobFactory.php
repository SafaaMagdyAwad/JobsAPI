<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->jobTitle(),
            'image'=> basename(fake()->image(public_path('assets/images/jobs'))),
            'description'=>fake()->text(),
            'responsability'=>fake()->text(),
            'qualification'=>fake()->text(),
            'job_nature'=>fake()->randomElement(['Full Time','Part Time']),
            'salary_from'=>fake()->numberBetween(20000,30000),
            'salary_to'=>fake()->numberBetween(40000,60000),
            'date_line'=>fake()->date(),
            'published'=>fake()->numberBetween(0,1),
            'like'=>fake()->numberBetween(0,10),
            'vacancy'=>fake()->numberBetween(1,4),
            'category_id'=>fake()->numberBetween(1,10),
            'location_id'=>fake()->numberBetween(1,10),
            'company_id'=>fake()->numberBetween(1,10),
        ];
    }
}
