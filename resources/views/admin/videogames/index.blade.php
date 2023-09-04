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
              <form action="{{ route('admin.videogames.destroy', $videogame) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Delete</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex justify-content-end my-2">
    <a class="btn btn-dark" href="{{ route('admin.videogames.trash') }}">Trash</a>
  </div>
@endsection
