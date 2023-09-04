@extends('layouts.app')

@section('content')
  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Created</th>
        <th scope="col">Deleted</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($videogames as $videogame)
        <tr>
          <th>{{ $videogame->title }}</th>
          <td>{{ $videogame->created_at }}</td>
          <td>{{ $videogame->deleted_at }}</td>
          <td>
            <div class="d-flex justify-content-end">
              <form action="{{ route('admin.videogames.restore', $videogame->id) }}" method="POST">
                @csrf
                @method('PUT')
                <button class="btn btn-success">Restore</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div>
    <a href="{{ route('admin.videogames.index') }}">Back to Videogames List</a>
  </div>
@endsection
