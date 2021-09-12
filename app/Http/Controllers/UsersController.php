<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function resistration() {
        return view('users.resistration');
    }

    public function signup(Request $request) {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required | min:7',
            'password_confirm' => 'required | same:password',
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        session()->put('id', $user->id);
        session()->put('name', $user->name);
        session()->put('email', $user->email);

        return redirect("/");
    }

    public function session() {
        return view('users.session');
    }
}
