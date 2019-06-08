
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
                                    <label for="name">Referencia de Estoque</label>
                                    <input class="form-control" value="{{@$stock->name}}" name="name" type="text" id="name">
                                </div>
                                <!-- Name Field -->
                                <div class="form-group col-sm-4">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Valor</label>
                                    <input class="form-control" value="{{@$stock->amount}}" name="amount" type="text" id="amount">
                                </div>
                                <!-- Name Field -->
                                <div class="form-group col-sm-4">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Valor Unitario</label>
                                    <input class="form-control" value="{{@$stock->unit_amount}}" name="unit_amount" type="text" id="unit_amount">
                                </div>
                                <!-- Name Field -->
                                <div class="form-group col-sm-4">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Valor de Pagamento</label>
                                    <input class="form-control" value="{{@$stock->payment_amount}}" name="payment_amount" type="text" id="payment_amount">
                                </div>

                                <!-- Name Field -->
                                <div class="form-group col-sm-4">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Categoria</label>

                                    <select class="form-control" name="categorie_id">
                                        @foreach(@$categories as $categorie)
                                        <option value="{{@$categorie->id}}" >{{@$categorie->name}}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <!-- Name Field -->
                                <div class="form-group col-sm-4">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Produto</label>
                                    <select class="form-control" name="product_id">
                                        @foreach(@$products as $product)
                                            <option value="{{@$product->id}}" >{{@$product->name}}</option>
                                        @endforeach
                                    </select>                                </div>
                                <!-- Name Field -->
                                <div class="form-group col-sm-4">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <label for="name">Filial</label>
                                    <select class="form-control" name="store_id">
                                        @foreach(@$stores as $store)
                                            <option value="{{@$store->id}}" >{{@$store->name}}</option>
                                        @endforeach
                                    </select>                                 </div>


                            </div>

                        </div>

                        </div>

                    </div>
                </div>
            </div>

