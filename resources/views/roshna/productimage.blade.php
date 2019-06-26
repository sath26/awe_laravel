@section('css')
{{-- expr --}}
{{-- <link href="{{ asset('css/cloud-zoom.css') }}" rel="stylesheet" type="text/css" /> --}}

@endsection


<div class="container">
    <div class="row" style="margin-left: 10px; margin-right:0px;">
        <div class="col-md-1 col-xs-2">
            <div class="zoom-desc">
                
                    @foreach ($givenfelt->images as $image)
                <p>
                    <a href='{{$image->image_path}}' class='cloud-zoom-gallery' title='Red' rel="useZoom: 'zoom1', smallImage: '{{$image->image_path}}' ">
                        <img class="zoom-tiny-image" src="{{$image->image_path}}" alt = "Thumbnail 1"/>
                    </a>

                </p>
                    @endforeach
                
            </div>
        </div>

        <div class="col-md-6 col-xs-10">
            <div class="zoom-section">    	  
                <div class="zoom-small-image">
                    @php
                        $product_image = $givenfelt->images()->first();
                    @endphp
                  {{--   @foreach ($givenfelt->images as $image)
                    <a href='{{$image->image_path}}' class = "cloud-zoom" id="zoom1" rel="adjustX:10, adjustY:-4">
                        
                        <img src="{{$image->image_path}}" class="productimg img-responsive" alt=''/>
                    </a>
                    @endforeach --}}

                    @if($product_image)
                    <a href='{{$product_image->image_path}}' class = "cloud-zoom" id="zoom1" rel="adjustX:10, adjustY:-4">
                        <img src="{{$product_image->image_path}}" class="productimg " alt=''/>
                    </a>

                    @endif
                </div>

            </div>
        </div>

        <div class="col-md-5 col-xs-12 productDesc">
            <div class="productTitle">
                {{$givenfelt->name}}

            </div>
            <div class="productPrice1"> ${{$givenfelt->price}} </div> 

            <div class="details">
                <p>Description</p>

                {{$givenfelt->description}}
            </div>
            

            <div class="row addtocart">
                <div class="col-md-4" >
                    {{-- <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number minus" disabled="disabled" data-type="minus" data-field="quant[2]">
                                -
                            </button>
                        </span>
                    
                        <input type="text" name="qty" class="form-control input-number" value="1" min="1" max="20">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-number plus" data-type="plus" data-field="quant[2]">
                                +
                            </button>
                        </span>
                    </div> --}}
                </div>

                <div class="col-md-4">
                    
                    <a href="{{route('cart.addItem',$givenfelt->id)}}"><button class="tocart" > <i class="fa fa-shopping-cart" style="padding-right: 10px;"></i>Cart </button></a>
                    
                </div>
                   {{--  <div class="col-md-4">
                        <a href="">
                            <button class="tocart"><i class="fa fa-heart-o" style="padding-right: 5px;"></i> wishlist </button>
 
                        </a>

                    </div> --}}
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
    @section('js')
    {{-- expr --}}
  {{--   <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    
   <script type="text/javascript" src="{{ asset('js/cloud-zoom.1.0.2.min.js') }}"></script>
   <script src="{{ asset('js/spinner.js') }}"></script>    --}}
   @endsection
