@if(isset($cliente->id_cliente))
<h1> Detalhes do Cliente {{$cliente->id_cliente}}</h1>
{{$cliente->nome}}<br>
{{$cliente->morada}}<br>
{{$cliente->telefone}}<br>
{{$cliente->email}}<br>
@else
<h1 style="color:#ff0000">Erro</h1>
@endif
Encomenda:
@foreach($cliente->encomendas as $encomenda)
{{$encomenda->data}}<br>
@endforeach
