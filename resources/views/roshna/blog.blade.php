@extends('roshna.index')
@section('css')
    <link href="{{asset('css/blog.css')}}" rel="stylesheet">
@endsection
@section('js')
    {{-- expr --}}
    <script>
        function fbShare(){
            
            window.open("https://www.facebook.com/sharer/sharer.php?kid_directed_site=0&sdk=joey&u=https://developers.facebook.com/docs/plugins/&display=popup&ref=plugin&src=share_button","_blank","height=400, width=400");
            
            
        }
        function twitterShare(){
            
            window.open("https://twitter.com/intent/tweet?hashtags=demo&original_referer=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button&ref_src=twsrc%5Etfw&related=twitterapi%2Ctwitter&text=Hello%20world&tw_p=tweetbutton&url=https%3A%2F%2Fexample.com%2Ffoo&via=twitterdev","_blank","height=400, width=400");
            
            
        }
    </script>
@endsection
    
@section('content')
    <section class="blog">
        <div class="container">
            <div class="row">
                
                <div class="col-md-9 content">
                    <div class="blogtitle">
                        reminders from the monsoon rain
                    </div>
                    <div class="blogdate">
                        sunday, august 17, 2017
                    </div>
                    <div class="blogimage tile">
                        <img src="images/cat1.jpg" class="img-responsive">
                    </div>
                    
                    <div class="blogcontent">
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.""Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                    </div>
                    
                    
                    <div class="share">
                        <span class="sharetitle">
                            share on
                        </span>
                        <span>
                            <a href="javascript:void(0)" onclick="fbShare()">
                                <img src="images/facebook.png" style="height:30px; width:30px;">
                            </a> 
                        </span>
                        <span>
                            <a  href="javascript:void(0)" onclick="twitterShare()">
                                <img src="images/twitter.png" style="height:30px; width:30px;">
                            </a>
                        </span>

                    </div>
                    
                </div>
                <div class="col-md-3 archive">
                    <div class="archiveTitle">
                        archive
                    </div>
                    <hr class="underline3">
                    
                    <ul class="titles">
                        <li class="list"><a href="{{ route('blog') }}">reminders from the monsoon rain rainfall rain</a></li>
                        <li class="list"><a href="">fleeting seconds</a></li>
                        <li class="list"><a href="">reminders from the monsoon rain</a></li>
                        <li class="list"><a href="">reminders from the monsoon rain</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
@endsection