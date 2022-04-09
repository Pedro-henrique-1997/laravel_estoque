@extends('templates.template')

@section('content')

<h1 class="text-center">Cadastrar</h1> <hr>

<div class="col-8 m-auto">
	<form name="formCad" id="formCad" method="post" action="{{url('produtos')}}">
		@csrf

	<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" autocomplete="off"><br>

   <label>Comprador</label>
	<select class="form-control" name="id_user" id="id_user">
		@foreach($users as $user)
            <option value="{{$user->id}}">{{$user->name}}</option>
		@endforeach
		
	</select><br>

	<input class="form-control" type="integer" name="quantidade" id="quantidade" placeholder="Quantidade:" autocomplete="off"><br>

	<input class="form-control" type="float" name="preco" id="preco" placeholder="Preço:" autocomplete="off"><br>

	<input class="form-control" type="categoria" name="categoria" id="categoria" placeholder="Categoria:" autocomplete="off"><br>

	<input type="submit" name="cadastrar" class="btn btn-success">
		
	</form>
	
</div>

@endsection