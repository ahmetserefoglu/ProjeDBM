@extends('adminlte::master')

@section('adminlte_css')
 <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset('/bower_components/admin-lte/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/bower_components/admin-lte/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('/bower_components/admin-lte/dist/css/skins/skin-blue.min.css')}}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('/bower_components/admin-lte/plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
<div class="content" ng-app="registerApp" ng-controller="registerController">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>

        <div class="login-box-body">
            <p class="login-box-msg"><span class="fa fa fa-user"></span> {{ trans('adminlte::adminlte.register') }}</p>
            <form  action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.fullname') }}" required autofocus>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}" required autofocus>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.confirmpassword') }}" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
               <div class="modal" tabindex="-3" role="dialog" id="terms">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Gizlilik Sözleşmesi</h4>
                            </div>
                            <p>
                                Gizlilik Sözleşmesi
                            </p>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <input type="checkbox"> {{ trans('adminlte::adminlte.aggree') }} <a class="btn btn-success btn-xs" ng-click="initTerms()">{{ trans('adminlte::adminlte.terms') }}</a>
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte::adminlte.register') }}</button>
                </div>
                <!-- /.col -->
              </div>
            </form>
            <div class="auth-links">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
</div>
@stop

@section('adminlte_js')
    <script src="{{ asset ('/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ('/bower_components/admin-lte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{ asset ('/bower_components/admin-lte/plugins/iCheck/icheck.min.js') }}"></script>
<script src="{{ asset('assets/js/register.js') }}" defer></script>
    <!-- iCheck -->
    <script src="{{ asset ('/bower_components/admin-lte/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @yield('js')
@stop
