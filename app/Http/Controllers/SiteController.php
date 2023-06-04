<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SiteController extends Controller
{
    //
    public function index(){
        return view('index',[
            'posts' => Post::orderBy('id', 'desc')->get()
        ]);
    }

    public function post(){
        return view('post',[
            'posts' => Post::orderBy('id', 'desc')->get()
        ]);  
    }
}
