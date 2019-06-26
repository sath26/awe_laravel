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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sweetalert2.css') }}">

<script type="text/javascript" src="{{ asset('js/sweetalert2.js') }}"></script>

</head>
<body>
    <div class="gradient-layer">
        <div class="container">
           
                @if($errors && $errors->count())
                <?php $error_text = "" ?>
                    @foreach($errors->all() as $error)
            
                        <?php 
                            $error_text = $error_text. "<br>". $error ;
                        ?>
                    @endforeach
                     <script type="text/javascript">
                        swal({
                          html: '{!!  $error_text !!}'
                        })
                                    
                    </script>

                @endif
            <div class="row devForm">
                <div class="col-md-4 col-md-offset-2" style="padding:0px;">

                    <div class="registration-form ">
                           <form class="form-horizontal tile" role="form" method="POST" action="{{ url('/register') }}">

                        <p class="loginintro">  don't have an account? </p>
                        <p class="logintitle"> register now</p>
                        <div class="row">
                            {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label col-md-2"> 
                                    <i class="fa fa-user"></i>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control devinput" id="name" placeholder=" Name" name="name" required autofocus>
                            
                                </div>
                            </div>
                            
                            <div class="form-group{{ $errors->has('email1') ? ' has-error' : '' }}">
                                <label for="email1" class="control-label col-md-2"> 
                                    <i class="fa fa-envelope"></i>
                                </label>
                                <div class="col-md-10">
                                    <input type="email" class="form-control devinput" id="email1" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                   
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('password1') ? ' has-error' : '' }}">
                                <label for="password1" class="control-label col-md-2"> 
                                    <i class="fa fa-lock"></i>
                                </label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control devinput" id="password1" name="password" placeholder="Password">

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="control-label col-md-2"> 
                                    <i class="fa fa-lock"></i>
                                </label>
                                <div class="col-md-10">
                                    <input type="password" class="form-control devinput" id="password-confirm" name="password_confirmation" placeholder="Verify Password">

                                </div>
                            </div>
                    </div>

                    <div class="registerbtn tile">
                        <button type="submit"> register</button>
                    </div>
                        </form>

                </div>
            </div>
            <div class="col-md-4 " style="padding:0px;">
                <div class="login-form ">
                    <p class="loginintro"> already have an account?</p>
                    <p class="logintitle"> login here</p>
                       <form class="form-horizontal tile" role="form" method="POST" action="{{ url('/login') }}" >

                    <div class="row">
                        {{ csrf_field() }}
                        <div class="form-group" {{ $errors->has('email') ? ' has-error' : '' }}>
                            <label for="email" class="control-label col-md-2"> 
                                <i class="fa fa-envelope"></i>
                            </label>
                            <div class="col-md-10">
                                <input type="email" class="form-control devinput" id="email" placeholder="Email" value="{{ old('email') }}">
                            
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="pwd" class="control-label col-md-2"> 
                                <i class="fa fa-lock"></i>
                            </label>
                            <div class="col-md-10">
                                <input type="password" class="form-control devinput" id="password" placeholder="Verify Password">
                            
                            </div>
                        </div>
                </div>

                <div class="loginbtn tile">
                    <button type="submit"> login</button>
                </div>
                    </form>

            </div>
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/scrollAnimation.js') }}"></script>
</body>
</html>