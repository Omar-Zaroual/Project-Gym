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
        Schema::create('produits', function (Blueprint $table) {
            $table->id('IdPr');
            $table->string('NomPr');
            $table->text('DescPr');
            $table->float('Prix');
            $table->string('imagePr');
            $table->unsignedBigInteger('IdCat');
            
            // Ajoute les champs supplémentaires ici
            $table->timestamps();

            $table->foreign('IdCat')->references('IdCat')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('produits');
    }
};
