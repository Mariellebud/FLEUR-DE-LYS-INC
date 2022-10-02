<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string('libellep');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->decimal('prix')->nullable();
            $table->string('SKU');
            $table->enum('stock',['instock','outofstock']);
            $table->boolean('featured')->default(false);
            $table->unsignedInteger('qte')->default(10);
            $table->string('photo')->nullable();
            $table->bigInteger('cat_Id')->unsigned()->nullable();

            $table->timestamps();
            $table->foreign('cat_Id')->references('id')->on('categories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produit');
    }
}
