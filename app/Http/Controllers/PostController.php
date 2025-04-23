<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // return "indexs";
        // return Post::select('*')->toSql();
        $posts = Post::all(); //select('*');
        return view('posts.index', ["posts" => $posts]);

        // return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        dd($request); // var_dump() + die() = dd()
    }
}
