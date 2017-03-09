<?php

use Illuminate\Database\Seeder;

use App\Access;
use App\Role;
use App\RoleAccess;
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

use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
        $this->Job();
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
        ArtisanType::firstOrCreate(['Name' => 'Mechanic']);
        ArtisanType::firstOrCreate(['Name' => 'Electrician']);
        ArtisanType::firstOrCreate(['Name' => 'Enginer']);
        ArtisanType::firstOrCreate(['Name' => 'Plumber']);
    }

    private function Category()
    {
        Category::firstOrCreate(['Code' => 'CTG-P',     'Name' => 'Preventative']);
        Category::firstOrCreate(['Code' => 'CTG-CI',    'Name' => 'Continuous Improvement']);
    }

    private function Company()
    {
        Company::firstOrCreate(
        [
            'Code'          => 'VSA-JHB-01',
            'Name'          => 'Venture-SA Gauteng, Sandton',
            'Description'   => 'This is the main branch in South Africa',
            'Active'        => true
        ]);
    
        Company::firstOrCreate(
        [
            'Code'          => 'VSA-JHB-02',
            'Name'          => 'Venture-SA Gauteng, Johannesburg',
            'Description'   => 'This is the second Johannesburg branch in South Africa',
            'Active'        => true
        ]);
    
        Company::firstOrCreate(
        [
            'Code'          => 'VSA-DBN-01',
            'Name'          => 'Venture-SA Kwa-Zulu Natal, Durban',
            'Description'   => 'This is the Durban branch in South Africa',
            'Active'        => true
        ]);
    
        Company::firstOrCreate(
        [
            'Code'          => 'VSA-CPT-01',
            'Name'          => 'Venture-SA Western Cape, Cape Town',
            'Description'   => 'This is the Cape Town branch in South Africa',
            'Active'        => true
        ]);
    }

    private function FocusArea()
    {
        FocusArea::firstOrCreate(['Code' => 'FA-D',   'Name' => 'Downtime']);
        FocusArea::firstOrCreate(['Code' => 'FA-PPH', 'Name' => 'Pass Per Hour']);
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
        Role::firstOrCreate(['Name' => 'User']);
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
        Status::firstOrCreate(['Code' => 'ST-P',    'Name' => 'Pending']);
        Status::firstOrCreate(['Code' => 'ST-R',    'Name' => 'Running']);
        Status::firstOrCreate(['Code' => 'ST-OH',   'Name' => 'On-Hold']);
        Status::firstOrCreate(['Code' => 'ST-C',    'Name' => 'Completed']);
    }

    private function Template()
    {

    }

    private function Tool()
    {

    }

    private function Type()
    {
        Type::firstOrCreate(['Code' => 'JT-OT', 'Name' => 'One Time']);
        Type::firstOrCreate(['Code' => 'JT-R',  'Name' => 'Recurring']);
    }

    private function User()
    {
        User::firstOrCreate(
        [
            'FirstName'     =>  'Tebogo',
            'LastName'      =>  'Seshibe',
            'Email'         =>  'Tseshibe@gmail.com',
            'Password'      =>  'admin',
            'Confirmed'     =>  true,
            'DateCreated'   =>  Carbon::now()->format('Y-m-d'),
            'Active'        =>  true,
            'RoleId'        =>  1
        ]);
    
        User::firstOrCreate(
        [
            'FirstName'     =>  'Jack',
            'LastName'      =>  'Dawson',
            'Email'         =>  'JDawson@gmail.com',
            'Password'      =>  'artisan',
            'Confirmed'     =>  true,
            'DateCreated'   =>  Carbon::now()->format('Y-m-d'),
            'Active'        =>  true,
            'RoleId'        =>  3
        ]);
    }
}
