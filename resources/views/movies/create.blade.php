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

<form action="" method="POST">

    @csrf

    <input type="text" name="title" placeholder="title..." class="form-control" value="{{old('title')}}">
    <!--<input type="text" name="email" placeholder="email...">-->
    

    <button class="btn btn-primary mt-3">Ajouter</button>

</form>

@endsection