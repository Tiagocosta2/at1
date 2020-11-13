@extends('layout')
@section('conteudo')

@foreach($produtos as $produto)
{{$produto->designacao}}<br>
@endforeach




@endsection