@extends('layouts.master')

@section('Content')

    <div class="col-xs-8 col-xs-offset-4">
        <br>
        <h1> Listagem de Membros </h1>
        <br>
    </div>

    <div class="table-responsive">
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Código</th>
        <th>Nome</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Contato</th>
        <th>Contato de Emerg</th>
        <th>E-mail</th>
        <th>Instituição</th>
        <th>Ano Cad</th>
        <th>Situação</th>
    </tr>
    </thead>
    <tbody>
   @foreach($membros as $membro)
        <tr>
            <th scope="row">1</th>
            <td>{{ $membro->id }}</td>
            <td>{{$membro->nome}}</td>
            <td>{{ $membro->rg }}</td>
            <td>{{ $membro->cpf }}</td>
            <td>{{ $membro->fone }}</td>
           <td>{{ $membro->foneEmerg }}</td>
            <td>{{ $membro->id_Inst }}</td>
            <td>{{ $membro->ativo }}</td>
            <td>001</td>
            <td>Wallison Storck Coelho</td>
            <td>1234567</td>
            <td>000.000.000-00</td>
            <td>(069)9269-1959</td>
            <td>(069)9269-1959</td>
            <td>wallison_storck@outlook.com</td>
            <td>ULBRA</td>
            <td>2012/1</td>
            <td>Ativo</td>
        </tr>
    @endforeach
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>
    </div>
@endsection