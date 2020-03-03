<?php

namespace App\Http\Controllers;

use App\Conference;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;

class ConferenceController extends Controller
{
    public function index()
    {
        $confs = Conference::orderBy('id' , 'DESC')->get();

        foreach ($confs as $conf)
        {
            $conf['date'] = Jalalian::forge($conf->updated_at)->format('%A, %d %B %y');
        }

        return view('admin.confs-list' , [
            'confs' => $confs
        ]);
    }

    public function create(Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'manager' => 'required' ,
            'address' => 'required' ,
            'body' => 'required' ,
            'image' => 'required|image' ,
        ]);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/conferences'), $name);
            Conference::create([
                'title' => $request->title,
                'body' => $request->body ,
                'address' => $request->address ,
                'manager' => $request->manager ,
                'website' => $request->website ,
                'fax' => $request->fax ,
                'phone' => $request->phone ,
                'image' => $name ,
            ]);
            return redirect()->back()->with('message', 'conference created');
        }
    }

    public function show()
    {
        $confs = Conference::orderBy('id' , 'DESC')->get();

        foreach ($confs as $conf)
        {
            $conf['date'] = Jalalian::forge($conf->updated_at)->format('%A, %d %B %y');
        }

        return view('conferences' , [
            'confs' => $confs
        ]);
    }

    public function single($id)
    {
        $blog = Conference::find($id);

        $blog['date'] = Jalalian::forge($blog->updated_at)->format('%A, %d %B %y');

        return view('conf-single' , [
            'conf' => $blog
        ]);
    }

    public function edit($id)
    {
        $conf = Conference::findOrFail($id);
        return view('admin.edit-conf' , [
            'conf' => $conf
        ]);
    }

    public function update($id , Request $request)
    {
        $this->validate($request , [
            'title' => 'required' ,
            'manager' => 'required' ,
            'address' => 'required' ,
            'body' => 'required' ,
            'image' => 'required|image' ,
        ]);
        $conf = Conference::findOrFail($id);

        if ($request->hasFile('image'))
        {
            $name = time().'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('/images/conferences'), $name);
            $conf->update([
                'title' => $request->title,
                'body' => $request->body ,
                'address' => $request->address ,
                'manager' => $request->manager ,
                'website' => $request->website ,
                'fax' => $request->fax ,
                'phone' => $request->phone ,
                'image' => $name ,
            ]);
            return redirect()->back()->with('message', 'conference updated');
        }
    }
}
