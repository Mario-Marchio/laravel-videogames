@extends ('layouts.app')


@section('content')
    <div class="my-5">
        <h1 class="mb-3">{{ $publisher->name }}</h1>
        <hr class="mb-3">
        @if ($publisher->email)
            <div><strong>Email: </strong><a href="mailto:{{ $publisher->email }}">{{ $publisher->email }}</a></div>
        @endif
        @if ($publisher->website)
            <div><strong>Website: </strong><a href="mailto:{{ $publisher->website }}">{{ $publisher->website }}</a></div>
        @endif
    </div>
@endsection
