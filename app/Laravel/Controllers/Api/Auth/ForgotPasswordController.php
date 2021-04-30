<?php

namespace App\Laravel\Controllers\Api\Auth;

use App\Laravel\Controllers\Controller;
use App\Laravel\Models\PasswordReset;
use App\Laravel\Models\User;
use App\Laravel\Notifications\SendResetToken;
use Illuminate\Http\Request;
use App\Laravel\Requests\Api\ForgotPasswordRequest;
use Carbon, Helper, Str, Validator;

class ForgotPasswordController extends Controller {

	protected $data = array();

	public function __construct() {
		$this->response = array(
			"msg" => "Bad Request.",
			"status" => FALSE,
			'status_code' => "BAD_REQUEST"
			);
		$this->response_code = 400;
	}

	public function forgot_password(ForgotPasswordRequest $request, $format = '') {
		$email = $request->get('email');
		$token = Str::upper($this->_generateResetToken());

		$user = User::where('email', $email)->first();
		$user->notify(new SendResetToken($token, ['source' => "api", 'name' => $user->username, 'email' => $email]) );
		$this->_saveResetToken($user, $token);

		$this->response['msg'] = "Reset password request successfully sent.";
		$this->response['status'] = TRUE;
		$this->response['status_code'] = "RESET_TOKEN_SENT";
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

	private function _generateResetToken() {
		$key = config('app.key');
        if (Str::startsWith($key, 'base64:')) {
            $key = base64_decode(substr($key, 7));
        }
        // return hash_hmac('sha256', Str::random(40), $key);
		return Str::random(6);
	}

	private function _saveResetToken(User $user, $token) {
		PasswordReset::where('email', $user->email)->delete();

		$password_reset = new PasswordReset;
		$password_reset->email = $user->email;
		$password_reset->token = $token;
		$password_reset->created_at = Carbon::now();
		$password_reset->save();
	}
}