<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Post;

use Illuminate\Http\Request;

class TagController extends Controller
{
    function index() {
        $data = Tag::all();

        return view('tag.index', ['data'=> $data]);
    }

    function create() {
        Tag::create([
            'title' => 'software engineer'
        ]);

        return redirect('/tag');
    }

    function delete() {
        Tag::destroy(13);
    }

    function testManyToMany() {
        $post15 = Post::find(15);
        $post30 = Post::find(15);

        $post15->tags()->attach([1, 2]);
        $post30->tags()->attach([1]);

        return response()->json([
            'post15' => $post15->tags,
            'post30'=> $post30->tags
        ]);
    }
}
