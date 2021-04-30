<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class ProfileRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'firstname' => "required",
			'lastname' => "required",
			'civil_status' => "required",
			'citizenship' => "required",
			'gender' => "required",
			'birthdate' => "required",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
		];
	}
}