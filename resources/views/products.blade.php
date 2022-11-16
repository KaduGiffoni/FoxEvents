@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if(busca != null)
        <p>o usuario esta buscando por: {{$busca}}</p>
    @endif


@endsection