<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turas', function (Blueprint $table) {
            $table->id();
            $table->date('datumPolaska');
            $table->date('datumDolaska');
            $table->double('km');
            $table->double('cena');
            $table->bigInteger('kamion_id')->unsigned()->index();
            $table->foreign('kamion_id')->references('id')->on('kamions')->onDelete('cascade');
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
        Schema::dropIfExists('turas');
    }
}
