<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimestampsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timestamps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_dard');
            $table->string('sap_id');
            $table->string('full_name');
            $table->date('date');
            $table->time('time');
            $table->integer('reader');
            $table->boolean('come_in')->default(1);
            $table->string('door');
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
        Schema::dropIfExists('timestamps');
    }
}
