@extends('templates.main')

@section('container')

<div class="container">
    <div class="row mt-5">
        <h1 class="mb-3">{{ $title }}</h1>
        @foreach($categories as $category)
        <div class="col-lg-4">
            <a href="/categories/{{ $category->slug }}">
            <div class="card text-bg-dark">
                <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
                <div class="card-img-overlay d-flex justify-content-center align-items-center p-0">
                  <h5 class="card-title fs-1 text-center flex-fill py-3" style="background-color:rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection
