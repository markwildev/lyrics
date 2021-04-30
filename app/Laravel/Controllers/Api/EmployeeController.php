<?php 

namespace App\Laravel\Controllers\Api;

use Helper, Str, DB,ImageUploader;
use App\Laravel\Models\User;
use Illuminate\Http\Request;
use App\Laravel\Requests\Api\UserRequest;
use App\Laravel\Requests\Api\EmployeeRequest;
use App\Laravel\Transformers\EmployeeTransformer;
use App\Laravel\Transformers\TransformerManager;

//Models

use App\Laravel\Models\Employee;

class EmployeeController extends Controller{

	protected $response = array();

	public function __construct(){
		$this->response = array(
			"msg" => "Bad Request.",
			"status" => FALSE,
			'status_code' => "BAD_REQUEST"
			);
		$this->response_code = 400;
		$this->transformer = new TransformerManager;
	}

    public function index(Request $request, $format = '') {
        $per_page = $request->get('per_page', 10);
        $page = $request->get('page', 1);
        // $unit = $request->get('unit_data');
        $user = $request->user();

        $this->response['msg'] = "List of Users";

        $users = User::orderBy('created_at',"DESC")->paginate($per_page);

        $this->response['status'] = TRUE;
        $this->response['status_code'] = "USER_LIST";
        $this->response['has_morepages'] = $users->hasMorePages();
        $this->response['data'] = $this->transformer->transform($users, new UserTransformer, 'collection');
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

    public function search(Request $request, $format = '') {
        $per_page = $request->get('per_page', 10);
        $page = $request->get('page', 1);
        $keyword = Str::lower($request->get('keyword'));
        $search_type = Str::lower($request->get('search_type', ""));

        // $unit = $request->get('unit_data');
        $user = $request->user();

        switch($search_type){
            case 'email':
                $users = User::types(['mentee','mentor'])->keyword($keyword)->orderBy('created_at',"DESC")->paginate($per_page);
                $this->response['status'] = TRUE;
                $this->response['msg'] = "Search result: '{$keyword}'";
                $this->response['status_code'] = "SEARCH_RESULT";
                $this->response['has_morepages'] = $users->hasMorePages();
                $this->response['data'] = $this->transformer->transform($users, new UserTransformer, 'collection');
                $this->response_code = 200;
            break;
            default:
                goto callback;
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

    public function store(EmployeeRequest $request, $format= "")
    {
            $employee = new Employee;

            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->middle_name = $request->middle_name;
            $employee->position = $request->position;
            $employee->department = $request->department;
            $employee->ward_id = $request->ward_id;

          if($employee->save()){

                $this->response['status'] = TRUE;
                $this->response['msg'] = "Employee Added Successfully";
                $this->response['status_code'] = "SUCCESS";
                $this->response['data'] = $this->transformer->transform($employee, new EmployeeTransformer, 'item');
                $this->response_code = 200;
                
                goto callback;
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
    
    public function show(Request $request, $format = '') {

        $user = $request->get('user_data');

        $this->response['msg'] = "Profile information of {$user->name}.";
        $this->response['status'] = TRUE;
        $this->response['status_code'] = "USER_INFO";

        $this->response['data'] = $this->transformer->transform($user, new UserTransformer, 'item');
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