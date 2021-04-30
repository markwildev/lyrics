<?php 

namespace App\Laravel\Controllers\Api;

use Helper, Str, DB,ImageUploader;
use App\Laravel\Models\User;
use Illuminate\Http\Request;
use App\Laravel\Requests\Api\UserRequest;
use App\Laravel\Requests\Api\EmployeeRequest;
use App\Laravel\Transformers\EmployeeTransformer;
use App\Laravel\Transformers\TransformerManager;
use App\Laravel\Transformers\TransactionTrasnformer;


use App\Http\Requests\PageRequest;

//Models

use App\Laravel\Models\Employee;
use App\Laravel\Models\TransactionHeader;
use App\Laravel\Models\TransactionDetail;
use App\Laravel\Models\CartDetail;
use App\Laravel\Models\CartHeader;

class TransactionController extends Controller{

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

    public function store(PageRequest $request, $format= "")
    {
        
      $user=  $request->user();
        $total = CartHeader::count();
        $total_price = 0;
        $header = new CartHeader;


        $check = CartHeader::where("user_id",$user->id)
                                  ->where("status","pending");
         $detail = CartDetail::where("user_id",$user->id)->where("product_id",$request->product_id);                         

        switch ($check->count()) {
            case 1:

            /*
                Update Transaction Details
            */ 
             if($detail->count() > 0)
             {

              $details = $detail->get()->first();
                $request->item_qty != null ? $details->qty +=  $request->item_qty : $details->qty++;
                $details->sub_total += $request->item_price;
                $details->save();
             }
             else
             {

            $details = new CartDetail;
            $details->transaction_id = str_pad($total,8,0,STR_PAD_RIGHT);
            $details->user_id = auth()->user()->id;
            $details->product_name = "Microsoft Office";
            $details->item_price = $request->item_price;
            $request->item_qty == null ?$details->qty++:  $details->qty +=  $request->item_qty ;
            $details->sub_total = $request->item_price;
            $details->product_id = $request->product_id;
            $details->save();

          ;
             }
           
            

            /*
                Update Transaction Header
            */ 
            $header  = CartHeader::find($total);
            $header->user_id = $user->id;
            $header->trans_id = str_pad($total,8,0,STR_PAD_RIGHT);
            $request->item_qty == null ? $header->qty++ : $request->item_qty ;
            $header->total_price += $details->item_price;
            $header->save();

            // $data = array('qty' =>$h->qty, "total_price"=>$h->total_price);
            //  return $data;
            break;
            
            default:

            /*
                Add new Transaction
            */ 
            $header->trans_id = str_pad(++$total,8,0,STR_PAD_RIGHT);
            $header->user_id = auth()->user()->id;
            $header->qty = $request->qty;
            $header->total_price = $request->total_price;
            $header->save();

            $details = new CartDetail;
            $details->transaction_id = $header->trans_id;
            $details->user_id = auth()->user()->id;
            $details->sub_total = $request->item_price;
            $details->product_name = "Microsoft Office";
            $details->item_price = $request->item_price;
            $request->item_qty == null ? $details->qty++ : $request->item_qty ;
            $details->sub_total = $request->item_price;
            $details->product_id = $request->product_id;
            $details->save();
            $header->qty += 1;
            $header->total_price += $request->item_price;
            $header->save();

            
            break;
        }
                                  

       
                $this->response['status'] = TRUE;
                $this->response['msg'] = "Item added to your cart Successfully";
                $this->response['status_code'] = "SUCCESS";
                $this->response['data'] = $this->transformer->transform($header, new TransactionTrasnformer, 'item');
                $this->response_code = 200;
                
                goto callback;
            


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