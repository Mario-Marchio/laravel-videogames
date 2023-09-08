@csrf

<div class="card p-4">
    <div class="row">
        <div class="col-6">
            <label for="genre_name">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre_name" name="label"
                value="{{ old('label', $genre->label ?? '') }}">

            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- TODO COLORE --}}
        {{-- <div class="col-6">
            <label for="color">Color</label>
            <input type="color" class="form-control" id="color" name="color">
        </div> --}}
    </div>

    <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-primary btn-md">Save</button>
    </div>
</div>
