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
            $table->string('zone')->nullable();
            $table->string('brigade')->nullable();
            $table->string('poste')->nullable();
            $table->string('type')->nullable();
            $table->string('numero')->nullable();
            $table->string('date-d-affectation')->nullable();
            $table->string('etat')->nullable();
            $table->string('date-de-panne')->nullable();
            $table->string('place-de-reparation')->nullable();
            $table->string('remarque')->nullable();
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
