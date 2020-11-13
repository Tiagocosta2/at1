@extends('layout')
@section('conteudo')

@foreach($encomendas as $encomenda)
{{$encomenda->observacoes}}<br>
@endforeach




@endsection