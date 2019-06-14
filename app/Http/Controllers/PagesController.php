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


    //only guest can access this page
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
