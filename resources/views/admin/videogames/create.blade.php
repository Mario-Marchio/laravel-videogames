@extends ('layouts.app')

@section('content')
<h1>create</h1>
<form action="{{route('admin.videogames.store')}}" method="POST">
    @include('admin.videogames.form')
</form>
@endsection