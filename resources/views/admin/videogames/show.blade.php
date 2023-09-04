@extends('layouts.app')

@section('content')
  <h1 class="mt-2">{{ $videogame->title }}</h1>
  <img src="{{ $videogame->image }}" alt="{{ $videogame->title }}">
  <p><strong>Release date :</strong> {{ $videogame->release_year }}</p>
  <div class="d-flex flex-column">
    <span><strong>Created : </strong>{{ $videogame->created_at }}</span>
    <span><strong>Last Update : </strong>{{ $videogame->updated_at }}</span>
  </div>
  <div class="d-flex justify-content-end mt-3">
    <a class="btn btn-warning mx-3" href="{{ route('admin.videogames.edit', $videogame) }}">Edit</a>
    <form action="{{ route('admin.videogames.destroy', $videogame) }}" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn btn-danger">Delete</button>
    </form>
  </div>
@endsection
