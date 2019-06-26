<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> CREATIVE INDUSTRY </title>
    <link rel="shortcut icon" href="{{ asset('images/logo.JPG') }}" />
    <!-- Bootstrap Core CSS and JS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
    
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/scrollAnimation.css') }}" rel="stylesheet">



</head>
<body>
    <div class="gradient-layer">
        <div class="container">
            <div class="row devForm">
                <div class="col-md-4 col-md-offset-2" style="padding:0px;">
                    <div class="registration-form ">
                        <p class="loginintro">  don't have an account? </p>
                        <p class="logintitle"> register now</p>
                        <div class="row">
                         <form class="form-horizontal tile" role="form" method="POST" action="{{ url('/register') }}">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label col-md-2"> 
                                    <i class="fa fa-user"></i>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control devinput" id="name" placeholder=" Name"  required autofocus>
                                    @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="email" class="control-label col-md-2"> 
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control devinput" id="mail" placeholder="Email">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd" class="control-label col-md-2"> 
                                    <i class="fa fa-lock"></i>
                                </label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control devinput" id="pwd" placeholder="Password">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pwd" class="control-label col-md-2"> 
                                    <i class="fa fa-lock"></i>
                                </label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control devinput" id="pwd" placeholder="Verify Password">

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="registerbtn tile">
                        <button type="submit"> register</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 " style="padding:0px;">
                <div class="login-form ">
                    <p class="loginintro"> already have an account?</p>
                    <p class="logintitle"> login here</p>
                    <div class="row">
                     <form class="form-horizontal tile" role="form" method="POST" action="{{ url('/login') }}" >
                        {{ csrf_field() }}
                        <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                            <label for="email" class="control-label col-md-2"> 
                                <i class="fa fa-envelope"></i>
                            </label>
                            <div class="col-md-10">
                                <input type="email" class="form-control devinput" id="email" placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="pwd" class="control-label col-md-2"> 
                                <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-md-10">
                                <input type="password" class="form-control devinput" id="password" placeholder="Verify Password">
                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>

                <div class="loginbtn tile">
                    <button type="submit"> login</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/scrollAnimation.js') }}"></script>

</body>
</html>