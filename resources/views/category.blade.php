@extends('templates.main')

@section('container')
<h1>Category {{ $category }}</h1>

    <div class="row">
        <div class="col-lg-12">
            @foreach ($posts as $post)
            <article class="mb-5 card p-3">
                <h3>
                    <a href="blog/{{ $post->slug }}">
                        {{ $post->title }}</h3>
                    </a>
                <h5>{{ $post->author }}</h5>
                <p>{{ $post->excerpt }}</p>
            </article>
            @endforeach
        </div>
    </div>
@endsection
