<ul class="nav">
    <li class="nav-header">Navigation</li>
    <li class="has-sub">
        <a href="{{url('/admin/home')}}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Home</span>
        </a>
    </li>

    <li class="has-sub">
        <a href="{{ route('users') }}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Usuarios</span>
        </a>
    </li>

    <li class="has-sub">
        <a href="{{ route('home') }}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Estoque</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="{{ route('customers') }}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Clientes</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="{{ route('categories') }}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Categorias</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="{{ route('products') }}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Produtos</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="{{ route('stores') }}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Loja/Filial</span>
        </a>
    </li>
    <li class="has-sub">
        <a href="{{ route('home') }}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Pedidos</span>
        </a>
    </li>

    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                    class="fa fa-angle-double-left"></i></a></li>
    <!-- end sidebar minify button -->
</ul>
