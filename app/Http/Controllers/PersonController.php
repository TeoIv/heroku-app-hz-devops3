<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $people = Person::latest()->get();

        return view('people.index', compact('people'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('people.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Person::create($this->validatePerson());

        return redirect()->route('people.index');
    }

    /**
     * @param Person $person
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Person $person)
    {
        return view('people.show', compact('person'));
    }

    /**
     * @param Person $person
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Person $person)
    {
        return view('people.edit', compact('person'));
    }

    /**
     * @param Request $request
     * @param Person $person
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Person $person)
    {
        $person->update($this->validatePerson());

        return redirect()->route('people.index');
    }

    /**
     * @param Person $person
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Person $person)
    {
        $person->delete();

        return redirect()->route('people.index');
    }

    /**
     * @return array
     */
    public function validatePerson(): array
    {
        return request()->validate([
            'name' => 'required',
            'occupation' => 'required',
            'job_description' => 'required',
        ]);
    }
}
