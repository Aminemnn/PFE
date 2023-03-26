<?php

namespace App\Http\Controllers;

use App\Models\favoris_freelancer;
use Illuminate\Http\Request;

class store_favoris_freelancer extends Controller
{
    public function store(Request $request){
        $title=$request->input('title');
        $category=$request->input('category');
        $sous_category=$request->input('sous_category');
        $price_categorie=$request->input('price_categorie');
        $price=$request->input('price');
        $type_price=$request->input('type_price');
        $semaine=$request->input('semaine');
        $date=$request->input('date');
        $description=$request->input('description');
        $id_user=$request->input('id_user');
        $name_user=$request->input('name_user');
        $img_user=$request->input('img_user');

        $favoris_freelancer=new favoris_freelancer();
        $favoris_freelancer->title=$title;
        $favoris_freelancer->category=$category;
        $favoris_freelancer->sous_category=$sous_category;
        $favoris_freelancer->price_category=$price_categorie;
        $favoris_freelancer->price=$price;
        $favoris_freelancer->type_price=$type_price;
        $favoris_freelancer->semaine=$semaine;
        $favoris_freelancer->date=$date;
        $favoris_freelancer->description=$description;
        $favoris_freelancer->id_user=$id_user;
        $favoris_freelancer->name_user;
        $favoris_freelancer->img_user=$img_user;
        $favoris_freelancer->save();
        return redirect('freelancer/dashboard');
    }
}
