@if(isset($encomenda->id_encomenda))
<h1>Detalhes das Encomendas {{$encomenda->id_encomenda}}</h1>
Data:
{{$encomenda->data}}<br>
Observações:
{{$encomenda->observacoes}}<br>
Cliente:
{{$encomenda->clientes->nome}}<br>
Vendedor:
{{$encomenda->vendedores->nome}}<br>
@else
<h1 style="color:#ff0000">Erro</h1>
@endif

Produto:
@foreach($encomenda->produtos as $produto)
{{$produto->designacao}}
@endforeach