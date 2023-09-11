@extends ('layouts.app')

@section('content')
    <div class="container">
        <h1>Developer List</h1>


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-4 d-flex flex-row-reverse">
            <a href="{{ route('admin.developers.create') }}" class="btn btn-success">Add developer</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>developer</th>
                    <th>Production Year</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($developers as $developer)
                    <tr>
                        <td>{{ $developer->label }}</td>
                        <td>{{ $developer->year_production }}</td>
                        <td>{{ $developer->location }}</td>
                        <td>
                            <a href="{{ route('admin.developers.show', $developer->id) }}" class="btn btn-info">Details</a>
                            <a href="{{ route('admin.developers.edit', $developer->id) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('admin.developers.destroy', $developer->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>
@endsection
