@extends ('layouts.app')

@section('content')
    <section id="genres-create">
        <div class="container">
            {{-- Header --}}
            <header class="d-flex justify-content-between align-items-center my-3">
                <h1>Create a new Genre</h1>
                <a class="go-back" href="{{ route('admin.genres.index') }}">Go Back</a>
            </header>

            {{-- Form --}}
            <form action="{{ route('admin.genres.store') }}" method="POST">
                @include('admin.genres.form')
            </form>
        </div>
    </section>
@endsection
