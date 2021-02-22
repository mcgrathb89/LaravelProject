<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function store(Request $request){

        $this->validate($request, [
            'user_id' => 'required', 
            'title' => 'required',
            'body' => 'required'
        ]);

        $posts = new Post();
        $posts->user_id = $request->user_id;
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->save();

        return Response('Post added', 201);
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'user_id' => 'required', 
            'title' => 'required',
            'body' => 'required'
        ]);

        $posts = Post::find($id);
        $posts->user_id = $request->user_id;
        $posts->title = $request->title;
        $posts->body = $request->body;
        $posts->save();

        return Response('Post updated', 200);
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
        return Response('Post deleted', 200);
    }
}