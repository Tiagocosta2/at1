@extends('layout')
@section('conteudo')
Nome:<br>
@foreach($clientes as $cliente)
<a href="{{route('clientes.show', ['id'=>$cliente->id_cliente])}}">{{$cliente->nome}}</a>
<br>
@endforeach



@endsection