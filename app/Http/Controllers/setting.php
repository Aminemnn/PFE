<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class setting extends Controller
{
    public function create(){
        return view('freelancer.setting');
    }
    public function createclient(){
        return view('client.setting');
    }
}
