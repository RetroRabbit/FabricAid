<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Company', function (Blueprint $table) {            
            $table->increments('Id');
            $table->string('Code', 255)->unique();
            $table->string('Name', 255);
            $table->text('Description')->nullable();
            $table->string('Logo', 'max')->nullable();
            $table->boolean('Active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Company');
    }
}
