<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->decimal('price', 8, 2);
            $table->string('image')->nullable();
            $table->unsignedBigInteger('category_id'); // Ajout de la colonne category_id
            $table->timestamps();
    
            $table->foreign('category_id')->references('id')->on('categories'); // Définition de la clé étrangère
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
