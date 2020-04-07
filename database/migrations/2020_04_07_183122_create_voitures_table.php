<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVoituresTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zone');
            $table->string('brigade');
            $table->string('poste');
            $table->string('type');
            $table->string('numero');
            $table->string('date-d-affectation');
            $table->string('etat');
            $table->string('date-de-panne');
            $table->string('place-de-reparation');
            $table->string('remarque');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('voitures');
    }
}
