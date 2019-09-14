<?php
namespace App\Http\Controllers;

use Auth;
use Hash;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\UsersModel;

class AuthController extends Controller{
    //
    public function login(Request $request){
    	$parameter = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
    	];
        
    	if (Auth::attempt($parameter)) {
            $result = UsersModel::where('id', Auth::id());
            if ($result->count() > 0) {
                Session::put('id', $result->get()[0]->id);
                return redirect('/');
            }
        }else{
            return redirect()->route('login');
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
    	return redirect('/');
    }
}
