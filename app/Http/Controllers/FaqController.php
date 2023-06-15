<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $faqs = Faq::latest()->get();

        return view('faqs.index', compact('faqs'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        Faq::create($this->validateFaq());

        return redirect()->route('faqs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * @param Faq $faq
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', compact('faq'));
    }

    /**
     * @param Request $request
     * @param Faq $faq
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Faq $faq)
    {
        $faq->update($this->validateFaq());

        return redirect()->route('faqs.index');
    }

    /**
     * @param Faq $faq
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index');
    }

    /**
     * @return array
     */
    public function validateFaq(): array
    {
        return request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
    }
}
