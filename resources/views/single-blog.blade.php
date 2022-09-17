@extends("templates.main")

@section("container")

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mb-3">
                <h5><a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></h5>

                <article class="my-3">
                    {!! $post->body !!}
                </article>
                <br>
                <a href="/blog">Back to Blog</a>
            </div>
        </div>
    </div>


@endsection