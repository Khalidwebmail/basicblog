<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\Post;
use App\Model\User\Category;
class HomeController extends Controller
{
    public function index()
    {
    	//$posts = Post::where('status',1)->get();
    	$posts = Post::where('status',1)->orderBy('created_at','desc')->paginate(2);
        return view('user.blog',compact('posts'));
    }

    public function tag(Tag $tag)
    {
        $posts = $tag->tags();
        return view('user.blog',compact('posts'));
    }

    public function category(Category $category)
    {
    	//return $category = Category::where('slug',$slug)->get();
    	$posts = $category->posts();
        return view('user.blog',compact('posts'));
    }
}
