@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Developer edit</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.developers.update', $developer->id) }}" method="POST">
            @csrf
            @method('PUT')
            <table class="table">
                <tbody>
                    <tr>
                        <td><label for="label">Developer:</label></td>
                        <td><input type="text" name="label" class="form-control" id="label"
                                value="{{ $developer->label }}"></td>
                    </tr>
                    <tr>
                        <td><label for="year_production">Production Year:</label></td>
                        <td><input type="number" name="year_production" class="form-control" id="year_production"
                                value="{{ $developer->year_production }}"></td>
                    </tr>
                    <tr>
                        <td><label for="location">Location:</label></td>
                        <td><input type="text" name="location" class="form-control" id="location"
                                value="{{ $developer->location }}"></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">edit</button>
        </form>
    </div>
@endsection
