<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class AdministratorRequest extends RequestManager{

	public function rules(){

		$id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'name'	=> "required",
			'username' => "required|unique_username:{$id},user|username_format",
			'email' => "required|email|unique_email:{$id},user",
			'password'	=> "required|password_format|confirmed",
			'status'	=> "required"
		];

		if($id > 0){
			unset($rules['password']);
		}

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'unique_username'	=> "Username already used. Try another",
			'unique_email'	=> "Email already used. Try another",
			'password.confirmed'	=> "Password mismatch.",
			'password_format' => "Password must be 6-20 alphanumeric and some allowed special characters only.",
			'username_format' => "Username must be 6-20 alphanumeric and some allowed special characters only.",
		];
	}
}