@extends('layouts.master')

@section('Content')

    <div class="col-xs-8 col-xs-offset-4">
        <br>
        <h1> Listagem de Instituições </h1>
        <br>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Fone</th>
                <th>E-mail</th>
            </tr>
            </thead>
            <tbody>
            <?php $count = 0 ?>
            @foreach($instituicaos as $instituicao)
                <tr>
                    <td>{{++$count}}</td>
                    <td>{{ $instituicao->nome }}</td>
                    <td>{{ $instituicao->fone }}</td>
                    <td>{{ $instituicao->email }}</td>
                    <td><a href="" class="btn btn-primary">Detalhes</a> </td>
                    <td><a href="{{ route('instituicao.edit', $instituicao->id) }}" class="btn btn-success">Editar</a> </td>
                    <td><a href="" class="btn btn-danger">Deletar</a> </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection