@extends('roshna.index')
@section('css')
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endsection
@section('content')
    

    
    <section class="singleproduct">
        <div class="container">
            <div class="row productrow">
                <span> 
                    <a href="index.php"> home / </a> 
                </span>
                <span> 
                    <a href=""> shop /</a> 
                </span>
                <span> 
                    <a href="allproducts.php"> round felt balls</a> 
                </span>
                
                @include('roshna.productimage')
            </div>
            
            
        </div>
        
        <div class="container" id="featuredSection">
            <div class="row">
                <div class="title similar">
                    similar products
                </div>
                <hr class="underline3 similarhr">
            </div>
            
            <div class="row">
                <div class="featured">
                    <div class="col-md-3">
                        <a href="product.php">
                            <div class="wrap">
                                <div class="newproduct">
                                    <img src="images/felt2.jpg" >
                                    <div class="product-thumb">
                                        <ul>
                                            <li data-toggle="tooltip" data-placement="top" title="Wishlist"><a href="" ><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Quick View"><a href="product.php"><i class="fa fa-search"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add to Cart"><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                 <div class="caption1">
                                    <p class="productname"> round felt ball rugs</p>
                                    <p class="productprice">$45</p>
                                </div>
                            </div>
                        </a>
                        
                        
                        
                    </div>
                    <div class="col-md-3">
                        <a href="product.php">
                            <div class="wrap">
                                <div class="newproduct">
                                    <img src="images/felt5.jpg">
                                    <div class="product-thumb">
                                        <ul>
                                            <li data-toggle="tooltip" data-placement="top" title="Wishlist"><a href="" ><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Quick View"><a href="product.php"><i class="fa fa-search"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add to Cart"><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                 <div class="caption1">
                                    <p class="productname"> round felt ball rugs</p>
                                    <p class="productprice">$45</p>
                                </div>
                            </div>
                        </a>
                        
                        
                    </div>
                    <div class="col-md-3">
                        <a href="">
                            <div class="wrap">
                                <div class="newproduct">
                                    <img src="images/felt4.jpg">
                                    <div class="product-thumb">
                                        <ul>
                                            <li data-toggle="tooltip" data-placement="top" title="Wishlist"><a href="" ><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Quick View"><a href="product.php"><i class="fa fa-search"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add to Cart"><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                 <div class="caption1">
                                    <p class="productname"> round felt ball rugs</p>
                                    <p class="productprice">$45</p>
                                </div>
                            </div>
                        </a>
                        
                        
                    </div>
                    <div class="col-md-3">
                        <a href="">
                            <div class="wrap">
                                <div class="newproduct">
                                    <img src="images/felt5.jpg">

                                    <div class="product-thumb">
                                        <ul>
                                            <li data-toggle="tooltip" data-placement="top" title="Wishlist"><a href="" ><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Quick View"><a href="product.php"><i class="fa fa-search"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add to Cart"><a href=""><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                 <div class="caption1">
                                    <p class="productname"> round felt ball rugs</p>
                                    <p class="productprice">$45</p>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                    
                </div>
                
                
               
            </div>
         </div>
    </section>
    
        

@endsection
@section('js')
    {{-- expr --}}
   <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script> 
@endsection
