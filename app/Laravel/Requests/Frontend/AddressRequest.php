<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class AddressRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'house_no' => "required",
			'street_address' => "required",
			'region' => "required",
			'town' => "required", 
			'brgy' => "required",
			'zipcode' => "required"
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
		];
	}
}