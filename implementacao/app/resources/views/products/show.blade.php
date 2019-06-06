@extends('layouts.app')

@section('content')

    <!-- begin #content -->
    <div id="content" class="content">

        <div class="panel panel-inverse">
            <div class="panel-heading">

                <h4 class="panel-title">Clientes</h4>
            </div>
            <div class="panel-body">

                <section class="content-header">
                    <h1 class="pull-left">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-primary"><i class="fas fa-trash fa-2x"></i></button>
                        </form>
                    </h1>
                </section>

                {{print_r($product)}}

            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end #content -->


@endsection
