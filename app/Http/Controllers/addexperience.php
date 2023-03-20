<?php

namespace App\Http\Controllers;

use App\Models\diplome;
use App\Models\experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class addexperience extends Controller
{
public function store(Request $request){
    $request->validate([
        'title'=>'required',
        'poste'=>'required',
        'societe'=>'required',
        'location'=>'required',
        'datedeb'=>'required',
        'datefin'=>'required'
    ]);
    $experience=new experience();
    $experience->title=$request->input('title');
    $experience->poste=$request->input('poste');
    $experience->societe=$request->input('societe');
    $experience->location=$request->input('location');
    $experience->datedeb=$request->input('datedeb');
    $experience->datefin=$request->input('datefin');
    $experience->id_user=Auth::user()->id;
    $experience->save();
    return redirect('freelancer/profil')->with("status","Experience added successfully !");
}
}
