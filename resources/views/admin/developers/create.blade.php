@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Developer</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.developers.store') }}" method="POST">
            @csrf
            <table class="table">
                <tbody>
                    <tr>
                        <td><label for="label">Developer:</label></td>
                        <td><input type="text" name="label" class="form-control" id="label"></td>
                    </tr>
                    <tr>
                        <td><label for="year_production">Production Year:</label></td>
                        <td><input type="number" name="year_production" class="form-control" id="year_production"></td>
                    </tr>
                    <tr>
                        <td><label for="location">Location:</label></td>
                        <td><input type="text" name="location" class="form-control" id="location"></td>
                    </tr>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
