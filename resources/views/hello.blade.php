@extends('layouts.base')


@section('content')
    <ul>
    <h1>Bonjour {{$name}}</h1>

    @foreach ($numbers as $number) 

    <li>{{ $number}}</li>

    @endforeach 
    </ul>
@endsection