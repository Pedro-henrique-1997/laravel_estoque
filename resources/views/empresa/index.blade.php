@extends('templates.template')

@section('content')

<h1 class="text-center">Crud</h1>

<div style="text-align: center">
	<a href="{{url('empresa/create')}}">
		<button type="button" class="btn btn-success">Cadastrar</button>

	</a>
</div>


<div class="col-8 m-auto">
	@csrf

	<table class="table">
		<thead class="thead-dark">
			<tr>				
				<th scope="col">Nome</th>
				<th scope="col">Estado</th>
				<th scope="col">Forneçimento</th>
				<th scope="col">Orçamento</th>				
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach($lista_emp as $emp)
			<tr>
				
			</tr>
			<tr>
				<th scope="row">{{$emp->nome}}</th>
				<td>{{$emp->estado}}</td>
                <td>{{$emp->fornecimento}}</td>
				<td>{{$emp->orcamento}}</td>							
				<td>
					<a href="{{url("empresa/$emp->id")}}">
						<button type="button" class="btn btn-secondary">Visualizar</button>
					</a>

					<a href="{{url("empresa/$emp->id/edit")}}">
						<button type="button" class="btn btn-warning">Editar</button>
					</a>

					<a class="js-del" href="{{url("empresa/$emp->id")}}">
                        <button  class="btn btn-danger">Deletar</button>
                    </a>
				</td>
			</tr>
         @endforeach 
		</tbody>
	</table>
{{ $lista_emp->links() }}


</div>

@endsection