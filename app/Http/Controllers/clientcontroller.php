<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function dashboard(){
        return view('client.dashboard');
    }
}
