@extends('templates.template')

@section('content')

<h1 class="text-center">Editar</h1> <hr>

<div class="col-8 m-auto">
	<form name="formEdit" id="formEdit" method="post" action="{{url("produtos/$prod->id")}}">
		@method('PUT')
		@csrf

	<input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" autocomplete="off" value="{{$prod->nome}}"><br>

	<select class="form-control" name="id_user" id="id_user">
		@foreach($users as $user)
            <option value="{{$user->id}}" value="{{$prod->relUsers->id}}">{{$prod->relUsers->name}}</option>
		@endforeach
		
	</select><br>

	<input class="form-control" type="integer" name="quantidade" id="quantidade" placeholder="Quantidade:" autocomplete="off" value="{{$prod->quantidade}}"><br>

	<input class="form-control" type="float" name="preco" id="preco" placeholder="Preço:" autocomplete="off" value="{{$prod->preco}}"><br>

	<input class="form-control" type="categoria" name="categoria" id="categoria" placeholder="Categoria:" autocomplete="off" value="{{$prod->categoria}}"><br>

	<input type="submit" name="cadastrar" class="btn btn-success">
		
	</form>
	
</div>

@endsection