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


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/categories','CategoriesController');
    Route::resource('/posts','PostController');
    Route::resource('/slider','SliderController');
    Route::resource('/product','ProductController');
    Route::resource('/filter','FilterController');
    Route::resource('/attribute','AttributeController');
});
