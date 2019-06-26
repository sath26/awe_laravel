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
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet"> 
    
    
    <!-- Slick slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css">
    
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/scrollAnimation.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">    
    <link href="{{ asset('css/footer.css?v=1') }}" rel="stylesheet">

  
   @yield('css')
</head>
    
<body class="index">

   @include('roshna.nav')
   @yield('content')

    @include('roshna.footer')
    

</body>
    <script src="{{ asset('js/app.js') }}"></script>
    
<script>
        $(window).scroll(function() {
          if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
          } else {
            $('nav').removeClass('shrink');
          }
        });
    </script>
    
    
@yield('javascript')
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/scrollAnimation.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script src="{{ asset('js/spinner.js') }}"></script>
        <script src="{{ asset('js/smoothscroll.js') }}"></script>
<!-- tooltip-->

    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</html>