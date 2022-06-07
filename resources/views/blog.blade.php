@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
<hr>
<div class="row mr-3">
  @foreach ($data as $post)
  <div class="card col-md-4 mb-3 ">
    
    <img src="{{ asset('anime.jpg') }}" class="card-img-top" alt="anime">
    <div class="card-body">
      <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }} </a> </h5>
      <small class="card-text">by <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a> <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></small>
      <p class="card-text">{{ $post->excerpt }}</p>
      <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
    </div>
  </div>

      @endforeach


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>


    </div>

@endsection