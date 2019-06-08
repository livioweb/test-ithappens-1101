
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            {!! method_field('POST') !!}
            <input type="hidden" name="_method" value="POST">

            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="row">

                                <!-- Name Field -->
                                <div class="form-group col-sm-12">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Nome Completo</label>
                                    <input class="form-control" value="{{@$order->name}}" name="name" type="text" id="name">
                                </div>

                                <!-- Name Field -->
                                <div class="form-group col-sm-6">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Produto</label>
                                    <select class="form-control" name="product_id">
                                        @foreach(@$products as $product)
                                            <option value="{{@$product->id}}" >{{@$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Name Field -->
                                <div class="form-group col-sm-6">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Produto</label>
                                    <select class="form-control" name="product_id">
                                        @foreach(@$products as $product)
                                            <option value="{{@$product->id}}" >{{@$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>

                        </div>

                        </div>

                    </div>
                </div>
            </div>

