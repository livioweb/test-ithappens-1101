
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
                                    <input class="form-control" value="{{@$user->name}}" name="name" type="text" id="name">
                                </div>

                                <!-- Mobile Field -->
                                <div class="form-group col-sm-3">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <label for="mobile">Avatar</label>
                                    <input class="form-control" value="{{@$user->avatar}}" name="avatar" type="text" id="avatar">
                                </div>
                                <!-- Id Field -->
                                <div class="form-group col-sm-3">
                                    <i class="fa fa-database" aria-hidden="true"></i>
                                    <label for="id">Super Admin</label>
                                    <input class="form-control" value="{{@$user->super_admin}}" name="super_admin" type="text" id="super_admin">
                                </div>

                                <!-- Email Field -->
                                <div class="form-group col-sm-9">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <label for="email">E-mail</label>
                                    <input class="form-control" value="{{@$user->email}}" name="email" type="email" id="email">
                                </div>

                                <!-- Email Field -->
                                <div class="form-group col-sm-9">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <label for="email">Password</label>
                                    <input class="form-control" value="{{@$user->password}}" name="password" type="password" id="password">
                                </div>

                            </div>

                        </div>

                        </div>

                    </div>
                </div>
            </div>

