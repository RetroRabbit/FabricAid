<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Access;
use App\Role;
use App\RoleAccess;

class Populate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->Access();
        $this->Role();
        $this->RoleAccess();
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

    private function Access()
    {
        Access::firstOrCreate(['Code' => 'C-USR', 'Name' => 'Create User']);
        Access::firstOrCreate(['Code' => 'U-USR', 'Name' => 'Update User']);
        Access::firstOrCreate(['Code' => 'D-USR', 'Name' => 'Delete User']);
    
        Access::firstOrCreate(['Code' => 'C-RL', 'Name' => 'Create Role']);
        Access::firstOrCreate(['Code' => 'U-RL', 'Name' => 'Update Role']);
        Access::firstOrCreate(['Code' => 'D-RL', 'Name' => 'Delete Role']);
    
        Access::firstOrCreate(['Code' => 'C-CMPY', 'Name' => 'Create Company']);
        Access::firstOrCreate(['Code' => 'U-CMPY', 'Name' => 'Update Company']);
        Access::firstOrCreate(['Code' => 'D-CMPY', 'Name' => 'Delete Company']);
    
        Access::firstOrCreate(['Code' => 'C-AREA', 'Name' => 'Create Area']);
        Access::firstOrCreate(['Code' => 'U-AREA', 'Name' => 'Update Area']);
        Access::firstOrCreate(['Code' => 'D-AREA', 'Name' => 'Delete Area']);
    
        Access::firstOrCreate(['Code' => 'C-MCHN', 'Name' => 'Create Machine']);
        Access::firstOrCreate(['Code' => 'U-MCHN', 'Name' => 'Update Machine']);
        Access::firstOrCreate(['Code' => 'D-MCHN', 'Name' => 'Delete Machine']);
    
        Access::firstOrCreate(['Code' => 'C-TL', 'Name' => 'Create Tool']);
        Access::firstOrCreate(['Code' => 'U-TL', 'Name' => 'Update Tool']);
        Access::firstOrCreate(['Code' => 'D-TL', 'Name' => 'Delete Tool']);
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
        Role::firstOrCreate(['Name' => 'Administrator']);
        Role::firstOrCreate(['Name' => 'Supervisor']);
        Role::firstOrCreate(['Name' => 'Artisan']);
    }

    private function RoleAccess()
    {
        RoleAccess::firstOrCreate(['AccessId' => 1,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 2,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 3,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 4,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 5,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 6,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 7,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 8,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 9,     'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 10,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 11,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 12,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 13,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 14,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 15,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 16,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 17,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 18,    'RoleId' => 1]);
        
        RoleAccess::firstOrCreate(['AccessId' => 2,     'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 5,     'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 8,     'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 11,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 14,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 17,    'RoleId' => 2]);
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
