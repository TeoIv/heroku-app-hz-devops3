<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    protected $fillable = ['course_id', 'exam', 'lowest_passing_grade', 'best_grade'];

    /**
     * @param $grade
     * @return void
     */
    public function addResult($grade)
    {
        if ($grade >= $this->lowest_passing_grade) {
            if (null == $this->best_grade) {
                $course = Course::find('id', '=', $this->course_id);
                $course->assignCredits();
                $this->best_grade = $grade;
            }
        }
    }
}
