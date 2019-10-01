<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller
{
    
    public function index()
    {

         // dd($categories);

        // $categories=Category::all();//get all of category data

        $categories=Category::orderby('id','desc')->get();//get all of category data and sort descending 

       return view ('admin/category/show',compact('categories'));
    }

   
    public function create()
    {
        return view ('admin/category/create');
    }

   
    public function store(Request $request)
    {
        // dd($request);
        $category=new Category;
        $category->name=$request->cname;
        $category->save();
        return redirect(route('category.index'));      
    }

    
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        // dd($id);            
        $category=Category::find($id);
        return view ('admin/category/edit',compact('category'));
    }

  
    public function update(Request $request, $id)
    {
        // dd($request);
        $category=Category::find($id);
        $category->name=$request->cname;
        $category->save();       

    }

   
    public function destroy($id)
    {
        Category::where('id',$id)->delete();
        return redirect(route('category.index'));  

    }
}
