<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home;
use App\Category;
use App\Posts;


class HomeController extends Controller
{
    public function index(){
    	$home=Home::find(1);
    	return view('user/home',compact('home'));
    }

    public function blog($id){    	
    	
    	$category=Category::find($id); //find all posts connects with category id   	
        // $category=Category::where('language','mm')->get();
    	return view('user/blog',compact('category'));
    }
    public function post($id){

    	$post=Posts::find($id);//find all categories connects with post id
    	return view('user/post',compact('post'));
    }
}
