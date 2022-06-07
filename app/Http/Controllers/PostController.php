<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function about()
    {
        return view('about', ["title" => "About"]);
    }

    public function index()
    {
        
        $posts = Post::with(['user', 'category'])->latest();

        if (request('search')) {
            $posts->where('title', 'like', '%'. request('search') . '%');
        }


        return view('blog', [
            "title" => "Blog", 
            // "data" => Post::all()
            "data" => $posts->paginate(9)
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post", "data" => $post
        ]);
    }
}