<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userdetailcontroller extends Controller
{
    public function create($id){
        return view('freelancer.userdetail');
    }
}
