<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::all(); //select * from categories;
        return view('category')->with('categories',$categories);
    }

    public function doStore(Request $request){
        $this->validate($request,[
           'name'=>'required|min:3|unique:categories'     
        ]);
        if(Category::create(['name'=>$request['name']])){
            return redirect()->back()->with('message','saved');
        }else{
            return redirect()->back()->with('error','some error occured');
        }

    }
}
