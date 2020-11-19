@extends('layout')
@section('conteudo')
<div style="text-align: center;">
<table class="table">
	<thead>
		<tr>
			<th scope="col" style="text-align: center;">Designação</th>
		</tr>
	</thead>
</div>
	<tbody>
	<tr>	
@foreach($produtos as $produto)
<th scope="row"><a href="{{route('produtos.show', ['id'=>$produto->id_produto])}}">{{$produto->designacao}}</a></th>
<br>

@endforeach

</tr>
</tbody>
</table>
@endsection