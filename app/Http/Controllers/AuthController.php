<?php
namespace GoyangPensil\Http\Controllers;

use Auth;
use Hash;
use Session;
use Socialite;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use GoyangPensil\UsersModel;

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

        public function check_login(Request $request){
        	$parameter = [
                'username' => $request->input('username'),
                'password' => $request->input('password'),
        	];

        	if (Auth::attempt($parameter)) {
                $result = UsersModel::where('id', Auth::id());
                if ($result->count() > 0) {
                    Session::put('id', $result->get()[0]->id);
                    echo json_encode(array(
                      'code'  => 200,
                    ));
                }
          }else{
            echo json_encode(array(
              'code'  => 401,
            ));
          }
        }

            public function check_register(Request $request){
                $result = false;
                $parameter = [
                    'username' => $request->input('username'),
                    'password' => Hash::make($request->input('password')),
                ];

                $result = UsersModel::select(DB::raw('max(id) as id '))->limit(1)->get();
                if ($result->count() > 0) {
                    $parameter['id'] = (int)$result[0]->id + 1;
                }else{
                    $parameter['id'] = 1;
                }

                $affected = UsersModel::insert([
                    'id'            => $parameter['id'],
                    'first_name'    => $parameter['username'],
                ]);

                if($affected){
                    $affected = DB::table('auth')
                    ->where('id', $parameter['id'])
                    ->update(['password' => $parameter['password']]);
                }

                if($affected){
                    if (Auth::attempt(array(
                        'username'  => $parameter['username'],
                        'password'  => $request->input('password'),
                    ))) {
                        $result = UsersModel::where('id', Auth::id());
                        if ($result->count() > 0) {
                            Session::put('id', $result->get()[0]->id);
                            echo json_encode(array(
                              'code'    => 200,
                              'login'   => true,
                              'message' => "",
                            ));
                        }
                    }else{
                      echo json_encode(array(
                        'code'    => 200,
                        'login'   => false,
                        'message' => "",
                      ));
                    }
                }else{
                  echo json_encode(array(
                    'code'    => 401,
                    'message' => "Gagal mendaftar",
                  ));
                }
            }

    public function register(Request $request){
        $result = false;
        $parameter = [
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
        ];

        $result = UsersModel::select(DB::raw('max(id) as id '))->limit(1)->get();
        if ($result->count() > 0) {
            $parameter['id'] = (int)$result[0]->id + 1;
        }else{
            $parameter['id'] = 1;
        }

        $affected = UsersModel::insert([
            'id'            => $parameter['id'],
            'first_name'    => $parameter['username'],
        ]);

        if($affected){
            $affected = DB::table('auth')
            ->where('id', $parameter['id'])
            ->update(['password' => $parameter['password']]);
        }

        if($affected){
            if (Auth::attempt(array(
                'username'  => $parameter['username'],
                'password'  => $request->input('password'),
            ))) {
                $result = UsersModel::where('id', Auth::id());
                if ($result->count() > 0) {
                    Session::put('id', $result->get()[0]->id);
                    return redirect('/');
                }
            }else{
                return redirect()->route('login');
            }
        }else{
            return redirect()->route('register');
        }
    }

    public function check_username(Request $request){
    	$parameter = [
            'username' => $request->input('username'),
        ];

        $result = DB::table('auth')->where('username', $parameter['username'])->get();
        if ($result->count() > 0) {
            echo json_encode(array(
                'message'   => "Username telah digunakan",
                'status'    => false,
            ));
        }else if(strlen($parameter['username']) > 5){
            echo json_encode(array(
                'message'   => "Username dapat digunakan",
                'status'    => true,
            ));
        }else{
            echo json_encode(array(
                'message'   => "Username minimal 5 karakter",
                'status'    => false,
            ));
        }

    }

    public function logout(){
        Session::flush();
        Auth::logout();
    	return redirect('/');
    }

    public function callback($provider){
        $getInfo = Socialite::driver($provider)->user();
        var_dump($getInfo);
    }

    public function redirect($provider){
        $usersocial = Socialite::driver($provider)->redirect();
        var_dump($usersocial);
    }

    public function socialLogin($social){
        return Socialite::driver($social)->redirect();
    }

    public function handleProviderCallback($social){
        $usersocial = Socialite::driver($social)->user();

        var_dump($usersocial);
    }
}
