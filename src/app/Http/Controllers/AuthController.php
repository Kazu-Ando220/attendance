<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $attendance = $request->only('email','password');

        return view('index',compact('attendance'));
    }

    public function getRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $attendance = $request->only('name','email','password','password_confirmation');
        Attendance::create($attendance);

        return view('index',compact('attendance'));
    }

    public function getLogout()
    {
        return view('auth.login');
    }
}