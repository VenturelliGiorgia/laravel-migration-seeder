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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda");
            $table->string("stazione_di_partenza");
            $table->string("stazione_di_arrivo");
            $table->dateTime("orario_di_partenza");
            $table->dateTime("orario_di_arrivo");
            $table->integer("codice_treno");
            $table->integer("num_carrozze");
            $table->boolean("orario")->default(true);
            $table->boolean("cancellato")->default(false);
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
        Schema::dropIfExists('trains');
    }
};
