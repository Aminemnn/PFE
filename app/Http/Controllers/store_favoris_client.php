<?php

namespace App\Http\Controllers;

use App\Models\favoris_client;
use Illuminate\Http\Request;

class store_favoris_client extends Controller
{
    public function store(Request $request){

        $title=$request->input('title');
        $category=$request->input('category');
        $sous_category=$request->input('sous_category');
        $image=$request->input('image');
        $price=$request->input('price');
        $description=$request->input('description');
        $user_id=$request->input('user_id');
        $name_user=$request->input('name_user');
        $img_user=$request->input('img_user');
        $favoris_client=new favoris_client();
        $favoris_client->title=$title;
        $favoris_client->category=$category;
        $favoris_client->sous_category=$sous_category;
        $favoris_client->image=$image;
        $favoris_client->price=$price;
        $favoris_client->description=$description;
        $favoris_client->user_id=$user_id;
        $favoris_client->name_user=$name_user;
        $favoris_client->img_user=$img_user;
        $favoris_client->save();
        return redirect('client/dashboard');
    }
}
