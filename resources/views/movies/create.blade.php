@extends('layouts.base')

@section('content')

    <a href="/movies">Retour aux films</a>
    <h1>Créer un film</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0 list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="title">Nom</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="synopsys">Synopsys</label>
            <textarea name="synopsys" id="synopsys" class="form-control" vlaue="{{ old('synopsys') }}"></textarea>
        </div>

        <div class="mb-3">
            <label for="duration">Durée</label>
            <input type="number" name="duration" id="duration" class="form-control" value="{{ old('duration') }}">
        </div>

        <div class="mb-3">
            <label for="youtube">Youtube</label>
            <input type="text" name="youtube" id="youtube" class="form-control" value="{{ old('youtube') }}">
        </div>

        <div class="mb-3">
            <label for="cover">Image</label>
            <input type="file" name="cover" id="cover" class="form-control" value="{{ old('cover') }}">
        </div>

        <div class="mb-3">
            <label for="released_at">Date de sortie</label>
            <input type="date" name="released_at" id="released_at" class="form-control"
                value="{{ old('released_at') }}">
        </div>

        <div class="mb-3">
            <label for="category">Catégorie</label>
            <select name="category" id="category" class="form-select">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>


        <button class="btn btn-primary mt-3">Ajouter</button>

    </form>

@endsection
