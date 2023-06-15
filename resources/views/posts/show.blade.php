@extends('common.article')

@section('body')
    <title>{{$post->title}}</title>

    <body class="postback">
    <div class="backbutton">
        <a href="{{ route('posts.index') }}">
            <h3>Back</h3>
        </a>
    </div>
    <article class="article">
        <h2>{{$post->title}}</h2>
        <h4>By Teodor Ivanov</h4>
        <h5>{{$post->created_at}}</h5>
        <br>
        <div class="editPost">
            <a href="{{ route('posts.edit', $post) }}"><h5>Edit the Article</h5></a>
        </div>
        <br>
        <section>
            <p>{!! $post->body !!}</p>
        </section>
    </article>
    <script src="/js/animation.js"></script>
    </body>
@endsection
