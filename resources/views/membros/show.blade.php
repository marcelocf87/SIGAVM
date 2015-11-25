@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-6 col-xs-offset-3 text-center">
                    <br>
                    <h1> Listagem de Membros [Detalhes] </h1>
                    <br>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped"> {{--action="/membros/{{$membro->id}}"--}}
                        {{--{{ csrf_field() }}--}}
                        <legend> Dados Pessoais </legend>
                        <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>RG</th>
                            <th>Org Emissor</th>
                            <th>CPF</th>
                            <th>Fone</th>
                            <th>Fone Emerg</th>
                            <th>E-mail</th>
                            <th>Instituição</th>
                            <th>Ano Cad</th>
                            <th>Qtd Dias</th>
                            <th>Situação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $membro->id }}</td>
                            <td>{{ $membro->nome }}</td>
                            <td>{{ $membro->rg }}</td>
                            <td>{{ $membro->orgaoEmissor }}</td>
                            <td>{{ $membro->cpf }}</td>
                            <td>{{ $membro->fone }}</td>
                            <td>{{ $membro->foneEmerg }}</td>
                            <td>{{ $membro->email }}</td>
                            <td>{{ $membro->id_Inst }}</td>
                            <td>{{ $membro->anoCadastro }}</td>
                            <td>{{ $membro->qtdDias }}</td>
                            <td>{{ $membro->ativo }}</td>
                        </tr>
                        </tbody>

                        {{--Tabela de enderecos--}}
                        <table class="table table-striped">
                            <br>
                            <br>
                            <legend> Endereço </legend>
                            <thead>
                            <tr>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>w
                                <td>{{ $membro->rua }}</td>
                                <td>{{ $membro->numero }}</td>
                                <td>{{ $membro->bairro }}</td>
                                <td>{{ $membro->cidade }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection