@extends('templates.main')

@section('container')

<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto text-center">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
            <form>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
              <small class="d-block mt-3">Not Registered? <a href="/register">Register Now!</a></small>
            </form>
          </main>
    </div>
</div>


@endsection