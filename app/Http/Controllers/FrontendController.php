<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function singlePost()
    {
        return view('frontend.single_post');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function category()
    {
        return view('frontend.category');
    }

    public function search()
    {
        return view('frontend.search-result');
    }

   
}
