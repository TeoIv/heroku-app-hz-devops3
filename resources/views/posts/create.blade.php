@extends('common.layout')

@section('body')
    <head>
        <title>Write a new post</title>
        <link rel="stylesheet" type="text/css" href="/css/form.css">
        <style>
            .required-field {
                color: red;
                position: relative;
                display: inline-block;
            }

            .required-field:hover::after {
                content: "The following field is required";
                position: absolute;
                top: 100%;
                left: 0;
                background-color: #ff0000;
                color: #ffffff;
                padding: 5px;
                border-radius: 5px;
                font-size: 14px;
            }
        </style>
    </head>

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
                    <label for="title">Article Title<span class="required-field">*</span></label><br>
                    <input class="{{ $errors->has('title') ? 'is-danger' : ''}}" type="text" id="title" name="title" placeholder="The title of your post" value="{{old('title')}}"><br>
                    @error('title')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="img_url">Path to photo</label><br>
                    <textarea class="{{ $errors->has('img_url') ? 'is-danger' : ''}}" id="img_url" name="img_url" placeholder="To include an image in your post, fill out a valid URL to the image" rows="1" cols="50">{{old('img_url')}}</textarea><br>
                    @error('img_url')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="excerpt">The Excerpt<span class="required-field">*</span></label><br>
                    <textarea class="{{ $errors->has('excerpt') ? 'is-danger' : ''}}" id="excerpt" name="excerpt" placeholder="Please fill out the excerpt" rows="3" cols="70">{{old('excerpt')}}</textarea><br>
                    @error('excerpt')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="body">The Body<span class="required-field">*</span></label><br>
                    <textarea class="{{ $errors->has('body') ? 'is-danger' : ''}}" id="body" name="body" placeholder="The main content of your post" rows="10" cols="100">{{old('body')}}</textarea>
                    @error('body')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button class="submit-button" type="submit">Upload Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
