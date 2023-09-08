@extends ('layouts.app')


@section('content')
    <a href="{{ route('admin.publishers.index') }}" class="my-3 btn btn-secondary">Go Back</a>

    <h1 class="mb-3">Add a new publisher</h1>

    <div class="my-5">
        <form action="{{ route('admin.publishers.store', $publisher) }}" method="POST">
            @include('admin.publishers.form')
        </form>
    </div>
@endsection
