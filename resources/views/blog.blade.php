@extends('layouts.main')

@section('container')
<h1>Halaman Blog Posts</h1>
<hr>
<div class="row g-5">
    <div class="col-md-8">
      @foreach ($data as $post)
          
      
      <article class="blog-post">
        
        <h2 class="blog-post-title"><a href="blog/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p class="blog-post-meta">June 6, 2022 by <a href="#">{{ $post->id }}</a></p>

        <p>{{ $post->excerpt }}</p>
        <hr>

      @endforeach


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>


    </div>

@endsection