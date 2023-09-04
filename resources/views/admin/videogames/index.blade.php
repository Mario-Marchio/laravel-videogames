@extends('layouts.app')

@section('content')
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
                        <div class="d-flex">
                            <a class="btn btn-success" href="{{ route('admin.videogames.show', $videogame) }}">Dettagli</a>
                            <a class="btn btn-warning mx-3"
                                href="{{ route('admin.videogames.edit', $videogame) }}">Modifica</a>
                            <form action="#" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Cancella</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
