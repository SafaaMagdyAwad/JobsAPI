<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\JobData;
use App\Models\Location;
use App\Models\NewsLetter;
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
        JobData::factory(10)->create();
        Testimonial::factory(10)->create();
        User::factory(10)->create();
        NewsLetter::factory(3)->create();


    }
}
