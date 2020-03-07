<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.add-cat');
    }

    public function store(Request $request)
    {
        $this->validate($request , [
            'name' => 'required|unique:categories' ,
        ]);

        Category::create([
            'name' => $request->name
        ]);

        return redirect()->back()->with('message', 'category created');

    }

    public function index()
    {
        $cat = Category::latest('id')->get();

        return view('admin.category' , [
            'cats' => $cat
        ]);
    }
}
