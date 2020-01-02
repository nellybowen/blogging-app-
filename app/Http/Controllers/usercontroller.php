<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {
    	echo "hello world";
    }
    public function create ()
    {
        return view('admin.users.create');
    }
}
