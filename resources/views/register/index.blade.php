@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
<hr>
<div class="row justify-content-center">
    <div class="col-md-5">

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

<main class="form-register w-100 m-auto">
    <form action="/register" method="POST">
      @csrf
      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name" required>
        <label for="floatingInput">Name</label>
        @error('name') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="username" required>
        <label for="floatingInput">Username</label>
        @error('username') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
        @error('email') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="form-floating">
        <input type="password" name= "password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>
        @error('password') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>
    <small>Already registered, <a href="/login">Login now</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; cwr</p>
</main>

    </div>
</div>


@endsection