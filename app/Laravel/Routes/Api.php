<?php


/**
 *
 * ------------------------------------
 * Api Routes
 * ------------------------------------
 *
 */

Route::group(

	array(
		'as' => "api.",
		'namespace' => "Api"
	),

	function() {

		// $this->group(['as' => "setting.",'prefix' => "setting"],function(){
		// 	$this->post('get-form1.{format?}',['as' => "get_form1",'uses' => "SettingController@get_form1"]);
		// 	$this->post('validate-form1.{format?}',['as' => "validate_form1",'uses' => "SettingController@validate_form1"]);
		// 	$this->post('get-form2.{format?}',['as' => "get_form2",'uses' => "SettingController@get_form2"]);
		// 	$this->post('validate-form2.{format?}',['as' => "validate_form2",'uses' => "SettingController@validate_form2"]);
		// });

		Route::group(['prefix' => "setting"],function(){
			Route::post('version.{format}',['as' => "version" , 'uses' => "AppSettingController@version"]);
			Route::post('categories.{format}',['as' => "category" , 'uses' => "AppSettingController@category"]);
			Route::post('specialties.{format}',['as' => "specialty" , 'uses' => "AppSettingController@specialty"]);
		});

		Route::group(['as' => "form.",'prefix' => "form"],function(){
			Route::any('all.{format?}',['as' => "index",'uses' => "FormController@index"]);
			Route::any('show.{format?}',['as' => "show",'uses' => "FormController@show"]);
		});

		Route::group(['as' => "form_element.",'prefix' => "form-element"],function(){
			Route::any('all.{format?}',['as' => "index",'uses' => "FormElementController@index"]);
			Route::any('show.{format?}',['as' => "show",'uses' => "FormElementController@show"]);
		});

		Route::group(['as' => "form_response.",'prefix' => "form-response"],function(){
			Route::post('create.{format?}',['as' => "store",'uses' => "FormResponseController@store"]);
		});

		Route::group(['as' => "auth.", 'prefix' => "auth", 'namespace' => "Auth"], function () {
			Route::post('login.{format?}', ['as' => "login", 'uses' => "LoginController@authenticate"]);
			Route::post('register.{format?}', ['as' => "register", 'uses' => "RegisterController@store"]);
			Route::post('forgot-password.{format?}', ['as' => "forgot_password", 'uses' => "ForgotPasswordController@forgot_password"]);
			Route::post('reset-password.{format?}', ['as' => "reset_password", 'uses' => "ResetPasswordController@reset_password", 'middleware' => "api.verify-reset-token"]);
			Route::post('logout.{format?}', ['as' => "logout", 'uses' => "LoginController@logout", 'middleware' => "jwt.auth"]);
			Route::post('refresh-token.{format?}', ['as' => "refresh_token", 'uses' => "RefreshTokenController@refresh", 'middleware' => "jwt.refresh"]);
		});

			
		//All routes protected by authentication
		Route::group(['middleware' => "jwt.auth"], function() {

			

			Route::group(['prefix' => "transaction",'as'=>"transaction."], function() { 
				Route::post('create.{format?}', ['as' => "store", 'uses' => "TransactionController@store"]);
				// Route::post('store.{format?}', ['as' => "store", 'uses' => "EmployeeController@store"]);
				
				
			});
			
		});
		
	}
);