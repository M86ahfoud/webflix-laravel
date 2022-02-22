@extends('layouts.base')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0 list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</h1> modifier {{ $category->name }} </h1>

<form action="/categories/{{ $category->id }}" method="POST">

    @csrf @method('put')

    <input type="text" name="name" placeholder="Nom..." class="form-control" value="{{  old('name', $category->name) }}">
    <!--<input type="text" name="email" placeholder="email...">-->


    <button class="btn btn-primary mt-3">Modifier</button>

</form>

@endsection