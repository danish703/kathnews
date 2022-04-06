<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleNewsController extends Controller
{
    public function index(){
        return view('newsdetails');
    }
}
