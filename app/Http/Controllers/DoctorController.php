<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Major;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use PhpParser\Comment\Doc;

class DoctorController extends Controller
{
    function index()
    {
        $doctors =  Doctor::Paginate(4);
        return view('admin.pages.doctors.index', compact('doctors'));
    }
    function show($id)
    {
        $doctors = Doctor::find($id);
        return view('admin.pages.doctors.show', compact('doctors'));
    }

    function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->route('doctors.index');
    }

    function edit($id)
    {
        $majors = Major::get();
        $doctor = Doctor::findOrFail($id);
        return view('admin.pages.doctors.update', compact('doctor', 'majors'));
    }

    function update(Request $request, $id)
    {
        // $doctor = Doctor::find($id);
        // $doctor->update([
        //     'name' => $request->name,
        //     'city' => $request->city,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'image' => $request->image
        // ]);
        // return redirect()->route('doctor.index');

        Doctor::where('id', $id)->update($request->all());
        return redirect()->route('doctor.index');
    }

    function create()
    {
        $majors = Major::get();
        return view('admin.pages.doctors.create', compact('majors'));
    }

    function store(Request $request)
    {
        $data = $request->all();
        Validator::make($data, [
            'name' => ['required', 'string', 'min:5', 'max:30',],
            'email' => ['required', 'email', 'unique:doctors,email'],
            'password' => ['required', 'min:5', 'max:15'],
            'image' => ['required', 'image']

        ])->validate();
        $data['password'] = Hash::make($request->password);
        $path = $request->file('image')->store('public');
        $path = str_replace('public', 'storage', $path);
        $data['image'] = $path;
        Doctor::create($data);
        session()->flash('success', ' success added Doctor');
        return redirect()->route('doctors.index');
    }
}
