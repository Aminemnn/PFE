<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homecontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this -> middleware('auth');
    }
public function dashboard(){
    if(Auth::user()->role=="freelancer"){
      return view('freelancer/dashboard');
    }
    else if (Auth::user()->role=="client"){
        return view('client/dashboard');
    }
    else{
        return view('admin/dashboard');
    }
    return view('/dashboard');

}
}
