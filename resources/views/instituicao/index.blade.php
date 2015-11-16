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
                <th>Código</th>
                <th>Nome</th>
                <th>Contato</th>
                <th>E-mail</th>
            </tr>
            </thead>
            <tbody>
            {{--    @foreach($instituicaos as $instituicao)--}}
            <tr>
                <th scope="row">1</th>
                {{--<td>{{ $instituicao->id }}</td>--}}
                {{--<td>{{ $instituicao->rg }}</td>--}}
                {{--<td>{{ $instituicao->cpf }}</td>--}}
                {{--<td>{{ $instituicao->fone }}</td>--}}
                {{--<td>{{ $instituicao->foneEmerg }}</td>--}}
                {{--<td>{{ $instituicao->id_Inst }}</td>--}}
                {{--<td>{{ $instituicao->ativo }}</td>--}}
                <td>001</td>
                <td>Centro Universitário Luterado de Ji-Paraná</td>
                <td>(069)0000-0000</td>
                <td>ceulji.central@outlook.com</td>
            </tr>
            {{--@endforeach--}}
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