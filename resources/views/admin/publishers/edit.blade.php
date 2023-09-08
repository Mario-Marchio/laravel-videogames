@extends ('layouts.app')


@section('content')
    <a href="{{ url()->previous() }}" class="my-3 btn btn-secondary">Go Back</a>

    <h1 class="mb-3">Edit {{ $publisher->name }}</h1>

    <div class="my-5">
        <form action="{{ route('admin.publishers.update', $publisher) }}" method="POST">
            @method('put')
            @include('admin.publishers.form')
        </form>
    </div>
@endsection
