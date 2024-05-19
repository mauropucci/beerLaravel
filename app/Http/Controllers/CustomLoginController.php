<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomLoginController extends Controller {
    
    public function login() {
       return view('auth.login');
    }
    public function loginPost(Request $request){
        $request->validate([
          'name'=>'required',
          'password'=>'required',
        ]);
        $credentials = $request->only('name','password');
		
		if(Auth::attempt($credentials)){
            return redirect('/beer');
        }else{
            return redirect('/logout');
        }  
    }
    
	
    public function signOut() {
        Session::flush();
        Auth::logout();
        return redirect('/')->with('success','Log out your account');
    }
}
