<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index()
    {
        return view("welcome");
    }

    function showRegisterForm()
    {
        return view("register");
    }

    function showLoginForm()
    {
        return view("login");
    }
}
