@extends('templates.main')

@section('container')
<h1 class="mt-5 mb-3">{{ $title }}</h1>
    @if($posts->count())
    <div class="card mb-3 text-center">
        <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7); border-bottom-right-radius: 10px;"><h5><a href="categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-white">{{ $posts[0]->category->name }}</a></h5></div>
        <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="img">
        <div class="card-body">
        <h3 class="card-title"><a href="../blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <h6 class="card-text my-3"><a href="/author/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/author/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></h6>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <p class="card-text"><small class="text-muted">{{  $posts[0]->created_at->diffForHumans() }}</small></p>
        <a href="blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
    @else
        <p class="fs-1">No Post Found</p>
    @endif
    <div class="container mt-5">
        <div class="row">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7); border-bottom-right-radius:10px;"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-nonef text-white">{{ $post->category->name }}</a></div>
                    <img src="https://source.unsplash.com/800x600/?{{ $post->category->name }}" class="card-img-top" alt="img">
                    <div class="card-body">
                      <h4 class="card-title"><a href="blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                      <h6 class="card-text my-3"><a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a>{{ $post->author->name }} in <a href="/author/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <p class="card-text"><small>{{ $post->created_at->diffForHumans() }}</small></p>
                      <a href="blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
        {{-- <div class="col-lg-4">
            @foreach ($posts->skip(1) as $post)
            <article class="mb-5 card p-3">
                <h3 class="mb-4">
                    <a href="blog/{{ $post->slug }}">
                        {{ $post->title }}</h3>
                    </a>
                <h5>By: <a href="author/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
                <p>{{ $post->excerpt }}</p>

                <a href="blog/{{ $post->slug }}">Read More</a>
            </article>
            @endforeach
        </div> --}}
    </div>
@endsection
