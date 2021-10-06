<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\M_Super;
use App\Models\M_Role;
use Illuminate\Support\Facades\DB;

class Super extends Controller
{
	public function dashboard(){
		return view ('super.index');
	}

	public function userMgmt(){
		$data['roles']= M_Role::all();
		$data['user'] = M_Super::all();
		return view ('super.usermgmt', $data);
	}

	public function addUser(Request $request){
		$this->validate($request,
			[
				'username' => 'required',
				'password' => 'required',
				'id_role' => 'required',
				'status' => 'required'
			]);

		if(M_Super::create([
			"username" => $request->username,
			"password" => encrypt($request->password),
			"role" => $request->id_role,
			"status" => $request->status
		])){
			return redirect('/userMgmt')->with('berhasil', 'Data Berhasil Disimpan');
		}else{
			return redirect('/userMgmt')->with('gagal', 'Data Gagal Disimpan');
		}
	}
}
