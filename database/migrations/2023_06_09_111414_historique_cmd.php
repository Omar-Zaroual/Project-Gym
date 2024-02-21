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
        //
        Schema::create('HistoriqueCmd', function (Blueprint $table) {
            $table->id();
            $table->dateTime('DateCom');
            $table->integer('IdPr');
            $table->integer('IdCl');
            $table->integer('QtePrix');
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
        //
    }
};
