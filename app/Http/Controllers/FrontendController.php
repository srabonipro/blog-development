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

        $footerPosts = Post::with('category', 'user')->inRandomOrder()->limit(4)->get();
        $footerPost1 = $footerPosts->splice(0, 1);
        $footerPost2 = $footerPosts->splice(0, 2);
        $footerPost3 = $footerPosts->splice(0, 1);

        $recentPosts = Post::with('category:id,name', 'user:id,name')->paginate(9);

        return view('frontend.index', compact('posts', 'recentPosts', 'col1Posts', 'col2Posts', 'col3Posts', 'footerPost1', 'footerPost2', 'footerPost3'));
    }

    public function post(Post $post)
    {
        return view('frontend.post', compact('post'));
    }
}
