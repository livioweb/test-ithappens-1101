
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            {!! method_field('POST') !!}
            <input type="hidden" name="_method" value="POST">

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="row">


                                <!-- Name Field -->
                                <div class="form-group col-sm-9">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Nome do Produto</label>
                                    <input class="form-control" value="{{@$product->name}}" name="name" type="text" id="name">
                                </div>

                                <!-- Mobile Field -->
                                <div class="form-group col-sm-3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <label for="mobile">Codigo de Barras</label>
                                    <input class="form-control" value="{{@$product->bar_code}}" name="bar_code" type="text" id="bar_cod">
                                </div>


                            </div>

                        </div>

                        </div>

                    </div>
                </div>
            </div>

