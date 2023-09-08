@extends ('layouts.app')


@section('content')
    <a href="{{ route('admin.publishers.index') }}" class="my-3 btn btn-secondary">Go Back</a>
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

    <div class="d-flex justify-content-end mt-3">
        <a class="btn btn-warning mx-3" href="{{ route('admin.publishers.edit', $publisher) }}">Edit</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $publisher->id }}">
            Delete
        </button>
    </div>

    {{-- MODAL --}}
    <div class="modal fade" id="modal-{{ $publisher->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Delete {{ $publisher->name }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Delete {{ $publisher->name }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <form action="{{ route('admin.publishers.destroy', $publisher) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Confirm delete
                            {{ $publisher->title }}</button>
                    </form>

                </div>
            </div>
        </div>
    @endsection
