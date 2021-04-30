
<?php

namespace App\Laravel\Controllers\Api\Auth;

use App\Laravel\Controllers\Controller;
use Illuminate\Http\Request;
use App\Laravel\Events\UserAction;
use App\Laravel\Models\User;
use App\Laravel\Models\EmailVerification;

use App\Laravel\Requests\Api\RegisterRequest;

use App\Laravel\Transformers\UserTransformer;
use App\Laravel\Transformers\TransformerManager;

use App\Laravel\Notifications\SendEmailVerificationToken;
use App\Laravel\Notifications\SendWelcomeMessage;

use Helper, JWTAuth, Str, Validator,Carbon;

class RegisterController extends Controller {

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

	public function store(RegisterRequest $request, $format = '') {
		$user = new User;
		$user->name = $request->get('name');
		$user->email = Str::lower($request->get('email'));
		$user->username = Str::lower($request->get('username'));
		$user->password = bcrypt($request->get('password'));
		$user->type = Str::lower($request->get('type'));

		$user->save();

		$token = Str::upper($this->_generateEmailVerificationToken());

		$user->notify(new SendEmailVerificationToken($token, ['source' => "api", 'name' => $user->username, 'email' => $user->email]) );
		// $user->notify(new SendWelcomeMessage() );

		$this->_saveEmailVerificationToken($user, $token);
		
		$this->response['msg'] = "Account successfully registered ";
		$this->response['status'] = TRUE;
		$this->response['status_code'] = "REGISTER_SUCCESS";
		$this->response['token'] = JWTAuth::fromUser($user, ['did' => $request->get('device_id')]);
		$this->response['first_login'] = TRUE;
		$this->response['data'] = $this->transformer->transform($user, new UserTransformer,'item');
		$this->response_code = 200;


		// event( new UserAction($user, ['register']) );

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

	private function _generateEmailVerificationToken() {
		$key = config('app.key');
        if (Str::startsWith($key, 'base64:')) {
            $key = base64_decode(substr($key, 7));
        }
        // return hash_hmac('sha256', Str::random(40), $key);
		return Str::random(6);
	}

	private function _saveEmailVerificationToken(User $user, $token) {
		EmailVerification::where('email', $user->email)->delete();

		$email_verification = new EmailVerification;
		$email_verification->email = $user->email;
		$email_verification->token = $token;
		$email_verification->created_at = Carbon::now();
		$email_verification->save();
	}
}