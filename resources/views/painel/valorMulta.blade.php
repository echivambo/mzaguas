@extends('layouts.admin')

@section('content')
<div class="content">

<div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Painel</a> <a
                href="#">Parametrização</a> <a href="#">Valor da multa</a></div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">

                <!--Mensagens-->
                @include('layouts.mensagens.msg')

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"> <i class="icon-pencil"></i> </span>
                    <h5>Registar Valor da Multa</h5>
                </div>
                <div class="widget-content nopadding">
                    <form id="form-wizard" class="form-horizontal" method="POST" action="{{ route('distrito.store')}}">
                    {{ csrf_field() }}

                    <!--User ID-->
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">


                        <div class="control-group">
                            <label for="valor" class=" control-label">Valor</label>

                            <div class="controls">
                                <input id="valor" type="number" name="valor" value="{{ old('valor') }}" required>
                            </div>
                        </div>

                        <div class="control-group {{ $errors->has('descricao') ? ' has-error' : '' }}">
                            <label for="taxa" class="control-label">Taxa por metro cúbico</label>

                            <div class="controls">
                                <textarea name="descricao" id="descricao" class="input span6" rows="5"></textarea>
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