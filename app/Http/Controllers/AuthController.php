<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\AuthenticationRequest;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\FlashMessagesController;

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
                return redirect()->route('users')->with(
                    session()->flash('success', 'Login Successfully')
                );
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
        //     return view('users');
        // }
        $users = User::all();
        $users->makeHidden(['password', 'created_at', 'updated_at', 'email_verified_at', 'remember_token']);
        // return $users;
        if ($users->count() == 0) {
            return "<h1>------There are no Registered Users------</h1>";
        }
        return view('users', compact(['users']));
    }

    public function auth_logout()
    {
        Auth::logout();
        return redirect()->route('/');
    }
}
