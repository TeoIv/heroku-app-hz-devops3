<?php

namespace Database\Seeders;

use App\Models\Course;
use Database\Factories\CourseFactory;
use Faker\Core\Number;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Course::factory(5)->create();
        $faker = CourseFactory::new();

        $courses = [
            [
                'name' => 'Program- & Career Orientation',
                'credits' => 2.5,
            ],
            [
                'name' => 'Computer Science Basics',
                'credits' => 5,

            ],
            [
                'name' => 'Programming Basics',
                'credits' => 5
            ],
            [
                'name' => 'IT Personality Projectweek 1',
                'credits' => 1.25,
            ],
            [
                'name' => 'Personal Professional Development: Exploration',
                'credits' => 12.5,
            ],
            [
                'name' => 'Object-oriented programming',
                'credits' => 10,
            ]
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}
