<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\UsersModel;

class UsersController extends Controller{
    public function index(){
        $response = array();
        $response['status'] = false;
        $response['data']   = array();
        // echo Session::get('id');
        $result = UsersModel::where('id', Session::get('id'))->get();
        if($result){
            $response['status'] = true;
            $response['data']   = $result;
        }
        
        return view(
            'pages/users/index', $response
        );
    }

    public function update(Request $request){
        $response   = array();
        $response['message'] = array();
        $result     = true;
        $criteria   = array(
            'id'    => $request->input('id'),
        );

        $parameter = array(
            'first_name'    => $request->input('first_name'),
            'last_name'     => $request->input('last_name'),
            'phone'         => $request->input('phone'),
            'email'         => $request->input('email'),
            'address'       => $request->input('address'),
        );
        
        $result = UsersModel::where('email', $parameter['email'])->get();
        if($result->count() > 0){
            $result = true;
            // array_push($response['message'], "Email sudah digunakan");
        }else{
            $result = true;
        }

        $response['parameter'] = $parameter;
        if($result === true){
            $result = UsersModel::where('id', $criteria['id'])->update($parameter);
            if($result){
                $response['status'] = true;
            }else{
                $response['status'] = false;
            }
        }
        return redirect('/pages/profil')->withErrors($response['message']);
    }
}
