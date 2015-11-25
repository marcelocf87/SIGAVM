@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
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
                                <td><a href="{{ route('instituicao.show', $instituicao->id) }}" class="btn btn-sm btn-primary">Detalhes</a> </td>
                                <td><a href="{{ route('instituicao.edit', $instituicao->id) }}" class="btn btn-sm btn-success">Editar</a> </td>
                                <td><form method="POST" accept-charset="UTF-8" action="/instituicao/{{ $instituicao->id }}">
                                        <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection