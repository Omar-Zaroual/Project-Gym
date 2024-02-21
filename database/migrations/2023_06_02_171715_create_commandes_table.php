<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('IdCom');
            $table->date('DateCom');
            $table->unsignedBigInteger('IdPr');
            $table->unsignedBigInteger('IdCl');
            
            // Ajoute les champs supplémentaires ici
            $table->timestamps();

            $table->foreign('IdPr')->references('IdPr')->on('produits');
            $table->foreign('IdCl')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};
