@extends('roshna.index')
@section('css')
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/allproducts.css') }}" rel="stylesheet">
@endsection

@section('content')     
    <section class="allproducts" id="topSection">
        <div class="container">
            <div class="row row1">
                <p class="title2"> {{ $current_category->name }}(<span>{{ $felts->count() }} items</span>&nbsp;)
                </p>
            </div>
            <div class="row">
                <div class="featured">
                    @forelse ($felts as $felt)
                    <div class="col-md-3">
                        <a href="{{ route('felt', $felt->id) }}">
                            <div class="wrap">
                                <div class="newproduct">
                                    @foreach ($felt->images as $key=> $image)
                                    @if ($key == 0)
                                        <img src="{{ $image->image_path}}" class="img-responsive">
                                    @endif
                                    @endforeach
                                    <div class="product-thumb">
                                        <ul>
                                            {{-- <li data-toggle="tooltip" data-placement="top" title="Wishlist"><a href="" ><i class="fa fa-heart-o" aria-hidden="true"></i></a></li> --}}
                                            <li data-toggle="tooltip" data-placement="top" title="View Product"><a href="{{ route('felt',$felt->id) }}"><i class="fa fa-search"></i></a></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add to Cart"><a href="{{route('cart.addItem',$felt->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                 <div class="caption1">
                                    <p class="productname"> {{$felt->name}}</p>
                                    <p class="productprice">${{$felt->price}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty 
                    <div class="caption1">
                        No felts!
                    </div>
                    @endforelse
                </div>
            </div>
           
            
          
            <div class="row">
                <div class="col-md-3">
                    <button id="loadMore"> show more products </button>

                </div>
                <div class="col-md-2 totop">
                    <a href="#topSection">
                        <div class="to-top">
                            <i class="fa fa-angle-up"></i>
                        </div>
                        <span class="devSpan"> scroll to top</span>

                    </a>
                </div>
            </div>
            
        </div>
    </section>
    @endsection
@section('js')
    {{-- expr --}}
    <script src="{{ asset('js/load.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
@endsection
