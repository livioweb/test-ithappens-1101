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
        <a href="{{ route('ledgerbooks') }}">
            <b class="caret"></b>
            <i class="fa fa-th-large"></i>
            <span>Convenios</span>
        </a>
    </li>

    @can('module_role')
        <li class="has-sub {{ Request::is('roles*') ? 'active' : '' }}">

            <a href="{!! route('roles.index') !!}">
                <b class="caret"></b>
                <i class="fa fa-th-large"></i>
                <i class="fa fa-edit"></i>
                <span>@lang('modules.roles.title')</span>
            </a>
        </li>
    @endcan
    @can('module_permission')
        <li class="has-sub {{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}">
                <i class="fa fa-edit"></i>
                <span>@lang('modules.permissions.title')</span>
            </a>
        </li>
    @endcan
    @can('module_user')
        <li class="has-sub {{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}">
                <i class="fa fa-edit"></i>
                <span>@lang('modules.users.title')</span>
            </a>
        </li>
    @endcan

    <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i
                    class="fa fa-angle-double-left"></i></a></li>
    <!-- end sidebar minify button -->
</ul>
