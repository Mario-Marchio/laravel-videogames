@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mt-3">
        <a class="btn btn-success" href="{{ route('admin.videogames.create') }}">New Videogame</a>
    </div>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Created</th>
                <th scope="col">Updated</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($videogames as $videogame)
                <tr>
                    <th>{{ $videogame->title }}</th>
                    <td>{{ $videogame->created_at }}</td>
                    <td>{{ $videogame->updated_at }}</td>
                    <td>
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-success" href="{{ route('admin.videogames.show', $videogame) }}">Details</a>
                            <a class="btn btn-warning mx-3" href="{{ route('admin.videogames.edit', $videogame) }}">Edit</a>
                            <!-- Button trigger modal -->

                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal-{{ $videogame->id }}">
                                Delete
                            </button>
                    </td>
                </tr>

                {{-- MODAL --}}
                <div class="modal fade" id="modal-{{ $videogame->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Delete {{ $videogame->title }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Delete {{ $videogame->title }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="{{ route('admin.videogames.destroy', $videogame) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Confirm delete
                                        {{ $videogame->title }}</button>
                                </form>

                            </div>
                        </div>
                    </div>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end my-2">
        <a class="btn btn-dark" href="{{ route('admin.videogames.trash') }}">Trash</a>
    </div>
@endsection
