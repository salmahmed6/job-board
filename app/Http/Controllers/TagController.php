<?php

namespace App\Http\Controllers;
use App\Models\Tag;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $data = Tag::all();

        return view('tag.index', ['data'=> $data]);
    }

    public function create() {
        Tag::create([
            'title' => 'software engineer'
        ]);

        return redirect('/tag');
    }

    function delete() {
        Tag::destroy(13);
    }
}
