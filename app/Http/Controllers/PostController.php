<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Post;
// use App\Http\Controllers\Post;

class PostController extends Controller
{
    public function post(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'post' => 'required',
        ]);

        $posts = new Post;
        $psosts->title = $request->input('title');
        $posts->post = $request->input('post');
        $posts->save();

        return redirect('/')->with('response', 'Post Successfully');
    }

    public function index()
    {
        //display data
        $post = Post::all();
        return view('post.index')->with('posts', $post);
    }


    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request){
        $title = $request->get('title');
        $post = $request->get('post');

        $posts = new Post();
        $posts->title = $title;
        $posts->post = $post;
        $posts->save();

        return redirect('post')->with('response', 'Post Successfully');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit')
                ->with('posts', $post);
    }

    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $posts->title = $request->input('title');
        $posts->post = $request->input('post');
        $posts->save();

        return redirect('post')->with('response', 'Edit Successfully');
    }
    
    public function destroy(Request $request, $id){
        $post = App\Post::find($id);
        $post->delete();

      return redirect('/post')->with('response', 'Delete Successfully');
    }
}
