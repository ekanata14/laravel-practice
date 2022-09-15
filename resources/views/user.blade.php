@extends('templates.main')
@section('container')
<h1>User Data</h1>
    <table class="table table-dark">
        <thead>
            <th>Id</th>
            <th>Slug</th>
            <th>Name</th>
            <th>Email</th>
            <th>Detail</th>
            <th>Image</th>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->user_slug }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="/user/{{ $user->user_slug }}" class="btn btn-primary">Detail</a></td>
                {{-- <td><img src="img/{{ $user['img'] }}" alt="{{ $user['name'] }}" width="100"></td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection