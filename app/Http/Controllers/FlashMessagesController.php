<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashMessagesController extends Controller
{
    public function showMessages()
    {
        // Flash messages settings

        session()->flash("success", "Login Susccessfully");

        session()->flash("warning", "This is warning message");

        session()->flash("info", "This is information message");

        session()->flash("error", "This is error message");

        return view("flash-messages");
    }
}
