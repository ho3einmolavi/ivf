<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//main routes
Route::get('/' , 'indexController@index')->name('index');
Route::get('/news', 'NewsController@show');
Route::get('/news/{id}', 'NewsController@single')->name('news.single');
Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/blogs' , 'BlogController@show');
Route::get('/blog/{id}' , 'BlogController@single')->name('blog.single');
Route::get('/conferences' , 'ConferenceController@show');
Route::get('/conference/{id}' , 'ConferenceController@single');
Route::get('/academies' , 'AcademyController@index');






//admin
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/news', 'NewsController@index')->name('news.index');
    Route::get('/conferences', 'ConferenceController@index')->name('confs.index');
    Route::get('/blogs', 'BlogController@index')->name('blogs.index');
    Route::get('/add-news', function () {
        return view('admin.addNews');
    });
    Route::get('/add-blog', function () {
        return view('admin.addBlog');
    });
    Route::get('/add-conference', function () {
        return view('admin.add-conf');
    });
    Route::post('/add-news' , 'NewsController@create')->name('news.create');
    Route::post('/add-blog' , 'BlogController@create')->name('blog.create');
    Route::post('/add-conference' , 'ConferenceController@create')->name('conference.create');
    Route::get('/edit-news/{id}' , 'NewsController@edit')->name('news.edit');
    Route::get('/edit-conference/{id}' , 'ConferenceController@edit')->name('conference.edit');
    Route::get('/edit-blog/{id}' , 'BlogController@edit')->name('blog.edit');
    Route::post('/edit-news/{id}' , 'NewsController@update')->name('news.update');
    Route::post('/edit-conference/{id}' , 'ConferenceController@update')->name('conference.update');
    Route::post('/edit-news/{id}' , 'BlogController@update')->name('blog.update');
    Route::get('/add-slideShow' , 'SlideShowController@create');
    Route::get('/slideShow-list' , 'SlideShowController@index');
    Route::post('/add-slideShow' , 'SlideShowController@store');
    Route::get('/add-academy' , 'AcademyController@create');
    Route::post('/add-academy' , 'AcademyController@store');
    Route::get('/academies-list' , 'AcademyController@show');
    Route::get('/category-list' , 'CategoryController@index');
    Route::get('/add-category' , 'CategoryController@create');
    Route::post('/add-category' , 'CategoryController@store');
});



Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::delete('/{table}/{id}', 'DeleteAndSearchController@delete')->name('delete');
