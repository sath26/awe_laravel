@extends('roshna.index')
@section('css')

<link href="{{ asset('css/product.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link href="{{ asset('css/cloud-zoom.css') }}" rel="stylesheet" type="text/css" />
{{-- product image csss --}}
@endsection

@section('content')
<section class="singleproduct">
    <div class="container">
        <div class="row productrow">
            <span> 
                <a href="{{ route('home') }}"> home / </a> 
            </span>
            <span> 
                <a href="#"> Felts /</a> 
            </span>
            <span> 
                <a href="{{ route('product', $current_category->id) }}"> {{ $current_category->name }}</a> 
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
                @foreach ($products as $product)
                
                <div class="col-md-3">
                    <a href="{{ route('felt', $product->id) }}">
                        <div class="wrap">
                            <div class="newproduct">
                                @foreach ($product->images as $image)
                                @if($loop->first)
                                <img src="{{$image->image_path}}" >
                                @endif
                                @endforeach
                                <div class="product-thumb">
                                    <ul>
                                        {{-- <li data-toggle="tooltip" data-placement="top" title="Wishlist"><a href="" ><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                        <li data-toggle="tooltip" data-placement="top" title="Quick View"><a href="{{ route('felt', $product->id) }}"><i class="fa fa-search"></i></a></li>
                                        <li data-toggle="tooltip" data-placement="top" title="Add to Cart"><a href="{{route('cart.addItem',$product->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="caption1">
                                <p class="productname"> {{$product->name}}</p>
                                <p class="productprice">${{$product->price}}</p>
                            </div>
                        </div>
                    </a>
                    
                    
                    
                </div>
                @endforeach
                
                
            </div>
            
            
            
        </div>
    </div>
</section>


@endsection        

@section('javascript')
<script type="text/javascript" src="{{ asset('js/imagezoom.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/cloud-zoom.1.0.2.min.js') }}"></script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
</script> 
@endsection
