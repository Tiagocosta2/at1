@if(isset($vendedor->id_vendedor))
<h1> Detalhes do Vendedor {{$vendedor->id_vendedor}}</h1>
Nome:{{$vendedor->nome}}<br>
Nacionalidade:{{$vendedor->especialidade}}<br>
Email:{{$vendedor->email}}<br>
@else
<h1 style="color:#ff0000">Erro</h1>
@endif

 
@foreach($vendedor->encomendas as $encomenda)
Data de Encomenda: {{$encomenda->data}}<br>
@endforeach