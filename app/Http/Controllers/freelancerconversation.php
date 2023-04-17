<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class freelancerconversation extends Controller
{
    public function create($id){
        return view('freelancer.conversation');
    }
}
