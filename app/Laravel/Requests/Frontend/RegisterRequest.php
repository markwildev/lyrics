<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class RegisterRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'firstname' => "required",
			'lastname' => "required",
			'email' => "required|email|unique_email:0,user",
			'password'	=> "required|password_format|confirmed",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'unique_username'	=> "Username already used. Try another",
			'unique_email'	=> "Email already used. Try another",
			'password.confirmed'	=> "Password mismatch.",
			'password_format' => "Password must be 6-20 alphanumeric and some allowed special characters only.",
		];
	}
}