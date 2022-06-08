@extends('dashboard.layouts.main')

@section('dcontainer')

    <h1 class="h2">Post by, {{ auth()->user()->name }}</h1>
    
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <a href="/dashboard/create" class="btn btn-info"><span data-feather="add">Create Post</span></a>
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $post)
            
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category->name }}</td>
              <td>
                  <a href="/dashboard/blog/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/blog/edit/{{ $post->slug }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/blog/{{ $post->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                  <a href="/dashboard/blog/delete/{{ $post->id }}" class="badge bg-danger" onclick="return confirm('Are you sure about that?')"><span data-feather="x-circle"></span></a>
                  </form>
                  
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  
@endsection