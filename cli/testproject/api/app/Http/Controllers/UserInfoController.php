<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class UserInfoController extends Controller
{
    public function index(){
		return UserInfo::all();
	}
	
	public function store(Request $req){
	
		try{
			$user = new UserInfo();
			
			$user->name = $req->name;
			$user->email = $req->email;
			$user->contact = $req->contact;
			$user->profile = $req->profile;
			$user->dob = $req->dob;
			$user->status = $req->status;
			
			if($user->save()){
				return response()->json(['status' => 'Success','message' => "Successfully inserted"]);
			}
			else{
				return response()->json(['status' => 'Failed','message' => "Insert Failed"]);
			}			
		}
		catch(\Exception $e){
			return response()->json(['status' => 'error','message' => $e->getMessage()]);
		}
	}
}
