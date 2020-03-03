<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Morilog\Jalali\Jalalian;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::orderBy('id' , 'DESC')->get();

        foreach ($news as $new)
        {
            $new['date'] = Jalalian::forge($new->created_at)->format('%A, %d %B %y');
            $new['user'] = $new->user;
        }

        return view('news' , [
            'news' => $news
        ]);
    }

    public function single($id)
    {
        $news = News::findOrFail($id);

        $news['date'] = Jalalian::forge($news->created_at)->format('%A, %d %B %y');
        $news['user'] = $news->user;

        return view('news-single' , [
            'news' => $news
        ]);
    }

    public function index()
    {
        $news = News::orderBy('id' , 'DESC')->get();

        foreach ($news as $new)
        {
            $new['date'] = Jalalian::forge($new->created_at)->format('%A, %d %B %y');
        }

        return view('admin.news' , [
            'news' => $news
        ]);
    }

    public function create(Request $request)
    {
        $validate = $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required' ,
            'image' => 'required' ,
        ]);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/news'), $name);
            News::create([
                'title' => $request->title,
                'body' => $request->body ,
                'image' => $name ,
                'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'news created');
        }
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('admin.editNews' , [
            'news' => $news
        ]);
    }

    public function update($id , Request $request)
    {
        $validate = $this->validate($request , [
            'title' => 'required' ,
            'body' => 'required' ,
            'image' => 'required' ,
        ]);
        $news = News::findOrFail($id);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/news'), $name);
            $news->update([
                'title' => $request->title,
                'body' => $request->body ,
                'image' => $name ,
                'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'news updated');
        }
    }
}
