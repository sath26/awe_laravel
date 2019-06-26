@extends('roshna.index')

@section('css')
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
<link href="{{ asset('css/index.css') }}" rel="stylesheet">
<link href="{{ asset('css/allproducts.css') }}" rel="stylesheet">
<link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@endsection


@section('content')


<section class="allproducts" id="topSection">
    <div class="container">
        <div class="row row1 row2">
            <p class="title2"> 
                shopping cart(<span class="smspan">{{Cart::count()}} felts</span>&nbsp;)

            </p>
            
            
        </div>
        <div class="row cartitems">
            @forelse($cartItems as $cartItem)
            <div class="col-md-8">
                <div class="row itemsrow">
                    <div class="col-md-3">
                        <a href="product.php"><img src="images/cat4.jpg" class="img-responsive"></a>
                    </div>
                    <div class="col-md-9 cartproduct">
                        <div>
                            <p class="productname"> {{$cartItem->name}}</p>
                            <p class="productprice1">
                                ${{$cartItem->price}}
                            </p>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number minus" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        -
                                    </button>
                                </span>
                                <input type="text" name="quant[1]" class="form-control input-number" value="{{$cartItem->qty}}" min="1" max="20">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number plus" data-type="plus" data-field="quant[1]" style="margin-left: -475px;">
                                        +
                                    </button>
                                </span>
                            </div>
                            <p class="viewdetails">
                                <form action="{{route('cart.destroy',$cartItem->rowId)}}"  method="POST">
                                 {{csrf_field()}}
                                 {{method_field('DELETE')}}
                                 <input class="button small alert" type="submit" value="Delete">
                             </form>
                             <a href=""> view details </a></p>
                         </div>

                     </div>
                 </div>
             </div>
             @empty 
             <div class="col-md-8 summary">
                No felts selected for cart!
            </div>
            
            @endforelse
            <div class="col-md-4 cartsummary tile">
                <p class="summary">order summary</p>
                <p class="subtotal">cart subtotal: <span class="p-price"> ${{Cart::subtotal()}}</span></p>
                <p class="subtotal">Shipping charges: <span class="p-charges"> ${{Cart::tax()}}</span></p>
                <p id="discount"> 
                    <input type="text" class="discount" placeholder="Discount Coupon">
                    <span><button class="disbtn">apply</button></span>
                </p>
                <p class="subtotal">total cart amount: <span class="p-charges"> ${{Cart::total()}}</span></p>
                <a href="">
                 <button class="placeorder" type="submit">place order</button> 
             </a>
         </div>
         
         

     </div>
     
            {{-- <div class="row">
                    <div class="col-md-7">
                        <div class="shippinginfo"> shipping information</div>
                        <div class="row">
                            <form class="shipment">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First name" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Last name" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Full Address" required>
                                </div>
                                <div class="col-md-6">
                                     <select required class="country">
                                          <option value="Nepal">Nepal</option>
                                          <option value="Indonesia">Indonesia</option>
                                          <option value="France">France</option>
                                          <option value="Australia"> Australia</option>
                                    </select> 
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Postal Code">
                                </div>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                                <a href="">
                                   <button class="calculate tile" type="submit"> calculate shipping charge </button> 
                                </a>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                    <div class="col-md-1 col-md-offset-11 col-xs-2 col-xs-10 totop">
                        <a href="#topSection">
                            <div class="to-top smtotop" style="margin-top: -100px;">
                                <i class="fa fa-angle-up"></i>
                            </div>

                        </a>
                    </div>
                    
                </div> --}}

            </div>
        </section>
        @endsection
        
        

    </body>
    </html>