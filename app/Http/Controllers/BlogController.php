<?php

namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function store(){

        $posts = new Post();

        $posts->title = request('user_id');
        $posts->title = request('title');
        $posts->body = request('body');
        $posts->save();

    return redirect('/blog');
    }
}