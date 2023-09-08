@extends ('layouts.app')


@section('content')
    <h1 class="mb-3">Edit {{ $publisher->name }}</h1>

    <div class="my-5">
        <form action="{{ route('admin.publishers.update', $publisher) }}" method="POST">
            @include('admin.publishers.form')
        </form>
    </div>
@endsection
