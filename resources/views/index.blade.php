@extends('templates.template')

@section('content')
<h1 class="text-center">Crud</h1>

<div style="text-align: center">
	<a href="{{url('produtos/create')}}">
		<button type="button" class="btn btn-success">Cadastrar</button>

	</a>
</div>


<div class="col-8 m-auto">
	@csrf

	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th scope="col">ID do Produto </th>
				<th scope="col">Nome</th>
				<th scope="col">Comprador</th>
				<th scope="col">Quantidade</th>
				<th scope="col">Preço</th>
				<th scope="col">Categoria</th>
				<th scope="col">Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				@foreach($prod as $prods)
				  @php
				  $user = $prods->find($prods->id)->relUsers;
                  @endphp

			</tr>
			<tr>
				<th scope="row">{{$prods->id}}</th>
				<td>{{$prods->nome}}</td>
                <td>{{$user->name}}</td>
				<td>{{$prods->quantidade}}</td>
				<td>{{$prods->preco}}</td>
				<td>{{$prods->categoria}}</td>
				<td>
					<a href="{{url("produtos/$prods->id")}}">
						<button type="button" class="btn btn-secondary">Visualizar</button>
					</a>

					<a href="{{url("produtos/$prods->id/edit")}}">
						<button type="button" class="btn btn-warning">Editar</button>
					</a>

					<a class="js-del" href="{{url("produtos/$prods->id")}}">
                        <button  class="btn btn-danger">Deletar</button>
                    </a>
				</td>
			</tr>
          @endforeach
		</tbody>
	</table>
{{$prod->links()}}
	
</div>

@endsection