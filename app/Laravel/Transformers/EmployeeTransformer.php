<?php 

namespace App\Laravel\Transformers;

use Input;
use JWTAuth, Carbon, Helper;
use App\Laravel\Models\Employee;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use League\Fractal\TransformerAbstract;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Laravel\Transformers\MasterTransformer;

use Str;

class EmployeeTransformer extends TransformerAbstract{

	protected $user,$auth;

	

    public function __construct() {
    	$this->auth = Auth::user();
    }

	public function transform(Employee $employee) {
		$this->user = $employee;
	    return [
	     	'id' => $employee->id ?:0,
	     	'first_name' => $employee->first_name,
	     	'last_name' => $employee->last_name,
	     	'department' => $employee->department,
	     	'position' => $employee->position,
	 

	     ];
	}

	
}