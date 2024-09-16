<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $image=['testimonial-1.jpg','testimonial-2.jpg','testimonial-3.jpg','testimonial-4.jpg'];
        return [
            'name'=>fake()->name(),
            'job'=>fake()->jobTitle(),
            'image'=>fake()->randomElement($image),
            'message'=>fake()->text(),
        ];
    }
}
