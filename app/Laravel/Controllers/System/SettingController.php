<?php 

namespace App\Laravel\Controllers\System;

/*
*Models
*/
use App\Laravel\Models\User;
use App\Laravel\Models\Product;
use App\Laravel\Models\DropdownChoice;
use App\Laravel\Models\DropdownParent;
use App\Laravel\Models\Stock;
use App\Laravel\Models\Supplier;

/*
	Request
*/ 
use App\Http\Requests\PageRequest;
use App\Laravel\Requests\System\RosterRequest;	
use App\Laravel\Requests\System\ProductRequest;	
use App\Laravel\Requests\System\SupplierRequest;	

use Carbon,Auth,DB,Str,PDF,ImageUploader;

class SettingController extends Controller{

function __construct()
{
	$this->data = [];
}
	public function index(PageRequest $request){
		
		return view('system.settings.index',$this->data);
	}
	
	public function create($id = " "){
		$this->data['id'] = $id;
		return view('system.supplier-product.create',$this->data);
	}


	public function store(ProductRequest $request,$id = " "){

		try {
			$new_banner = new Banner;
      $new_banner->fill($request->only('title','description'));
				if($request->hasFile('file')) {
				    $image = ImageUploader::upload($request->file('file'), "uploads/banner");
				    $new_banner->path = $image['path'];
				    $new_banner->directory = $image['directory'];
				    $new_banner->filename = $image['filename'];
			}
			if($new_banner->save()) {
				session()->flash('notification-status','success');
				session()->flash('notification-msg',"New record has been added.");
				return redirect()->route('system.content_management.banners.index');
			}
			session()->flash('notification-status','failed');
			session()->flash('notification-msg','Something went wrong.');

			return redirect()->back();
		} catch (Exception $e) {
			session()->flash('notification-status','failed');
			session()->flash('notification-msg',$e->getMessage());
			return redirect()->back();
		}
	}
	public function profile_pic($id = " "){
		$id = Auth::user()->id;
		return view('system.settings.show',$this->data);
	}


	public function edit($id = " "){
		$this->data['supplier'] =  Supplier::find($id);
		return view('system.supplier.edit',$this->data);
	}
	
public function update_profile_pic(PageRequest $request,$id){

	try {
		$user = User::find($id);
			if($request->hasFile('file')) {
				$image = ImageUploader::upload($request->file('file'), "uploads/profile");
				$user->path = $image['path'];
				$user->directory = $image['directory'];
				$user->filename =  $image['filename'];
		}
		if($user->save()) {
			session()->flash('notification-status','success');
			session()->flash('notification-msg',"Profile Picture has been Modified.");
			return redirect()->back();
		}
		session()->flash('notification-status','failed');
		session()->flash('notification-msg','Something went wrong.');

		return redirect()->back();
	} catch (Exception $e) {
		session()->flash('notification-status','failed');
		session()->flash('notification-msg',$e->getMessage());
		return redirect()->back();
	}
	}
	
	public function print($id = " "){
		$this->data['supplier'] =  Supplier::find($id);
		$pdf = PDF::loadView('pdf.product',$this->data)->setPaper('letter', 'portrait');
		return $pdf->stream('product.pdf');
	}

}