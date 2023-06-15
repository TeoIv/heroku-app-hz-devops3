@extends('common.layout')

@section('body')

    <head>
        <link rel="stylesheet" type="text/css" href="/css/form.css">
    </head>
    <div class="backgroundfade"></div>
    <div class="container">
        <div class="article-form">
            <div class="backbutton">
                <a href="{{route('grades.index')}}">
                    <h3>Back</h3>
                </a>
            </div>
            <form method="POST" action="/grades">
                @csrf
                <div>
                    <label for="quartile">Quartile</label><br>
                    <input class="{{ $errors->has('quartile') ? 'is-danger' : ''}}" id="quartile" name="quartile" value="{{old('quartile')}}"><br>
                    @error('quartile')
                    <p class="help is-danger">{{ $errors->first('quartile') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="name">Course Name</label><br>
                    <input class="{{ $errors->has('name') ? 'is-danger' : ''}}" id="name" name="name" value="{{old('name')}}"><br>
                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="credits">Credits</label><br>
                    <input class="{{ $errors->has('credits') ? 'is-danger' : ''}}" id="credits" name="credits" value="{{old('credits')}}"><br>
                    @error('credits')
                    <p class="help is-danger">{{ $errors->first('credits') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="exam">Exam Type</label><br>
                    <input class="{{ $errors->has('exam') ? 'is-danger' : ''}}" id="exam" name="exam" value="{{old('exam')}}">
                    @error('exam')
                    <p class="help is-danger">{{ $errors->first('exam') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="lowest_passing_grade">Lowest Grade To Pass</label><br>
                    <input class="{{ $errors->has('lowest_passing_grade') ? 'is-danger' : ''}}" id="lowest_passing_grade" name="lowest_passing_grade" value="{{old('lowest_passing_grade')}}">
                    @error('lowest_passing_grade')
                    <p class="help is-danger">{{ $errors->first('lowest_passing_grade') }}</p>
                    @enderror
                </div><div>
                    <label for="best_grade">Grade Received</label><br>
                    <input class="{{ $errors->has('best_grade') ? 'is-danger' : ''}}" id="best_grade" name="best_grade" value="{{old('best_grade')}}">
                    @error('best_grade')
                    <p class="help is-danger">{{ $errors->first('best_grade') }}</p>
                    @enderror
                </div>
                <br>
                <div>
                    <button class="submit-button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
