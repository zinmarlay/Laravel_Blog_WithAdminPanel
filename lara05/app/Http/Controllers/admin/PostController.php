<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Posts;

class PostController extends Controller
{
    
    public function index()
    {  
       $posts=Posts::orderBy('id','desc')->get();
       return view('admin/posts/show',compact('posts'));
    }
   
    public function create()
    {
        $categories=Category::all();
        return view('admin/posts/create',compact('categories'));
    }
   
    public function store(Request $request)
    {
        $post=new Posts();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->image=$request->filepath;
        $post->category_id=$request->category;       
        $post->save();
        return redirect(route('post.index'));      
    }
    
    public function show($id)
    {
        
    }
   
    public function edit($id)
    {
        $post=Posts::find($id);
        $categories=Category::all();
        return view ('admin/posts/edit',compact('post','categories'));
    }
   
    public function update(Request $request, $id)
    {
        $post=Posts::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->image=$request->filepath;
        $post->category_id=$request->category;       
        $post->save();
        return redirect(route('post.index'));  
    }
   
    public function destroy($id)
    {
        Posts::where('id',$id)->delete();
        return redirect(route('post.index')); 
    }
}
