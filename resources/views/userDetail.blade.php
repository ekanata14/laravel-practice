@extends('templates.main')

@section('container')
    <h1>{{ $title }}</h1>
    <h2>{{ $user->username }}</h2>
    <h3>{{ $user->user_slug }}</h3>
    <h4>{{ $user->email }}</h4>
    <p>{{ $user->password }}</p>
    <a href="/user">Back to UserData</a>
@endsection

