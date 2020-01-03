<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function about()
    {
        return view('page.about');
    }

    public function agent()
    {
        return view('page.agents');
    }

    public function properties()
    {
        return view('page.properties.detail');
    }

    public function news()
    {
        return view('page.blog.detail');
    }

    public function contact()
    {
        return view('page.contact');
    }
}
