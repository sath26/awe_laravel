 @extends('roshna.index')
 @section('css')
 {{-- expr --}}
 <!-- Custom CSS -->
 <link href="{{ asset('css/index.css?v=1') }}" rel="stylesheet">
 <!-- Custom CSS -->
 <link href="{{ asset('css/product.css') }}" rel="stylesheet">
 @endsection
 @section('content')
 <div class="smcaption tile">
    <p> welcome to creative industry </p>
    <p>
        Quality handmade felt products from Nepal
    </p>
</div>

@inject('banner_helper', 'App\Helpers\BannerHelper')
<?php
$banners = $banner_helper->getBanners();

?>
<section id="carousel-section">
    @if($banners)

    <div class="first-slider">
        @forelse($banners->images as $image)
        <img src="{{ $image->image_path }}">
        @empty
        <h3>No felts</h3>
        @endforelse
        
    </div>
    @endif
    <div class="caption tile">
        <p> welcome to creative industry </p>
        <p>
            Quality handmade felt products from Nepal
        </p>
    </div>

    <div id="right-btn">
        <i class="fa fa-angle-right"></i>
    </div>
    <div id="left-btn">
        <i class="fa fa-angle-left"></i>
    </div>
</section>

<section  style="background:rgb(241, 241, 241); padding-bottom: 50px;">

    <section id="newarrivals">
        <div class="container">
            <div class="row">
                <div class="title">
                    featured products
                </div>
                <hr class="underline">
            </div>
            <div class="row">
                @foreach($fproducts as $key => $featured_pro)
                @if($key == 0)
                <div class="col-md-6">
                    <div class="row">
                        <?php $pro_count = 1 ?>
                        @foreach ($featured_pro as $product)

                        <div class="{{ ($pro_count == 1) ? 'col-md-12 large' : 'col-md-6 tile small' }}">
                            <div class="newproduct">
                                <img src="{{ $product->images()->first()->image_path }}">
                                <div class="captionOverlay">
                                    <div class="innerOverlay">
                                        <div class="product-name">
                                            <p> {{ $product->name }} </p>
                                            <p> $ {{ $product->price }}</p>
                                        </div>
                                        <div class="button">
                                            <a href="{{ route('felt',$product->id) }}">
                                                <button class="quickBtn">quick view</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $pro_count += 1 ?>

                        @endforeach      

                    </div>
                </div>     
                @elseif($key == 1)
                <div class="col-md-6">
                    <div class="row">       
                        <?php $pro_count1 = 1 ?>

                        @foreach ($featured_pro as $product)
                        <div class="{{ ($pro_count1 == 1 || $pro_count1==2) ? 'col-md-6 tile small' : 'col-md-12 large' }}">
                            <div class="newproduct">
                                <img src="{{ $product->images()->first()->image_path }}">

                                <div class="captionOverlay">
                                    <div class="innerOverlay">
                                        <div class="product-name">
                                            <p> {{ $product->name }} </p>
                                            <p> $ {{ $product->price }}</p>
                                        </div>
                                        <div class="button">
                                            <a href="{{ route('felt',$product->id) }}">
                                                <button class="quickBtn">quick view</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $pro_count1 += 1 ?>

                        @endforeach      
                    </div>
                </div>
                @endif

                @endforeach







            </div>
        </div>
    </section>

    <section class="recommendation">
        <div class="container">
            <div class="row">
                <p class="title"> new arrivals</p>
                <hr class="underline">
                <div class="row recomSlider">
                    @include('roshna.relatedSlider')
                </div>
            </div> 
        </div>

    </section>   

</section>

{{-- expr --}}
@endsection