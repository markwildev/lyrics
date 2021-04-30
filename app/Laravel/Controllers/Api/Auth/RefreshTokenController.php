<?php

namespace App\Laravel\Controllers\Api\Auth;

use Helper, Str, JWTAuth;
use App\Laravel\Models\UserWallet;

use Illuminate\Http\Request;
use App\Laravel\Controllers\Controller;
use App\Laravel\Transformers\UserTransformer;
use App\Laravel\Transformers\TransformerManager;

class RefreshTokenController extends Controller {

	protected $response = array();

	public function __construct() {
		$this->response = array(
			"msg" => "Bad Request.",
			"status" => FALSE,
			'status_code' => "BAD_REQUEST"
			);
		$this->response_code = 400;
		$this->transformer = new TransformerManager;
	}

	public function refresh(Request $request, $format = '') {

		$this->response['msg'] = "New session successfully created.";
		$this->response['status'] = TRUE;
		$this->response['status_code'] = "NEW_TOKEN";
		$this->response['new_token'] = $request->new_token;
		$this->response['data'] = $this->transformer->transform($request->user, new UserTransformer,'item');
		$this->response_code = 200;

		// foreach(['BTX','ETH'] as $index => $currency){
		// 	$new_wallet = UserWallet::where('code',$currency)->where('user_id',$request->user->id)->first();
		// 	if(!$new_wallet){
		// 		$new_wallet = new UserWallet; 
		// 		$new_wallet->user_id = $request->user->id;
		// 		$new_wallet->code = $currency;
		// 		$new_wallet->credit = 0;
		// 		$new_wallet->save();
		// 	}
		// }
		
		callback:
		switch(Str::lower($format)){
			case 'json' :
				return response()->json($this->response, $this->response_code);
			break;
			case 'xml' :
				return response()->xml($this->response, $this->response_code);
			break;
		}
	}
}