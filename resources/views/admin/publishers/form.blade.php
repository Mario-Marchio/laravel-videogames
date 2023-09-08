<div class="card p-4">
    @csrf


    {{-- NAME --}}
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            value="{{ old('name', $publisher->name) }}">
        @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>

    <div class="row row-cols-2 mb-3">
        <div class="col">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email"
                name="email" value="{{ old('email', $publisher->email) }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="col">
            <label for="website">Website</label>
            <input type="text" class="form-control @error('website') is-invalid @enderror" id="website"
                name="website" value="{{ old('website', $publisher->website) }}">
            @error('website')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

    </div>



    {{-- BUTTON --}}
    <div class="d-flex align-items-center my-3">
        <button class="btn btn-primary px-5 py-3">Save</button>
    </div>
</div>
