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
                            <a href="{{ route('admin.publishers.edit', $publisher) }}" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </td>
                    </tr>
            </tbody>
        @empty
            @endforelse
        </table>
    </div>
@endsection
