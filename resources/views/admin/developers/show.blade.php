@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Developer Details</h1>

        <table class="table">
            <tbody>
                <tr>
                    <td><strong>Developer:</strong></td>
                    <td>{{ $developer->label }}</td>
                </tr>
                <tr>
                    <td><strong>Production Year:</strong></td>
                    <td>{{ $developer->year_production }}</td>
                </tr>
                <tr>
                    <td><strong>Location:</strong></td>
                    <td>{{ $developer->location }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('admin.developers.edit', $developer->id) }}" class="btn btn-primary">Modifica</a>
        <form action="{{ route('admin.developers.destroy', $developer->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button form="delete-form-{{ $developer->id }}" type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
@endsection
