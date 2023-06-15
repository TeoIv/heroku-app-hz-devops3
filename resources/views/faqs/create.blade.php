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
            <form method="POST" action="/faqs">
                @csrf
                <div>
                    <label for="question">Question</label><br>
                    <textarea class="{{ $errors->has('question') ? 'is-danger' : ''}}" id="question" name="question" rows="3" cols="70">{{old('question')}}</textarea><br>
                    @error('question')
                    <p class="help is-danger">{{ $errors->first('question') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="answer">Answer</label><br>
                    <textarea class="{{ $errors->has('answer') ? 'is-danger' : ''}}" id="answer" name="answer" rows="10" cols="100">{{old('answer')}}</textarea>
                    @error('answer')
                    <p class="help is-danger">{{ $errors->first('answer') }}</p>
                    @enderror
                </div>
                <div>
                    <button class="submit-button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
