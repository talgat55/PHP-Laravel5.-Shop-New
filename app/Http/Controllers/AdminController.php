<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display  on index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin');
    }
}
