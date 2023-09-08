@extends ('layouts.app')

@section('content')
    <section id="genres-edit">
        <div class="container">
            {{-- Header --}}
            <header class="d-flex justify-content-between align-items-center my-3">
                <h1>Edit Genre</h1>
                <a class="go-back" href="{{ route('admin.genres.index') }}">Go Back</a>
            </header>

            {{-- Form --}}
            <form action="{{ route('admin.genres.update', $genre) }}" method="POST">
                @method('PUT')
                @include('admin.genres.form')
            </form>
        </div>
    </section>
@endsection
