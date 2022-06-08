@extends('dashboard.layouts.main')

@section('dcontainer')
<div class="row g-5">
    <div class="col-lg-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Edit Post
      </h3>

      <form method="POST" action="/dashboard/blog/update/{{ $data->slug }}">
        
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="TitleHelp" placeholder="Enter Title" required autofocus value="{{ $data->title }}">
          <small id="TitleHelp" class="form-text text-muted">Add your post title.</small>
          @error('title') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" required value="{{ $data->slug }}">
          @error('slug') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="category">Category</label>
          <select class="form-control" name="category_id">
            @foreach ($categories as $c)
            @if ($data->category_id == $c->id)
            <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                    
            @else
            <option value="{{ $c->id }}">{{ $c->name }}</option>
                
            @endif
            @endforeach
            
          </select>
        </div>
        <div class="form-group">
            <label for="body">Isi Post</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="3" required>{{ $data->body }}</textarea>
            @error('body') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
          </div>
        
        <button type="submit" class="btn btn-success">Update</button>
      </form>

    </div>
  
@endsection