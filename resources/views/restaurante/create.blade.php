@extends('layouts.app')

@section('content')
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<h1>Novo Restaurante</h1>
<form action="{{action('RestauranteController@store')}}" method="post">
    <input type="hidden" value="{{csrf_token()}}" name="_token"/>

    <div class="form-group">
        <label>Nome: </label>
        <input class="form-control" type="text" name="nome" value="{{ old('nome') }}"/>
    </div>

    <div class="form-group">
        <label>Descrição: </label>
        <input class="form-control" type="text" name="descricao" value="{{ old('descricao') }}"/>
    </div>

    <!--<div class="form-group">
        <label>Logo: </label>
        <input class="form-control" type="text" name="logo" value="{{ old('logo') }}"/>
    </div>

    <div class="form-group">
        <label>Abre as: </label>
        <input class="form-control" type="text" name="hora_inicio_funcionamento" value="{{ old('hora_fim_funcionamento') }}"/>
    </div>

    <div class="form-group">
        <label>Fecha as: </label>
        <input class="form-control" type="text" name="hora_fim_funcionamento" value="{{ old('hora_fim_funcionamento') }}"/>
    </div>-->

    <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
</form>
@endsection