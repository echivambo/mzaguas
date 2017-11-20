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
                    <h5>Registar Contrato</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="form-wizard" class="form-horizontal" method="POST" action="{{ route('contrato.store')}}">
                        {{ csrf_field() }}

                            <!--User ID-->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="control-group">
                                <label for="cliente" class="control-label">Cliente</label>

                                <div class="controls">
                                    <select name="cliente_id" id="cliente" class="span4">
                                        <option>Selecione o cliente</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>

                        <div class="control-group">
                            <label for="nome" class=" control-label">Nome</label>

                            <div class="controls">
                                <input id="nome" type="text" name="nome" value="{{ old('nome') }}" required maxlength="45">
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="tel1" class=" control-label">Tel1</label>

                            <div class="controls">
                                <input id="tel1" type="number" name="tel1" value="{{ old('tel1') }}" min="1" required>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="tel2" class=" control-label">Tel2</label>

                            <div class="controls">
                                <input id="tel2" type="number" name="tel2" value="{{ old('tel2') }}">
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="email" class=" control-label">E-Mail</label>

                            <div class="controls">
                                <input id="email" type="email" name="email" value="{{ old('email') }}">
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
