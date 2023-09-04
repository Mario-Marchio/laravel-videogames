  <div class="row">

    {{-- TITLE --}}
    <div class="col-12">
      <label for="title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $videogame->title)}}">
      @error('title')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    {{-- IMAGE --}}
    <div class="col-8">
      <label for="image">Image</label>
      <input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old('image', $videogame->image)}}">
      @error('image')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    <div class="col-4">
      {{-- TODO IMAGEP PREVIEW --}}
      <img class="img-fluid w-full" src="" alt="Image Preview" > 
    </div>

    {{-- RELEASE YEAR --}}
    <div class="col-6">
      <label for="release_year">Release Year</label>
      <input type="text" class="form-control @error('release_year') is-invalid @enderror" id="release_year" name="release_year" value="{{old('release_year', $videogame->release_year)}}">
      @error('release_year')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>

    {{-- RATE --}}
    <div class="col-6">
      <label for="rate">Average Rate</label>
      <input type="text" class="form-control @error('rate') is-invalid @enderror" id="rate" name="rate" value="{{old('rate', $videogame->rate)}}">
      @error('rate')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
    
    



    
  </div> 