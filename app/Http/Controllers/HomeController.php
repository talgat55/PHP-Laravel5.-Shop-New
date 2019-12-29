<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display  on home page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home.home');
    }
}
