<?php 

namespace App\Laravel\Transformers;

use Input;
use JWTAuth, Carbon, Helper;
use App\Laravel\Models\CartHeader;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use League\Fractal\TransformerAbstract;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Laravel\Transformers\MasterTransformer;

use Str;

class TransactionTrasnformer extends TransformerAbstract{

	protected $user,$auth;

	

    public function __construct() {
    	$this->auth = Auth::user();
    }

	public function transform(CartHeader $trans) {
		// $this->user = $trans;
	    return [
	     	'id' => $trans->id ?:0,
	     	'trans_id' => $trans->trans_id,
	     	'qty' => $trans->qty,
	     	'user_id' => $trans->user_id,
	     	'total_price' => $trans->total_price,
	 

	     ];
	}

	
}