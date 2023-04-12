<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class detailcontroller extends Controller
{
public function create($id){
    $annonce=DB::table('annonces')->where('id',$id)->get();
    return view('freelancer.detail',['annonce'=>$annonce]);
}
public function createclient($id){
    $annonce=DB::table('postes')->where('id',$id);
    return view('client.detail',['annonce'=>$annonce]);
}
}
