<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function index()
    {
        $users = User::get();
        return view('admin.pages.users.all-users', compact('users'));
    }

    function create()
    {
        return view('admin.pages.users.create');
    }

    function store(Request $request)
    {
        // $request->validate([
        //     'type' => ['required', 'in:admin,user,doctor']
        // ]);
        $data = $request->all();
        User::create($data);
        session()->flash('success', ' Success added User');
        return redirect()->route('user.index');
    }


    function edit($id)
    {
        $user = User::find($id);
        return view('admin.pages.users.update', compact('user'));
    }
    function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'type' => $request->type
        ]);
        return redirect()->route('user.index');
    }
    function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
