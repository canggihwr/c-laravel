@extends('layouts.main')

@section('container')
<h1>Post Categories List :</h1>
<hr>
<div class="row g-5">
    <div class="col-md-8">
      @foreach ($categories as $category)
          
      
      <article class="blog-post">
        
        <h2 class="blog-post-title"><a href="categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
        <hr>

      @endforeach


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="/blog">Back</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>


    </div>

@endsection