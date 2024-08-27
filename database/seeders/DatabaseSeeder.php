<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Location;
use App\Models\Testimonial;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Location::factory(10)->create();
        Category::factory(10)->create();
        Company::factory(10)->create();
        Job::factory(10)->create();
        Testimonial::factory(10)->create();
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
