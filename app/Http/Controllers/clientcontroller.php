<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientcontroller extends Controller
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
        return view('client.dashboard')->with('categories',$categories)->with('graphics_design',$graphics_design)
            ->with('digital_marketing',$digital_marketing)
            ->with('writing_translation',$writing_translation)
            ->with('video_annimation',$video_annimation)
            ->with('music_audio',$music_audio)
            ->with('programming_tech',$programming_tech)
            ->with('business',$business)
            ->with('life_style',$life_style);
    }
}
