@extends('layouts.app')

@section('content')

<!-- begin #content -->
<div id="content" class="content">

    <div class="panel panel-inverse">
        <div class="panel-heading">

            <h4 class="panel-title">Filiais/Loja</h4>
        </div>
        <div class="panel-body">
            <form method="PUT" action="{!! route('stocks.update',$stock->id) !!}" accept-charset="UTF-8">

            @include('stocks.fields')
                <div class="box-footer">
                    <!-- Submit Field -->
                    <div class="form-group col-sm-12">
                        <a href="{!! route('stocks') !!}" class="btn btn-default">@lang('buttons.cancel')</a>
                        <input class="btn btn-primary pull-right" type="submit" value="Atualizar">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end panel -->
</div>
<!-- end #content -->
@endsection

