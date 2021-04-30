<?php namespace App\Laravel\Requests\Frontend;

use Session,Auth;
use App\Laravel\Requests\RequestManager;

class UploadRequest extends RequestManager{

	public function rules(){

		$rules = [
			"file" => "required|mimes:pdf|max:5000",
		];

		return $rules;
	}

	public function messages(){
		return [
			'file.mimes'	=> "Invalid attachment. Only allowed pdf file.",
			'file.required'	=> "Please attached a pdf file.",
			'file.max'		=> "Max of 5mb file only"
		];
	}
}