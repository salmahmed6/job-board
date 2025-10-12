<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index() {
        return view('job/index');
    }

    function about() {
        return view('job/about');
    }

    function contact() {
        return view('job/contact');
    }
}
