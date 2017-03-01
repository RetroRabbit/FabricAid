<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tool', function (Blueprint $table) {            
            $table->increments('Id');
            $table->string('Code');
            $table->string('Name');
            $table->text('Description')->nullable();
            $table->integer('MachineId')->unsigned();

            $table->foreign('MachineId')->references('Id')->on('Machine')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tool');
    }
}
