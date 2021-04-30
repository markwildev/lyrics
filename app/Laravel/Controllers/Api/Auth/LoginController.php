<?php

namespace App\Laravel\Controllers\Api\Auth;

use App\Laravel\Controllers\Controller;
use App\Laravel\Events\UserAction;
use App\Laravel\Models\UserDevice;
use App\Laravel\Models\User;


use App\Laravel\Transformers\TransformerManager;
use App\Laravel\Transformers\UserTransformer;
use Auth, JWTAuth, Helper, Str;

/**
AuditTrail
**/

use App\Laravel\Events\AuditTrailActivity;

use Illuminate\Http\Request;

class LoginController extends Controller {

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

	public function authenticate(Request $request, $format = '') {

		$username = Str::lower($request->get('username'));
		$password = $request->get('password');

		$field = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';


		$user = User::where($field,$username)
					->whereIn('type',['admin','super_user','customer'])
					->first();

		if(!$user){
			$this->response['msg'] = "Invalid username/password.";
			$this->response['status_code'] = "LOGIN_FAILED";
			goto invalid_login;
		}

		if (Auth::attempt([$field => $username, 'password' => $password ])) {

			$user = Auth::user();

			$this->response['msg'] = "Welcome, {$user->name}!";
			$this->response['status'] = TRUE;
			$this->response['status_code'] = "LOGIN_SUCCESS";
			$this->response['token'] = JWTAuth::fromUser($user, ['did' => $request->get('device_id')]);
			$this->response['first_login'] = FALSE;
			$this->response['data'] = $this->transformer->transform($user, new UserTransformer,'item');
			$this->response_code = 200;

			// event( new UserAction($user, ['login']) );

		} else {
			invalid_login:
			$this->response['msg'] = "Invalid username/password.";
			$this->response['status_code'] = "LOGIN_FAILED";
		}

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

	public function logout(Request $request, $format = '') {

		$user = $request->user();
		
		$user->save();
		$user_name = $user->name;

		// $device_id = $request->get('device_id');
		// UserDevice::where('device_id', $device_id)->where('user_id', $user->id)->update(['is_login' => "0"]);

		JWTAuth::invalidate(JWTAuth::getToken());

		$this->response['msg'] = "See you again, {$user_name}!";
		$this->response['status'] = TRUE;
		$this->response['status_code'] = "LOGOUT_SUCCESS";
		$this->response_code = 200;

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