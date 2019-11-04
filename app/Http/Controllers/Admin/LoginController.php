<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function getLogin(){
    	return view('admin.login');
    }

    public function postLogin(Request $req){
    	$arr = ['mail'=> $req->mail, 'pass'=> $req->pass];

    	if($req->remember == 'Remember Me'){
    		$remember = true;
    	}else{
    		$remember = false;
    	}

    	if(Auth::attempt($arr, $remember)){
    		dd('thanh cong');
    	}else{
    		dd('that bai');
    	}
    }
}
