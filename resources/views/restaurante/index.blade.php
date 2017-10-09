@extends('layouts.app')

@section('content')
@if(old('nome'))
<div class="alert alert-success">
    <strong>Sucesso!</strong> O resturante {{old('nome')}} foi adicionado!
</div>
@endif

<h1>Restaurantes</h1>
<a href="{{action('RestauranteController@create')}}" class="btn btn-primary" >Novo restaurante</a>

@if(empty($restaurantes))
    <div class="alert alert-danger">
        Não existe nenhum restaurante cadastrado.
    </div>
@else
    
    <table class="table table-striped table-bordered table-hover">
      @foreach ($restaurantes as $r)
      <tr>
        <td> {{$r->nome}} </td>
        <td> {{$r->descricao}} </td>
        <td> {{$r->hora_inicio_funcionamento}} </td>
        <td> {{$r->hora_fim_funcionamento}} </td>
        <td> {{$r->created_at}} </td>
        <td> {{$r->updated_at}} </td>
        <td>
            <a href="">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </a>
        </td>
        <td>
            <a href="">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </td>
      </tr>
      @endforeach
    </table>
@endif
@endsection