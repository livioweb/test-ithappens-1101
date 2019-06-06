
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
                                    <label for="name">Nome Completo</label>
                                    <input class="form-control" value="{{@$customer->name}}" name="name" type="text" id="name">
                                </div>

                                <!-- Mobile Field -->
                                <div class="form-group col-sm-3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <label for="mobile">Celular</label>
                                    <input class="form-control" value="{{@$customer->cel_phone}}" name="cel_phone" type="text" id="cel_phone">
                                </div>
                                <!-- Id Field -->
                                <div class="form-group col-sm-3">
                                    <i class="fa fa-database" aria-hidden="true"></i>
                                    <label for="id">Data de Nascimento</label>
                                    <input class="form-control" value="{{@$customer->date_born}}" name="date_born" type="text" id="date_born">
                                </div>

                                <!-- Email Field -->
                                <div class="form-group col-sm-9">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <label for="email">E-mail</label>
                                    <input class="form-control" value="{{@$customer->email}}" name="email" type="email" id="email">
                                </div>
                            </div>

                        </div>

                        </div>

                    </div>
                </div>
            </div>

