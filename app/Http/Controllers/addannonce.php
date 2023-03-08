<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class addannonce extends Controller
{
    public function store(Request $request){
            $request->validate([
                'title'=>['required', 'string', 'max:255'],
                'category'=>['required', 'string', 'max:255'],
                'sous_category'=>['required', 'string', 'max:255'],
                'priceCat'=>'required',
                'price'=>'required',
                'Price_type'=>'required',
                'description'=>['required', 'string', 'max:255'],
            ]);
            $semaine=null;
            $date=null;
if ($_POST['semaine']!=null){
    $semaine=$request->input('semaine');
}
if ($_POST['date']!=null){
    $date=$request->input('date');
}
$title=$request->input('title');
$categorie=$request->input('category');
$sous_categorie=$request->input('sous_category');
$priceCat=$request->input('priceCat');
$price=$request->input('price');
$Price_type=$request->input('Price_type');
$description=$request->input('description');
            $annonce=new annonce();
            $annonce->title=$title;
            $annonce->catgorie=$categorie;
            $annonce->sous_categorie=$sous_categorie;
            $annonce->price_categorie=$priceCat;
            $annonce->price=$price;
            $annonce->type_price=$Price_type;
            $annonce->semaine=$semaine;
            $annonce->date=$date;
            $annonce->description=$description;
            $annonce->id_user=Auth::user()->id;
            $annonce->name_user=Auth::user()->name;
            $annonce->save();
        return back()->with("status", "Data Save successfully!");
    }
}
