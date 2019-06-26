<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Slick slider-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.css">

</head>

<body>
<div class="relatedproducts featured" id="newarrivals">
    @foreach ($nproducts as $product)
        <div class="wrap">
            <a href="{{ route('felt',$product->id) }}">
                <div class="newproduct">

                        <img class="zoom-tiny-image" src="{{ $product->images()->first()->image_path }}"/>


            </a>

            <div class="product-thumb">
                <ul>
                    {{-- <li data-toggle="tooltip" data-placement="top" title="Wishlist"><a href="" ><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                    <li data-toggle="tooltip" data-placement="top" title="Quick View"><a
                                href="{{ route('felt', $product->id) }}"><i class="fa fa-search"></i></a></li>
                    <li data-toggle="tooltip" data-placement="top" title="Add to Cart"><a
                                href="{{route('cart.addItem',$product->id)}}"><i class="fa fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="caption1">
            <p class="productname"> {{$product->name}}</p>
            <p class="productprice">${{$product->price}}</p>
        </div>
        </a>

</div>
@endforeach


</div>

<div class="arrowsec">
    <div id="nextbtn">
        <i class="fa fa-angle-right"></i>
    </div>
    <div id="prevbtn">
        <i class="fa fa-angle-left"></i>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
</body>
</html>