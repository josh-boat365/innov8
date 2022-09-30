<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\AuthenticationRequest;

class AuthController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postLogin(AuthenticationRequest $request)
    {

        $request->validated();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()) {
                return redirect()->route('users');
            }
        } else {
            return redirect()->back()->withErrors('Invalid Username or Password');
        }
    }

    public function postRegister(RegisterRequest $request)
    {
        $request->validated();
        // dd($request);
        User::createUser($request);
        return redirect()->route('login')->withSuccess('You have been Successfully registered');
    }




    public function users()
    {
        // if (!Auth::user()) {

        //     return redirect()->route('login')->withErrors('You must be logged in to have access to the page');
        // } else {
        //     return view('layouts.mentee_home');
        // }
        $users = User::where('email', Auth::user()->email)->first();
        $users->makeHidden(['password', 'category', 'mentor_bio', 'skills', 'remember_token']);
        // return $users;
        return view('users', compact(['users']));
    }

    public function auth_logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
