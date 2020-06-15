<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index(){
        return Posts::all();
    }

    public function show(Posts $post)
    {
        return $post;
    }

    public function store(Request $request)
    {
        $post = Posts::create($request->all());

        return response()->json($post, 201);
    }

    public function update(Request $request, Posts $post)
    {
        $post->update($request->all());

        return response()->json($post, 200);
    }

    public function delete(Posts $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }

}
