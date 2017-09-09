<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurtnerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //auth = guard
        $this->middleware('auth:curtner');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('curtner.dashboard');
    }
}
