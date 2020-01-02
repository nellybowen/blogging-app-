<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
   // {
     //   $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function welcome(){
        return view('project.welcome');
    }
    public function about(){
        return view('project.about');
    }
    public function services(){
        return view('project.services');
    }

}
