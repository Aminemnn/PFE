<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class freelancercontroller extends Controller
{
    public function dashboard(){
        $categories = DB::table('categorie')->get();
        $graphics_design = DB::table('souscategorie')->where('category_id',1)->get();
        $digital_marketing = DB::table('souscategorie')->where('category_id',2)->get();
        $writing_translation = DB::table('souscategorie')->where('category_id',3)->get();
        $video_annimation = DB::table('souscategorie')->where('category_id',4)->get();
        $music_audio = DB::table('souscategorie')->where('category_id',5)->get();
        $programming_tech = DB::table('souscategorie')->where('category_id',6)->get();
        $business = DB::table('souscategorie')->where('category_id',7)->get();
        $life_style = DB::table('souscategorie')->where('category_id',8)->get();
        return view('freelancer.dashboard')->with('categories',$categories)->with('graphics_design',$graphics_design)
            ->with('digital_marketing',$digital_marketing)
            ->with('writing_translation',$writing_translation)
            ->with('video_annimation',$video_annimation)
            ->with('music_audio',$music_audio)
            ->with('programming_tech',$programming_tech)
            ->with('business',$business)
            ->with('life_style',$life_style);
    }
    public function store(Request $request){
if ($_POST['subcategory1'] != null){
    echo 'amine';
    $souscategorie=$request->input('subcategory1');
}
        if ($_POST['subcategory2']!=null){
            echo 'amine2';
            $souscategorie=$request->input('subcategory2');
        }
        if ($_POST['subcategory3']!= null){
            $souscategorie=$request->input('subcategory3');
        }
        if ($_POST['subcategory4']!= null){
            $souscategorie=$request->input('subcategory4');
        }
        if ($_POST['subcategory5']!=null){
            $souscategorie=$request->input('subcategory5');
        }
        if ($_POST['subcategory6']!=null){
            $souscategorie=$request->input('subcategory6');
        }
        if ($_POST['subcategory7']!=null){
            $souscategorie=$request->input('subcategory7');
        }
        if ($_POST['subcategory7']!=null){
            $souscategorie=$request->input('subcategory8');
        }
         $categorie=$request->input('categorie');
         $country=$request->input('country');
         $ville=$request->input('ville');
         $adresse=$request->input('adresse');
         $code=$request->input('code');


      DB::table('users')
          ->where('id',Auth::user()->id)
          ->update(['categorie'=>$categorie,'sous_categorie'=>$souscategorie,'country'=>$country,'ville'=>$ville,'adresse'=>$adresse,'codepostal'=>$code]);
        return back()->with("status", "is changed successfully!");
    }

}
