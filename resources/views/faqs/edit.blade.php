@extends('common.layout')

@section('body')
    <head>
        <link rel="stylesheet" type="text/css" href="/css/form.css">
    </head>
    <div class="backgroundfade"></div>
    <div class="container">
        <div class="article-form">
            <div class="backbutton">
                <a href="{{route('faqs.index')}}">
                    <h3>Back</h3>
                </a>
            </div>
            <form method="POST" action="/faqs/{{$faq->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label for="question">Question</label><br>
                    <textarea class="{{ $errors->has('question') ? 'is-danger' : ''}}" id="question" name="question" rows="3" cols="70">{{ $faq->question }}</textarea><br>
                    @error('question')
                    <p class="help is-danger">{{ $errors->first('question') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="answer">Answer</label><br>
                    <textarea class="{{ $errors->has('answer') ? 'is-danger' : ''}}" id="answer" name="answer" rows="10" cols="100">{{ $faq->answer }}</textarea>
                    @error('answer')
                    <p class="help is-danger">{{ $errors->first('answer') }}</p>
                    @enderror
                </div>
                <div>
                    <h3>If you want to submit the changes press 'Submit'</h3>
                    <button class="submit-button" type="submit">Submit</button>
                </div>
            </form>
            <form method="POST" action="/faqs/{{ $faq->id }}">
                @csrf
                @method('DELETE')
                <h5>If you want to delete the whole FAQ press 'Submit'</h5>
                <button class="submit-button" id="delbutton2" type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
