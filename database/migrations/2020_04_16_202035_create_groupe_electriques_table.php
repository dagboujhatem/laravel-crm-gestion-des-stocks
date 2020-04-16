<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupeElectriquesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupe_electriques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('zone')->nullable();
            $table->string('brigade')->nullable();
            $table->string('poste')->nullable();
            $table->string('type')->nullable();
            $table->string('numero')->nullable();
            $table->text('remarque')->nullable();
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
        Schema::drop('groupe_electriques');
    }
}
