<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    
    public function index(){
        return view('login');
    }

    public function doLogin(Request $request){
            $email = $request['email'];
            $password = $request['password'];
            if(Auth::attempt(['email'=>$email,'password'=>$password])){
                return redirect()->to('dashboard');
            }else{
                return redirect()->to('login');
            }
           
    }
}
