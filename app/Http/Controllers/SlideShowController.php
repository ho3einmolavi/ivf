<?php

namespace App\Http\Controllers;

use App\SlideShow;
use Illuminate\Http\Request;

class SlideShowController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request , [
            'image' => 'required|image' ,
        ]);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/slideShow'), $name);
            SlideShow::create([
                'image' => $name ,
            ]);
            return redirect()->back()->with('message', 'slide show created');
        }
    }

    public function create()
    {
        return view('admin.add-slide-show');
    }

    public function index()
    {
        $slides = SlideShow::latest('id')->get();

        return view('admin.slideShow-list' , [
            'slides' => $slides
        ]);
    }
}
