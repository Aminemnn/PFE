<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class updateinfo extends Controller
{
    public function create(){
        return view('freelancer.account.info');
    }

    public function updateinfo(Request $request){
        $request->validate([
           'name'=>'required'
        ]);
        if ($request->name==Auth::user()->name){
            return back()->with("error","Your name is Already exists");
        }
        user::whereId(auth()->user()->id)->update([
           'name'=>$request->name
        ]);
        return back()->with("status","Name changed successfully!");
    }
}
