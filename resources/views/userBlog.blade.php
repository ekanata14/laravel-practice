@extends('templates.main')

@section('container')
<h1>{{ $title }}</h1>

    <div class="row">
        <div class="col-lg-12">
            @foreach ($categories as $category)
            <h3> <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
            @endforeach
        </div>
    </div>
@endsection
