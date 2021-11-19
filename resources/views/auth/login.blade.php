<!DOCTYPE html>
<html>

<head>
<style>
</style>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | PEMDA DESA DAWUHAN</title>
    <!-- Favicon-->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Foto_Pemandangan_Desa_Dawuhan.jpg/1200px-Foto_Pemandangan_Desa_Dawuhan.jpg" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('adminbsb/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{ asset('adminbsb/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ asset('adminbsb/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ asset('adminbsb/css/style.css') }}" rel="stylesheet">
</head>

<body class="login-page">
    <div class="filter"></div>
        <div class="login-box" style="z-index: 2;">
            <div class="logo">
                <a href="{{ url('/') }}"><b>PEMDA DESA DAWUHAN</b></a>
            </div>
            <div class="card">
                <div class="body">
                    {!! Form::open(['url' => route('login'),
                        'method' => 'post' , 'id' => 'sign_in']) !!}
                    {{-- <form id="sign_in" method="POST"> --}}

                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">account_box</i>
                            </span>
                            <div class="form-line">
                                {!! Form::text('email', null, ['class'=>'form-control', 'placeholder' => 'email']) !!} 
                            </div>
                            {!! $errors->first('email', '<p class="error">:message</p>') !!}
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">lock</i>
                            </span>
                            <div class="form-line">
                                {!! Form::password('password', ['class'=>'form-control', 'placeholder' => 'password']) !!} 
                            </div>
                            {!! $errors->first('password', '<p class="error">:message</p>') !!}
                        </div>
                        <div class="row">
                            {{--<div class="col-xs-8 p-t-5">--}}
                            {{--<div>--}}
                            <div class="align-center">
                                {{-- <button class="btn btn-lg bg-pink waves-effect'" type="submit">SIGN IN</button> --}}
                                {!! Form::submit ('SIGN IN',['type' => 'submit', 'class'=>'btn btn-block btn-lg bg-green waves-effect']) !!} 
                            </div>
                        </div>

                        {!! Form::close() !!}
                    </form>
                </div>
            </div>
        </div>
        {{--<button class="btn btn-warning">COBA BACKGROUND</button>--}}
    
    <!-- Jquery Core Js -->
    <script src="{{ asset('adminbsb/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ asset('adminbsb/plugins/bootstrap/js/bootstrap.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ asset('adminbsb/plugins/node-waves/waves.js') }}"></script>

    <!-- Validation Plugin Js -->
    {{-- <script src="../../plugins/jquery-validation/jquery.validate.js"></script> --}}

    <!-- Custom Js -->
    <script src="{{ asset('adminbsb/js/admin.js') }}"></script>
    <script src="{{ asset('adminbsb/js/pages/index.js') }}"></script>
</body>

</html>