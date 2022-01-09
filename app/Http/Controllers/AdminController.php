<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
class AdminController extends Controller
{
    //
    public function Index(){
        return view('admin.login_form');
    }
    public function Login(Request $request){
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' =>$check['email'],'password' =>$check['password']])){
            return Redirect()->route('admin.dashboard')->with('success','Admin login successfully');
        }else{
            return redirect()->route('login_form')->with('error','Invalid email or password');
        }

    }
    public function Dashboard(){
        return view('admin.index');
    }
     public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('success','Admin Logout successfully');
    }
   
}
