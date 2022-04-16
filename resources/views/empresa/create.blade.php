@extends('templates.template')

@section('content')

<h1 class="text-center">Cadastrar</h1> <hr>

<div class="col-8 m-auto">
	<form name="formCad" id="formCad" method="post" action="{{url('empresa')}}">
		@csrf

	<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" autocomplete="off"><br>

    <input class="form-control" type="text" name="estado" id="estado" placeholder="Estado:" autocomplete="off"><br>

	<input class="form-control" type="text" name="fornecimento" id="fornecimento" placeholder="Fornecimento:" autocomplete="off"><br>

	<input class="form-control" type="float" name="orcamento" id="orcamento" placeholder="Orcamento:" autocomplete="off"><br>

	<input type="submit" name="cadastrar" class="btn btn-success">
		
	</form>
	
</div>
@endsection