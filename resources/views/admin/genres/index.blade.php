@extends('layouts.app')

@section('cdn')
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'
        integrity='sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=='
        crossorigin='anonymous' />
@endsection

@section('content')
    <section id="genres-index">

        <header class="d-flex justify-content-end mt-3">
            <a class="btn btn-success" href="{{ route('admin.genres.create') }}"><i class="fa-solid fa-plus"></i> New Genre</a>
        </header>

        {{-- Tabella --}}
        <table class="table mt-3 text-center">
            <thead>
                <tr>
                    <th scope="col">
                        <h6>Genre</h6>
                    </th>
                    <th scope="col">
                        <h6>Color</h6>
                    </th>
                    <th scope="col">
                        <h6>Created</h6>
                    </th>
                    <th scope="col">
                        <h6>Updated</h6>
                    </th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($genres as $genre)
                    <tr>
                        <th>{{ $genre->label }}</th>
                        <td>
                            <span class="badge rounded-pill"
                                style="background-color: {{ $genre->color }}">{{ $genre->color }}</span>
                        </td>
                        <td>{{ $genre->created_at }}</td>
                        <td>{{ $genre->updated_at }}</td>
                        <td>
                            <div class="d-flex justify-content-end">
                                {{-- Modifica --}}
                                <a class="btn btn-warning mx-3" href="{{ route('admin.genres.edit', $genre) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>

                                {{-- Elimina --}}
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#modal-{{ $genre->id }}">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                        </td>
                    </tr>

                    {{-- MODAL --}}
                    <div class="modal fade" id="modal-{{ $genre->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5">Delete {{ $genre->label }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Delete genre "{{ $genre->label }}"
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('admin.genres.destroy', $genre) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger">Confirm delete
                                            "{{ $genre->label }}"</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
