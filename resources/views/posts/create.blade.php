@extends('common.layout')

@section('body')

<head>
    <title>Write a new post</title>
    <link rel="stylesheet" type="text/css" href="/css/form.css">
</head>
    <div class="backgroundfade"></div>
    <div class="container">
        <div class="article-form">
            <div class="backbutton">
                <a href="{{ route('posts.index') }}">
                    <h3>Back</h3>
                </a>
            </div>
            <form method="POST" action="/posts">
                @csrf
                <div>
                    <label for="title">Article Title</label><br>
                    <input class="{{ $errors->has('title') ? 'is-danger' : ''}}" type="text" id="title" name="title" value="{{old('title')}}"><br>
                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="img_url">Path to photo</label><br>
                    <textarea class="{{ $errors->has('img_url') ? 'is-danger' : ''}}" id="img_url" name="img_url" rows="1" cols="50">{{old('img_url')}}</textarea><br>
                    @error('img_url')
                    <p class="help is-danger">{{ $errors->first('img_url') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="excerpt">The Excerpt</label><br>
                    <textarea class="{{ $errors->has('title') ? 'is-danger' : ''}}" id="excerpt" name="excerpt" rows="3" cols="70">{{old('excerpt')}}</textarea><br>
                    @error('excerpt')
                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="body">The Body</label><br>
                    <textarea class="{{ $errors->has('title') ? 'is-danger' : ''}}" id="body" name="body" rows="10" cols="100">{{old('body')}}</textarea>
                    @error('body')
                        <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
                <div>
                    <button class="submit-button" type="submit">Submit</button>
                </div>
                </form>
        </div>
    </div>
@endsection
