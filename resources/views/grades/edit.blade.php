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
            <form method="POST" action="/grades/{{$grade->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label for="quartile">Quartile</label><br>
                    <input class="{{ $errors->has('quartile') ? 'is-danger' : ''}}" id="quartile" name="quartile" value="{{$grade->quartile}}"><br>
                    @error('quartile')
                    <p class="help is-danger">{{ $errors->first('quartile') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="course">Course</label><br>
                    <input class="{{ $errors->has('course') ? 'is-danger' : ''}}" id="course" name="course" value="{{$grade->course}}"><br>
                    @error('course')
                    <p class="help is-danger">{{ $errors->first('course') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="exam">Exam Type</label><br>
                    <input class="{{ $errors->has('exam') ? 'is-danger' : ''}}" id="exam" name="exam" value="{{$grade->exam}}">
                    @error('exam')
                    <p class="help is-danger">{{ $errors->first('exam') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="lowest_passing_grade">Lowest Grade To Pass</label><br>
                    <input class="{{ $errors->has('lowest_passing_grade') ? 'is-danger' : ''}}" id="lowest_passing_grade" name="lowest_passing_grade" value="{{$grade->lowest_passing_grade}}">
                    @error('lowest_passing_grade')
                    <p class="help is-danger">{{ $errors->first('lowest_passing_grade') }}</p>
                    @enderror
                </div><div>
                    <label for="best_grade">Grade Received</label><br>
                    <input class="{{ $errors->has('best_grade') ? 'is-danger' : ''}}" id="best_grade" name="best_grade" value="{{$grade->best_grade}}">
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
