@extends('layouts.app')

@section('content')
    <h1 class="mt-2">{{ $videogame->title }}</h1>
    <img src="{{ $videogame->image }}" alt="{{ $videogame->title }}">
    <p><strong>Release date :</strong> {{ $videogame->release_year }}</p>
    <p><strong>Genre :</strong> {{ $videogame->genre ? $videogame->genre->label : 'Undefined' }}</p>
    <div class="d-flex flex-column">
        <span><strong>Created : </strong>{{ $videogame->created_at }}</span>
        <span><strong>Last Update : </strong>{{ $videogame->updated_at }}</span>
    </div>
    <div class="d-flex justify-content-end mt-3">
        <a class="btn btn-warning mx-3" href="{{ route('admin.videogames.edit', $videogame) }}">Edit</a>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-{{ $videogame->id }}">
            Delete
        </button>
    </div>

    {{-- MODAL --}}
    <div class="modal fade" id="modal-{{ $videogame->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Delete {{ $videogame->title }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
    @endsection
