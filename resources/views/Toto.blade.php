@extends('layouts.base')


@section('content')


<h1> Projet Laravel</h1>
<p>Bonjour {{$nom}} </p>

@foreach ($Tabs as $Tab)

<li><a href="{{$Tab}}">{{$Tab}} </a></li>

@endforeach

@endsection

