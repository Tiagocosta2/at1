@extends('layout')
@section('conteudo')
Designação:<br>
@foreach($produtos as $produto)
<a href="{{route('produtos.show', ['id'=>$produto->id_produto])}}">{{$produto->designacao}}</a>
<br>

@endforeach




@endsection