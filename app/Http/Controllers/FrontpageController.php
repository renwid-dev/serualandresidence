<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\Slider;
use App\Booking;
use App\Service;
use App\Property;
use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontpageController extends Controller
{

    public function index()
    {
        $sliders        = Slider::latest()->get();
        $properties     = Property::latest()->where('featured',1)->take(3)->get();
        $services       = Service::orderBy('service_order')->get();
        $testimonials   = Testimonial::latest()->get();
        $posts          = Post::latest()->where('status',1)->take(3)->get();

        // dd($posts);
        return view('frontland.index', compact('sliders','properties','services','testimonials','posts'));
    }

    public function propertiesGrid(Request $request)
    {
        if (!empty($request->price)) {

        }
        $cities     = Property::select('city','city_slug')
                                ->distinct('city_slug')
                                ->get();

        $properties = Property::latest()
                                ->when(!empty($request->keyword), function($query) use($request){
                                    $query->where('title', 'like', '%'.$request->keyword.'%');
                                })
                                ->when(!empty($request->location), function($query) use($request){
                                    $query->where('city', 'like', '%'.$request->city.'%');
                                })
                                ->when(!empty($request->type), function($query) use($request){
                                    $query->where('type', 'like', '%'.$request->type.'%');
                                })
                                ->when(!empty($request->status), function($query) use($request){
                                    $query->where('purpose', 'like', '%'.$request->purpose.'%');
                                })
                                ->when(!empty($request->bed), function($query) use($request){
                                    $query->where('bedroom', 'like', '%'.$request->bedroom.'%');
                                })
                                ->when(!empty($request->bath), function($query) use($request){
                                    $query->where('bathroom', 'like', '%'.$request->bathroom.'%');
                                })
                                ->when(!empty($request->bath), function($query) use($request){
                                    $query->where('bathroom', 'like', '%'.$request->bathroom.'%');
                                })
                                ->when(!empty($request->price), function($query) use($request){
                                    $price = (!empty($request->price)) ? explode(' - ', $request->price) : '';
                                    $priceFirst = $price[0];
                                    $priceLast = $price[1];
                                    $query->whereBetween('price', [$priceFirst,$priceLast]);
                                })
                                ->with('rating')
                                ->withCount('comments')
                                ->paginate(10);

        return view('pages.properties.grid', compact('cities','properties'));
    }

    public function propertiesList()
    {
        $cities     = Property::select('city','city_slug')->distinct('city_slug')->get();
        $properties = Property::latest()->with('rating')->withCount('comments')->paginate(10);

        return view('pages.properties.list', compact('cities','properties'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function dashboardBookingList()
    {
        $profile = Auth::user();
        $booking = Booking::where('user_id', $profile->id)->first();
        // return $booking;
        return view('user.bookingList',compact('profile', 'booking'));
    }

    public function footer()
    {
        $cities     = Property::select('city','city_slug')->distinct('city_slug')->take(10)->get();
        $posts      = Post::latest()->where('status',1)->take(2)->get();

        dd($cities);
        return view('frontland.partials.footer', compact('cities','posts'));

    }

}
