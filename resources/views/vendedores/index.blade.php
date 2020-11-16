@extends('layout')
@section('conteudo')
Nome:
@foreach($vendedores as $vendedor)
<a href="{{route('vendedores.show', ['id'=>$vendedor->id_vendedor])}}">{{$vendedor->nome}}</a>
<br>
@endforeach




@endsection