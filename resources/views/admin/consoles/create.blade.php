@extends ('layouts.app')

@section('content')
  <div class="mb-5">
    <h1>Create a new console</h1>
    <form action="{{ route('admin.consoles.store') }}" method="POST">
      @include('admin.consoles.form')
    </form>
  </div>
@endsection
