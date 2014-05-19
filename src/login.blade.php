<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" media="screen">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/stylelogin.css') }}" rel="stylesheet">
</head>

<body>

<div id="parent">
<div class="container col-xs-12 col-sm-6 col-md-4" id="loginform">
    <h1>GoProperty</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
    @endif

    <form role="form" id="form-backend-login" method="post" action="{{ Request::url() }}">
        <div class="trick-height">
        <div class="form-group">
            {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => trans('backend.email')]) }}
            {{ Form::password('password', ['class' => 'form-control', 'placeholder' => trans('backend.password')]) }}
        </div>

        <button type="submit" class="btn-custom btn-primary btn-block" id="Login">@lang('backend.login')</button>

        <div class="checkbox">
            <label>
                 {{ Form::checkbox('remember', '1') }} @lang('backend.rememberme')
            </label>
        </div>
        </div>
    </form>
</div>
</div>

</body>
</html>