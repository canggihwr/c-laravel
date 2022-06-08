@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>
<hr>

<form action="/blog" method="get">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
  <button class="btn btn-danger" type="submit">Search</button>
</div>
</form>

<div class="row mr-3">
  @foreach ($data as $post)
  <div class="card col-md-4 mb-3 ">
    @if ($post->image)
        <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="anime"> 
        @else
        <img src="{{ asset('anime.jpg') }}" class="card-img-top" alt="anime">
        @endif
    <div class="card-body">
      <h5 class="card-title"><a href="/blog/{{ $post->slug }}" class="text-decoration-none"> {{ $post->title }} </a> </h5>
      <small class="card-text">by <a href="/author/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a> <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></small>
      <p class="card-text">{{ $post->excerpt }}</p>
      <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read more</a>
    </div>
  </div>

      @endforeach

      <div class="d-flex justify-content-end">{{ $data->links() }}</div>
      


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>


    </div>

@endsection