@extends('layouts.master')

@section('Content')

    <div class="col-xs-8 col-xs-offset-4">
        <h1> Listagem de Associados </h1>
    </div>

    <div class="table-responsive">
    <table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Código</th>
        <th>Nome</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Contato</th>
        <th>Contato de Emergência</th>
        <th>Instituição</th>
        <th>Situação</th>
    </tr>
    </thead>
    <tbody>
    <tr class="active">
        <th scope="row">1</th>
        <td>001</td>
        <td>Wallison</td>
        <td>1234567</td>
        <td>000.000.000-00</td>
        <td>9269-1959</td>
        <td>9269-1959</td>
        <td>ULBRA</td>
        <td>Ativo</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="success">
        <th scope="row">3</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="info">
        <th scope="row">5</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr>
        <th scope="row">6</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="warning">
        <th scope="row">7</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr>
        <th scope="row">8</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    <tr class="danger">
        <th scope="row">9</th>
        <td>Column content</td>
        <td>Column content</td>
        <td>Column content</td>
    </tr>
    </tbody>
</table>
    </div>
@endsection