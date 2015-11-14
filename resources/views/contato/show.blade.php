@extends('layouts.master')

@section('content')
    <h1>Detalhes contato #{{ $contato->id }}</h1>
    <a href="/contato" class="btn btn-sm btn-warning">
        <span class="glyphicon glyphicon-circle-arrow-left"></span> Voltar
    </a>
    <hr>
    <div class="jumbotron">
        <h3>{{ $contato->nome }}</h3>
        <p>{{ $contato->telefone }}</p>
        <p>{{ $contato->email }}</p>
    </div>
@endsection