@extends('layout')
@section('conteudo')
Nome:
@foreach($clientes as $cliente)
{{$cliente->nome}}<br>

@endforeach



@endsection