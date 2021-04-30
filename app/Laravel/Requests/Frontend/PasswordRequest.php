<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class PasswordRequest extends RequestManager{

	public function rules(){
		$id = Auth::user()->id;

		$rules = [
			'current_password'	=> "required|current_password:{$id},user",
			'password'	=> "required|password_format|confirmed",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'password.confirmed'	=> "Password mismatch.",
			'password_format' => "Password must be 6-20 alphanumeric and some allowed special characters only.",
			'current_password' => "Invalid current password.",
		];
	}
}