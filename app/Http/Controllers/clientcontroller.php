<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class clientcontroller extends Controller
{
    public function dashboard(){
        $categories = DB::select('SELECT * FROM categorie WHERE nom != ?',['Other']);
        $graphics_design = DB::table('souscategorie')->where('name_cat','Graphics & Design')->get();
        $digital_marketing = DB::table('souscategorie')->where('name_cat','Digital Marketing')->get();
        $writing_translation = DB::table('souscategorie')->where('name_cat','Writing & Translation')->get();
        $video_annimation = DB::table('souscategorie')->where('name_cat','Video & Animation')->get();
        $music_audio = DB::table('souscategorie')->where('name_cat','Music & Audio')->get();
        $programming_tech = DB::table('souscategorie')->where('name_cat','Programming & Tech')->get();
        $business = DB::table('souscategorie')->where('name_cat','Business')->get();
        $life_style = DB::table('souscategorie')->where('name_cat','Lifestyle')->get();
        $image=DB::table('postes')->where('role_user','Freelancer')->get();
        return view('client.dashboard')->with('categories',$categories)->with('graphics_design',$graphics_design)
            ->with('digital_marketing',$digital_marketing)
            ->with('writing_translation',$writing_translation)
            ->with('video_annimation',$video_annimation)
            ->with('music_audio',$music_audio)
            ->with('programming_tech',$programming_tech)
            ->with('business',$business)
            ->with('life_style',$life_style)
            ->with('image',$image);
    }
    public function profil(){
        return view('client.profil');
    }
    public function addPoste(){
        $categories = DB::select('SELECT * FROM categorie WHERE nom != ?',['Other']);
        $graphics_design = DB::table('souscategorie')->where('name_cat','Graphics & Design')->get();
        $digital_marketing = DB::table('souscategorie')->where('name_cat','Digital Marketing')->get();
        $writing_translation = DB::table('souscategorie')->where('name_cat','Writing & Translation')->get();
        $video_annimation = DB::table('souscategorie')->where('name_cat','Video & Animation')->get();
        $music_audio = DB::table('souscategorie')->where('name_cat','Music & Audio')->get();
        $programming_tech = DB::table('souscategorie')->where('name_cat','Programming & Tech')->get();
        $business = DB::table('souscategorie')->where('name_cat','Business')->get();
        $life_style = DB::table('souscategorie')->where('name_cat','Lifestyle')->get();

        return view('client.addPoste')->with('categories',$categories)->with('graphics_design',$graphics_design)
            ->with('digital_marketing',$digital_marketing)
            ->with('writing_translation',$writing_translation)
            ->with('video_annimation',$video_annimation)
            ->with('music_audio',$music_audio)
            ->with('programming_tech',$programming_tech)
            ->with('business',$business)
            ->with('life_style',$life_style);
    }
    public function store(Request $request){
        $poste = new Poste();
        if ($_POST['subcategory1'] != null){
            $poste->sous_categorie=$request->input('subcategory1');
        }
        if ($_POST['subcategory2']!=null){
            $poste->sous_categorie=$request->input('subcategory2');
        }
        if ($_POST['subcategory3']!= null){
            $poste->sous_categorie=$request->input('subcategory3');
        }
        if ($_POST['subcategory4']!= null){
            $poste->sous_categorie=$request->input('subcategory4');
        }
        if ($_POST['subcategory5']!=null){
            $poste->sous_categorie=$request->input('subcategory5');
        }
        if ($_POST['subcategory6']!=null){
            $poste->sous_categorie=$request->input('subcategory6');
        }
        if ($_POST['subcategory7']!=null){
            $poste->sous_categorie=$request->input('subcategory7');
        }
        if ($_POST['subcategory8']!=null){
            $poste->sous_categorie=$request->input('subcategory8');
        }
        $poste->title=$request->input('title');
        $poste->nb_heure=$request->input('nb_hours');
        $poste->role_user=Auth::user()->role;
        $poste->name_user=Auth::user()->name;
        $poste->price=$request->input('price');
        $poste->categorie=$request->input('categorie');
        $poste->currency=$request->input('currency');
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $image->move('uploads/poste',$filename);
            $poste->image=$filename;
        $poste->description=$request->input('description');
        $poste->save();
        return back()->with("success", "is changed successfully!");
    }
}
