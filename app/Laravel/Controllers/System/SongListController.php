<?php 

namespace App\Laravel\Controllers\System;

/*
*Models
*/
use App\Laravel\Models\User;
use App\Laravel\Models\Song;
/*
	Request
*/ 
use App\Http\Requests\PageRequest;
use App\Laravel\Requests\System\SongRequest;	


use Carbon,Auth,DB,Str,PDF,ImageUploader;

class SongListController extends Controller{

function __construct()
{
	$this->data = [];
}
	public function index(PageRequest $request){
	$this->data['songs'] = Song::paginate("10");
	$this->data["products"] = Song::all();
	return view('system.songs.index',$this->data);
	}
	
	public function create(){
	$this->data["products"] = Song::all();
	return view('system.songs.create',$this->data);
	}


	public function store(SongRequest $request){
		// return $request;
		try {
			$song = new Song;
      		$song->fill($request->all());
			
			if($song->save()) {
				session()->flash('notification-status','success');
				session()->flash('notification-msg',"New record has been added.");
				return redirect()->route('system.song_list.index');
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
	
	public function edit($id = " "){
		$this->data['song'] =  Song::find($id);
		return view('system.songs.edit',$this->data);
	}
		public function update(SongRequest $request,$id = " "){
		// return $request;
		try {
			$song = Song::find($id);
      		$song->title = $request->title;
      		$song->artist = $request->artist;
      		$song->lyrics = $request->lyrics;
			
			if($song->save()) {
				session()->flash('notification-status','success');
				session()->flash('notification-msg',"Data has been modified successfully.");
				return redirect()->route('system.song_list.index');
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

	public function show($id = " "){
		$this->data['song'] = Song::find($id);
		return view('system.songs.show',$this->data);
	}
public function destroy($id = " "){

	try {
		$song = Song::find($id);
		
		if($song->delete()) {
			session()->flash('notification-status','success');
			session()->flash('notification-msg',"Data has been deleted successfully.");
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
	
	
}