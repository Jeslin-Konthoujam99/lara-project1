<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    //
    Public function index(){
        $posts = Posts::all();
        $msg= "hello world";
        return view("posts",["Posts"=>$posts, "count"=>12345, "message"=>$msg]);
    }
    public function addnew()
    {
         return view("new");
    }
    
}
