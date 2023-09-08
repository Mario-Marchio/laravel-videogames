@extends ('layouts.app')

@section('content')
  <table class="table">
    <div class="d-flex justify-content-end mt-3">
      <a class="btn btn-success" href="{{ route('admin.consoles.create') }}">New Console</a>
    </div>
    <thead>
      <tr>
        <th scope="col">Name Console</th>
        <th scope="col">Production Year</th>
        <th scope="col">Company</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($consoles as $console)
        <tr>
          <th>{{ $console->label }}</th>
          <td>{{ $console->year_production }}</td>
          <td>{{ $console->company }}</td>
          <td>
            <div class="d-flex justify-content-end">
              <a class="btn btn-warning mx-3" href="{{ route('admin.consoles.edit', $console) }}">Edit</a>
              <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                data-bs-target="#modal-{{ $console->id }}">
                Delete
              </button>
            </div>
          </td>
        </tr>
        {{-- MODAL --}}
        <div class="modal fade" id="modal-{{ $console->id }}" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5">Delete {{ $console->label }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Delete {{ $console->label }}
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('admin.consoles.destroy', $console) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Confirm delete
                    {{ $console->label }}</button>
                </form>
              </div>
            </div>
          </div>
      @endforeach
    </tbody>
  </table>
@endsection
