<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Comment;
use App\Feature;
use App\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\PropertyImageGallery;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{

    public function index()
    {
        $properties = Property::withCount('comments')->latest()->get();
        return view('admin.properties.index',compact('properties'));
    }

    public function show(Request $request, $data)
    {
        $property = $data;
        $videoembed = $this->convertYoutube($request->video, 560, 315);
        return view('admin.properties.show',compact('property','videoembed'));
    }

    public function create()
    {
        $features = Feature::all();
        return view('admin.properties.create',compact('features'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'              => 'required|unique:properties|max:255',
            'price'              => 'required',
            'purpose'            => 'required',
            'type'               => 'required',
            'bedroom'            => 'required',
            'bathroom'           => 'required',
            'city'               => 'required',
            'address'            => 'required',
            'area'               => '',
            'image'              => 'required|image|mimes:jpeg,jpg,png',
            'floor_plan'         => 'image|mimes:jpeg,jpg,png',
            'description'        => 'required',
            'location_latitude'  => 'required',
            'location_longitude' => 'required',
        ]);

        $slug  = str_slug($request->title);

        $propertyimage = ($request->file('image')) ? Storage::disk('public')->put('property/', $request->file('image')) : 'image_default.png';
        $propertyfloorplan = ($request->file('floor_plan')) ? Storage::disk('public')->put('floor/', $request->file('floor_plan')) : 'image_default.png';

        $property = new Property();
        $property->title                = $request->title;
        $property->slug                 = $slug;
        $property->price                = $request->price;
        $property->purpose              = $request->purpose;
        $property->type                 = $request->type;
        $property->image                = $propertyimage;
        $property->featured             = ($request->featured) ? true : false;
        $property->bedroom              = $request->bedroom;
        $property->bathroom             = $request->bathroom;
        $property->city                 = $request->city;
        $property->city_slug            = str_slug($request->city);
        $property->address              = $request->address;
        $property->area                 = $request->area;
        $property->agent_id             = Auth::id();
        $property->description          = $request->description;
        $property->video                = $request->video;
        $property->floor_plan           = $propertyfloorplan;
        $property->location_latitude    = $request->location_latitude;
        $property->location_longitude   = $request->location_longitude;
        $property->nearby               = $request->nearby;
        $property->save();
        $property->features()->attach($request->features);

        $gallary = $request->file('gallaryimage');
        if($gallary){
            foreach($gallary as $images){
                $galimage['name'] = Storage::disk('public')->put('property/gallery/', $images);
                $galimage['size'] = $images->getClientSize();
                $galimage['property_id'] = $property->id;
                Storage::disk('public')->put('property/gallery/', $images);
                $property->gallery()->create($galimage);
            }
        }

        Toastr::success('message', 'Property created successfully.');
        return redirect()->route('admin.properties.index');
    }

    public function edit(Request $request, $slug)
    {
        $property = $slug;
        $features = Feature::all();
        $videoembed = $this->convertYoutube($property->video);
        return view('admin.properties.edit',compact('property','features','videoembed'));
    }


    public function update(Request $request, $property)
    {
        $request->validate([
            'title'     => 'required|max:255',
            'price'     => 'required',
            'purpose'   => 'required',
            'type'      => 'required',
            'bedroom'   => 'required',
            'bathroom'  => 'required',
            'city'      => 'required',
            'address'   => 'required',
            'area'      => '',
            'image'     => 'image|mimes:jpeg,jpg,png',
            'floor_plan'=> 'image|mimes:jpeg,jpg,png',
            'description'        => 'required',
            'location_latitude'  => 'required',
            'location_longitude' => 'required'
        ]);

        if( $request->file('image')){
            if(Storage::disk('public')->exists($property->image)){
                Storage::disk('public')->delete($property->image);
            }
            $imagename =
            $property->image = Storage::disk('public')->put('property/', $request->file('image'));
        }

        if($request->file('floor_plan')){
            if(Storage::disk('public')->exists($property->floor_plan)){
                Storage::disk('public')->delete($property->floor_plan);
            }
            $property->floor_plan = Storage::disk('public')->put('property/floor/',$request->file('floor_plan'));
        }

        $property->title              = $request->title;
        $property->slug               = str_slug($request->title);
        $property->price              = $request->price;
        $property->purpose            = $request->purpose;
        $property->type               = $request->type;
        $property->bedroom            = $request->bedroom;
        $property->bathroom           = $request->bathroom;
        $property->city               = $request->city;
        $property->city_slug          = str_slug($request->city);
        $property->address            = $request->address;
        $property->area               = $request->area;
        $request->featured            = (!empty($$request->featured)) ? true : false;
        $property->description        = $request->description;
        $property->video              = $request->video;
        $property->location_latitude  = $request->location_latitude;
        $property->location_longitude = $request->location_longitude;
        $property->nearby             = $request->nearby;
        $property->save();
        $property->features()->sync($request->features);
        $gallary = $request->file('gallaryimage');
        if($gallary){
            foreach($gallary as $images){
                if(isset($images)){
                    $galimage['name'] = Storage::disk('public')->put('property/gallery/', $images);
                    $galimage['size'] = $images->getClientSize();
                    $galimage['property_id'] = $property->id;
                    $property->gallery()->create($galimage);
                }
            }
        }

        Toastr::success('message', 'Property updated successfully.');
        return redirect()->route('admin.properties.index');
    }


    public function destroy(Request $request, $property)
    {
        if(Storage::disk('public')->exists($property->image)){
            Storage::disk('public')->delete($property->image);
        }

        if(Storage::disk('public')->exists($property->floor_plan)){
            Storage::disk('public')->delete($property->floor_plan);
        }


        $galleries = $property->gallery;
        if($galleries){
            foreach ($galleries as $key => $gallery) {
                if(Storage::disk('public')->exists($gallery->name)){
                    Storage::disk('public')->delete($gallery->name);
                }
                PropertyImageGallery::destroy($gallery->id);
            }
        }

        $property->delete();
        $property->features()->detach();
        $property->comments()->delete();

        Toastr::success('message', 'Property deleted successfully.');
        return back();
    }


    public function galleryImageDelete(Request $request){
        $gallaryimg = PropertyImageGallery::find($request->id)->delete();
        if(Storage::disk('public')->exists($request->image)){
            Storage::disk('public')->delete($request->image);
        }

        if($request->ajax()){
            return response()->json(['msg' => $gallaryimg]);
        }
    }

    // YOUTUBE LINK TO EMBED CODE
    private function convertYoutube($youtubelink, $w = 250, $h = 140) {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "<iframe width=\"$w\" height=\"$h\" src=\"//www.youtube.com/embed/$2\" frameborder=\"0\" allowfullscreen></iframe>",
            $youtubelink
        );
    }
}
