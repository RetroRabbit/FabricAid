<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RoleAccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RoleAccess', function (Blueprint $table) {            
            $table->increments('Id');
            $table->integer('RoleId')->unsigned();
            $table->integer('AccessId')->unsigned();

            $table->foreign('RoleId')->references('Id')->on('Role')->onDelete('cascade');
            $table->foreign('AccessId')->references('Id')->on('Access')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RoleAccess');
    }
}
