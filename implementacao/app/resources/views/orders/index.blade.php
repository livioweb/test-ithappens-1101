@extends('layouts.app')

@section('content')

    <!-- begin #content -->
    <div id="content" class="content">

        <div class="panel panel-inverse">
            <div class="panel-heading">

                <h4 class="panel-title">Entrada/Saida</h4>
            </div>
            <div class="panel-body">

                <section class="content-header">
                    <h1 class="pull-left">
                        {{--@lang('modules.categories.title')--}}
                    </h1>
                    <h1 class="pull-right">
                        <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('orders.create') !!}">
                            @lang('buttons.new')
                        </a>
                    </h1>
                </section>

                @include('flash-message')
                @include('orders.table')

            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end #content -->


@endsection
