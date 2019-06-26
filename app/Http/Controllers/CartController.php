<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $cartItems=Cart::content();
        return view('roshna.cart',compact('cartItems','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    public function addItem($id)
    {
        $product=Product::find($id);

        Cart::add($id,$product->name,1,$product->price,['size'=>'medium']);
        
        
        // $product = Cart::get($id);
     
        //  // store the product into the database
        //  Shoppingcart::create([
        //      'product_id' => $id,
        //      'customer_id' => Auth::id(),
        //      'name' => $product->name,
        //      'price' => $product->price,
             
        //  ]);
     
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd(Cart::content());
//        dd($request->all());
        Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
}
