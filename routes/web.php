<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'IndexController@index');

Route::get('/faq', 'FaqController@questions');

Route::group(['middleware' => ['guest']], function(){
  Route::match(['get', 'post'], '/signin', 'SigninController@signin');
  Route::match(['get', 'post'], '/signup', 'SignupController@signup');
});

Route::match(['get', 'post'], '/admin', 'AdminController@login');


// Cart Page
Route::match(['get', 'post'], '/cart', 'CatalogController@cart');

// Add to cart
Route::match(['get', 'post'], '/add-cart', 'CatalogController@addtocart');

// Delete from Cart
Route::get('/cart/delete-product/{id}', 'CatalogController@deletecartProduct');


// Catalog
Route::match(['get', 'post'], '/catalog', 'CatalogController@catalog');
Route::get('/catalog/{url}', 'CatalogController@categories');

// Individual Product
Route::get('/product/{id}', 'CatalogController@product');



Route::get('/product', function() {
  return view('product');
});

Route::get('/logoutuser', 'SigninController@logoutuser');

Auth::routes();


Route::group(['middleware' => ['CheckAdmin']], function(){
  Route::get('/admin/dashboard', 'AdminController@dashboard');
  Route::get('/admin/settings', 'AdminController@settings');
  Route::get('/admin/check-pwd', 'AdminController@chkPassword');
  Route::match(['get', 'post'], '/admin/update-pwd', 'AdminController@updatePassword');

  // Categories Routes (admin)
  Route::match(['get','post'], '/admin/add-category', 'CategoryController@addCategory');
  Route::match(['get', 'post'], '/admin/edit-category/{id}', 'CategoryController@editCategory');
  Route::match(['get', 'post'], '/admin/delete-category/{id}', 'CategoryController@deleteCategory');
  Route::get('/admin/view-categories', 'CategoryController@viewCategories');

  // Products Routes
  Route::match(['get','post'], '/admin/add-product', 'ProductController@addProduct');
  Route::match(['get', 'post'], '/admin/edit-product/{id}', 'ProductController@editProduct');
  Route::get('/admin/view-products', 'ProductController@viewProduct');
  Route::get('/admin/delete-product/{id}', 'ProductController@deleteProduct');
  Route::get('/admin/delete-product-image/{id}', 'ProductController@deleteProductImage');

  // Products Attributes Routes
  Route::match(['get', 'post'], 'admin/add-attributes/{id}', 'ProductController@addAttributes');
  Route::get('/admin/delete-attribute/{id}', 'ProductController@deleteAttribute');

});

Route::get('/logout', 'AdminController@logout');
