<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use DB;
use Session;

class CatalogController extends Controller
{
    public function catalog() {


      // $productsAll = Product::orderBy('id', 'DESC')->get();

      // In Random order
      $productsAll = Product::inRandomOrder()->get();

      // categories
      $categoriesAll = Category::where(['parent_id' => 0])->get();
      $subCategories = Category::where('parent_id', 'NOT LIKE', 0)->get();

      // dd($subCategories);die;


      return view('catalog')->with(compact('productsAll', 'categoriesAll', 'subCategories'));
    }

    public function categories($url = null) {

      // Show 404
      $countCategory = Category::where(['url' => $url]) -> count();
      if($countCategory == 0) {
        abort(404);
      }

      // categories
      $categoriesAll = Category::where(['parent_id' => 0])->get();
      $subCategories = Category::where('parent_id', 'NOT LIKE', 0)->get();

      $categoryDetails = Category::where(['url' => $url]) -> first();

      $productsAll = Product::where(['category_id' => $categoryDetails->id]) -> get();
      return view('products.listing')->with(compact('categoryDetails','productsAll','categoriesAll', 'subCategories'));
    }

    public function product($id = null) {

      // Get Product Details
      $productDetails = Product::where('id', $id) -> first();

      return view('products.detail') -> with(compact('productDetails'));
    }

    public function addtocart(Request $request) {
      $data = $request->all();

      if (empty($data['user_email'])) {
        $data['user_email'] = '';
      }

      $session_id = Session::get('session_id');
      if (empty($session_id)) {
        $session_id = str_random(40);
        Session::put('session_id', $session_id);
      }

      DB::table('cart') -> insert([
        'product_id'=>$data['product_id'],
        'product_name'=>$data['product_name'],
        'product_code'=>$data['product_code'],
        'product_color'=>$data['product_color'],
        'price'=>$data['price'],
        'user_email'=>$data['user_email'],
        'session_id'=>$session_id
        // 'size'=>$data['size'],
        // 'quantity'=>$data['quantity']
      ]);

      return redirect('cart')->with('flash_message_success', 'El Producto se agrego al carrito.');
    }

    public function cart() {
      $session_id = Session::get('session_id');
      $userCart = DB::table('cart') -> where(['session_id' => $session_id]) -> get();
      // echo "<pre>"; print_r($userCart);
      foreach ($userCart as $key => $product) {
        $productDetails = Product::where('id', $product->product_id) -> first();
        $userCart[$key]->image = $productDetails->image;

      }
      return view('products.cart')->with(compact('userCart'));
    }

    public function deletecartProduct($id = null) {
      DB::table('cart') -> where('id', $id) -> delete();
      return redirect('cart') -> with('flash_message_success', 'El Producto se ha borrado del carrito!');
    }
}
