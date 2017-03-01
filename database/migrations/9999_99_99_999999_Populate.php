<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Populate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->Role();
        $this->ArtisanType();
        $this->Company();
        $this->Category();
        $this->FocusArea();
        $this->Type();
        $this->Status();
        $this->User();
        $this->Area();
        $this->Machine();
        $this->Tool();
        $this->Template();
        $this->Job();
    }

    private function Area()
    {

    }

    private function ArtisanType()
    {

    }

    private function Category()
    {

    }

    private function Company()
    {
        
    }

    private function FocusArea()
    {

    }

    private function Job()
    {

    }

    private function Machine()
    {

    }

    private function Role()
    {

    }

    private function Status()
    {

    }

    private function Template()
    {

    }

    private function Tool()
    {

    }

    private function Type()
    {

    }

    private function User()
    {

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
