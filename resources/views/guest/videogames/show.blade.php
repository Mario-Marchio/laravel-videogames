@extends('layouts.app')

@section('content')
    <section id="guest-videogame-list">
        {{-- Header --}}
        <header class="d-flex justify-content-between align-items-center my-3">
            <h1>{{ $videogame->title }}</h1>
            <a class="go-back" href="{{ route('guest.videogames.index') }}">Go Back</a>
        </header>

        {{-- Main content --}}

        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    {{-- Image --}}
                    <img src="{{ $videogame->image }}" alt="{{ $videogame->title }}">
                </div>

                {{-- Details --}}
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $videogame->title }}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque minima aut
                            dicta itaque! Hic laboriosam quis culpa vel perferendis sunt laborum, consequatur quod labore,
                            autem non, dolore voluptatem excepturi voluptas.</p>
                        <div>
                            <div><strong>Release date : </strong>{{ $videogame->release_year }}</div>
                            <div><strong>Genre : </strong> {{ $videogame->genre ? $videogame->genre->label : 'Undefined' }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
