<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\news;
class NewsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $categories = Category::all();
        return view('addNews')->with('categories',$categories);
    }


    public function doStore(Request $request){
        $this->validate($request,[
            'title'=>'required|min:5',
            'post'=>'required|min:10',
            'image'=>'required|mimes:jpeg,png,jpg,gif,bmp',
            'category_id'=>'required'
        ]);
        $fileName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('newsimage'),$fileName);  
        if(news::create([
           'title'=>$request['title'],
           'post'=>$request->get('post'),
           'image'=>$fileName,
           'category_id'=>$request['category_id']     
        ])){
            return redirect()->back()->with('message','saved');
        }else{
           return redirect()->back()->with('error','some error occured');
        }
    }
}


