<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::where('user_id', auth()->user()->id)->get();

        return view('dashboard.blog.index', [
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blog.create', [
            'categories' => Category::all()
        ]);
    }

    public function create2()
    {
        return view('dashboard.blog.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'image' => 'image',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('post-img', 'public');
        }

        $data['user_id'] = auth()->user()->id;
        $data['excerpt'] = Str::limit($request->body, 100, '...');
        
        Post::create($data);
        return redirect('/dashboard/blog')->with('success', 'Post added Successfully!');

        // return $request;

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.blog.show', [
            "data" => $post
        ]);
        
    }

    public function show2(Post $post)
    {
        // return $post;
        return view('dashboard.blog.show', [
            "data" => $post
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.blog.edit', [
            'data' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        Post::where('id', $post->id)->update($data);
        return redirect('/dashboard/blog')->with('success', 'Post updated!');


        // if ($request->slug != $post->slug) {
        //     # code...
        // }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/blog')->with('success', 'Post deleted!');
    }

    public function destroy2(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/blog')->with('success', 'Post deleted!');
    }
}
