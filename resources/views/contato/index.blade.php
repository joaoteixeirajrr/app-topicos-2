@extends('layouts.master')

@section('content')

<h1>Listagem de Contatos</h1>
<table class="table">
    <caption>Legenda de tabela opcional.</caption>
    <thead>
    <tr>
        <th>#</th>
        <th>Primeiro Nome</th>
        <th>Último Name</th>
        <th>Nome de usuário</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
@endsection