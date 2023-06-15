<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;

class GradeController extends Controller
{
    protected $grade;
    protected $course;

    /**
     *
     */
    public function __construct()
    {
        $this->grade = new Grade();
        $this->course = new Course();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $grades = Grade::all();
        $grades = DB::table('grades')
            ->join('courses', 'courses.id', '=', 'grades.course_id')
            ->select('courses.name', 'courses.credits', 'grades.*')
            ->get();

        return view('grades.index', compact('grades', 'grades'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('grades.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //Grade::create($this->validateGrade());
        //Course::create($this->validateCourse());

        DB::beginTransaction();
        try {
            $grade = $this->grade->create([
               'exam' => $request->exam,
               'lowest_passing_grade' => $request->lowest_passing_grade,
                'best_grade' => $request->best_grade,
            ]);
            $course = $this->course->create([
               'quartile' => $request->quartile,
               'name' => $request->name,
               'credits' => $request->credits
            ]);
            if ($grade && $course) {
                DB::commit();
            }
            return redirect()->route('grades.index');
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->route('grades.index');
        }
    }

    /**
     * @param Grade $grade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Grade $grade)
    {
        return view('grades.show', compact('grade'));
    }

    /**
     * @param Grade $grade
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Grade $grade)
    {
        return view('grades.edit', compact('grade'));
    }

    /**
     * @param Request $request
     * @param Grade $grade
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Grade $grade)
    {
        $grade->update($this->validateGrade());
        $request->update($this->validateCourse());

        return redirect()->route('grades.index');
    }

    /**
     * @param Grade $grade
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Grade $grade)
    {
        $grade->delete();


        return redirect()->route('grades.index');
    }

    /**
     * @return array
     */
    public function validateGrade(): array
    {
        return request()->validate([
            'quartile' => 'required',
            'course' => 'required',
            'exam' => 'required',
            'lowest_passing_grade' => ['required', 'between:0,10'],
            'best_grade' => ['required', 'between:0,10'],
        ]);
    }

    /**
     * @return array
     */
    public function validateCourse(): array
    {
        return request()->validate([
            'quartile' => 'required',
            'name' => 'required',
            'credits' => 'required',
        ]);
    }
}
