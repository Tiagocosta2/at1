@if(isset($encomenda->id_encomenda))
<h1>Detalhes das Encomendas {{$encomenda->id_encomenda}}</h1>
{{$encomenda->data}}<br>
{{$encomenda->observacoes}}<br>
CLiente:
{{$encomenda->clientes->nome}}<br>

Vendedor:
{{$encomenda->vendedores->nome}}

@else
<h1 style="color:#ff0000">Erro</h1>
@endif