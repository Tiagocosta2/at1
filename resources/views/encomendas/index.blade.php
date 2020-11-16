@extends('layout')
@section('conteudo')
Data:<br>
@foreach($encomendas as $encomenda)
<a href="{{route('encomendas.show', ['id'=>$encomenda->id_encomenda])}}">{{$encomenda->data}}</a>

@endforeach




@endsection