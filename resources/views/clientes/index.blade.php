@extends('layout')
@section('conteudo')
<div style="text-align: center;" >
<table class="table" >
	<thead>
		<tr>
			<th scope="col" style="text-align: center;">Nome</th>
		</tr>
	</thead>
</div>
<tbody>
<tr>
@foreach($clientes as $cliente)
<th scope="row"><a href="{{route('clientes.show', ['id'=>$cliente->id_cliente])}}">{{$cliente->nome}}</a></th>
<br>
@endforeach
</tr>
</tbody>
</table>

@endsection