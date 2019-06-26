     <form id="logout-form" action="{{ url('/logout') }}" method="POST"
     style="display: none;">
     {{ csrf_field() }}

 </form>
 <nav class="navbar navbar-fixed-top">
    <section class="topsec">
        <div class="container">
            <div class="row">
                <div class="col-md-3 contact-info">
                    <i class="fa fa-phone" style="padding-right: 10px; color: var(--red)"> </i> (9851)-079739
                </div>
                <div class="col-md-4 col-md-offset-5">
                    <ul class="basic-info">
                        @if (Auth::guest())
                        <li><a class="login" href="{{ route('login') }}"> login</a></li>
                        |
                        <li><a class="login" href="{{ route('register') }}"> Register</a></li>
                        @else
                        <li class="dropdown usrdropdown">
                            <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                                {{ Auth::user()->name }}  <i class="fa fa-angle-down" aria-hidden="true" style="padding-left:3px"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a  href="{{ url('/logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> 
                                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        Logout 
                                    </a>

                                </li>
                            </ul>              
                        </li>
                        @endif

                        {{-- <li> English<li> --}}
                            <li> USD </li>
                        </ul>
                    </div>

                </div>
            </div>

        </section>
        <div class="container">
            <div class="row">
                <div class="navbar-header" >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.JPG') }}"></a>
                </div>
                <div class="smalldevview">
                    <a href="cart.php"> <i class="fa fa-shopping-cart"></i> </a>   
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <div class="row">
                        <div class="col-md-5 col-xs-12 col-sm-12">
                            <ul class="nav navbar-nav">
                                <li><a href="{{ route('home') }}" class="active">Home </a></li>
                                <li><a href="{{ route('about') }}"> About us </a></li>
                                <li class="dropdown">
                                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Felts <i class="fa fa-angle-down" aria-hidden="true" style="padding-left:3px"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        @foreach ($categories as $category)
                                        <li><a href="{{ route('product', $category->id ) }}">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>              
                                </li>
                                <li><a href="{{ route('blog') }}"> Blog </a></li>
                                <li><a href="{{ route('contact') }}"> Contact us </a></li>
                                {{-- <li class="wishlist"><a href=""> Wishlist <i class="fa fa-heart-o" aria-hidden="true"></i></a> </li> --}}
                                @if (Auth::check())
                                {{-- expr --}}
                                <li class="wishlist dropdown">
                                    <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{ Auth::user()->name }}  <i class="fa fa-angle-down" aria-hidden="true" style="padding-left:3px"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a  href="{{ url('/logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out" aria-hidden="true"></i>Logout </a></li>

                                    </ul>
                                </li>
                                @endif


                            </ul>
                        </div>
                        <div class="col-md-5 hidden-xs">

                            <ul class="nav navbar-nav pull-right" style="position:relative">

                            {{-- <li id="searchbar">
                                <form action="" autocomplete="on">
                                    <input id="search" name="search" type="text" placeholder="What're you looking for ?">
                                    <input id="search_submit" value="" type="submit">
                                </form>
                            </li> --}}
                            {{-- <li ><a href=""> Wishlist <i class="fa fa-heart-o" aria-hidden="true"></i></a> </li> --}}
                            <li class="cart"><a href="{{ route('cart.index') }}">  <i class="fa fa-shopping-cart"></i> </a></li>
                        </ul>



                    </div>
                </div>

            </div>
        </div>
    </div>

</nav>




