@extends('templates.template')

@section('content')

<h1 class="text-center">Visualizar</h1>

<div class="col-8 m-auto">

	@php
	  $user = $prod->find($prod->id)->relUsers;
	@endphp

	Nome: {{$prod->nome}}<br>
	Comprador: {{$user->name}}<br>
	Quantidade:{{$prod->quantidade}}<br>
	Preço: {{$prod->preco}}<br>
	Categoria: {{$prod->categoria}}<br>
	
</div>

@endsection