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
        return view('blog', ["title" => "Blog", "data" => Post::all()]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post", "data" => Post::find($slug)
        ]);
    }
}