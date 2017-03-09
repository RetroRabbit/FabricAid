<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Machine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Machine', function (Blueprint $table) {            
            $table->increments('Id');
            $table->string('Code', 255)->unique();
            $table->string('Name', 255);
            $table->integer('AreaId')->unsigned();

            $table->foreign('AreaId')->references('Id')->on('Area')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Machine');
    }
}
