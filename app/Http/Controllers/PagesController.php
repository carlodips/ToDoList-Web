<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome";

        return view('pages.index')->with('title', $title);
    }

    public function login_page()
    {
        $title = "Login";

        return view('pages.login')->with('title', $title);

    }

}
