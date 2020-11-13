@extends('layout')
@section('conteudo')
Nome:
@foreach($vendedores as $vendedor)
{{$vendedor->nome}}<br>
@endforeach




@endsection