@extends('common.layout')

@section('body')
<head>
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="/css/blog.css">
</head>
<body class="blogbody">
<div class="container2">
    <div class="blogheader">
        <p> <span> W</span>elcome to my <span>B</span>log</p>
    </div>
    <div class="midcol">
        @foreach($posts as $post)
            <div class="post">
                <h2>
                    <a href="{{ route('posts.show', $post) }}">{{$post->title}}</a>
                </h2>
                <p>
                    <img src="{{$post->img_url}}">
                </p>
                <p>{{$post->excerpt}}</p>
            </div>
        @endforeach
    </div>
    <div class="rightcol1">
        <div class="crate_new_article">
            <a href="{{ route('posts.create') }}">WRITE A NEW ARTICLE</a>
        </div>
    </div>
    <div class="rightcol2">
        <div class="blogautor">
            <h2>About the autor</h2>
            <h5> Sep 07, 2021</h5>
            <a href="profile"><img src="img/blogimage.jpg" class="blogimage" alt=""></a>
            <p>I am 21 years old and I am new to</p>
            <p> programming, but I love learning</p>
            <p> new things every day.</p>
        </div>
    </div>
    <div class="backgroundfade"></div>
</div>
</body>
@endsection
