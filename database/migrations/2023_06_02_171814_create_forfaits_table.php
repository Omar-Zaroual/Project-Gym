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
        Schema::create('forfaits', function (Blueprint $table) {
            $table->id('NumFor');
            $table->string('TypeFor');
            $table->float('Prix');
            // Ajoute les champs supplémentaires ici
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('forfaits');
    }
};
