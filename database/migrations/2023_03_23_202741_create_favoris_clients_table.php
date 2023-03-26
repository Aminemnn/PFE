<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavorisClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoris_clients', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->string('sous_category');
            $table->string('image');
            $table->string('price');
            $table->string('description');
            $table->integer('user_id');
            $table->string('name_user');
            $table->string('img_user');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoris_clients');
    }
}
