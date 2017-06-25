<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    public function up()
    {
        //
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->text('history');
            $table->integer('fees_paid');
            $table->integer('doctor_id');
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
        Schema::dropIfExists('histories');
    }
}
