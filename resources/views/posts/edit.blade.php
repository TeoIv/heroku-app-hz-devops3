@extends('common.layout')

@section('body')

    <div class="backgroundfade"></div>
    <link rel="stylesheet" type="text/css" href="/css/form.css">
    <div class="container">
        <div class="article-form">
            <div class="backbutton">
                <a href="{{ route('posts.index') }}">
                    <h3>Back</h3>
                </a>
            </div>
            <form method="POST" action="/posts/{{$post->id}}">
                @csrf
                @method('PUT')
                <div>
                    <label for="title">Article Title</label><br>
                    <input class="{{ $errors->has('title') ? 'is-danger' : ''}}" type="text" id="title" name="title" value="{{$post->title}}"><br>
                    @error('title')
                    <p class="help is-danger">{{ $errors->first('title') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="img_url">Path to photo</label><br>
                    <textarea class="{{ $errors->has('img_url') ? 'is-danger' : ''}}" id="img_url" name="img_url" rows="1" cols="50">{{$post->img_url}}</textarea><br>
                    @error('img_url')
                    <p class="help is-danger">{{ $errors->first('img_url') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="excerpt">The Excerpt</label><br>
                    <textarea class="{{ $errors->has('excerpt') ? 'is-danger' : ''}}" id="excerpt" name="excerpt" rows="3" cols="70">{{$post->excerpt}}</textarea><br>
                    @error('excerpt')
                    <p class="help is-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                </div>
                <div>
                    <label for="body">The Body</label><br>
                    <textarea class="{{ $errors->has('body') ? 'is-danger' : ''}}" id="body" name="body" rows="10" cols="100">{{$post->body}}</textarea>
                    @error('body')
                    <p class="help is-danger">{{ $errors->first('body') }}</p>
                    @enderror
                </div>
                <div>
                    <h3>If you want to submit the changes press 'Submit'</h3>
                    <button class="submit-button" type="submit">Submit</button>
                </div>
            </form>
            <form method="POST" action="/posts/{{$post->id}}">
                @csrf
                @method('DELETE')
                <h5>If you want to delete the whole Article press 'Submit'</h5>
                <button class="submit-button" id="delbutton2" type="submit">Delete</button>
            </form>
        </div>
    </div>
@endsection
