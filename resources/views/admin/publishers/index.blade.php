@extends ('layouts.app')


@section('content')
    <div class="my-5">

        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-3">Publishers</h1>
            <a href="{{ route('admin.publishers.create') }}" class="btn btn-primary">Add a new publisher</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Publisher</th>
                    <th scope="col">Email</th>
                    <th scope="col">Website</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($publishers as $publisher)
                    <tr>
                        <td>{{ $publisher->name }}</td>
                        <td>{{ $publisher->email }}</td>
                        <td>{{ $publisher->website }}</td>
                        <td>
                            <div class="d-flex justify-content-center align-items-center gap-2">
                                {{-- to show --}}
                                <a class="btn btn-success"
                                    href="{{ route('admin.publishers.show', $publisher) }}">Details</a>
                                {{-- to edit --}}
                                <a href="{{ route('admin.publishers.edit', $publisher) }}" class="btn btn-warning">Edit</a>
                                {{-- delete form --}}
                                <form id="delete-form-{{ $publisher->id }}" class="delete-form mb-0"
                                    action="{{ route('admin.publishers.destroy', $publisher) }}" method="POST"
                                    data-bs-toggle="modal" data-bs-target="#modal">
                                    @csrf
                                    @method('DELETE')
                                    {{-- delete button --}}
                                    <button form="delete-form-{{ $publisher->id }}" type="submit"
                                        class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    There are no Pulishers
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- MODAL --}}
    <div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Delete Publisher</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this Publisher?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="confirmation-button btn btn-danger">Confirm Delete</button>
                </div>
            </div>
        </div>
    @endsection

    <script defer src={{ Vite::asset('resources/js/admin/confirm-delete.js') }}></script>
