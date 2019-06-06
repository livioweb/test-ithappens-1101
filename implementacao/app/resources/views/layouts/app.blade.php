<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Siconv Consult</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="ItHappens" name="Gestor Inteligente de Produtos"/>
    <meta content="Livio Rodrigues Lopes" name="author"/>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <link href="{{URL::asset("assets/plugins/jquery-ui/jquery-ui.min.css")}}" rel="stylesheet"/>
    <link href="{{URL::asset("assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css")}}" rel="stylesheet"/>
    <link href="{{URL::asset("assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css")}}" rel="stylesheet"/>
    <link href="{{URL::asset("assets/plugins/animate/animate.min.css")}}" rel="stylesheet"/>
    <link href="{{URL::asset("assets/css/default/style.min.css")}}" rel="stylesheet"/>
    <link href="{{URL::asset("assets/css/default/style-responsive.min.css")}}" rel="stylesheet"/>
    <link href="{{URL::asset("assets/css/default/theme/default.css")}}" rel="stylesheet" id="theme"/>
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="{{URL::asset("assets/plugins/pace/pace.min.js")}}"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="../assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="../assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-fontawesome.css" rel="stylesheet" />
    <link href="../assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker-glyphicons.css" rel="stylesheet" />
    <!-- ================== END PAGE LEVEL STYLE ================== -->    <!-- ================== END PAGE LEVEL STYLE ================== -->

    @yield('css')
</head>

<body>
@if (!Auth::guest())

    <div id="page-loader" class="fade show"><span class="spinner"></span></div>

    <div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
        <div id="header" class="header navbar-default">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><span class="navbar-logo"></span> <b>Gestor Inteligente Consult</b> Products</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <ul class="navbar-nav navbar-right">
                <li>
                        <form class="navbar-form" action="/admin/numero_pedido" method="GET" >

                        <div class="form-group">
                            <input type="text" name="numero_pedido" class="form-control" placeholder="Numero do Pedido"/>
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        {{--<img src="{!! Auth::user()->avatar !!}" alt=""/>--}}
                        <span class="d-none d-md-inline">{{ Auth::user()->name}}</span> <b class="caret"></b>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <form class="navbar-form" action="{{route('logout')}}" method="POST" >
                            {{ csrf_field() }}
                            <div class="form-group">
                                <button type="submit" class="dropdown-item"><i class="fa fa-close">Log Out</i></button>
                            </div>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    @include('layouts.sidebar')
@else
@endif
@yield('scripts')
@yield('content')

<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i
            class="fa fa-angle-up"></i></a>
</div>

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{URL::asset("assets/plugins/jquery/jquery-3.2.1.min.js")}}"></script>
<script src="{{URL::asset("assets/plugins/jquery-ui/jquery-ui.min.js")}}"></script>
<script src="{{URL::asset("assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js")}}"></script>
<!--[if lt IE 9]>
<script src="{{URL::asset("assets/crossbrowserjs/html5shiv.js")}}"></script>
<script src="{{URL::asset("assets/crossbrowserjs/respond.min.js")}}" ></script>
<script src="{{URL::asset("assets/crossbrowserjs/excanvas.min.js")}}"></script>
<![endif]-->
<script src="{{URL::asset("assets/plugins/slimscroll/jquery.slimscroll.min.js")}}"></script>
<script src="{{URL::asset("assets/plugins/js-cookie/js.cookie.js")}}"></script>
<script src="{{URL::asset("assets/js/theme/default.min.js")}}"></script>
<script src="{{URL::asset("assets/js/apps.min.js")}}"></script>
<!-- ================== END BASE JS ================== -->


    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{URL::asset("assets/plugins/parsley/dist/parsley.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/highlight/highlight.common.js")}}"></script>
    <script src="{{URL::asset("assets/js/demo/render.highlight.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/select2/dist/js/select2.min.js")}}"></script>
    <script src="{{URL::asset("/assets/js/demo/form-plugins.demo.js")}}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{URL::asset("assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/masked-input/masked-input.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/password-indicator/js/password-indicator.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-select/bootstrap-select.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/jquery-tag-it/js/tag-it.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-daterangepicker/moment.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-daterangepicker/daterangepicker.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/select2/dist/js/select2.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-show-password/bootstrap-show-password.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js")}}"></script>
    <script src="{{URL::asset("assets/plugins/clipboard/clipboard.min.js")}}"></script>
    <script src="{{URL::asset("assets/js/demo/form-plugins.demo.js")}}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
        DashboardV2.init();
    });
</script>

</body>
</html>
