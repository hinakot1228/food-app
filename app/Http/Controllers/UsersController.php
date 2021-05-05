<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function signup() {
        return view('users.signup');
    }
    public function signin() {
        return view('users.signin');
    }
    public function mypage() {
        return view('users.user');
    }
}
