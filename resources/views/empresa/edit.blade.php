@extends('templates.template')

@section('content')

<h1 class="text-center">Editar</h1> <hr>

<div class="col-8 m-auto">
	<form name="formCad" id="formCad" method="post" action="{{url("empresa/$dados_emp->id")}}">
		@csrf
		@method('PUT')

	<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" autocomplete="off" value="{{$dados_emp->nome}}"><br>

    <input class="form-control" type="text" name="estado" id="estado" placeholder="Estado:" autocomplete="off" value="{{$dados_emp->estado}}"><br>

	<input class="form-control" type="text" name="fornecimento" id="fornecimento" placeholder="Fornecimento:" autocomplete="off" value="{{$dados_emp->fornecimento}}"><br>

	<input class="form-control" type="float" name="orcamento" id="orcamento" placeholder="Orcamento:" autocomplete="off" value="{{$dados_emp->orcamento}}"><br>

	<input type="submit" name="cadastrar" class="btn btn-success">
		
	</form>
	
</div>
@endsection