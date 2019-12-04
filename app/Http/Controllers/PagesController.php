<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PagesController extends Controller
{
    public function index(){
        //$posts= Post::all();
        $posts= Post::orderBy('title','desc')->paginate(2);
        return view('pages.index')->with('posts', $posts);
    }

    public function about(){
        //$posts= Post::all();
        $posts= Post::orderBy('title','desc')->paginate(2);
        return view('pages.about')->with('posts',$posts);
    }

    public function try(){
        //$posts= Post::all();
        $posts= Post::orderBy('title','desc')->paginate(2);
        return view('pages.try')->with('posts',$posts);
    }

    public function services(){
        
        return view('pages.services');
    }

    
}
