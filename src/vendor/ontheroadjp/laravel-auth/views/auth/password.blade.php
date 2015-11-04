@extends('auth.auth')

@section('htmlheader_title')
{{ _('Password recovery') }}
@endsection

@section('content')

<body class="login-page">
 
     @if (session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger text-center">
            <strong>Whoops!</strong> {{ _('There were some problems with your input.') }}<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

   <div class="login-logo">
        <a href="{{ url('/') }}">Start on the Laravel</a>
    </div><!-- /.login-logo -->

    <div class="main-section">

        <div class="login-box">
        <div class="login-box-body">
            <p class="login-box-msg">{{ _('Reset Password') }}</p>
            <form action="{{ url('/password/email') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="{{ _('Email') }}" name="email" value="{{ old('email') }}"/>
                    <!-- <span class="glyphicon glyphicon-envelope form-control-feedback"></span> -->
                        <span class="form-control-feedback"><i class="fa fa-envelope-o"></i></span>

                </div>

                <div class="row">
                    <div class="col-xs-1">
                    </div><!-- /.col -->
                    <div class="col-xs-10">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">{{ _('Send Password Reset Link') }}</button>
                    </div><!-- /.col -->
                    <div class="col-xs-1">
                    </div><!-- /.col -->
                </div>
            </form>

            <a href="{{ url('/auth/login') }}">{{ _('Log in') }}</a><br>
            <a href="{{ url('/auth/register') }}" class="text-center">{{ _('Register a new membership') }}</a>

        </div><!-- /.login-box-body -->
        </div><!-- /.login-box -->
    </div>


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
