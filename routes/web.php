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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('test', function () {
//    return view('test');
//});

//categories
route::group(['middleware' =>'auth'],function(){

		
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
			route::put('admin/products/{id}','ProductsController@toggleAvailablity');
});
	

//store
route::get('/',[
	'uses' => 'StoreController@Index',
	'as'	=> 'login'
]);
route::get('/{id}','StoreController@View');
route::post('/{id}',[
	'uses' => 'StoreController@AddCart',
	'as' => 'store.AddCart'
]);
route::get('store/category/{id}','StoreController@Category');


//search

route::get('store/search','StoreController@search');

//new account

route::get('users/newaccount','UsersController@NewAccount');
route::post('users/newaccount',[
	'uses'	=> 'UsersController@create',
	'as'	=> 'UsersController.create'
]);

route::get('users/signin','UsersController@SignIn');
route::post('users/signin',[
	'uses'	=> 'UsersController@signinto',
	'as'	=>'UsersController.signinto'
]);

route::get('users/logout','UsersController@logout');

route::get('store/contact','StoreController@contact');

route::post('store/contact','StoreController@email');





