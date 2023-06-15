<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseId = DB::table('courses')->pluck('id');

        $grades = [
            [
                'course_id' => $courseId->shift(),
                'exam' => 'Assessment',
                'lowest_passing_grade' => 5.5,
                'best_grade' => 10,
            ],
            [
                'course_id' => $courseId->shift(),
                'exam' => 'Written',
                'lowest_passing_grade' => 5.5,
                'best_grade' => 9,
            ],
            [
                'course_id' => $courseId->shift(),
                'exam' => 'Case study',
                'lowest_passing_grade' => 5.5,
                'best_grade' => 10,
            ],
            [
                'course_id' => $courseId->shift(),
                'exam' => 'Report',
                'lowest_passing_grade' => 5.5,
                'best_grade' => 8,
            ],
            [
                'course_id' => $courseId->shift(),
                'exam' => 'Criterium focused assessment based on portfolio',
                'lowest_passing_grade' => 5.5,
                'best_grade' => 0,
            ],
            [
                'course_id' => $courseId->shift(),
                'exam' => 'Project',
                'lowest_passing_grade' => 5.5,
                'best_grade' => 7.5,
            ],
            [
                'course_id' => $courseId->shift(),
                'exam' => 'Case study',
                'lowest_passing_grade' => 5.5,
                'best_grade' => 9.5,
            ]
        ];

        foreach ($grades as $grade) {
            Grade::create($grade);
        }

        //Grade::factory(5)->create();
    }
}
