<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Resources\Categories;

class APIController extends Controller
{
   public function getAllCategories(){
   	// return new Categories(Category::all());//Categories is resource name
   	// return new Categories(Category::orderBy('id','desc')->get());
   	return new Categories(Category::orderBy('id','desc')->get(['id','name']));
   }
}
