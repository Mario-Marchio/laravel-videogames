@extends ('layouts.app')

@section('content')
    <div class="mb-5">
        <h1>Create a new videogame</h1>
        <form action="{{ route('admin.videogames.store') }}" method="POST">
            @include('admin.videogames.form')
        </form>
    </div>
@endsection
