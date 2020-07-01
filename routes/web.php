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

/************************** CATEGORIES **************************/
Route::get('/beds/{category_id}', 'ProductController@beds');
Route::get('/singleBed/{category_id}/{product_id}', 'ProductController@singleBed');

Route::get('/livingRooms/{category_id}', 'ProductController@livingRooms');
Route::get('/singleLivingRoom/{category_id}/{product_id}', 'ProductController@singleLivingRoom');

Route::get('/nursery/{category_id}', 'ProductController@nursery');
Route::get('/singleNursery/{category_id}/{product_id}', 'ProductController@singleNursery');

Route::get('/halls/{category_id}', 'ProductController@halls');
Route::get('/singleHalls/{category_id}/{product_id}', 'ProductController@singleHalls');

Route::get('/offices', 'ProductController@offices');
Route::get('/offices-collection/{category_id}', 'ProductController@officesCollection');
Route::get('/singleOffice/{category_id}/{product_id}', 'ProductController@singleOffice');

Route::get('/kitchens', 'ProductController@kitchens');
Route::get('/sofas/{category_id}', 'ProductController@sofas');
/************************** CATEGORIES **************************/

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/categories','CategoriesController');
    Route::resource('/posts','PostController');
    Route::resource('/slider','SliderController');
    Route::resource('/product','ProductController');
    Route::resource('/filter','FilterController');
    Route::resource('/attribute','AttributeController');
});


Route::get('cache_clear', function () {

    \Artisan::call('cache:clear');

    dd("cache_clear");

});
Route::get('config_clear', function () {

    \Artisan::call('config:clear');

    dd("config_clear ");

});

// Route::group(['middleware' => 'web'], function () {
//     Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
//     Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
//     // list all lfm routes here...
// });