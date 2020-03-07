<?php

namespace App\Http\Controllers;

use App\Academy;
use App\Category;
use Illuminate\Http\Request;

class AcademyController extends Controller
{
    public function index()
    {
        $cats = Category::latest('id')->get();

        foreach ($cats as $cat)
        {
            $cat['academies'] = $cat->academies;
        }

        return view('academy' , [
            'cats' => $cats
        ]);
    }

    public function create()
    {
        $cat = Category::latest('id')->get();
        return view('admin.add-academy' , [
            'cats' => $cat
        ]);
    }

    public function show()
    {
        $academies = Academy::latest('id')->get();

        foreach ($academies as $academy)
        {
            $academy['cat'] = $academy->category;
        }

        return view('admin.academies' , [
            'academies' => $academies
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required' ,
            'file' => 'required' ,
            'category_id' => 'required' ,
            'image' => 'required|image'
        ]);

        if ($request->hasFile('file'))
        {
            $name = time().'_'.$request->file('file')->getClientOriginalName();
            $name1 = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('file')->move(public_path('/images/academy/files'), $name);
            $request->file('image')->move(public_path('/images/academy/image'), $name1);
            Academy::create([
                'title' => $request->title,
                'body' => $request->body ,
                'category_id' => $request->category_id ,
                'file' => $name ,
                'image' => $name1 ,
               // 'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'academy created');
        }
        else
        {
            Academy::create([
                'title' => $request->title,
                'body' => $request->body ,
                'category_id' => $request->category_id ,
               // 'file' => $name ,
                // 'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'academy created');
        }
    }
}
