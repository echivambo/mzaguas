@extends('layouts.admin')

@section('content')
<div class="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Painel</a> <a href="#">Contratos</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">

            <!--Mensagens-->
            @include('layouts.mensagens.msg')

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                    <h5>Registar Contrato</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="form-wizard" class="form-horizontal" method="POST" action="{{ route('contrato.store')}}">
                        {{ csrf_field() }}

                            <!--User ID-->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <!--Fontenaria ID-->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->fontenaria_id }}">
                            <!--Nome Do Cliente-->
                            <input type="hidden" name="nome_cliente" id="nome_cliente">

                            <div class="control-group">
                                <label for="cliente" class="control-label">Cliente</label>

                                <div class="controls">
                                    <select name="cliente_id" id="cliente_id" class="span4">
                                        <option>Selecione o cliente</option>
                                        @foreach($clientes as $cliente)
                                            <option value="{{$cliente->id}}">{{$cliente->nome}} {{$cliente->apelido}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        <div class="control-group">
                            <label for="tel1" class=" control-label">Bairro</label>

                            <div class="controls">
                                <input id="bairro" type="text" name="bairro" value="{{ old('bairro') }}" maxlength="60" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="rua" class=" control-label">Rua</label>

                            <div class="controls">
                                <input id="rua" type="text" name="rua" value="{{ old('rua') }}" maxlength="60">
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="casa" class=" control-label">Casa</label>

                            <div class="controls">
                                <input id="casa" type="text" name="casa" value="{{ old('casa') }}" maxlength="20">
                            </div>
                        </div>

                            <div class="control-group">
                                <label for="nr_contador" class=" control-label">Número do Contador</label>

                                <div class="controls">
                                    <input id="nr_contador" type="text" name="nr_contador" value="{{ old('nr_contador') }}" required maxlength="20">
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="nr_contador" class=" control-label">Leitura Inicial</label>

                                <div class="controls">
                                    <input id="leitura_inicial" type="number" name="leitura_inicial" value="{{ old('leitura_inicial') }}" required min="0">
                                </div>
                            </div>

                            <div class="form-actions">
                                <input id="next" class="btn btn-primary" type="submit" value="Registar" />
                                <div id="status"></div>
                            </div>
                            <div id="submitted"></div>
                    </form>
                </div>
            </div>



            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Contratos</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Bairro</th>
                            <th>Rua</th>
                            <th>Casa</th>
                            <th>Número do contador</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contratos as $contrato)
                            <tr>
                                <td>{{$contrato->nome_cliente}}</td>
                                <td>{{$contrato->bairro}}</td>
                                <td>{{$contrato->rua}}</td>
                                <td>{{$contrato->casa}}</td>
                                <td>{{$contrato->nr_contador}}</td>
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

<script>
    $('#cliente_id').click(function () {
        var nome_cliente = $('#cliente_id').find(":selected").text();
        $('#nome_cliente').val(nome_cliente);
        console.log(nome_cliente);
        alert($('#nome_cliente').val());
    })
</script>

@endsection
