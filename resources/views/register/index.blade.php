@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
<hr>
<div class="row justify-content-center">
    <div class="col-md-5">
<main class="form-register w-100 m-auto">
    <form>
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name">
        <label for="floatingInput">Name</label>
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="username">
        <label for="floatingInput">Username</label>
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name= "password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
    <small>Already registered, <a href="/login">Login now</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; cwr</p>
</main>

    </div>
</div>


@endsection