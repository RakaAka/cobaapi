<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_api;

class UserController extends Controller
{
    //
    public function index(){
        return response()->json(user_api::all(), 'sukses');
    }

    public function create(Request $request){
        $userapi = new user_api();

        $userapi->username = $request->username;
        $userapi->password = $request->password;
        $userapi->email = $request->email;
        $userapi->phone = $request->phone;
        $userapi->country = $request->country;
        $userapi->city = $request->city;
        $userapi->postcode = $request->postcode;
        $userapi->name = $request->name;
        $userapi->address = $request->address;
        $userapi->save();
        return response()->json('Sukses');
    }

    public function masuk(Request $request){
        $userapi = new user_api();

        $dptemail = $request->email;
        $dptpassword = $request->password;

        $dbemail = $userapi::select(['email'])->where('email', $dptemail)->value('email');
        $dbpassword = $userapi::select(['password'])->where('password', $dptpassword)->value('password');
        $dbdata = $userapi::select(['username', 'email'])->where('email', $dptemail)->get();

        if ($dptemail === $dbemail) {
            if ($dptpassword === $dbpassword) {
                return response()->json($dbdata);
            }else{
                return response()->json('password');
            }
        }else{
            return response()->json('id salah');
        }
    }
}
