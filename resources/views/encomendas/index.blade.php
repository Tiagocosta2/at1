@extends('layout')
@section('conteudo')
Data:<br>
@foreach($encomendas as $encomenda)
<a href="{{route('encomendas.show', ['id'=>$encomenda->id_encomenda])}}">{{$encomenda->data}}</a>
<br>
@endforeach

<form method="post" action="{{route('processar.form')}}">
        @csrf
<label for="name"> Nome do Cliente </label>
<input type="text" name="caixa">
<button type="submit"> Enviar </button>
</form>


@endsection