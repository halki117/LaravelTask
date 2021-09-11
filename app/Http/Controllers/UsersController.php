<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function resistration() {
        return view('users.resistration');
    }

    public function session() {
        return view('users.session');
    }
}
