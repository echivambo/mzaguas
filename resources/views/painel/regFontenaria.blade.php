@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registar Fontenária</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('fontenaria.regPrimeira') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <label for="nome" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome" value="{{ old('name') }}" required autofocus maxlength="45">
                            </div>
                        </div>

                        <!--Empresa ID-->
                        <input type="hidden" name="empresa_id" value="<?php echo $_GET['last_id']; ?>">

                        <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                            <label for="endereco" class="col-md-4 control-label">Endereço</label>

                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control" name="endereco" value="{{ old('endereco') }}" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel1') ? ' has-error' : '' }}">
                            <label for="tel1" class="col-md-4 control-label">Tel1</label>

                            <div class="col-md-6">
                                <input id="tel1" type="number" class="form-control" name="tel1" value="{{ old('tel1') }}" min="1" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tel2') ? ' has-error' : '' }}">
                            <label for="tel2" class="col-md-4 control-label">Tel2</label>

                            <div class="col-md-6">
                                <input id="tel2" type="text" class="form-control" name="tel2" value="{{ old('tel2') }}" >
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary pull-right">
                                    Registar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
