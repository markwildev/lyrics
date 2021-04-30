<?php 

namespace App\Laravel\Controllers\System;

use App\Laravel\Models\Partner;
use App\Laravel\Models\Sale;
use App\Laravel\Models\Business;
use App\Laravel\Models\TransactionManager;

use Carbon,Auth;

class AccountManagementController extends Controller{

	public function user(){
		return view('system.account-management.user.index');
	}

	public function create_user(){
		return view('system.account-management.user.create');
	}

	public function list_of_transaction(){
		return view('system.account-management.user.list-of-transaction');
	}

	public function system_user(){
		return view('system.account-management.system-user.index');
	}

	public function create_system_user(){
		return view('system.account-management.system-user.create');
	}

}