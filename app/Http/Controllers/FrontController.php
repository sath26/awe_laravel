<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        // dd($products);
        $categories = Category::all();
        // $fproducts=Product::all();
        $featured_cat = Category::where('name', 'Featured')->first();
        $banner_cat = Category::where('name', 'Banner')->first();
        $fproducts = Product::where('category_id', $featured_cat->id)->get()->take(6)->chunk(3);


        $nproducts=Product::latest();

        if($banner_cat){
            $nproducts = $nproducts->where('category_id', '<>', $banner_cat->id);
        }

        $nproducts = $nproducts->get();

        return view('roshna.home',compact('fproducts', 'categories','nproducts'));
        
        // f:featured....n:new or recent
    }
    public function products()
    {
        $categories = Category::all();
        $products=Product::all();
        return view('roshna.allproducts',compact('products', 'categories'));
    }

    public function category($id)
    {
        // $products=Product::find($id);
        $current_category = Category::findOrFail($id);
        $categories = Category::all();
        $felts=Product::where('category_id',$id)->get();
        
        $products=Product::all();
        return view('roshna.allproducts',compact('products', 'categories', 'felts', 'current_category'));
        // ->with('product', $product);
    }
    public function felt($id)
    {
        
        //current category products are shown in product image
        $categories = Category::all();//list of categories in nav
        //$felts=Product::where('category_id',$id)->get();//count of product from given category
        $givenfelt=Product::find($id);//particular product on the first loaded image and its price and desc
        
        $current_category = Category::findOrFail($givenfelt->category_id);// provide name of given category for breadcrumb nav 
        //it needs id of the given felt
        $products=Product::all()->take(4);//list of product on left side as image
        //current product needs to be shown in product image
        
        return view('roshna.product',compact('products', 'categories','felts','givenfelt','current_category'));
        // $products=Product::find($id);
        // dd($givenfelt);
        // ->with('product', $product);
    }


    public function about()
    {   
        $categories = Category::all();
        return view('roshna.about', compact('categories'));
    }

    public function contact()
    {
        $categories = Category::all();
        return view('roshna.contact', compact('categories'));
    }

    public function blog()
    {
        $categories = Category::all();

        return view('roshna.blog', compact('categories'));
    }
    public function search()
    {
        // dd($products);
        $categories = Category::all();
        $products=Product::where('name', $query)->get();
        return view('roshna.allproducts',compact( 'categories','products'));
    }
}
