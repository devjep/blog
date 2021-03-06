<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
class BlogController extends Controller
{
    public function index()
    {
        $posts= Post::all();
        return view('blogs.index')->withPosts($posts);
    }
    public function show($id){
        $post = Post::find($id);
        $comments=  Comment::all()->where('post_id', $id);
        return view('blogs.show')->withPost($post)->withComments($comments);
      
    }
}
