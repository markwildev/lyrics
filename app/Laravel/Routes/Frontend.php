<?php

/*,'domain' => env("FRONTEND_URL", "wineapp.localhost.com")*/

Route::group(['as' => "frontend.",
		 'namespace' => "Frontend",
		 'middleware' => ["web"],
		 'prefix' => "guest",
		],function() {

	Route::group(['prefix' => "/",'as' => "auth."],function(){
		Route::get('login',['as' => "login",'uses' => "AuthController@login"]);
		Route::post('login',['uses' => "AuthController@authenticate"]);
		Route::get('logout',['as'=>"logout",'uses' => "AuthController@destroy"]);
		Route::get('/register',['as' => "register",'uses' => "AuthController@register"]);
	});			

	Route::group(['prefix' => "/",'as' => "home."],function(){
		Route::get('/',['as' => "index",'uses' => "HomeController@index"]);
	});
	Route::group(['prefix' => "/my-account",'as' => "my_account."],function(){
		Route::get('/settings',['as' => "settings",'uses' => "SettingsController@index"]);
		Route::get('/my-orders',['as' => "my_orders",'uses' => "MyOrdersController@index"]);
		Route::get('/my-transaction',['as' => "my_transaction",'uses' => "MyTransactionController@index"]);
		Route::get('/address-book',['as' => "address_book",'uses' => "AddressBookController@index"]);
	});

	Route::group(['prefix' => "/about",'as' => "about."],function(){
		Route::get('/',['as' => "index",'uses' => "AboutController@index"]);
	});

	Route::group(['prefix' => "/blogs",'as' => "blogs."],function(){
		Route::get('/',['as' => "index",'uses' => "BlogsController@index"]);
		Route::get('/details',['as' => "show",'uses' => "BlogsController@show"]);
	});




	Route::group(['prefix' => "contact",'as' => "contact."],function(){
		Route::get('/',['as' => "index",'uses' => "ContactController@index"]);
	});


	Route::group(['prefix' => "products",'as' => "products."],function(){

		Route::get('/',['as' => "index",'uses' => "ProductsController@index"]);
		Route::get('/details',['as' => "show",'uses' => "ProductsController@show"]);
		Route::get('/cart',['as' => "cart",'uses' => "ProductsController@cart"]);
		Route::post('add-to-cart',['as' => "add_to_cart",'uses' => "ProductsController@addToCart"]);
		Route::post('remove-cart',['as' => "remove_cart",'uses' => "ProductsController@destroy"]);
		Route::get('/checkout',['as' => "checkout",'uses' => "ProductsController@checkout"]);
	});


	

	

});