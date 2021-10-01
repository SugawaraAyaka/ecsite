<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function index()
    {
        if (!Auth::user()) {
            return view('top');
        }

        return back();
    }
    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request,$id)
    {
        $user               = User::findOrFail($id);
        $user->last_name    = $request->input('last_name');
        $user->first_name   = $request->input('first_name');
        $user->email        = $request->input('email');
        $user->zipcode      = $request->input('zipcode');
        $user->prefecture   = $request->input('prefecture');
        $user->municipality = $request->input('municipality');
        $user->address      = $request->input('address');
        $user->apartments   = $request->input('apartments');
        $user->phone_number = $request->input('phone_number');
        $user->save();

        return redirect()->route('users.edit',compact('id'));
    }

    public function delete($id)
    {
        User::findOrFail($id) -> delete();
        return view('top');
    }

}
