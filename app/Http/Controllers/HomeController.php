<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
class HomeController extends AppBaseController
{
    
    public function __construct()
    {
    }
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user =  Auth::user();
        if(!empty($user))
            $posts = Post::where('user_id', $user->id)->get();
        else
            $posts = Post::all();
        return view('home') ->with('posts', $posts);
    }
}
