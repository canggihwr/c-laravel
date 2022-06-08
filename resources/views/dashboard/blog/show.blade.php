@extends('dashboard.layouts.main')

@section('dcontainer')
<div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Posts
      </h3>
      <article class="blog-post">
    <img src="{{ asset('anime.jpg') }}" class="card-img-top" alt="anime">

        
        <h2 class="blog-post-title">{{ $data->title }}</a></h2>
        <p class="blog-post-meta">by <b><a href="/author/{{ $data->user->username }}" class="text-decoration-none">{{ $data->user->name }}</a> </b> <a href="/categories/{{ $data->category->slug }}" class="text-decoration-none">{{ $data->category->name }}</a></p>

        {!! $data->body !!}
        <hr>


      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary" href="/dashboard/blog">Back to My Post</a>
        <a href="/dashboard/blog/edit/{{ $data->slug }}" class="badge bg-warning"><span data-feather="edit"></span>Edit</a>
                  <form action="" class="d-inline">
                    @method('delete')
                    @csrf
                    <a href="/dashboard/blog/delete/{{ $data->id }}" class="badge bg-danger" onclick="return confirm('Are you sure about that?')"><span data-feather="x-circle"></span>Delete</a>

                  </form>
      </nav>


    </div>
  
@endsection