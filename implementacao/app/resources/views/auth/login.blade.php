<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ItHappens - login</title>

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <link href={{URL::asset("assets/plugins/jquery-ui/jquery-ui.min.css")}} rel="stylesheet"/>
    <link href={{URL::asset("assets/plugins/bootstrap/4.1.0/css/bootstrap.min.css")}} rel="stylesheet"/>
    <link href={{URL::asset("assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css")}} rel="stylesheet"/>
    <link href={{URL::asset("assets/plugins/animate/animate.min.css")}} rel="stylesheet"/>
    <link href={{URL::asset("assets/css/default/style.min.css")}} rel="stylesheet"/>
    <link href={{URL::asset("assets/css/default/style-responsive.min.css")}} rel="stylesheet"/>
    <link href={{URL::asset("assets/css/default/theme/default.css")}} rel="stylesheet" id="theme"/>
    <!-- ================== END BASE CSS STYLE ================== -->

    <!-- ================== BEGIN BASE JS ================== -->
    <script src="assets/plugins/pace/pace.min.js"></script>
    <!-- ================== END BASE JS ================== -->


</head>
<body class="pace-top">
<!-- begin #page-loader -->
<div id="page-loader" class="fade show"><span class="spinner"></span></div>
<!-- end #page-loader -->

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
    <div class="login bg-black animated fadeInDown">
        <!-- begin brand -->
        <div class="login-header">
            <div class="brand">
                <span class="logo"></span> <b>ItHappens </b> APP -
                <small>ItHappens Manager App</small>
            </div>
            <div class="icon">
                <i class="fa fa-lock"></i>
            </div>
        </div>
        <!-- end brand -->
        <!-- begin login-content -->
        <div class="login-content">
            <form method="post" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <div class="form-group m-b-20">

                    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input type="email" class="form-control form-control-lg inverse-mode" name="email"
                               value="{{ old('email') }}" placeholder="@lang('auth.fields.email')">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>


                </div>
                <div class="form-group m-b-20">

                    <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input type="password" class="form-control form-control-lg inverse-mode"
                               placeholder="@lang('auth.fields.password')" name="password">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        @if ($errors->has('password'))
                            <span class="help-block"> <strong>{{ $errors->first('password') }}</strong></span>
                        @endif

                    </div>
                </div>

                <div class="checkbox checkbox-css m-b-20">
                    <input type="checkbox" id="remember_checkbox" name="remember">
                    <label for="remember_checkbox">
                        @lang('auth.labels.remeber_me')
                    </label>
                </div>
                <div class="login-buttons">
                    <button type="submit"
                            class="btn btn-primary btn-block btn-flat">@lang('auth.buttons.sign_in')</button>
                </div>
            </form>
        </div>
        <!-- end login-content -->
    </div>
    <!-- end login -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src={{URL::asset("assets/plugins/jquery/jquery-3.2.1.min.js")}}></script>
<script src={{URL::asset("assets/plugins/jquery-ui/jquery-ui.min.js")}}></script>
<script src={{URL::asset("assets/plugins/bootstrap/4.1.0/js/bootstrap.bundle.min.js")}}></script>
<!--[if lt IE 9]>
<script src={{URL::asset("assets/crossbrowserjs/html5shiv.js")}}></script>
<script src={{URL::asset("assets/crossbrowserjs/respond.min.js")}}></script>
<script src={{URL::asset("assets/crossbrowserjs/excanvas.min.js")}}></script>
<![endif]-->
<script src={{URL::asset("assets/plugins/slimscroll/jquery.slimscroll.min.js")}}></script>
<script src={{URL::asset("assets/plugins/js-cookie/js.cookie.js")}}></script>
<script src={{URL::asset("assets/js/theme/default.min.js")}}></script>
<script src={{URL::asset("assets/js/apps.min.js")}}></script>
<!-- ================== END BASE JS ================== -->

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
</body>
</html>
