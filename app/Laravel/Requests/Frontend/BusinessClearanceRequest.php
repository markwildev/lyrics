<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class BusinessClearanceRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$current_progress = $this->session()->get('application.current_progress');

		$rules = [];
		switch($current_progress){
			case '1':
				$rules = [
					'transaction_type' => "required",
					'property_type' => "required", 
					'area_sqm' => "required",
				];
			break;
			case '2':
				$rules = [
				];
			break;

			default:
				$rules = [];
		}

		return $rules;
	}

	public function messages(){
		return [
			'required'	=> "Field is required.",
			'business_type.in' => "Selected business type is not yet active for online verification."
		];
	}
}