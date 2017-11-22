@extends('layouts.admin')

@section('content')
<div class="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Painel</a> <a
                href="#">Parametrização</a> <a href="#">Distito</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">

            <!--Mensagens-->
            @include('layouts.mensagens.msg')

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                    <h5>Registar Distrito</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="form-wizard" class="form-horizontal" method="POST" action="{{ route('distrito.store')}}">
                        {{ csrf_field() }}

                            <!--User ID-->
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">


                        <div class="control-group">
                            <label for="provincia" class=" control-label">Provincia</label>

                            <div class="controls">
                                <select name="provincia" id="provincia" required class="span4">
                                    <option>Selecione a provincia</option>
                                    @foreach($provincias as $provincia)
                                      <option value="{{$provincia}}">{{$provincia}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label for="nome" class=" control-label">Nome</label>

                            <div class="controls">
                                <input id="nome" type="text" name="nome" value="{{ old('nome') }}" required>
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
                    <h5>Lista de Distritos</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>Provincia</th>
                            <th>Distrito</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($distritos as $ob)
                            <tr>
                                <td>{{$ob->provincia}}</td>
                                <td>{{$ob->nome}}</td>
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
