<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamions', function (Blueprint $table) {
            $table->id();
            $table->string('tablice');
            $table->string('model');
            $table->string('vozac');
            $table->bigInteger('prevoznik_id')->unsigned()->index();
            $table->foreign('prevoznik_id')->references('id')->on('prevozniks')->onDelete('cascade');
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
        Schema::dropIfExists('kamions');
    }
}
