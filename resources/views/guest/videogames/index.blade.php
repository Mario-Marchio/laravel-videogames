@extends('layouts.app')

@section('content')
    <section id="guest-videogame-list">
        <header>
            <h1>All Videogames</h1>
        </header>
        <div class="row">
            @foreach ($videogames as $videogame)
                <div class="col-4 g-4">
                    <div class="card border-0">
                        <a href="{{ route('guest.videogames.show', $videogame) }}">
                            <img src="{{ $videogame->image }}" class="card-img-top" alt="{{ $videogame->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $videogame->title }}</h5>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    {{-- Pagination --}}
    <div class="mt-4">
        @if ($videogames->hasPages())
            {{ $videogames->links() }}
        @endif
    </div>
@endsection
