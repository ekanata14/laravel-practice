@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Blog Categories</h1>
</div>
<a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create New Category</a>
@if(session()->has('success'))
<div class="alert alert-success col-lg-4" role="alert">
    {{ session('success') }}
  </div>
@endif
<div class="table-responsive col-lg-6">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Category</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/dashboard/blog/{{ $category->slug }}"  class="badge bg-info"><span data-feather="eye"></span></a>    
                <a href="/dashboard/blog/{{ $category->slug }}/edit"  class="badge bg-warning"><span data-feather="edit"></span></a>    
                <form action="/dashboard/category/{{ $category->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are You sure?')"><span data-feather="x-circle"></span></button>    
                </form>
            </td>    
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection