@extends('layouts.main')

@section('container')
<h1>Halaman Post </h1>

<div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Posts
      </h3>
      <article class="blog-post">
        
        <h2 class="blog-post-title">{{ $data->title }}</a></h2>
        <p class="blog-post-meta">by <b><a href="/users/{{ $data->user->name }}" class="text-decoration-none">{{ $data->user->name }}</a> </b> <a href="/categories/{{ $data->category->slug }}" class="text-decoration-none">{{ $data->category->name }}</a></p>

        {!! $data->body !!}
        <hr>


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="/blog">Back to blog</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Update</a>
      </nav>


    </div>

@endsection