<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $data = Post::cursorPaginate(5);

        return view('post.index', ['data'=> $data]);
    }

    function show($id) {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post]);
    }


    public function create() {
        Post::create([
            'title' => 'New Post Title',
            'body' => 'This is the body of the new post.',
            'published_at' => true,
        ]);
    }
}
