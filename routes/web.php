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

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/how-it-works', 'FrontendController@howitworks')->name('how_it_works');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/infoboard', 'FrontendController@infoboard')->name('infoboard');
Route::get('/terms-and-conditions', 'FrontendController@termsandconditions')->name('terms-and-conditions');
Route::get('/why-13p', 'FrontendController@why13p')->name('why-13p');
Route::get('/privacy-policy', 'FrontendController@privacypolicy')->name('privacy-policy'); 
Route::get('/product', 'FrontendController@allproduct')->name('all-product');
Route::get('/product/category/{id}', 'FrontendController@productcategory')->name('product_category');
Route::get('/product/subcategory/{id}', 'FrontendController@productsubcategory')->name('product_subcategory');
Route::get('/product-details/{id}', 'FrontendController@productdetails')->name('product_details');
Route::get('/sign', 'FrontendController@sign')->name('sign');
Route::get('/cart', 'FrontendController@cart')->name('cart');
Route::get('/mission', 'FrontendController@mission')->name('mission');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::get('/faq', 'FrontendController@faq')->name('faq');
Route::get('/disclosure', 'FrontendController@disclosure')->name('disclosure');
Route::get('/sign-in', 'FrontendController@signin')->name('sign_in');
Route::get('/sign-up', 'FrontendController@signup')->name('sign_up');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// backend
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::get('/admin', 'DashboardController@index')->name('admin')->middleware('auth');

// category

Route::group(['prefix' => 'admin/category'], function () {
    //admin Routes
    Route::get('/', 'CategoryController@index')->name('admin_category')->middleware('admin');
    Route::get('/create', 'CategoryController@create')->name('admin_category_create')->middleware('admin');
    Route::post('/store', 'CategoryController@store')->name('admin_category_store')->middleware('admin');
    Route::get('/show/{id}', 'CategoryController@show')->name('admin_category_show')->middleware('admin');
    Route::get('/edit/{id}', 'CategoryController@edit')->name('admin_category_edit')->middleware('admin');
    Route::post('/update/{id}', 'CategoryController@update')->name('admin_category_update')->middleware('admin');
    Route::get('/delete/{id}', 'CategoryController@destroy')->name('admin_category_delete')->middleware('admin');
});

Route::group(['prefix' => 'admin/subcategory'], function () {
    //admin Routes
    Route::get('/', 'SubCategoryController@index')->name('admin_subcategory')->middleware('admin');
    Route::get('/create', 'SubCategoryController@create')->name('admin_subcategory_create')->middleware('admin');
    Route::post('/store', 'SubCategoryController@store')->name('admin_subcategory_store')->middleware('admin');
    Route::get('/show/{id}', 'SubCategoryController@show')->name('admin_subcategory_show')->middleware('admin');
    Route::get('/edit/{id}', 'SubCategoryController@edit')->name('admin_subcategory_edit')->middleware('admin');
    Route::post('/update/{id}', 'SubCategoryController@update')->name('admin_subcategory_update')->middleware('admin');
    Route::get('/delete/{id}', 'SubCategoryController@destroy')->name('admin_subcategory_delete')->middleware('admin');
});

Route::group(['prefix' => '/admin/product'], function () {
    //admin Routes
    Route::get('/', 'ProductController@index')->name('admin_product')->middleware('auth');
    Route::get('/create', 'ProductController@create')->name('admin_product_create')->middleware('auth');
    Route::get('/create/{id}', 'ProductController@createbyid')->name('admin_product_create_byid')->middleware('auth');
    Route::post('/store', 'ProductController@store')->name('admin_product_store')->middleware('auth');
    Route::get('/show/{id}', 'ProductController@show')->name('admin_product_show')->middleware('auth');
    Route::get('/edit/{id}', 'ProductController@edit')->name('admin_product_edit')->middleware('auth');
    Route::get('/edit/bycategory/{product_id}/{id}', 'ProductController@editcategorybyid')->name('admin_product_edit_by_category')->middleware('auth');
    Route::post('/update/{id}', 'ProductController@update')->name('admin_product_update')->middleware('auth');
    Route::get('/delete/{id}', 'ProductController@destroy')->name('admin_product_delete')->middleware('auth');
    Route::get('/image/delete/{id}', 'ProductController@destroyimage')->name('admin_product_image_delete')->middleware('auth');
});
