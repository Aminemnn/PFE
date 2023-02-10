<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class freelancercontroller extends Controller
{
    public function dashboard(){
        return view('freelancer.dashboard');
    }
}
