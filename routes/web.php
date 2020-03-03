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

//Route::get('/', function () {
//    return view('welcome');
//});

//main routes
Route::get('/', function () {
    return view('index');
});
Route::get('/news', 'NewsController@show');
Route::get('/news/{id}', 'NewsController@single')->name('news.single');
Route::get('/about-us', function () {
    return view('aboutus');
});
Route::get('/blogs' , 'BlogController@show');
Route::get('/blog/{id}' , 'BlogController@single')->name('blog.single');
Route::get('/conferences' , 'ConferenceController@show');
Route::get('/conference/{id}' , 'ConferenceController@single');






//admin
Route::prefix('/admin')->group(function () {
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
    Route::post('/add-news' , 'NewsController@create')->name('news.create')->middleware('auth');
    Route::post('/add-blog' , 'BlogController@create')->name('blog.create')->middleware('auth');
    Route::post('/add-conference' , 'ConferenceController@create')->name('conference.create')->middleware('auth');
    Route::get('/edit-news/{id}' , 'NewsController@edit')->name('news.edit');
    Route::get('/edit-conference/{id}' , 'ConferenceController@edit')->name('conference.edit');
    Route::get('/edit-blog/{id}' , 'BlogController@edit')->name('blog.edit');
    Route::post('/edit-news/{id}' , 'NewsController@update')->name('news.update')->middleware('auth');
    Route::post('/edit-conference/{id}' , 'ConferenceController@update')->name('conference.update')->middleware('auth');
    Route::post('/edit-news/{id}' , 'BlogController@update')->name('blog.update')->middleware('auth');
});



Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::delete('/{table}/{id}', 'DeleteAndSearchController@delete')->name('delete');
