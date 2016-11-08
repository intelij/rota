<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRotaschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotaschedules', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('rotaid');
            $table->integer('daynumber');
            $table->integer('staffid');
            $table->integer('slottype');
            $table->time('starttime');
            $table->time('endtime');
            $table->float('workhours');
            $table->integer('premiumminutes');
            $table->integer('roletypeid');
            $table->integer('freeminutes');
            $table->integer('seniorcashierminutes');
            $table->string('splitshifttimes');
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
        Schema::drop('rotaschedules');
    }
}
