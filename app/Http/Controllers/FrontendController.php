<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->take(5)->get();
        $col1Posts = $posts->splice(0, 2);
        $col2Posts = $posts->splice(0, 1);
        $col3Posts = $posts->splice(0);

        $recentPosts = Post::with('category:id,name', 'user:id,name')->paginate(9);

        return view('frontend.index', compact('posts', 'recentPosts', 'col1Posts', 'col2Posts', 'col3Posts'));
    }

    public function post(Post $post)
    {
        return view('frontend.post', compact('post'));
    }
}
