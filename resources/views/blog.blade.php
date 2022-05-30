@extends('layouts.main')

@section('container')
<h1>Halaman Blog</h1>

<div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Posts
      </h3>
      @foreach ($data as $datas)
          
      
      <article class="blog-post">
        <h2 class="blog-post-title">{{ $datas["title"] }}</h2>
        <p class="blog-post-meta">June 6, 2022 by <a href="#">{{ $datas["author"] }}</a></p>

        <p>{{ $datas["post"] }}</p>
        <hr>

      @endforeach


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>


    </div>

@endsection