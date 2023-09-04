@extends ('layouts.app')

@section('content')
<h1>Edit {{$videogame->title}}</h1>
    <form action="{{route('admin.videogames.update', $videogame)}}" method="POST">
        @method('PUT')
        @include('admin.videogames.form')
    </form>
@endsection