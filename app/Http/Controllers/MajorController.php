<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{

    function index()
    {
        $majors =  Major::get();
        return view('admin.pages.majors.all-majors', compact('majors'));
    }

    function show($id)
    {
        $major = Major::find($id);
        return view('admin.pages.majors.show', compact('major'));
    }

    function destroy($id)
    {
        $major = Major::find($id);
        $major->delete();
        session()->flash('success', ' Success Deleted Major');

        return redirect('/all-majors');
    }
    function edit($id)
    {
        $major = Major::find($id);
        return view('/admin.pages.majors.update', ['major' => $major]);
    }

    function update(Request $request, $id)
    {
        // #1
        // $major = Major::find($id);
        // $major->update(['title' => $request->title]);
        //  #2
        // $major->title = $request->title;
        // $major->save;
        // #3
        Major::where('id', $id)->update(['title' => $request->title]);
        return redirect()->route('majors.index');
    }
    function create()
    {
        return view('/admin.pages.majors.create');
    }
    function store(Request $request)
    {
        $data = $request->all();
        $path = $request->file('image')->store('public');
        $path = str_replace('public', 'storage', $path);
        $data['image'] = $path;
        Major::create($data);
        session()->flash('success', ' Success added Major');
        return redirect()->route('majors.index');
    }
}
