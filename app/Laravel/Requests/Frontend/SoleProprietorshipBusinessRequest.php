<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class SoleProprietorshipBusinessRequest extends RequestManager{

	public function rules(){

		// $id = $this->route('administrator_id')?:0;
		// $id = Auth::user()->id;

		$current_progress = $this->session()->get('soleproprietorship.current_progress');
		$is_verified = $this->session()->get('soleproprietorship.is_verified');

		$rules = [];
		switch($current_progress){
			case '1':
				$rules = [
					'business_scope' => "required",
					'dominant_name' => "required", 
					'business_name' => "required",
					'unit_no' => "required", 
					'b_street_address' => "required",
					'region' => "required",
					// 'province' => "required",
					'town' => "required",
					'brgy' => "required",
				];
				if($is_verified){
					$rules = [];
				}
			break;
			case '2':
				$rules = [
					'firstname' => "required",
					'lastname' => "required", 
					'birthdate' => "required",
					'civil_status' => "required", 
					'citizenship' => "required",
					'gender' => "required",
					'house_no' => "required",
					'street_address' => "required",
					'region' => "required",
					// 'province' => "required",
					'town' => "required",
					'brgy' => "required",
				];
				if($is_verified){
					$rules = [];
				}
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