<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->get();
        $recentPosts = Post::with('category:id,name', 'user:id,name')->paginate(9);

        return view('frontend.index', compact('posts', 'recentPosts'));
    }

    public function post(Post $post)
    {
        return view('frontend.post', compact('post'));
    }
}
