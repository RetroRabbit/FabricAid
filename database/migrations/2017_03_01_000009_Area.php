<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Area extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Area', function (Blueprint $table) {            
            $table->increments('Id');
            $table->string('Code', 255)->unique();
            $table->string('Name', 255);
            $table->string('Location', 255)->nullable();
            $table->integer('CompanyId')->unsigned();

            $table->foreign('CompanyId')->references('Id')->on('Company')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Area');
    }
}
