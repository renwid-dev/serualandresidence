<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Post;
use App\Models\Slider;
use App\Service;
use App\Models\Property;
use App\Testimonial;
use App\Booking;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{

    public function index()
    {
        $sliders        = Slider::latest()->get();
        $properties     = Property::latest()->where('featured',1)->take(3)->get();
        $services       = Service::orderBy('service_order')->get();
        $testimonials   = Testimonial::latest()->get();
        $posts          = Post::latest()->where('status',1)->take(3)->get();

        return view('frontland.index', compact('sliders','properties','services','testimonials','posts'));
    }


    // public function search(Request $request)
    // {
    //     $city     = strtolower($request->city);
    //     $type     = $request->type;
    //     $purpose  = $request->purpose;
    //     $bedroom  = $request->bedroom;
    //     $bathroom = $request->bathroom;
    //     $minprice = $request->minprice;
    //     $maxprice = $request->maxprice;
    //     $minarea  = $request->minarea;
    //     $maxarea  = $request->maxarea;
    //     $featured = $request->featured;

    //     $properties = Property::latest()->withCount('comments')
    //                             ->when($city, function ($query, $city) {
    //                                 return $query->where('city', '=', $city);
    //                             })
    //                             ->when($type, function ($query, $type) {
    //                                 return $query->where('type', '=', $type);
    //                             })
    //                             ->when($purpose, function ($query, $purpose) {
    //                                 return $query->where('purpose', '=', $purpose);
    //                             })
    //                             ->when($bedroom, function ($query, $bedroom) {
    //                                 return $query->where('bedroom', '=', $bedroom);
    //                             })
    //                             ->when($bathroom, function ($query, $bathroom) {
    //                                 return $query->where('bathroom', '=', $bathroom);
    //                             })
    //                             ->when($minprice, function ($query, $minprice) {
    //                                 return $query->where('price', '>=', $minprice);
    //                             })
    //                             ->when($maxprice, function ($query, $maxprice) {
    //                                 return $query->where('price', '<=', $maxprice);
    //                             })
    //                             ->when($minarea, function ($query, $minarea) {
    //                                 return $query->where('area', '>=', $minarea);
    //                             })
    //                             ->when($maxarea, function ($query, $maxarea) {
    //                                 return $query->where('area', '<=', $maxarea);
    //                             })
    //                             ->when($featured, function ($query, $featured) {
    //                                 return $query->where('featured', '=', 1);
    //                             })
    //                             ->paginate(10);

    //     return view('pages.search', compact('properties'));
    // }

    public function propertiesGrid()
    {
        return view('pages.properties.grid');
    }

    public function propertiesList()
    {
        return view('pages.properties.list');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function news()
    {
        return view('pages.blog.detail');
    }
    public function newsGrid()
    {
        return view('pages.blog.grid');
    }
    public function newsList()
    {
        return view('pages.blog.list');
    }

    public function dashboard()
    {
        return view('frontland.userDashboard.partials.dashboard');
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
        $profile = Auth::user();
        $booking = Booking::where('user_id', $profile->id)->first();
        // return $booking;
        return view('user.bookingList',compact('profile', 'booking'));
    }

}
