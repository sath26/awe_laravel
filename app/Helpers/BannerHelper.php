<?php 
namespace App\Helpers;

use App\Product;
use App\Category;

/**
* 
*/
class BannerHelper
{
 
 	public function getBanners(){
 		 $banner_cat = Category::where('name', 'Banner')->first();
         $banner = Product::where('category_id', $banner_cat->id)->first();

         return $banner;

 	}
}
 ?>