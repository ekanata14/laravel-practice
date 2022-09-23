@extends("dashboard.layouts.main")

@section("container")

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="mb-3">{{ $blog->title }}</h2>
                <a href="/dashboard/blog" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all blogs</a>
                <a href="/dashboard/blog/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/blog/{{ $blog->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger"><span data-feather="x-circle"></span> Delete</button>
                </form>
                @if($blog->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{  asset('storage/' . $blog->image) }}" alt="{{ $blog->category->name }}" class="img-fluid my-3">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $blog->category->name }}" alt="{{ $blog->category->name }}" class="img-fluid my-3">
                @endif
                <article class="my-3">
                    {!! $blog->body !!}
                </article>
                <br>
            </div>
        </div>
    </div>


@endsection