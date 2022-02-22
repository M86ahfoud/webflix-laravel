@extends('layouts.base')


@section('content')

<a href="/categories/creer" class="btn btn-primary mb-5"> Créer une catégorie</a>
    <div class="row">
        @foreach ($categories as $category)
            <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-body">
                       <p> {{ $category->name }} </p>

                       
                        <a class="btn btn-primary" href="/categories/{{ $category->id }}">Voir </a>
                        <a class="btn btn-secondary" href="/categories/{{ $category->id }}/modifier"> Modifier </a>
                        <form action="/categories/{{ $category->id }}" method="post">
                            @csrf @method('delete')
                            <button class="btn btn-danger" onclick="return confirm('voulez-vous supprimer la catégorie ?')">Supprimer</button>
                        </form>
                    </div>

                </div>

            </div>
        @endforeach
    </div>

    {{ $categories->links() }}
@endsection
