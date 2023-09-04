@extends ('layouts.app')

@section('content')
<h1>EDIT</h1>
    <form action="{{route('admins.videogames.update')}}" method="POST">
        @method('PUT')
        @include('admin.videogames.form')
    </form>
@endsection