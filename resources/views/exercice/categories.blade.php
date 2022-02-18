@extends('layouts.base')



@section('content')

<h1>catégories</h1>

<a href="/exercice/categories/creer">Créez une catégorie</a>
<ul>
@foreach ($categories as $category) 

<li>

    <a href="/exercice/categories/{{$category->id}}">{{ $category->name}} </a>



</li>

@endforeach 

</ul>
    
@endsection