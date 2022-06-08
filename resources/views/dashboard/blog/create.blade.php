@extends('dashboard.layouts.main')

@section('dcontainer')
<div class="row g-5">
    <div class="col-lg-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Create Post
      </h3>

      <form method="POST" action="/dashboard/blog" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="TitleHelp" placeholder="Enter Title" required autofocus>
          <small id="TitleHelp" class="form-text text-muted">Add your post title.</small>
          @error('title') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
          <label for="slug">Slug</label>
          <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" placeholder="Slug" required>
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
            <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
            
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Image</label>
          <img src="" class="img-preview img-fluid" alt="">
          <input class="form-control @error('image') is-invalid @enderror" name="image" type="file" id="image" onchange="previewImage()">
          @error('image') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
        <div class="form-group">
            <label for="body">Isi Post</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="3" required></textarea>
            @error('body') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>

    {{-- <script type="text/javascript">
      $('#image').change(function(){
             
      let reader = new FileReader();
      reader.onload = (e) => { 
        $('#img-preview').attr('src', e.target.result); 
      }
      reader.readAsDataURL(image.files[0]); 
    
     });
    </script> --}}

    <script type="text/javascript">
      function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
          pv.src = oFREvent.target.result;
        }
        
      }
    </script>
  
@endsection