<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class BusinessRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$rules = [
			'business_type' => "required|in:soleproprietorship",
			'business_name' => "required",
			'business_number' => "required",
			// 'current_password'	=> "required|current_password:{$id},user",
			// 'password'	=> "required|password_format|confirmed",
		];

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'business_type.in' => "Selected business type is not yet active for online verification."
		];
	}
}