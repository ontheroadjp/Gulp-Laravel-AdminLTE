@extends('auth.auth')

@section('htmlheader_title')
{{ _('Log in') }}
@endsection

@section('content')
<!-- <body class="login-page"> -->
<body>

    @if (count($errors) > 0)
        <div class="alert alert-danger text-center">
            <strong>{{ _('Whoops!') }}</strong>{{ _('There were some problems with your input.') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="login-logo">
        <a href="{{ url('/') }}">Laravel 5.1</a>
    </div><!-- /.login-logo -->

<div class="main-section">
    <div class="login-box">
    <div class="login-box-body">
    <p class="login-box-msg">{{ _('Sign in to start your session') }}</p>
    <form action="{{ url('/auth/login') }}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="{{ _('Email') }}" name="email"/>
            <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
            <span class="form-control-feedback"><i class="fa fa-envelope-o"></i></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="{{ _('Password') }}" name="password"/>
            <!-- <span class="glyphicon glyphicon-lock form-control-feedback"></span> -->
            <sapn class="form-control-feedback"><i class="fa fa-lock"></i></sapn>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox" name="remember"> {{ _('Remember Me') }}
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">{{ _('Sign In') }}</button>
            </div><!-- /.col -->
        </div>
    </form>


    <a href="{{ url('/password/email') }}">{{ _('I forgot my password') }}</a><br>
    <a href="{{ url('/auth/register') }}" class="text-center">{{ _('Register a new membership') }}</a>

    </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
</div>

    <div class="social-auth-links text-center">
        <p class="mg-30">- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ _('Sign in using Facebook') }}</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>{{ _('Sign in using Google') }}</a>
    </div><!-- /.social-auth-links -->


    @include('auth.scripts')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
