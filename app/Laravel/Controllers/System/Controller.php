<?php

namespace App\Laravel\Controllers\System;


use App\Laravel\Controllers\Controller as BaseController;

use Auth, Session,Carbon, Helper,Route, Request,Str;


class Controller extends BaseController{

	protected $data;

	public function __construct(){
		// self::set_system_routes();
		// self::set_user_info();
		self::set_date_today();
		self::set_current_route();
		// self::set_marital_status();
		// self::set_months();
		// self::set_years();
		// self::set_days();


	}

	public function get_data(){
		$this->data['page_title'] = "";
		return $this->data;
	}


	public function set_current_route(){
		 $this->data['current_route'] = Route::currentRouteName();
	}

	public function set_date_today(){
		$this->data['date_today'] = Helper::date_db(Carbon::now());
	}


	
}