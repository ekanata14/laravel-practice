@extends('templates.main')

@section('container')
<h1 class="mt-5 mb-3 text-center">{{ $title }}</h1>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Blogs" name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    @if($posts->count())
    <div class="card mb-3 text-center">
        <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7); border-bottom-right-radius: 10px;"><h5><a href="blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-white">{{ $posts[0]->category->name }}</a></h5></div>
        @if($posts[0]->image)
        <div style="max-height: 400px; overflow:hidden">
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="img">
        </div>
        @else
            <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="img">
        @endif
        <div class="card-body">
        <h3 class="card-title"><a href="../blog/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <h6 class="card-text my-3"><a href="/blog?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></h6>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <p class="card-text"><small class="text-muted">{{  $posts[0]->created_at->diffForHumans() }}</small></p>
        <a href="blog/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach($posts->skip(1) as $post)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7); border-bottom-right-radius:10px;"><a href="/blog?category={{ $post->category->slug }}" class="text-decoration-nonef text-white">{{ $post->category->name }}</a></div>
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="img">
                    @else
                    <img src="https://source.unsplash.com/800x600/?{{ $post->category->name }}" class="card-img-top" alt="img">
                    @endif
                    <div class="card-body">
                      <h4 class="card-title"><a href="blog/{{ $post->slug }}">{{ $post->title }}</a></h4>
                      <h6 class="card-text my-3"><a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }}</a>{{ $post->author->name }} in <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                      <p class="card-text">{{ $post->excerpt }}</p>
                      <p class="card-text"><small>{{ $post->created_at->diffForHumans() }}</small></p>
                      <a href="blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="fs-1 text-center">No Post Found</p>
    @endif

    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
@endsection
