<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class historiquepropostionfreelancer extends Controller
{
    public function create(){
        $proposition=DB::table('orders')->where('id_user',Auth::user()->id)->get();
        return view('freelancer.propostionhistorique')->with('proposition',$proposition);
    }
    public function createclient(){
        $proposition=DB::table('orders')->where('id_destinateur',Auth::user()->id)->get();
        return view('client.propostionhistorique')->with('proposition',$proposition);
    }

    public function refuser(Request $request){
          $id=$request->input('refuser');
          DB::table('orders')->where('id',$id)->update(['etat'=>'Refuser']);
          return back()->with("refuser"," This Proposition is Refuse");
    }
}
