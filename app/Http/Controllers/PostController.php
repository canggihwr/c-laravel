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
        return view('blog', [
            "title" => "Blog", 
            // "data" => Post::all()
            "data" => Post::latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post", "data" => $post
        ]);
    }
}