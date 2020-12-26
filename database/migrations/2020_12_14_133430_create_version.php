<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('version', function (Blueprint $table) {
            $table->unsignedBigInteger('smartphone_id');
            $table->unsignedBigInteger('application_id');
            $table->foreign('application_id')->references('id')->on('applications')
                ->onDelete('cascade');
            $table->foreign('smartphone_id')->references('id')->on('smartphones')
                ->onDelete('cascade');
            $table->string('numero', 10);
            $table->date('date_sortie');
        });;
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('version');
    }
}
