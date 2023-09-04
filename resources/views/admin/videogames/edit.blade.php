@extends ('layouts.app')

@section('content')
    <div class="mt-5">

        <h1>Edit {{ $videogame->title }}</h1>
        <form action="{{ route('admin.videogames.update', $videogame) }}" method="POST">
            @method('PUT')
            @include('admin.videogames.form')
        </form>
    </div>
@endsection
