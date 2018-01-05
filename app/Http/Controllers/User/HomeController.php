<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Post;
class HomeController extends Controller
{
    public function index()
    {
    	$posts = Post::where('status',1)->get();
        return view('user.blog',compact('posts'));
    }
}
