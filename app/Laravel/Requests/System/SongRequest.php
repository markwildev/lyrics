<?php namespace App\Laravel\Requests\System;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class SongRequest  extends RequestManager{

	public function rules(){

		$id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'title'	=> "required",
			'artist'	=> "required",
			'lyrics'	=> "required",
			
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