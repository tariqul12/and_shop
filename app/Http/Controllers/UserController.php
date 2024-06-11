<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('admin.user.add');
    }
    public function store(Request $request)
    {
        if($request->password==$request->confirm_password)
        {
            User::newUser($request);
            return back()->with('message','User Add Successfully');
        }
        else{

            return back()->with('message','Password and Confirm Password is not match!!!');
        }
    }
    public function index()
    {
        return view('admin.user.index',['users'=>User::all()]);
    }
    public function edit($id)
    {
        return view('admin.user.edit',['user'=>User::find($id)]);
    }
    public function update(Request $request,$id)
    {
        User::updateUser($request,$id);

        return redirect('user/manage')->with('message','User Update Successfully');
    }
    public function delete($id)
    {
        User::deleteUser($id);
        return redirect('user/manage')->with('message','User delete Successfully');
    }
}
