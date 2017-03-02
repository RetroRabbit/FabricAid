<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {            
            $table->increments('Id');
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Email')->unique();
            $table->string('Password');
            $table->boolean('Confirmed');
            $table->date('DateCreated');
            $table->boolean('Active');
            $table->integer('RoleId')->unsigned()->nullable();
            $table->integer('ArtisanTypeId')->unsigned()->nullable();
            $table->integer('CompanyId')->unsigned()->nullable();

            $table->foreign('RoleId')->references('Id')->on('Role')->onDelete('cascade');
            $table->foreign('ArtisanTypeId')->references('Id')->on('ArtisanType')->onDelete('cascade');
            $table->foreign('CompanyId')->references('Id')->on('Company')->onDelete('cascade');
            $table->rememberToken();
           
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
        Schema::dropIfExists('User');
    }
}
