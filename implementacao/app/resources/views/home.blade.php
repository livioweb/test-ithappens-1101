@extends('layouts.app')

<!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
<link href="{{URL::asset("assets/plugins/jquery-jvectormap/jquery-jvectormap.css")}}" rel="stylesheet" />
<link href="{{URL::asset("assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css")}}" rel="stylesheet" />
<link href="{{URL::asset("assets/plugins/gritter/css/jquery.gritter.css")}}" rel="stylesheet" />
<link href="{{URL::asset("assets/plugins/nvd3/build/nv.d3.css")}}" rel="stylesheet" />
<!-- ================== END PAGE LEVEL CSS STYLE ================== -->
@section('content')
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
            <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
            {{--<li class="breadcrumb-item active">Dashboard v2</li>--}}
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header">ItHeppens Home <small>Dados e Alertas</small></h1>
        <!-- end page-header -->
        <!-- begin row -->
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="widget widget-stats bg-gradient-green">
                    <div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
                    <div class="stats-content">
                        <div class="stats-title">Total de Produtos</div>
                        <div class="stats-number">123</div>
                        <div class="stats-progress progress">
                            <div class="progress-bar" style="width: 100%;"></div>
                        </div>
                        <div class="stats-desc"> Todos os produtos cadastrados (100%)</div>
                    </div>
                </div>
            </div>
        <div class="row">
            <!-- begin col-8 -->
            <!-- <div class="col-lg-8">
                <div class="widget-chart with-sidebar inverse-mode">
                    <div class="widget-chart-content bg-black">
                        <h4 class="chart-title">
                            Visitors Analytics
                            <small>Where do our visitors come from</small>
                        </h4>
                        <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
                    </div>
                    <div class="widget-chart-sidebar bg-black-darker">
                        <div class="chart-number">
                            1,225,729
                            <small>Total visitors</small>
                        </div>
                        <div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
                        <ul class="chart-legend f-s-11">
                            <li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>New Visitors</span></li>
                            <li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Return Visitors</span></li>
                        </ul>
                    </div>
                </div>
            </div>-->
            <!-- end col-8 -->



        </div>
        <!-- end row -->
    </div>
    <!-- end #content -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    </div>
@endsection
<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.2/d3.min.js"></script>
<script src="{{URL::asset("assets/plugins/nvd3/build/nv.d3.js")}}"></script>
<script src="{{URL::asset("assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js")}}"></script>
<script src="{{URL::asset("assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js")}}"></script>
<script src="{{URL::asset("assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js")}}"></script>
<script src="{{URL::asset("assets/plugins/gritter/js/jquery.gritter.js")}}"></script>
<script src="{{URL::asset("assets/js/demo/dashboard-v2.min.js")}}"></script>
<!-- ================== END PAGE LEVEL JS ================== -->
