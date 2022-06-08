@extends('dashboard.layouts.main')

@section('dcontainer')

    <h1 class="h2">Post by, {{ auth()->user()->name }}</h1>
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
                  <a href="/dashboard/blog/{{ $post->slug }}" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <a href="/dashboard/blog/{{ $post->id }}" class="badge bg-danger"><span data-feather="x-circle"></span></a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
  
@endsection