@extends ('layouts.app')

@section('content')
  <div class="mt-5">

    <h1>Edit {{ $console->label }}</h1>
    <form action="{{ route('admin.consoles.update', $console) }}" method="POST">
      @method('PUT')
      @include('admin.consoles.form')
    </form>
  </div>
@endsection
