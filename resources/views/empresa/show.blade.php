@extends('templates.template')

@section('content')

<h1 class="text-center">Visualizar</h1> <hr>

<div class="col-8 m-auto">

	Nome: {{$visualizar_emp->nome}} <br>
	Estado: {{$visualizar_emp->estado}} <br>
	Ficançiamento: {{$visualizar_emp->fornecimento}} <br>
	Orçamento: {{$visualizar_emp->orcamento}} <br>
	
</div>

@endsection