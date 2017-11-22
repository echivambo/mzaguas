@extends('layouts.admin')

@section('content')
<div class="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Painel</a> <a href="#">Faturas</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">

            <!--Mensagens-->
            @include('layouts.mensagens.msg')

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                    <h5>Registar Facturas</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="form-wizard" class="form-horizontal" method="POST" action="{{ route('contrato.store')}}">
                        {{ csrf_field() }}

                            <!--User ID-->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="control-group">
                                <label for="contrato_id" class="control-label">Cliente</label>

                                <div class="controls">
                                    <select name="contrato_id" id="contrato_id" class="span4">
                                        <option>Selecione o cliente</option>
                                        @foreach($clientes as $cliente)
                                            <option value="{{$cliente->id}}">{{$cliente->nome_cliente}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="leitura" class=" control-label">Leitura no contador</label>

                                <div class="controls">
                                    <input id="leitura" type="number" name="leitura" value="{{ old('leitura') }}" min="1" required placeholder="0">
                                </div>
                            </div>

                        <div class="control-group">
                            <label for="data_leitura" class=" control-label">Data da Leitura</label>

                            <div class="controls">
                                <input id="data_leitura" type="date" name="data_leitura" required data-date-format="DD-MMMM-YYYY" value="{{ old('data_leitura') }}" >
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

        </div>
        </div>
    </div>
</div>
</div>
@endsection
