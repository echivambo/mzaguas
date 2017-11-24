@extends('layouts.admin')

@section('content')
<div class="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Painel</a> <a href="#">Pagamentos</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">

            <!--Mensagens-->
            @include('layouts.mensagens.msg')

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                    <h5>Registar Pagamentos</h5>
                </div>
                <div class="widget-content nopadding">
                    <div class="span7">
                    <form id="form-wizard" class="form-horizontal" method="POST" action="{{ route('contrato.store')}}">
                        {{ csrf_field() }}

                            <!--User ID-->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                        <div class="control-group">
                            <label for="id_factura" class=" control-label">Número da Factura</label>

                            <div class="controls">
                                <input id="id_factura" type="number" name="id_factura" value="{{ old('id_factura') }}" required maxlength="45">
                                <button class="btn btn-info"> Pesquisar</button>
                            </div>
                        </div>

                            <div class="control-group">
                                <label for="cliente" class="control-label">Tipo de Pagamento</label>

                                <div class="controls">
                                    <select name="cliente_id" id="cliente" class="span6">
                                        <option>Selecione o Tipo de Pagamento</option>
                                        <option value="Numerário">Numerário</option>
                                        <option value="Tranferência">Tranferência</option>
                                        <option value="Depósito">Depósito</option>
                                    </select>
                                </div>
                            </div>

                        <div class="control-group">
                            <label for="data_pagamento" class=" control-label">Data de Pagamento</label>

                            <div class="controls">
                                <input id="data_pagamento" type="date" name="data_pagamento" value="{{ old('data_pagamento') }}" required>
                            </div>
                        </div>

                        <div class="control-group hidden">
                            <label for="nr_comprovativo" class=" control-label">Número do Comprovativo</label>

                            <div class="controls">
                                <input id="nr_comprovativo" type="number" name="nr_comprovativo" value="{{ old('nr_comprovativo') }}" min="1">
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="valor" class=" control-label">Valor Recebido</label>

                            <div class="controls">
                                <input id="valor" type="number" name="valor" value="{{ old('valor') }}" min="1" required>
                            </div>
                        </div>

                            <div class="form-actions">
                                <input id="next" class="btn btn-primary" type="submit" value="Registar" />
                                <div id="status"></div>
                            </div>
                            <div id="submitted"></div>
                    </form>
                    </div>
                    <div class="span5">
                        <br>
                        <table class="table table-responsive">
                            <tr>
                                <td width="150"><h5>Número do Contrato:</h5></td><td><h6 class="text-info">000000</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Cliente:</h5></td><td><h6 class="text-info">Cliente Cli Cla</h6></td>
                            </tr>
                            <tr>
                                <td><h5>Valor a Pagar:</h5></td><td><h6 class="text-info">000.00 Mt</h6></td>
                            </tr>
                        </table>



                    </div>
                </div>
            </div>

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Pagamentos</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Apelido</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Tel</th>
                            <th>email</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pagamentos as $pagamento)
                            <tr>
                                <td>{{$pagamento->apelido}}</td>
                                <td>{{$pagamento->nome}}</td>
                                <td>{{$pagamento->endereco}}</td>
                                <td>{{$pagamento->tel1}}</td>
                                <td>{{$pagamento->email}}</td>
                                <td width="50">
                                    <a href="" class="actions edit text-warning"><i class="fa fa-pencil" aria-hidden="true"> edit</i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection
