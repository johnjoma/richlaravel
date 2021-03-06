<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        //$user_id = auth()->user();
        $user = User::find($user_id);
        $post= $user->posts()->paginate(3);
        //return view('dashboard')->with('posts', $user->posts);

        return view('dashboard')->with('posts',$user->posts);
    }
}
