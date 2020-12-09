<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSmartphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
            $table->bigIncrements('id',10);
            $table->string('nom',50);
            $table->string('taille',50);
            $table->string('type_réseau',50);
            $table->string('système',50);
            $table->string('connectique',50);
            $table->string('autonomie',50);
            $table->string('caractéristique',100);
            $table->integer('prix',10);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('smartphones');
    }
}
