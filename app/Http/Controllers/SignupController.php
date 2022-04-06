<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SignupController extends Controller
{
    public function index(){
        return view('signup');
    }


    public function doSignup(){
        $this->validate(request(),[
            'name'=>'required|min:3|max:20|alpha',
            'email'=>'required|unique:users',
            'password'=>'required|min:8|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=>'required',
        ]);

        $user = User::create(request(['name','email','password'])); // INSERT INTO 
        return redirect()->to('login');

    }
}
