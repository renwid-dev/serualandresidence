<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Slider;
use Carbon\Carbon;
use Toastr;

class SliderController extends Controller
{
    public function index()
    {
        $data = Slider::latest()->get();
        return view('admin.sliders.index', compact('data'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:sliders|max:255',
            'image' => 'required|mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('image');
        $slug  = str_slug($request->title);
        if($request->file('image')){
            $imagename = Storage::disk('public')->put('slider', $request->file('image'));
        }else{
            $imagename = 'default.png';
        }

        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->image = $imagename;
        $slider->save();

        Toastr::success('message', 'Slider created successfully.');
        return redirect()->route('admin.sliders.index');
    }

    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'mimes:jpeg,jpg,png'
        ]);

        $image = $request->file('image');
        $slug  = str_slug($request->title);
        $slider = Slider::find($id);

        if($request->file('image')){
            if(Storage::disk('public')->exists($slider->image)){
                Storage::disk('public')->delete($slider->image);
            }
            $imagename = Storage::disk('public')->put('slider', $request->file('image'));
            $slider->image = $imagename;
        }

        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->save();

        Toastr::success('message', 'Slider updated successfully.');
        return redirect()->route('admin.sliders.index');
    }


    public function destroy($id)
    {
        $slider = Slider::find($id);

        if(Storage::disk('public')->exists('slider/'.$slider->image)){
            Storage::disk('public')->delete('slider/'.$slider->image);
        }

        $slider->delete();

        Toastr::success('message', 'Slider deleted successfully.');
        return back();
    }
}
