<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class BlogController extends Controller
{
    public function create(){
        $posts = Auth::user()->posts;
        
        return view('create', [
            'posts' => $posts,
        ]);
    }

    public function storePost(){

        $posts = new Post();

        $posts->title = request('user_id');
        $posts->title = request('title');
        $posts->body = request('body');
        $posts->save();

    return redirect('/blog');
    }

    public function order()  {
        $users = User::orderBy('created_at', 'asc')->get();
    }
}