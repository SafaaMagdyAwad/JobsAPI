<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobData>
 */
class JobDataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images=['com-logo-1.jpg','com-logo-2.jpg','com-logo-3.jpg','com-logo-4.jpg','com-logo-5.jpg'];
        $jobNature=['Full Time','Part Time'];
        return [
            'title'=>fake()->jobTitle(),
            'image'=> fake()->randomElement($images),
            'description'=>fake()->text(3000),
            'responsability'=>fake()->text(3000),
            'qualification'=>fake()->text(3000),
            'job_nature'=>fake()->randomElement($jobNature),
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
