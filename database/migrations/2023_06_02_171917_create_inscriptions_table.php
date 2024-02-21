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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id('NumInsc');
            $table->date('DateInsc');
            $table->string('TypeFor');
            $table->unsignedBigInteger('NumFor');
            $table->unsignedBigInteger('IdCl');
            // Ajoute les champs supplémentaires ici
            $table->timestamps();

            $table->foreign('NumFor')->references('NumFor')->on('forfaits');
            $table->foreign('IdCl')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('inscriptions');
    }
};
