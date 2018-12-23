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
    return view('welcome');
});

Route::get('test', function () {
    return view('test');
});

//categories

Route::get('admin/categories','CategoriesController@Index');
Route::post('admin/categories',[
	'uses' =>'CategoriesController@create',
	'as' => 'CategoriesController.create'
]);

Route::delete('admin/categories/{id}','CategoriesController@destroy');

//products

route::get('admin/products','ProductsController@Index');

route::post('admin/products',[
	'uses'=> 'ProductsController@create',
	'as' => 'ProductsController.create'
	]);
route::delete('admin/products/{id}','ProductsController@destroy');