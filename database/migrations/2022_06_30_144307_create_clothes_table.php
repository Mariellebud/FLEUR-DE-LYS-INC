<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('libellep');
            $table->string('description')->nullable();
            $table->decimal('prix')->nullable();
            //$table->enum('stock',['instock','outofstock']);
            //$table->boolean('featured')->default(false);
            $table->unsignedInteger('qte')->default(10);
            $table->string('photo')->nullable();
            //$table->tinyInteger('status')->default('0');
            $table->bigInteger('categori_id');

            //$table->foreignId('categori_id');
            //$table->foreign('categori_id')->references('id')->on('categories');

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
        Schema::dropIfExists('clothes');
    }
}
