@extends('common.layout')

@section('body')

    <head>
        <link rel="stylesheet" type="text/css" href="/css/form.css">
    </head>
    <div class="backgroundfade"></div>
    <div class="container">
        <div class="article-form">
            <div class="backbutton">
                <a href="{{route('people.index')}}">
                    <h3>Back</h3>
                </a>
            </div>
            <form method="POST" action="/people/{{$person->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label for="name">Name</label><br>
                    <input class="{{ $errors->has('name') ? 'is-danger' : ''}}" id="name" name="name" value="{{$person->name}}"><br>
                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="skill">Skill Level</label><br>
                    <input class="{{ $errors->has('skill') ? 'is-danger' : ''}}" id="skill" name="skill" value="{{$person->skill}}"><br>
                    @error('skill')
                    <p class="help is-danger">{{ $errors->first('skill') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="occupation">Occupation</label><br>
                    <input class="{{ $errors->has('occupation') ? 'is-danger' : ''}}" id="occupation" name="occupation" value="{{$person->occupation}}">
                    @error('occupation')
                    <p class="help is-danger">{{ $errors->first('occupation') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="job_description">Job Description</label><br>
                    <input class="{{ $errors->has('job_description') ? 'is-danger' : ''}}" id="job_description" name="job_description" value="{{$person->job_description}}">
                    @error('job_description')
                    <p class="help is-danger">{{ $errors->first('job_description') }}</p>
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
