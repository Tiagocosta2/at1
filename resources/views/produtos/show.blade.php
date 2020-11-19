@if(isset($produto->id_produto))
<h1> Detalhes do Produto {{$produto->id_produto}}</h1>
Designação:{{$produto->designacao}}<br>
Stock:{{$produto->stock}}<br>
Preço:{{$produto->preco}} €<br>

@else
<h1 style="color:#ff0000">Erro</h1>
@endif
Encomenda:
@foreach($produto->encomendas as $encomenda)
{{$encomenda->data}}<br>
@endforeach
