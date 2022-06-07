@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
<hr>
<div class="row justify-content-center">
    <div class="col-md-5">
<main class="form-signin w-100 m-auto">
    <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
    <form>
      <img class="mb-4 img-center" src="{{ asset('anime.jpg') }}" alt="" width="72" height="57">
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    </form>
    <small>not registered yet, <a href="/register">Register now</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; cwr</p>
</main>

    </div>
</div>


@endsection