@extends('layouts.base')


@section('content')
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        @foreach ($movies as $movie)
            <div class="col">

                <p> {{ $movie->title }} </p>
                <a class="texte-rese" href="/movies/">

                    <img src="{{ $movie->cover }}" class="img-fluid" alt="{{ $movie->title }}" />

                </a>
                    <a class="text reset" href="/movies/{{ $movie->id }}"> {{ $movie->title }} </a>

                    <p> {{ $movie->released_at->translatedFormat('d F Y') }} | {{ $movie->formatduration() }} </p>
            </div>
        @endforeach
    </div>

    {{ $movies->links() }}
@endsection
