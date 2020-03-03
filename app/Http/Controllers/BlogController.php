<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class BlogController extends Controller
{
    public function single($id)
    {
        $blog = Blog::find($id);

        $blog['date'] = Jalalian::forge($blog->updated_at)->format('%A, %d %B %y');
        $blog['user'] = $blog->user;

        return view('blog-single' , [
            'blog' => $blog
        ]);
    }

    public function show()
    {
        $blogs = Blog::orderBy('id' , 'DESC')->get();

        foreach ($blogs as $blog)
        {
            $blog['date'] = Jalalian::forge($blog->updated_at)->format('%A, %d %B %y');
            $blog['user'] = $blog->user;
        }

        return view('blogs' , [
            'blogs' => $blogs
        ]);
    }

    public function index()
    {
        $blogs = Blog::orderBy('id' , 'DESC')->get();

        foreach ($blogs as $blog)
        {
            $blog['date'] = Jalalian::forge($blog->updated_at)->format('%A, %d %B %y');
        }

        return view('admin.blogs-list' , [
            'blogs' => $blogs
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required' ,
            'image' => 'required|image' ,
        ]);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/blogs'), $name);
            Blog::create([
                'title' => $request->title,
                'body' => $request->body ,
                'image' => $name ,
                'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'blog created');
        }
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.edit-blog' , [
            'blog' => $blog
        ]);
    }

    public function update($id , Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required' ,
            'image' => 'required' ,
        ]);
        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/blogs'), $name);
            $blog->update([
                'title' => $request->title,
                'body' => $request->body ,
                'image' => $name ,
                'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'blog updated');
        }
    }
}
