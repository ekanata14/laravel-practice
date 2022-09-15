@extends("templates.main")

@section("container")
    <h2>{{ $post->title }}</h2>
    <h5>By: Dreamer Dream <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <p>{!! $post->body !!}</p>
    <a href="/blog">Back to Blog</a>
@endsection