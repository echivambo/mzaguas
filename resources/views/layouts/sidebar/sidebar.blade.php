<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i> Menu</a>
    <ul>
        <li><a href="{{route('cliente.index')}}"><i class="icon icon-home"></i> <span>Clientes</span></a> </li>
        <li><a href="{{route('contrato.index')}}"><i class="icon icon-signal"></i> <span>Contratos</span></a> </li>
        <li><a href="widgets.html"><i class="icon icon-inbox"></i> <span>Faturas</span></a> </li>
        <li><a href="tables.html"><i class="icon icon-th"></i> <span>Pagamentos</span></a></li>
        <li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>Parametrização</span> <span class="label label-important">3</span></a>
            <ul>
                <li><a href="form-common.html">Fontenárias</a></li>
                <li><a href="{{route('distrito.index')}}">Distrito</a></li>
                <li><a href="{{route('taxa.index')}}">Taxa Por Metro Cúbico</a></li>
                <li><a href="form-validation.html">Usuários</a></li>
            </ul>
        </li>
        <li class="content"> <span>Faturas não pagas</span>
            <div class="progress progress-mini progress-danger active progress-striped">
                <div style="width: 77%;" class="bar"></div>
            </div>
            <span class="percent">77%</span>
            <div class="stat">21419.94 / 14000 </div>
        </li>
        <li class="content"> <span>Faturas pagas</span>
            <div class="progress progress-mini active progress-striped">
                <div style="width: 87%;" class="bar"></div>
            </div>
            <span class="percent">87%</span>
            <div class="stat">604.44 / 4000 </div>
        </li>
    </ul>
</div>

<!--close-left-menu-stats-sidebar-->