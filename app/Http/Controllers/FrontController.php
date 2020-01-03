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
    public function propertiesGrid()
    {
        return view('page.properties.grid');
    }
    public function propertiesList()
    {
        return view('page.properties.list');
    }

    public function news()
    {
        return view('page.blog.detail');
    }
    public function newsGrid()
    {
        return view('page.blog.grid');
    }
    public function newsList()
    {
        return view('page.blog.list');
    }

    public function contact()
    {
        return view('page.contact');
    }

    public function booking()
    {
        return view('page.booking');
    }

    public function dashboardProfile()
    {
        return view('frontland.userDashboard.partials.profile');
    }
    public function dashboardMessages()
    {
        return view('frontland.userDashboard.partials.messages');
    }
    public function dashboardBookingList()
    {
        return view('frontland.userDashboard.partials.bookingList');
    }
}
