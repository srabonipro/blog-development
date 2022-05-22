<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ContactSetting;

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

        $recentPosts = Post::with('category:id,name', 'user:id,name,image')->paginate(9);

        return view('frontend.index', compact('posts', 'recentPosts', 'col1Posts', 'col2Posts', 'col3Posts', 'footerPost1', 'footerPost2', 'footerPost3'));
    }

    public function post(Post $post)
    {
        $popularPosts = Post::inRandomOrder()->limit(3)->get();
        $categories = Category::get();
        $tags = Tag::all();

        // More related posts
        $relatedPosts = Post::latest('category_id')->inRandomOrder()->take(5)->get();
        $firstRelatedPosts = $relatedPosts->splice(0, 1);
        $secondRelatedPosts = $relatedPosts->splice(0, 2);
        $thirdRelatedPosts = $relatedPosts->splice(0, 1);

        return view('frontend.post', compact('post', 'popularPosts', 'categories', 'tags', 'firstRelatedPosts', 'secondRelatedPosts', 'thirdRelatedPosts'));
    }

    public function category(Category $category)
    {
        $posts = Post::where('category_id', $category->id)->paginate(9);
        return view('frontend.category', compact('category', 'posts'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        $contact = ContactSetting::get()->first();
        return view('frontend.contact', compact('contact'));
    }
}
