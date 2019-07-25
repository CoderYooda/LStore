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

Route::get('/', function () {
    return view('public.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(['prefix' => '/admin'], function () {
    Route::get('/dashboard', 'admin\common\DashBoardController@index')->name('Dashboard');

    Route::get('/catalog/product', 'admin\catalog\ProductController@index')->name('Products');

    Route::get('/catalog/product/add', 'admin\catalog\ProductController@getForm')->name('AddProduct');
    Route::get('/catalog/product/add_modal', 'admin\catalog\ProductController@getFormModal')->name('AddProductModal');

    Route::get('/catalog/product/{id}/edit', 'admin\catalog\ProductController@getForm')->name('Product_Edit');
    Route::post('/catalog/product/store', 'admin\catalog\ProductController@store')->name('Product_Store');

    Route::get('/settings/base', 'admin\setting\SettingController@showSettingPage')->name('Settings');

    Route::get('/settings/store', 'admin\setting\StoreController@index')->name('Store');
    Route::get('/settings/store/add', 'admin\setting\StoreController@add')->name('AddStore');
    Route::get('/settings/store/{id}/edit', 'admin\setting\StoreController@edit')->name('EditStore');


    Route::get('/catalog/category/add_modal', 'admin\catalog\CategoryController@getFormModal')->name('AddCategoryModal');



    Route::get('/catalog/supplier/list_modal', 'admin\catalog\SupplierController@getListModal')->name('ListSupplierModal');


    Route::get('/article/search', 'admin\catalog\ArticleController@search')->name('SearchArticle');
});


Route::get('/test', 'admin\test\TestController@test')->name('test');
