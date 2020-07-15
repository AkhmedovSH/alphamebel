<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('/stock_inner/{slug}', 'HomeController@stock_inner')->name('stock_inner');


/* REQUEST CONTROLLER */
Route::post('/order', 'RequestController@order')->name('order');
Route::post('/recall', 'RequestController@recall')->name('recall');
Route::post('/virtualDesign', 'RequestController@virtualDesign')->name('virtualDesign');
Route::post('/sendRequest', 'RequestController@sendRequest')->name('sendRequest');// Оставить заявку index
/* REQUEST CONTROLLER */

Route::get('/about', 'StaticPageController@about');
Route::get('/dealers', 'StaticPageController@dealers');
Route::get('/forArchitectors', 'StaticPageController@forArchitectors');
Route::get('/guaranteeService', 'StaticPageController@guaranteeService');
Route::get('/installment', 'StaticPageController@installment');
Route::get('/delivery', 'StaticPageController@delivery');
Route::get('/managers', 'StaticPageController@managers');
Route::get('/offerContract', 'StaticPageController@offerContract');
Route::get('/ourBrands', 'StaticPageController@ourBrands');
Route::get('/ourShops', 'StaticPageController@ourShops');
Route::get('/payment', 'StaticPageController@payment');
Route::get('/question', 'StaticPageController@question');
Route::get('/sertificates', 'StaticPageController@sertificates');
Route::get('/socialMedia', 'StaticPageController@socialMedia');
Route::get('/suppliers', 'StaticPageController@suppliers');
Route::get('/vacancy', 'StaticPageController@vacancy');
Route::get('/wearechoosen', 'StaticPageController@wearechoosen');
Route::get('/public_offer', 'StaticPageController@public_offer');
Route::get('/catalogs', 'StaticPageController@catalogs');
Route::get('/ideas', 'StaticPageController@ideas');
Route::get('/ideasInner', 'StaticPageController@ideasInner');
Route::get('/ideasInnerBlock', 'StaticPageController@ideasInnerBlock');
Route::get('/projectsFlat', 'StaticPageController@projectsFlat');
Route::get('/virtualDesign', 'StaticPageController@virtualDesign');

//Route::get('empty', function (){Cart::destroy();});
Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/update', 'CartController@update')->name('cart.update');

/************************** CATEGORIES **************************/
Route::get('/products/{category_id}', 'ProductController@products');
Route::get('/singleProductLeft/{category_id}/{product_id}', 'ProductController@singleProductLeft');
Route::get('/singleProductRight/{category_id}/{product_id}', 'ProductController@singleProductRight');

Route::get('/offices', 'ProductController@offices');

Route::get('/kitchens', 'ProductController@kitchens');

Route::get('/sofas/{category_id}', 'ProductController@sofas');
Route::get('/chairs/{category_id}', 'ProductController@chairs');
Route::get('/mattress/{category_id}', 'ProductController@mattress');


Route::get('/wardobes/{category_id}', 'ProductController@wardobesBedsComods');
Route::get('/beds/{category_id}', 'ProductController@wardobesBedsComods');
Route::get('/comods/{category_id}', 'ProductController@wardobesBedsComods');

Route::get('/single-right-product/{category_id}/{product_id}', 'ProductController@singleRightProduct');
/************************** CATEGORIES **************************/



Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::resource('/categories','CategoriesController');
    Route::resource('/posts','PostController');
    Route::resource('/slider','SliderController');
    Route::resource('/product','ProductController');
    Route::resource('/filter','FilterController');
    Route::resource('/attribute','AttributeController');
    Route::resource('/credit','CreditController');
});


// Route::group(['middleware' => 'web'], function () {
//     Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
//     Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
//     // list all lfm routes here...
// });