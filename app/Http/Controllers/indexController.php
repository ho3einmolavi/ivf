<?php

namespace App\Http\Controllers;

use App\Blog;
use App\News;
use App\SlideShow;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        $news = News::latest('id')->take(4)->get();
        $slides = SlideShow::latest('id')->take(4)->get();
        $blogs = Blog::latest('id')->take(6)->get();


        return view('index' , [
            'news' => $news ,
            'slides' => $slides ,
            'blogs' => $blogs
        ]);
    }
}
