<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Role;
use App\ArtisanType;
use App\Company;
use App\Category;
use App\FocusArea;
use App\Type;
use App\Status;
use App\User;
use App\Area;
use App\Machine;
use App\Tool;
use App\Template;
use App\Job;

class Populate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*$this->Role();
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
        $this->Job();*/
    }

    private function Area()
    {

    }

    private function ArtisanType()
    {
        $electrician            = ArtisanType::firstOrCreate(['Name' => 'Electrician']);
        $mechanical_engineer    = ArtisanType::firstOrCreate(['Name' => 'Mechanical Engineer']);
        $plumber                = ArtisanType::firstOrCreate(['Name' => 'Plumber']);
    }

    private function Category()
    {
        $preventative   = Category::firstOrCreate(['Code' => 'CTG-P', 'Name' => 'Preventative']);
        $continuous     = Category::firstOrCreate(['Code' => 'CTG-CI', 'Name' => 'Continuous Improvement']);
    }

    private function Company()
    {
        $jhb    = Company::firstOrCreate(
        [
            'Code' => 'VT-JHB',
            'Name' => 'Venture-Sa Johannesburg',
            'Description' => 'The Johannesburg branch of Venture-SA'
        ]);

        $cpt    = Company::firstOrCreate(
        [
            'Code' => 'VT-CPT',
            'Name' => 'Venture-Sa Cape Town',
            'Description' => 'The Cape Town branch of Venture-SA'
        ]);

        $dbn    = Company::firstOrCreate(
        [
            'Code' => 'VT-DBN',
            'Name' => 'Venture-Sa Durban',
            'Description' => 'The Durban branch of Venture-SA'
        ]);

        $ec     = Company::firstOrCreate(
        [
            'Code' => 'VT-EC',
            'Name' => 'Venture-Sa Eastern Cape',
            'Description' => 'The Eastern Cape branch of Venture-SA'
        ]);
    }

    private function FocusArea()
    {
        $downtime       = FocusArea::firstOrCreate(['Code' => 'FA-D', 'Name' => 'Downtime']);
        $passperhour    = FocusArea::firstOrCreate(['Code' => 'FA-PPH', 'Name' => 'Pass Per Hour']);
    }

    private function Job()
    {

    }

    private function Machine()
    {

    }

    private function Role()
    {
        $admin      = Role::firstOrCreate(['Name' => 'System Administrator']);
        $supevisor  = Role::firstOrCreate(['Name' => 'Maintenance Supervisor']);
        $artisan    = Role::firstOrCreate(['Name' => 'Artisan']);
        $user       = Role::firstOrCreate(['Name' => 'User']);
    }

    private function Status()
    {
        $pending    = Status::firstOrCreate(['Code' => 'ST-P', 'Name' => 'Downtime']);
        $running    = Status::firstOrCreate(['Code' => 'ST-R', 'Name' => 'Pass Per Hour']);
        $onhold     = Status::firstOrCreate(['Code' => 'ST-OH', 'Name' => 'Pass Per Hour']);
        $completed  = Status::firstOrCreate(['Code' => 'ST-C', 'Name' => 'Pass Per Hour']);
    }

    private function Template()
    {

    }

    private function Tool()
    {

    }

    private function Type()
    {
        $onetime    = Type::firstOrCreate(['Code' => 'FA-D', 'Name' => 'Downtime']);
        $recurring  = Type::firstOrCreate(['Code' => 'FA-PPH', 'Name' => 'Pass Per Hour']);
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
