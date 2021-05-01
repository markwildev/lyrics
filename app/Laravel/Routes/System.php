<?php

/*,'domain' => env("FRONTEND_URL", "wineapp.localhost.com")*/
Route::group([
		'as' => "system.",
		'namespace' => "System",
		// 'prefix' => "admin",
		],function() {

	Route::group(['middleware'=>['system.guest']],function(){
       Route::get('login/{redirect_uri?}',['as' => "login",'uses' => "AuthController@login"]);
		Route::post('login/{redirect_uri?}',['uses' => "AuthController@authenticate"]);
    });



	Route::group(['middleware' => ["system.auth"]], function(){
		
		Route::get('/',['as' => "dashboard",'uses' => "DashboardController@index"]);
		Route::get('lock',['as' => "lock", 'uses' => "AuthController@lock"]);
		Route::post('lock',['uses' => "AuthController@unlock"]);
		Route::get('logout',['as' => "logout",'uses' => "AuthController@destroy"]);

	

		Route::group(['prefix' => "/account-management",'as' => "account_management."],function(){
			Route::group(['prefix' => "/user",'as' => "user."],function(){
				Route::get('/',['as' => "index",'uses' => "AccountManagementController@user"]);
				Route::get('/create',['as' => "create",'uses' => "AccountManagementController@create_user"]);
				Route::get('/list-of-transaction',['as' => "list_of_transaction",'uses' => "AccountManagementController@list_of_transaction"]);
			});
			Route::group(['prefix' => "system-user",'as' => "system_user."],function(){
				Route::get('/',['as' => "index",'uses' => "AccountManagementController@system_user"]);
				Route::get('/create',['as' => "create",'uses' => "AccountManagementController@create_system_user"]);
			});
		});

		Route::group(['prefix' => "/settings",'as' => "settings."],function(){
			Route::get('/',['as' => "index",'uses' => "SettingsController@index"]);
		});

		/*
			Roster Routes
		*/ 

		Route::group(['prefix' => "profile",'as' => "profile."],function(){
			Route::get('/',['as' => "index",'uses' => "ProfileController@index"]);
			Route::get('edit',['as' => "edit_password",'uses' => "ProfileController@edit_password"]);
			Route::post('edit/{id?}',['uses' => "ProfileController@update_password"]);
			
		});

			Route::group(['prefix' => "song-list",'as' => "song_list."],function(){
			Route::get('/',['as' => "index",'uses' => "SongListController@index"]);
			Route::get('create',['as' => "create",'uses' => "SongListController@create"]);
			Route::post('create',['uses' => "SongListController@store"]);
			Route::get('delete/{id?}',['as'=>"delete",'uses' => "SongListController@destroy"]);
			Route::get('edit/{id?}',['as'=>"edit",'uses' => "SongListController@edit"]);
			Route::get('show/{id?}',['as'=>"show",'uses' => "SongListController@show"]);
			Route::post('edit/{id?}',['uses' => "SongListController@update"]);
			
		});
		
		

	
		});
	
	});

	
