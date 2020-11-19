
@if(isset($cliente->id_cliente))
<h1> Detalhes do Cliente {{$cliente->id_cliente}}</h1>

Nome:{{$cliente->nome}}<br>
Morada:{{$cliente->morada}}<br>
Telefone:{{$cliente->telefone}}<br>
Email:{{$cliente->email}}<br>

@else
<h1 style="color:#ff0000">Erro</h1>

@endif


Encomenda:
@foreach($cliente->encomendas as $encomenda)
{{$encomenda->data}}
@endforeach
