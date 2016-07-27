<?php


Route::get('/', function () {
    return view('site.index');
});

Route::group(['prefix' => 'admin'], function(){
	Route::get('/login',['as' => 'admin.login', 'uses' => 'Admin\Auth\AuthController@getLogin']);
	Route::post('/login',['as' => 'admin.post.login', 'uses' => 'Admin\Auth\AuthController@postLogin']);

	//Route::group(['middleware' => 'admin'], function(){
		Route::get('/index',['as' => 'admin.index','uses' => 'Admin\AdminController@index']);
		Route::get('/products',['as' => 'admin.product','uses' => 'Admin\ProductController@getCreate']);
		Route::post('/products',['as' => 'admin.post.product','uses' => 'Admin\ProductController@postCreate']);
		Route::get('/products-list',['as' => 'admin.product.list','uses' => 'Admin\ProductController@getList']);
		Route::get('/products/edit/{id}',['as' => 'admin.product.edit','uses' => 'Admin\ProductController@edit']);
		Route::post('/products/edit/{id}',['as' => 'admin.postProduct.edit','uses' => 'Admin\ProductController@postEdit']);
		Route::get('/products/delete/{id}',['as' => 'admin.product.delete','uses' => 'Admin\ProductController@getDelete']);

		
	//});
});
