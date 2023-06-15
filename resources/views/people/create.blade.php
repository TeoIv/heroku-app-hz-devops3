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
            <form method="POST" action="/people">
                @csrf
                <div>
                    <label for="name">Name</label><br>
                    <textarea class="{{ $errors->has('name') ? 'is-danger' : ''}}" id="name" name="name" rows="3" cols="70">{{old('name')}}</textarea><br>
                    @error('name')
                    <p class="help is-danger">{{ $errors->first('name') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="skill">Skill Level</label><br>
                    <input class="{{ $errors->has('skill') ? 'is-danger' : ''}}" id="skill" name="skill" value="{{old('skill')}}"><br>
                    @error('skill')
                    <p class="help is-danger">{{ $errors->first('skill') }}</p>
                @enderror
                </div>
                <div>
                    <label for="occupation">Occupation</label><br>
                    <input class="{{ $errors->has('occupation') ? 'is-danger' : ''}}" id="occupation" name="occupation" value="{{old('occupation')}}">
                    @error('occupation')
                    <p class="help is-danger">{{ $errors->first('occupation') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="job_description">Description of your Job</label><br>
                    <textarea id="job_description" name="job_description" rows="10" cols="100">{{old('job_description')}}</textarea>
                </div><br>
                <div>
                    <button class="submit-button" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
