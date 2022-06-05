@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
<hr>
<div class="">
    <div class="">
      @foreach ($data as $post)
          
      
      <article class="blog-post">
        
        <h2 class="blog-post-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
        <p class="blog-post-meta">by <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a></p>

        <p>{{ $post->excerpt }} <a href="/blog/{{ $post->slug }}" class="text-decoration-none"> Read more...</a></p>
        <hr>

      @endforeach


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>


    </div>

@endsection