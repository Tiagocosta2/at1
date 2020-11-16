@if(isset($vendedor->id_vendedor))
<h1> Detalhes do Vendedor {{$vendedor->id_vendedor}}</h1>
{{$vendedor->nome}}<br>
{{$vendedor->especialidade}}<br>
{{$vendedor->email}}<br>
@else
<h1 style="color:#ff0000">Erro</h1>
@endif

Encomenda:
@foreach($vendedor->encomendas as $encomenda)
{{$encomenda->data}}<br>
@endforeach