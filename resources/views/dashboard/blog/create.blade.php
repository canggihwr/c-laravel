@extends('dashboard.layouts.main')

@section('dcontainer')
<div class="row g-5">
    <div class="col-lg-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Create Post
      </h3>

      <form method="POST" action="/dashboard/blog">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">Add your post title.</small>
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug">
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" name="category_id">
            @foreach ($categories as $c)
            <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
            
          </select>
        </div>
        <div class="form-group">
            <label for="body">Isi Post</label>
            <textarea class="form-control" id="body" name="body" rows="3"></textarea>
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  
@endsection