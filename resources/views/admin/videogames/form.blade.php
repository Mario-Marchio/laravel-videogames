<div class="card p-4">

    <div x-data="{
        imagePreview: '{{ old('image', $videogame->image) }}'
    }">
        @csrf

        {{-- TITLE --}}
        <div class="col-12">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $videogame->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- IMAGE --}}
        <div class="row my-3">

            <div class="col-8">
                <div class="mb-3">

                    <label for="image">Image</label>
                    <input x-model="imagePreview" type="text"
                        class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- RELEASE YEAR --}}
                <div class="mb-3">

                    <label for="release_year">Release Year</label>
                    <input type="date" class="form-control @error('release_year') is-invalid @enderror"
                        id="release_year" name="release_year"
                        value="{{ old('release_year', $videogame->release_year) }}">
                    @error('release_year')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                {{-- RATE --}}
                <div class="mb-3">

                    <input type="text" class="form-control @error('rate') is-invalid @enderror" id="rate"
                        name="rate" value="{{ old('rate', $videogame->rate) }}">
                    @error('rate')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>


            {{-- IMAGE PREVIEW --}}
            <div class="col-4 d-flex justify-content-center ">
                <img class="img-fluid w-full " :src="imagePreview" alt="Image Preview">
            </div>
        </div>




        {{-- BUTTON --}}
        <div class="d-flex align-items-center my-3">
            <button class="btn btn-primary px-5 py-3">Save</button>
        </div>
    </div>
</div>
