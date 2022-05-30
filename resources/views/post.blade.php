@extends('layouts.main')

@section('container')
<h1>Halaman Post</h1>

<div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Posts
      </h3>
      <article class="blog-post">
        
        <h2 class="blog-post-title">{{ $data["title"] }}</a></h2>
        <p class="blog-post-meta">June 6, 2022 by <a href="#">{{ $data["author"] }}</a></p>

        <p>{{ $data["post"] }}</p>
        <hr>


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="/blog">Back to blog</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Update</a>
      </nav>


    </div>

@endsection