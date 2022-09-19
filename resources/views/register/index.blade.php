@extends('templates.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto text-center">
            <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
            <form action="/register" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username" required>Username</label>
                @error('username')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') @enderror" id="password" placeholder="Password">
                <label for="password">Password</label>
                @error('password')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>
              <small class="d-block mt-3"> Already Registered? <a href="/login">Login!</a></small>
            </form>
          </main>
    </div>
</div>


@endsection