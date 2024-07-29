<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function store(Request $request)
    {

        // die();
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return  redirect('/users');
    }
    public function index()
    {
        $users = User::all();
        return view('dash2', compact('users'));
    }
}
