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
        Access::firstOrCreate(['Code' => 'C-RL', 'Name' => 'Create Role']);
        Access::firstOrCreate(['Code' => 'U-RL', 'Name' => 'Update Role']);
        Access::firstOrCreate(['Code' => 'D-RL', 'Name' => 'Delete Role']);
    
        Access::firstOrCreate(['Code' => 'C-ATSN-T', 'Name' => 'Create Artisan Type']);
        Access::firstOrCreate(['Code' => 'U-ATSN-T', 'Name' => 'Update Artisan Type']);
        Access::firstOrCreate(['Code' => 'D-ATSN-T', 'Name' => 'Delete Artisan Type']);
    
        Access::firstOrCreate(['Code' => 'C-CMPY', 'Name' => 'Create Company']);
        Access::firstOrCreate(['Code' => 'U-CMPY', 'Name' => 'Update Company']);
        Access::firstOrCreate(['Code' => 'D-CMPY', 'Name' => 'Delete Company']);

        Access::firstOrCreate(['Code' => 'C-USR', 'Name' => 'Create User']);
        Access::firstOrCreate(['Code' => 'U-USR', 'Name' => 'Update User']);
        Access::firstOrCreate(['Code' => 'D-USR', 'Name' => 'Delete User']);
    
        Access::firstOrCreate(['Code' => 'C-AREA', 'Name' => 'Create Area']);
        Access::firstOrCreate(['Code' => 'U-AREA', 'Name' => 'Update Area']);
        Access::firstOrCreate(['Code' => 'D-AREA', 'Name' => 'Delete Area']);
    
        Access::firstOrCreate(['Code' => 'C-MCHN', 'Name' => 'Create Machine']);
        Access::firstOrCreate(['Code' => 'U-MCHN', 'Name' => 'Update Machine']);
        Access::firstOrCreate(['Code' => 'D-MCHN', 'Name' => 'Delete Machine']);
    
        Access::firstOrCreate(['Code' => 'C-TL', 'Name' => 'Create Tool']);
        Access::firstOrCreate(['Code' => 'U-TL', 'Name' => 'Update Tool']);
        Access::firstOrCreate(['Code' => 'D-TL', 'Name' => 'Delete Tool']);

        Access::firstOrCreate(['Code' => 'C-TMPLT', 'Name' => 'Create Template']);
        Access::firstOrCreate(['Code' => 'U-TMPLT', 'Name' => 'Update Template']);
        Access::firstOrCreate(['Code' => 'D-TMPLT', 'Name' => 'Delete Template']);

        Access::firstOrCreate(['Code' => 'C-JB', 'Name' => 'Create Job']);
        Access::firstOrCreate(['Code' => 'U-JB', 'Name' => 'Update Job']);
        Access::firstOrCreate(['Code' => 'D-JB', 'Name' => 'Delete Job']);
    }

    private function Area()
    {
        Area::firstOrCreate(['Code' => 'JHB-01-PL-01', 'Name' => 'Plant 01', 'CompanyId' => 1]);
        Area::firstOrCreate(['Code' => 'JHB-01-OFFC-MN', 'Name' => 'Main Office', 'CompanyId' => 1]);
        Area::firstOrCreate(['Code' => 'JHB-01-OFFC-HR', 'Name' => 'Human Resources Office', 'CompanyId' => 1]);
        Area::firstOrCreate(['Code' => 'JHB-01-OFFC-IT', 'Name' => 'Information Technology Office', 'CompanyId' => 1]);

        Area::firstOrCreate(['Code' => 'JHB-02-PL-02', 'Name' => 'Plant 02', 'CompanyId' => 2]);
        Area::firstOrCreate(['Code' => 'JHB-02-OFFC-MN', 'Name' => 'Main Office', 'CompanyId' => 2]);
        Area::firstOrCreate(['Code' => 'JHB-02-OFFC-HR', 'Name' => 'Human Resources Office', 'CompanyId' => 2]);
        Area::firstOrCreate(['Code' => 'JHB-02-OFFC-IT', 'Name' => 'Information Technology Office', 'CompanyId' => 2]);

        Area::firstOrCreate(['Code' => 'DBN-01-PL-03', 'Name' => 'Plant 03', 'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'DBN-01-OFFC-MN', 'Name' => 'Main Office', 'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'DBN-01-OFFC-HR', 'Name' => 'Human Resources Office', 'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'DBN-01-OFFC-IT', 'Name' => 'Information Technology Office', 'CompanyId' => 3]);

        Area::firstOrCreate(['Code' => 'CPT-01-PL-04', 'Name' => 'Plant 04', 'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'CPT-01-OFFC-MN', 'Name' => 'Main Office', 'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'CPT-01-OFFC-HR', 'Name' => 'Human Resources Office', 'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'CPT-01-OFFC-IT', 'Name' => 'Information Technology Office', 'CompanyId' => 3]);


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
        Machine::firstOrCreate(['Code' => 'FSTR-01', 'Name' => 'Fabric Slitter Machine 01, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-02', 'Name' => 'Fabric Slitter Machine 02, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-03', 'Name' => 'Fabric Slitter Machine 03, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-04', 'Name' => 'Fabric Slitter Machine 04, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-05', 'Name' => 'Fabric Slitter Machine 05, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-06', 'Name' => 'Fabric Slitter Machine 06, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-01', 'Name' => 'Fabric Cutting Machine 01, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-02', 'Name' => 'Fabric Cutting Machine 02, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-03', 'Name' => 'Fabric Cutting Machine 03, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-04', 'Name' => 'Fabric Cutting Machine 04, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-05', 'Name' => 'Fabric Cutting Machine 05, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-06', 'Name' => 'Fabric Cutting Machine 06, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-01', 'Name' => 'Fabric Forming Machine 01, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-02', 'Name' => 'Fabric Forming Machine 02, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-03', 'Name' => 'Fabric Forming Machine 03, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-04', 'Name' => 'Fabric Forming Machine 04, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-05', 'Name' => 'Fabric Forming Machine 05, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-06', 'Name' => 'Fabric Forming Machine 06, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-01', 'Name' => 'Fabric Brushing Machine 01, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-02', 'Name' => 'Fabric Brushing Machine 02, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-03', 'Name' => 'Fabric Brushing Machine 03, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-04', 'Name' => 'Fabric Brushing Machine 04, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-05', 'Name' => 'Fabric Brushing Machine 05, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-06', 'Name' => 'Fabric Brushing Machine 06, Sandton', 'AreaId' => 1]);

        Machine::firstOrCreate(['Code' => 'CFF-01', 'Name' => 'Office Coffee Machine 01, Sandton', 'AreaId' => 2]);
        Machine::firstOrCreate(['Code' => 'CFF-02', 'Name' => 'Office Coffee Machine 02, Sandton', 'AreaId' => 2]);
        Machine::firstOrCreate(['Code' => 'CFF-03', 'Name' => 'Office Coffee Machine 03, Sandton', 'AreaId' => 2]);
    
        Machine::firstOrCreate(['Code' => 'CFF-04', 'Name' => 'HR Coffee Machine 01, Sandton', 'AreaId' => 3]);
        Machine::firstOrCreate(['Code' => 'CFF-05', 'Name' => 'HR Coffee Machine 02, Sandton', 'AreaId' => 3]);
        Machine::firstOrCreate(['Code' => 'CFF-06', 'Name' => 'HR Coffee Machine 03, Sandton', 'AreaId' => 3]);
        Machine::firstOrCreate(['Code' => 'CFF-07', 'Name' => 'HR Coffee Machine 04, Sandton', 'AreaId' => 3]);

        Machine::firstOrCreate(['Code' => 'CFF-08', 'Name' => 'IT Coffee Machine 01, Sandton', 'AreaId' => 4]);
        Machine::firstOrCreate(['Code' => 'CFF-09', 'Name' => 'IT Coffee Machine 02, Sandton', 'AreaId' => 4]);
    

        Machine::firstOrCreate(['Code' => 'FSTR-07', 'Name' => 'Fabric Slitter Machine 01, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-08', 'Name' => 'Fabric Slitter Machine 02, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-09', 'Name' => 'Fabric Slitter Machine 03, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-10', 'Name' => 'Fabric Slitter Machine 04, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-11', 'Name' => 'Fabric Slitter Machine 05, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-12', 'Name' => 'Fabric Slitter Machine 06, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-07', 'Name' => 'Fabric Cutting Machine 01, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-08', 'Name' => 'Fabric Cutting Machine 02, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-09', 'Name' => 'Fabric Cutting Machine 03, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-10', 'Name' => 'Fabric Cutting Machine 04, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-11', 'Name' => 'Fabric Cutting Machine 05, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-12', 'Name' => 'Fabric Cutting Machine 06, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-07', 'Name' => 'Fabric Forming Machine 01, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-08', 'Name' => 'Fabric Forming Machine 02, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-09', 'Name' => 'Fabric Forming Machine 03, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-10', 'Name' => 'Fabric Forming Machine 04, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-11', 'Name' => 'Fabric Forming Machine 05, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-12', 'Name' => 'Fabric Forming Machine 06, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-07', 'Name' => 'Fabric Brushing Machine 01, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-08', 'Name' => 'Fabric Brushing Machine 02, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-09', 'Name' => 'Fabric Brushing Machine 03, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-10', 'Name' => 'Fabric Brushing Machine 04, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-11', 'Name' => 'Fabric Brushing Machine 05, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-12', 'Name' => 'Fabric Brushing Machine 06, Johannesburg', 'AreaId' => 5]);

        Machine::firstOrCreate(['Code' => 'CFF-10', 'Name' => 'Office Coffee Machine 01, Johannesburg', 'AreaId' => 6]);
        Machine::firstOrCreate(['Code' => 'CFF-11', 'Name' => 'Office Coffee Machine 02, Johannesburg', 'AreaId' => 6]);
        Machine::firstOrCreate(['Code' => 'CFF-12', 'Name' => 'Office Coffee Machine 03, Johannesburg', 'AreaId' => 6]);
    
        Machine::firstOrCreate(['Code' => 'CFF-13', 'Name' => 'HR Coffee Machine 01, Johannesburg', 'AreaId' => 7]);
        Machine::firstOrCreate(['Code' => 'CFF-14', 'Name' => 'HR Coffee Machine 02, Johannesburg', 'AreaId' => 7]);
        Machine::firstOrCreate(['Code' => 'CFF-15', 'Name' => 'HR Coffee Machine 03, Johannesburg', 'AreaId' => 7]);
        Machine::firstOrCreate(['Code' => 'CFF-16', 'Name' => 'HR Coffee Machine 04, Johannesburg', 'AreaId' => 7]);

        Machine::firstOrCreate(['Code' => 'CFF-17', 'Name' => 'IT Coffee Machine 01, Johannesburg', 'AreaId' => 8]);
        Machine::firstOrCreate(['Code' => 'CFF-18', 'Name' => 'IT Coffee Machine 02, Johannesburg', 'AreaId' => 8]);
    

        Machine::firstOrCreate(['Code' => 'FSTR-13', 'Name' => 'Fabric Slitter Machine 01, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-14', 'Name' => 'Fabric Slitter Machine 02, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-15', 'Name' => 'Fabric Slitter Machine 03, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-16', 'Name' => 'Fabric Slitter Machine 04, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-17', 'Name' => 'Fabric Slitter Machine 05, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-18', 'Name' => 'Fabric Slitter Machine 06, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-13', 'Name' => 'Fabric Cutting Machine 01, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-14', 'Name' => 'Fabric Cutting Machine 02, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-15', 'Name' => 'Fabric Cutting Machine 03, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-16', 'Name' => 'Fabric Cutting Machine 04, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-17', 'Name' => 'Fabric Cutting Machine 05, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-18', 'Name' => 'Fabric Cutting Machine 06, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-13', 'Name' => 'Fabric Forming Machine 01, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-14', 'Name' => 'Fabric Forming Machine 02, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-15', 'Name' => 'Fabric Forming Machine 03, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-16', 'Name' => 'Fabric Forming Machine 04, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-17', 'Name' => 'Fabric Forming Machine 05, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-18', 'Name' => 'Fabric Forming Machine 06, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-13', 'Name' => 'Fabric Brushing Machine 01, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-14', 'Name' => 'Fabric Brushing Machine 02, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-15', 'Name' => 'Fabric Brushing Machine 03, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-16', 'Name' => 'Fabric Brushing Machine 04, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-17', 'Name' => 'Fabric Brushing Machine 05, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-18', 'Name' => 'Fabric Brushing Machine 06, Durban', 'AreaId' => 9]);

        Machine::firstOrCreate(['Code' => 'CFF-19', 'Name' => 'Office Coffee Machine 01, Durban', 'AreaId' => 10]);
        Machine::firstOrCreate(['Code' => 'CFF-20', 'Name' => 'Office Coffee Machine 02, Durban', 'AreaId' => 10]);
        Machine::firstOrCreate(['Code' => 'CFF-21', 'Name' => 'Office Coffee Machine 03, Durban', 'AreaId' => 10]);
    
        Machine::firstOrCreate(['Code' => 'CFF-22', 'Name' => 'HR Coffee Machine 01, Durban', 'AreaId' => 11]);
        Machine::firstOrCreate(['Code' => 'CFF-23', 'Name' => 'HR Coffee Machine 02, Durban', 'AreaId' => 11]);
        Machine::firstOrCreate(['Code' => 'CFF-24', 'Name' => 'HR Coffee Machine 03, Durban', 'AreaId' => 11]);
        Machine::firstOrCreate(['Code' => 'CFF-25', 'Name' => 'HR Coffee Machine 04, Durban', 'AreaId' => 11]);

        Machine::firstOrCreate(['Code' => 'CFF-26', 'Name' => 'IT Coffee Machine 01, Durban', 'AreaId' => 12]);
        Machine::firstOrCreate(['Code' => 'CFF-27', 'Name' => 'IT Coffee Machine 02, Durban', 'AreaId' => 12]);
    

        Machine::firstOrCreate(['Code' => 'FSTR-19', 'Name' => 'Fabric Slitter Machine 01, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-20', 'Name' => 'Fabric Slitter Machine 02, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-21', 'Name' => 'Fabric Slitter Machine 03, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-22', 'Name' => 'Fabric Slitter Machine 04, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-23', 'Name' => 'Fabric Slitter Machine 05, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-24', 'Name' => 'Fabric Slitter Machine 06, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-19', 'Name' => 'Fabric Cutting Machine 01, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-20', 'Name' => 'Fabric Cutting Machine 02, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-21', 'Name' => 'Fabric Cutting Machine 03, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-22', 'Name' => 'Fabric Cutting Machine 04, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-23', 'Name' => 'Fabric Cutting Machine 05, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-24', 'Name' => 'Fabric Cutting Machine 06, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-19', 'Name' => 'Fabric Forming Machine 01, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-20', 'Name' => 'Fabric Forming Machine 02, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-21', 'Name' => 'Fabric Forming Machine 03, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-22', 'Name' => 'Fabric Forming Machine 04, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-23', 'Name' => 'Fabric Forming Machine 05, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-24', 'Name' => 'Fabric Forming Machine 06, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-19', 'Name' => 'Fabric Brushing Machine 01, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-20', 'Name' => 'Fabric Brushing Machine 02, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-21', 'Name' => 'Fabric Brushing Machine 03, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-22', 'Name' => 'Fabric Brushing Machine 04, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-23', 'Name' => 'Fabric Brushing Machine 05, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-24', 'Name' => 'Fabric Brushing Machine 06, Cape Town', 'AreaId' => 13]);

        Machine::firstOrCreate(['Code' => 'CFF-28', 'Name' => 'Office Coffee Machine 01, Cape Town', 'AreaId' => 14]);
        Machine::firstOrCreate(['Code' => 'CFF-29', 'Name' => 'Office Coffee Machine 02, Cape Town', 'AreaId' => 14]);
        Machine::firstOrCreate(['Code' => 'CFF-30', 'Name' => 'Office Coffee Machine 03, Cape Town', 'AreaId' => 14]);
    
        Machine::firstOrCreate(['Code' => 'CFF-31', 'Name' => 'HR Coffee Machine 01, Cape Town', 'AreaId' => 15]);
        Machine::firstOrCreate(['Code' => 'CFF-32', 'Name' => 'HR Coffee Machine 02, Cape Town', 'AreaId' => 15]);
        Machine::firstOrCreate(['Code' => 'CFF-33', 'Name' => 'HR Coffee Machine 03, Cape Town', 'AreaId' => 15]);
        Machine::firstOrCreate(['Code' => 'CFF-34', 'Name' => 'HR Coffee Machine 04, Cape Town', 'AreaId' => 15]);

        Machine::firstOrCreate(['Code' => 'CFF-35', 'Name' => 'IT Coffee Machine 01, Cape Town', 'AreaId' => 16]);
        Machine::firstOrCreate(['Code' => 'CFF-36', 'Name' => 'IT Coffee Machine 02, Cape Town', 'AreaId' => 16]);
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
        RoleAccess::firstOrCreate(['AccessId' => 19,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 20,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 21,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 22,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 23,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 24,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 25,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 26,    'RoleId' => 1]);
        RoleAccess::firstOrCreate(['AccessId' => 27,    'RoleId' => 1]);
        
        RoleAccess::firstOrCreate(['AccessId' => 8,     'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 11,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 13,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 14,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 15,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 16,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 17,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 18,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 19,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 20,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 21,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 22,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 23,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 24,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 25,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 26,    'RoleId' => 2]);
        RoleAccess::firstOrCreate(['AccessId' => 27,    'RoleId' => 2]);

        RoleAccess::firstOrCreate(['AccessId' => 25,    'RoleId' => 3]);
        RoleAccess::firstOrCreate(['AccessId' => 26,    'RoleId' => 3]);
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
        Tool::firstOrCreate(['Code' => 'CM-B01', 'Name' => 'Coffee Machine Base 01',    'MachineId' => 25]);
        Tool::firstOrCreate(['Code' => 'CM-P01', 'Name' => 'Coffee Machine Pot 01',     'MachineId' => 25]);
        Tool::firstOrCreate(['Code' => 'CM-F01', 'Name' => 'Coffee Machine Filter 01',  'MachineId' => 25]);
    
        Tool::firstOrCreate(['Code' => 'CM-B02', 'Name' => 'Coffee Machine Base 02',    'MachineId' => 26]);
        Tool::firstOrCreate(['Code' => 'CM-P02', 'Name' => 'Coffee Machine Pot 02',     'MachineId' => 26]);
        Tool::firstOrCreate(['Code' => 'CM-F02', 'Name' => 'Coffee Machine Filter 02',  'MachineId' => 26]);
    
        Tool::firstOrCreate(['Code' => 'CM-B03', 'Name' => 'Coffee Machine Base 03',    'MachineId' => 27]);
        Tool::firstOrCreate(['Code' => 'CM-P03', 'Name' => 'Coffee Machine Pot 03',     'MachineId' => 27]);
        Tool::firstOrCreate(['Code' => 'CM-F03', 'Name' => 'Coffee Machine Filter 03',  'MachineId' => 27]);
    
        Tool::firstOrCreate(['Code' => 'CM-B04', 'Name' => 'Coffee Machine Base 04',    'MachineId' => 28]);
        Tool::firstOrCreate(['Code' => 'CM-P04', 'Name' => 'Coffee Machine Pot 04',     'MachineId' => 28]);
        Tool::firstOrCreate(['Code' => 'CM-F04', 'Name' => 'Coffee Machine Filter 04',  'MachineId' => 28]);
    
        Tool::firstOrCreate(['Code' => 'CM-B05', 'Name' => 'Coffee Machine Base 05',    'MachineId' => 29]);
        Tool::firstOrCreate(['Code' => 'CM-P05', 'Name' => 'Coffee Machine Pot 05',     'MachineId' => 29]);
        Tool::firstOrCreate(['Code' => 'CM-F05', 'Name' => 'Coffee Machine Filter 05',  'MachineId' => 29]);
    
        Tool::firstOrCreate(['Code' => 'CM-B06', 'Name' => 'Coffee Machine Base 06',    'MachineId' => 30]);
        Tool::firstOrCreate(['Code' => 'CM-P06', 'Name' => 'Coffee Machine Pot 06',     'MachineId' => 30]);
        Tool::firstOrCreate(['Code' => 'CM-F06', 'Name' => 'Coffee Machine Filter 06',  'MachineId' => 30]);
    
        Tool::firstOrCreate(['Code' => 'CM-B07', 'Name' => 'Coffee Machine Base 07',    'MachineId' => 31]);
        Tool::firstOrCreate(['Code' => 'CM-P07', 'Name' => 'Coffee Machine Pot 07',     'MachineId' => 31]);
        Tool::firstOrCreate(['Code' => 'CM-F07', 'Name' => 'Coffee Machine Filter 07',  'MachineId' => 31]);
    
        Tool::firstOrCreate(['Code' => 'CM-B08', 'Name' => 'Coffee Machine Base 08',    'MachineId' => 32]);
        Tool::firstOrCreate(['Code' => 'CM-P08', 'Name' => 'Coffee Machine Pot 08',     'MachineId' => 32]);
        Tool::firstOrCreate(['Code' => 'CM-F08', 'Name' => 'Coffee Machine Filter 08',  'MachineId' => 32]);
    
        Tool::firstOrCreate(['Code' => 'CM-B09', 'Name' => 'Coffee Machine Base 09',    'MachineId' => 33]);
        Tool::firstOrCreate(['Code' => 'CM-P09', 'Name' => 'Coffee Machine Pot 09',     'MachineId' => 33]);
        Tool::firstOrCreate(['Code' => 'CM-F09', 'Name' => 'Coffee Machine Filter 09',  'MachineId' => 33]);
    
        Tool::firstOrCreate(['Code' => 'CM-B10', 'Name' => 'Coffee Machine Base 10',    'MachineId' => 58]);
        Tool::firstOrCreate(['Code' => 'CM-P10', 'Name' => 'Coffee Machine Pot 10',     'MachineId' => 58]);
        Tool::firstOrCreate(['Code' => 'CM-F10', 'Name' => 'Coffee Machine Filter 10',  'MachineId' => 58]);
    
        Tool::firstOrCreate(['Code' => 'CM-B11', 'Name' => 'Coffee Machine Base 11',    'MachineId' => 59]);
        Tool::firstOrCreate(['Code' => 'CM-P11', 'Name' => 'Coffee Machine Pot 11',     'MachineId' => 59]);
        Tool::firstOrCreate(['Code' => 'CM-F11', 'Name' => 'Coffee Machine Filter 11',  'MachineId' => 59]);
    
        Tool::firstOrCreate(['Code' => 'CM-B12', 'Name' => 'Coffee Machine Base 12',    'MachineId' => 60]);
        Tool::firstOrCreate(['Code' => 'CM-P12', 'Name' => 'Coffee Machine Pot 12',     'MachineId' => 60]);
        Tool::firstOrCreate(['Code' => 'CM-F12', 'Name' => 'Coffee Machine Filter 12',  'MachineId' => 60]);
    
        Tool::firstOrCreate(['Code' => 'CM-B13', 'Name' => 'Coffee Machine Base 13',    'MachineId' => 61]);
        Tool::firstOrCreate(['Code' => 'CM-P13', 'Name' => 'Coffee Machine Pot 13',     'MachineId' => 61]);
        Tool::firstOrCreate(['Code' => 'CM-F13', 'Name' => 'Coffee Machine Filter 13',  'MachineId' => 61]);
    
        Tool::firstOrCreate(['Code' => 'CM-B14', 'Name' => 'Coffee Machine Base 14',    'MachineId' => 62]);
        Tool::firstOrCreate(['Code' => 'CM-P14', 'Name' => 'Coffee Machine Pot 14',     'MachineId' => 62]);
        Tool::firstOrCreate(['Code' => 'CM-F14', 'Name' => 'Coffee Machine Filter 14',  'MachineId' => 62]);
    
        Tool::firstOrCreate(['Code' => 'CM-B15', 'Name' => 'Coffee Machine Base 15',    'MachineId' => 63]);
        Tool::firstOrCreate(['Code' => 'CM-P15', 'Name' => 'Coffee Machine Pot 15',     'MachineId' => 63]);
        Tool::firstOrCreate(['Code' => 'CM-F15', 'Name' => 'Coffee Machine Filter 15',  'MachineId' => 63]);
    
        Tool::firstOrCreate(['Code' => 'CM-B16', 'Name' => 'Coffee Machine Base 16',    'MachineId' => 64]);
        Tool::firstOrCreate(['Code' => 'CM-P16', 'Name' => 'Coffee Machine Pot 16',     'MachineId' => 64]);
        Tool::firstOrCreate(['Code' => 'CM-F16', 'Name' => 'Coffee Machine Filter 16',  'MachineId' => 64]);
    
        Tool::firstOrCreate(['Code' => 'CM-B17', 'Name' => 'Coffee Machine Base 17',    'MachineId' => 65]);
        Tool::firstOrCreate(['Code' => 'CM-P17', 'Name' => 'Coffee Machine Pot 17',     'MachineId' => 65]);
        Tool::firstOrCreate(['Code' => 'CM-F17', 'Name' => 'Coffee Machine Filter 17',  'MachineId' => 65]);
    
        Tool::firstOrCreate(['Code' => 'CM-B18', 'Name' => 'Coffee Machine Base 18',    'MachineId' => 66]);
        Tool::firstOrCreate(['Code' => 'CM-P18', 'Name' => 'Coffee Machine Pot 18',     'MachineId' => 66]);
        Tool::firstOrCreate(['Code' => 'CM-F18', 'Name' => 'Coffee Machine Filter 18',  'MachineId' => 66]);
    
        Tool::firstOrCreate(['Code' => 'CM-B19', 'Name' => 'Coffee Machine Base 19',    'MachineId' => 91]);
        Tool::firstOrCreate(['Code' => 'CM-P19', 'Name' => 'Coffee Machine Pot 19',     'MachineId' => 91]);
        Tool::firstOrCreate(['Code' => 'CM-F19', 'Name' => 'Coffee Machine Filter 19',  'MachineId' => 91]);
    
        Tool::firstOrCreate(['Code' => 'CM-B20', 'Name' => 'Coffee Machine Base 20',    'MachineId' => 92]);
        Tool::firstOrCreate(['Code' => 'CM-P20', 'Name' => 'Coffee Machine Pot 20',     'MachineId' => 92]);
        Tool::firstOrCreate(['Code' => 'CM-F20', 'Name' => 'Coffee Machine Filter 20',  'MachineId' => 92]);
    
        Tool::firstOrCreate(['Code' => 'CM-B21', 'Name' => 'Coffee Machine Base 21',    'MachineId' => 93]);
        Tool::firstOrCreate(['Code' => 'CM-P21', 'Name' => 'Coffee Machine Pot 21',     'MachineId' => 93]);
        Tool::firstOrCreate(['Code' => 'CM-F21', 'Name' => 'Coffee Machine Filter 21',  'MachineId' => 93]);
    
        Tool::firstOrCreate(['Code' => 'CM-B22', 'Name' => 'Coffee Machine Base 22',    'MachineId' => 94]);
        Tool::firstOrCreate(['Code' => 'CM-P22', 'Name' => 'Coffee Machine Pot 22',     'MachineId' => 94]);
        Tool::firstOrCreate(['Code' => 'CM-F22', 'Name' => 'Coffee Machine Filter 22',  'MachineId' => 94]);
    
        Tool::firstOrCreate(['Code' => 'CM-B23', 'Name' => 'Coffee Machine Base 23',    'MachineId' => 95]);
        Tool::firstOrCreate(['Code' => 'CM-P23', 'Name' => 'Coffee Machine Pot 23',     'MachineId' => 95]);
        Tool::firstOrCreate(['Code' => 'CM-F23', 'Name' => 'Coffee Machine Filter 23',  'MachineId' => 95]);
    
        Tool::firstOrCreate(['Code' => 'CM-B24', 'Name' => 'Coffee Machine Base 24',    'MachineId' => 96]);
        Tool::firstOrCreate(['Code' => 'CM-P24', 'Name' => 'Coffee Machine Pot 24',     'MachineId' => 96]);
        Tool::firstOrCreate(['Code' => 'CM-F24', 'Name' => 'Coffee Machine Filter 24',  'MachineId' => 96]);
    
        Tool::firstOrCreate(['Code' => 'CM-B25', 'Name' => 'Coffee Machine Base 25',    'MachineId' => 97]);
        Tool::firstOrCreate(['Code' => 'CM-P25', 'Name' => 'Coffee Machine Pot 25',     'MachineId' => 97]);
        Tool::firstOrCreate(['Code' => 'CM-F25', 'Name' => 'Coffee Machine Filter 25',  'MachineId' => 97]);
    
        Tool::firstOrCreate(['Code' => 'CM-B26', 'Name' => 'Coffee Machine Base 26',    'MachineId' => 98]);
        Tool::firstOrCreate(['Code' => 'CM-P26', 'Name' => 'Coffee Machine Pot 26',     'MachineId' => 98]);
        Tool::firstOrCreate(['Code' => 'CM-F26', 'Name' => 'Coffee Machine Filter 26',  'MachineId' => 98]);
    
        Tool::firstOrCreate(['Code' => 'CM-B27', 'Name' => 'Coffee Machine Base 27',    'MachineId' => 99]);
        Tool::firstOrCreate(['Code' => 'CM-P27', 'Name' => 'Coffee Machine Pot 27',     'MachineId' => 99]);
        Tool::firstOrCreate(['Code' => 'CM-F27', 'Name' => 'Coffee Machine Filter 27',  'MachineId' => 99]);
    
        Tool::firstOrCreate(['Code' => 'CM-B28', 'Name' => 'Coffee Machine Base 28',    'MachineId' => 124]);
        Tool::firstOrCreate(['Code' => 'CM-P28', 'Name' => 'Coffee Machine Pot 28',     'MachineId' => 124]);
        Tool::firstOrCreate(['Code' => 'CM-F28', 'Name' => 'Coffee Machine Filter 28',  'MachineId' => 124]);
    
        Tool::firstOrCreate(['Code' => 'CM-B29', 'Name' => 'Coffee Machine Base 29',    'MachineId' => 125]);
        Tool::firstOrCreate(['Code' => 'CM-P29', 'Name' => 'Coffee Machine Pot 29',     'MachineId' => 125]);
        Tool::firstOrCreate(['Code' => 'CM-F29', 'Name' => 'Coffee Machine Filter 29',  'MachineId' => 125]);
    
        Tool::firstOrCreate(['Code' => 'CM-B30', 'Name' => 'Coffee Machine Base 30',    'MachineId' => 126]);
        Tool::firstOrCreate(['Code' => 'CM-P30', 'Name' => 'Coffee Machine Pot 30',     'MachineId' => 126]);
        Tool::firstOrCreate(['Code' => 'CM-F30', 'Name' => 'Coffee Machine Filter 30',  'MachineId' => 126]);
    
        Tool::firstOrCreate(['Code' => 'CM-B31', 'Name' => 'Coffee Machine Base 31',    'MachineId' => 127]);
        Tool::firstOrCreate(['Code' => 'CM-P31', 'Name' => 'Coffee Machine Pot 31',     'MachineId' => 127]);
        Tool::firstOrCreate(['Code' => 'CM-F31', 'Name' => 'Coffee Machine Filter 31',  'MachineId' => 127]);
    
        Tool::firstOrCreate(['Code' => 'CM-B32', 'Name' => 'Coffee Machine Base 32',    'MachineId' => 128]);
        Tool::firstOrCreate(['Code' => 'CM-P32', 'Name' => 'Coffee Machine Pot 32',     'MachineId' => 128]);
        Tool::firstOrCreate(['Code' => 'CM-F32', 'Name' => 'Coffee Machine Filter 32',  'MachineId' => 128]);
    
        Tool::firstOrCreate(['Code' => 'CM-B33', 'Name' => 'Coffee Machine Base 33',    'MachineId' => 129]);
        Tool::firstOrCreate(['Code' => 'CM-P33', 'Name' => 'Coffee Machine Pot 33',     'MachineId' => 129]);
        Tool::firstOrCreate(['Code' => 'CM-F33', 'Name' => 'Coffee Machine Filter 33',  'MachineId' => 129]);
    
        Tool::firstOrCreate(['Code' => 'CM-B34', 'Name' => 'Coffee Machine Base 34',    'MachineId' => 130]);
        Tool::firstOrCreate(['Code' => 'CM-P34', 'Name' => 'Coffee Machine Pot 34',     'MachineId' => 130]);
        Tool::firstOrCreate(['Code' => 'CM-F34', 'Name' => 'Coffee Machine Filter 34',  'MachineId' => 130]);
    
        Tool::firstOrCreate(['Code' => 'CM-B35', 'Name' => 'Coffee Machine Base 35',    'MachineId' => 131]);
        Tool::firstOrCreate(['Code' => 'CM-P35', 'Name' => 'Coffee Machine Pot 35',     'MachineId' => 131]);
        Tool::firstOrCreate(['Code' => 'CM-F35', 'Name' => 'Coffee Machine Filter 35',  'MachineId' => 131]);
    
        Tool::firstOrCreate(['Code' => 'CM-B36', 'Name' => 'Coffee Machine Base 36',    'MachineId' => 132]);
        Tool::firstOrCreate(['Code' => 'CM-P36', 'Name' => 'Coffee Machine Pot 36',     'MachineId' => 132]);
        Tool::firstOrCreate(['Code' => 'CM-F36', 'Name' => 'Coffee Machine Filter 36',  'MachineId' => 132]);
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

        User::firstOrCreate(["FirstName" => "Ifeoma",       "LastName" => "Sawyer",     "Email" => "ultrices@Sednulla.ca",              "Password" => "BHT03PPY3BB",     "DateCreated" => "2017-04-28"]);
        User::firstOrCreate(["FirstName" => "Darryl",       "LastName" => "Gilbert",    "Email" => "Maecenas.mi@varius.org",                "Password" => "OUC09GDH5OU",      "DateCreated" => "2016-10-19"]);
        User::firstOrCreate(["FirstName" => "Gretchen",     "LastName" => "Kennedy",    "Email" => "feugiat.Sed.nec@acfacilisisfacilisis.ca",               "Password" => "DIV33YSL8VL",      "DateCreated" => "2017-03-04"]);
        User::firstOrCreate(["FirstName" => "Henry",        "LastName" => "Fischer",    "Email" => "Aliquam@Suspendisseacmetus.net",                    "Password" => "RYT92DXG5MX",        "DateCreated" => "2017-03-21"]);
        User::firstOrCreate(["FirstName" => "Madaline",     "LastName" => "Roman",      "Email" => "tincidunt.adipiscing.Mauris@SednequeSed.net",               "Password" => "EPI08RVL6FV",    "DateCreated" => "2016-05-31"]);
        User::firstOrCreate(["FirstName" => "Lucius",       "LastName" => "Hodge",      "Email" => "sapien.imperdiet@faucibus.net",                 "Password" => "GIZ42WOR1NT",    "DateCreated" => "2016-09-10"]);
        User::firstOrCreate(["FirstName" => "Dominic",      "LastName" => "Horn",       "Email" => "magna.Phasellus.dolor@nislQuisque.co.uk",               "Password" => "RMU33AHK7KX",     "DateCreated" => "2016-03-31"]);
        User::firstOrCreate(["FirstName" => "Olga",         "LastName" => "Russell",    "Email" => "sociis.natoque@seddolorFusce.ca",               "Password" => "DNC70MUX5HS",      "DateCreated" => "2017-11-29"]);
        User::firstOrCreate(["FirstName" => "Inez",         "LastName" => "Booker",     "Email" => "eu@Aeneanegestashendrerit.co.uk",           "Password" => "YPW21MYT6DN",     "DateCreated" => "2017-12-07"]);
        User::firstOrCreate(["FirstName" => "Penelope",     "LastName" => "Gillespie",  "Email" => "sem.magna@antedictummi.org",                "Password" => "NTP60IBV8UH",    "DateCreated" => "2017-04-05"]);
        User::firstOrCreate(["FirstName" => "Odysseus",     "LastName" => "Craft",      "Email" => "vitae.sodales.nisi@commodoipsum.com",               "Password" => "YLB60OTD3MX",    "DateCreated" => "2016-06-12"]);
        User::firstOrCreate(["FirstName" => "Leigh",        "LastName" => "Thomas",     "Email" => "vel@maurisaliquam.edu",                 "Password" => "YOA98PLY2JL",   "DateCreated" => "2017-04-25"]);
        User::firstOrCreate(["FirstName" => "Kamal",        "LastName" => "Moody",      "Email" => "ipsum.porta@tempor.co.uk",                  "Password" => "GFZ27ULT6JI",      "DateCreated" => "2017-08-04"]);
        User::firstOrCreate(["FirstName" => "Thor",         "LastName" => "Hayes",      "Email" => "consectetuer@Aeneaneget.co.uk",                 "Password" => "NCJ04DOD1LC",        "DateCreated" => "2015-01-21"]);
        User::firstOrCreate(["FirstName" => "Dorian",       "LastName" => "Cummings",   "Email" => "hendrerit.id@sit.org",                  "Password" => "IAV06IBX5AB",       "DateCreated" => "2016-10-09"]);
        User::firstOrCreate(["FirstName" => "Demetrius",    "LastName" => "Serrano",    "Email" => "Nulla.aliquet@velitSed.co.uk",                 "Password" => "XGT28HBZ3VX",    "DateCreated" => "2016-08-02"]);
        User::firstOrCreate(["FirstName" => "Martina",      "LastName" => "Cohen",      "Email" => "sed.turpis.nec@tempuseuligula.com",             "Password" => "VJJ39LCH5DL",  "DateCreated" => "2015-03-03"]);
        User::firstOrCreate(["FirstName" => "Dominique",    "LastName" => "Strong",     "Email" => "ornare.tortor.at@elit.edu",                 "Password" => "DDX42HCK0SP",   "DateCreated" => "2016-09-25"]);
        User::firstOrCreate(["FirstName" => "Cade",         "LastName" => "Velazquez",  "Email" => "Vivamus.euismod@magnaSedeu.net",                   "Password" => "QLG03ESG8TC",    "DateCreated" => "2016-04-24"]);
        User::firstOrCreate(["FirstName" => "Zeus",         "LastName" => "Gregory",    "Email" => "Donec@apurus.ca",               "Password" => "VYO42EWL4AS",      "DateCreated" => "2017-10-06"]);
        User::firstOrCreate(["FirstName" => "Hedy",         "LastName" => "Bird",       "Email" => "luctus.et.ultrices@risusIn.com",                "Password" => "QTO21PKI0XS",       "DateCreated" => "2016-06-29"]);
        User::firstOrCreate(["FirstName" => "Howard",       "LastName" => "Weiss",      "Email" => "ut.mi.Duis@dolor.ca",                   "Password" => "EUK82JJB6KE",        "DateCreated" => "2016-12-09"]);
        User::firstOrCreate(["FirstName" => "Halee",        "LastName" => "Kennedy",    "Email" => "Lorem@Donecelementumlorem.edu",                 "Password" => "QYW73ARX6RG",    "DateCreated" => "2017-10-15"]);
        User::firstOrCreate(["FirstName" => "Hayden",       "LastName" => "Vaughan",    "Email" => "Nam.ac.nulla@Quisquetinciduntpede.net",                 "Password" => "UTO25LMQ5AD",      "DateCreated" => "2017-01-15"]);
        User::firstOrCreate(["FirstName" => "Ingrid",       "LastName" => "Sandoval",   "Email" => "ipsum.dolor@semelit.com",               "Password" => "DHJ85CAE9TS",   "DateCreated" => "2015-01-15"]);
        User::firstOrCreate(["FirstName" => "Moana",        "LastName" => "Reid",       "Email" => "tempor.augue@Vivamusnonlorem.ca",               "Password" => "CUE86FQG3QC",     "DateCreated" => "2017-06-29"]);
        User::firstOrCreate(["FirstName" => "Thaddeus",     "LastName" => "Webster",    "Email" => "imperdiet.ornare@velconvallisin.com",               "Password" => "COV50ELE9WZ",      "DateCreated" => "2015-03-01"]);
        User::firstOrCreate(["FirstName" => "Ivory",        "LastName" => "Hoffman",    "Email" => "varius.ultrices.mauris@Morbi.com",                  "Password" => "JXE30DAI5KI",    "DateCreated" => "2017-03-27"]);
        User::firstOrCreate(["FirstName" => "Sebastian",    "LastName" => "Cohen",      "Email" => "ac.mattis.velit@placerat.com",                  "Password" => "AUY93GSK2RC",      "DateCreated" => "2015-03-05"]);
        User::firstOrCreate(["FirstName" => "Rhoda",        "LastName" => "Golden",     "Email" => "ornare.egestas@utdolordapibus.com",                 "Password" => "VHZ14VCW4ZH",   "DateCreated" => "2016-06-30"]);
        User::firstOrCreate(["FirstName" => "Dustin",       "LastName" => "Cruz",       "Email" => "nunc@lectus.ca",                "Password" => "BER12WCD4WF",   "DateCreated" => "2015-01-28"]);
        User::firstOrCreate(["FirstName" => "Phillip",      "LastName" => "Sparks",     "Email" => "dignissim.magna@quis.edu",              "Password" => "TBJ65IEN2HE",   "DateCreated" => "2017-01-15"]);
        User::firstOrCreate(["FirstName" => "Maris",        "LastName" => "Murphy",     "Email" => "massa.Quisque.porttitor@velest.org",                "Password" => "GFL57KFF8TW",   "DateCreated" => "2016-03-25"]);
        User::firstOrCreate(["FirstName" => "Vance",        "LastName" => "Morgan",     "Email" => "Fusce.mi.lorem@nislNulla.net",                  "Password" => "GDU63NEC1DQ",       "DateCreated" => "2015-01-21"]);
        User::firstOrCreate(["FirstName" => "Cora",         "LastName" => "Pearson",    "Email" => "vel.faucibus@consectetuer.co.uk",               "Password" => "YFY87ALZ0WF",      "DateCreated" => "2017-12-17"]);
        User::firstOrCreate(["FirstName" => "Caleb",        "LastName" => "Riddle",     "Email" => "porttitor.tellus.non@musAenean.edu",                "Password" => "UUW12PPK1SW",   "DateCreated" => "2017-07-10"]);
        User::firstOrCreate(["FirstName" => "Astra",        "LastName" => "Miller",     "Email" => "magna@imperdietnecleo.org",                 "Password" => "GIB24VDP8YG",   "DateCreated" => "2017-02-24"]);
        User::firstOrCreate(["FirstName" => "Lael",         "LastName" => "Albert",     "Email" => "egestas.urna@iaculis.co.uk",            "Password" => "PDG41MHY7XT",     "DateCreated" => "2016-03-09"]);
        User::firstOrCreate(["FirstName" => "Colin",        "LastName" => "Hurst",      "Email" => "auctor@ipsumcursusvestibulum.net",                  "Password" => "GBB2015QFE1FH",    "DateCreated" => "2016-10-10"]);
        User::firstOrCreate(["FirstName" => "Melinda",      "LastName" => "Medina",     "Email" => "molestie.pharetra@sempercursusInteger.co.uk",               "Password" => "ULL19PPP1GU",   "DateCreated" => "2016-03-19"]);
        User::firstOrCreate(["FirstName" => "Tamara",       "LastName" => "Hayden",     "Email" => "ut.nulla.Cras@Maecenas.ca",             "Password" => "KVT53XSS0ER",     "DateCreated" => "2015-01-11"]);
        User::firstOrCreate(["FirstName" => "Cassady",      "LastName" => "Grant",      "Email" => "diam.Duis.mi@Nuncullamcorper.net",              "Password" => "MUZ23VRJ0KR",      "DateCreated" => "2017-05-06"]);
        User::firstOrCreate(["FirstName" => "Cooper",       "LastName" => "Rich",       "Email" => "egestas.rhoncus@pede.com",                  "Password" => "RTF02RZW2EY",       "DateCreated" => "2016-12-08"]);
        User::firstOrCreate(["FirstName" => "Olivia",       "LastName" => "Berger",     "Email" => "amet.faucibus.ut@urnanecluctus.com",                "Password" => "PNS05XQR1JL",     "DateCreated" => "2017-10-09"]);
        User::firstOrCreate(["FirstName" => "Mariam",       "LastName" => "Mcintyre",   "Email" => "habitant@bibendum.co.uk",               "Password" => "YOH90GJH4MQ",   "DateCreated" => "2016-03-27"]);
        User::firstOrCreate(["FirstName" => "Shana",        "LastName" => "Mullen",     "Email" => "aliquet.Proin@primisinfaucibus.org",                "Password" => "FMG93XQR3ZN",   "DateCreated" => "2017-09-25"]);
        User::firstOrCreate(["FirstName" => "Nell",         "LastName" => "Landry",     "Email" => "ipsum.non.arcu@dignissimtempor.net",            "Password" => "UCO69WHK8VY",     "DateCreated" => "2016-06-03"]);
        User::firstOrCreate(["FirstName" => "Donna",        "LastName" => "Hester",     "Email" => "eget@tortorNunc.net",                   "Password" => "KYZ11LCA5QW",       "DateCreated" => "2016-09-27"]);
        User::firstOrCreate(["FirstName" => "Charity",      "LastName" => "Mcpherson",  "Email" => "et.arcu@erosNamconsequat.org",              "Password" => "KME62ZBX1VQ",      "DateCreated" => "2016-05-24"]);
        User::firstOrCreate(["FirstName" => "Violet",       "LastName" => "Murphy",     "Email" => "pede@id.org",               "Password" => "IIM26TQI5ZO",     "DateCreated" => "2017-03-04"]);
        User::firstOrCreate(["FirstName" => "Petra",        "LastName" => "Lane",       "Email" => "Pellentesque@luctusetultrices.edu",                 "Password" => "UJH55JTJ8WA",     "DateCreated" => "2016-05-07"]);
        User::firstOrCreate(["FirstName" => "Martin",       "LastName" => "Price",      "Email" => "ullamcorper.velit@Morbi.org",                   "Password" => "HZU48WVW7ND",        "DateCreated" => "2016-09-16"]);
        User::firstOrCreate(["FirstName" => "Doris",        "LastName" => "Roberts",    "Email" => "luctus.ut.pellentesque@liberoProin.net",                    "Password" => "XVA06APF6TH",        "DateCreated" => "2017-12-19"]);
        User::firstOrCreate(["FirstName" => "Sasha",        "LastName" => "Carroll",    "Email" => "ipsum.dolor.sit@loremauctorquis.net",                   "Password" => "BCS87UJZ8MC",    "DateCreated" => "2016-04-16"]);
        User::firstOrCreate(["FirstName" => "Anastasia",    "LastName" => "Spears",     "Email" => "lectus.justo.eu@mauris.com",                "Password" => "VDV24JAO4VV",   "DateCreated" => "2016-03-13"]);
        User::firstOrCreate(["FirstName" => "Mariam",       "LastName" => "Franco",     "Email" => "eu@anteNunc.net",               "Password" => "OYK47HNZ1LC",     "DateCreated" => "2016-08-24"]);
        User::firstOrCreate(["FirstName" => "Lisandra",     "LastName" => "Moody",      "Email" => "et.commodo.at@elitpede.edu",                "Password" => "KIO54KBE0TD",    "DateCreated" => "2017-07-30"]);
        User::firstOrCreate(["FirstName" => "Bianca",       "LastName" => "Erickson",   "Email" => "quis.turpis.vitae@luctus.com",                  "Password" => "ZUQ86JYZ1RB",       "DateCreated" => "2015-01-12"]);
        User::firstOrCreate(["FirstName" => "Pearl",        "LastName" => "Goodman",    "Email" => "sem@malesuadavelvenenatis.edu",                 "Password" => "SCM22BIZ1TR",    "DateCreated" => "2017-08-15"]);
        User::firstOrCreate(["FirstName" => "Keegan",       "LastName" => "Burns",      "Email" => "convallis@ligulaconsectetuer.co.uk",                "Password" => "GFT79JXP5DZ",    "DateCreated" => "2016-04-14"]);
        User::firstOrCreate(["FirstName" => "Taylor",       "LastName" => "Mcgee",      "Email" => "scelerisque@orciUt.ca",                 "Password" => "ZHI07XLO2IP",    "DateCreated" => "2017-10-23"]);
        User::firstOrCreate(["FirstName" => "September",    "LastName" => "Higgins",    "Email" => "nascetur.ridiculus.mus@vitaeerat.ca",                   "Password" => "VRE71UYZ3SB",    "DateCreated" => "2016-12-04"]);
        User::firstOrCreate(["FirstName" => "Vincent",      "LastName" => "Austin",     "Email" => "malesuada.Integer@insodales.edu",               "Password" => "DRI03MYQ6OE",   "DateCreated" => "2016-05-22"]);
        User::firstOrCreate(["FirstName" => "Jaime",        "LastName" => "Barnett",    "Email" => "tellus.faucibus@auguescelerisque.com",                  "Password" => "LDJ86IVZ3RR",    "DateCreated" => "2017-06-15"]);
        User::firstOrCreate(["FirstName" => "Herman",       "LastName" => "Barnett",    "Email" => "vulputate@aptenttacitisociosqu.edu",                "Password" => "APU34LLN2OV",      "DateCreated" => "2016-06-11"]);
        User::firstOrCreate(["FirstName" => "Emma",         "LastName" => "Kirby",      "Email" => "nascetur.ridiculus.mus@orciluctuset.ca",                "Password" => "ITS08CRW2RS",    "DateCreated" => "2017-05-04"]);
        User::firstOrCreate(["FirstName" => "Tiger",        "LastName" => "Rowe",       "Email" => "massa.non@ipsum.org",               "Password" => "NHF27IHY3GX",     "DateCreated" => "2017-01-12"]);
        User::firstOrCreate(["FirstName" => "Jeanette",     "LastName" => "Gates",      "Email" => "rhoncus.Donec.est@Aliquameratvolutpat.com",                 "Password" => "AHF92XTB6BR",        "DateCreated" => "2017-07-28"]);
        User::firstOrCreate(["FirstName" => "Renee",        "LastName" => "Workman",    "Email" => "gravida@diam.co.uk",                    "Password" => "EQY94EIP9WH",        "DateCreated" => "2016-12-22"]);
        User::firstOrCreate(["FirstName" => "Asher",        "LastName" => "Fitzpatrick","Email" => "massa.lobortis@dolor.co.uk",                    "Password" => "YEX97CWM3BK",        "DateCreated" => "2015-01-31"]);
        User::firstOrCreate(["FirstName" => "Montana",      "LastName" => "Hurst",      "Email" => "mauris@sagittis.co.uk",             "Password" => "BXR10QAF4OS",  "DateCreated" => "2016-08-22"]);
        User::firstOrCreate(["FirstName" => "Ora",          "LastName" => "Puckett",    "Email" => "odio@mifringilla.edu",                  "Password" => "CID99NDH4KU",        "DateCreated" => "2017-03-06"]);
        User::firstOrCreate(["FirstName" => "Ramona",       "LastName" => "Fields",     "Email" => "in.aliquet@Curabitursed.edu",               "Password" => "AZW65RJD0VP",     "DateCreated" => "2016-11-21"]);
        User::firstOrCreate(["FirstName" => "Aretha",       "LastName" => "Richards",   "Email" => "per.inceptos.hymenaeos@rhoncusNullamvelit.edu",                 "Password" => "FUM08QWH1KT",       "DateCreated" => "2016-07-19"]);
        User::firstOrCreate(["FirstName" => "Kameko",       "LastName" => "Zimmerman",  "Email" => "felis@antedictum.net",                  "Password" => "GWB48TWS9QB",    "DateCreated" => "2017-05-25"]);
        User::firstOrCreate(["FirstName" => "Shafira",      "LastName" => "Baird",      "Email" => "Cras.dolor.dolor@semegestas.ca",                "Password" => "GXT01XNR3IE",      "DateCreated" => "2017-10-22"]);
        User::firstOrCreate(["FirstName" => "Stacy",        "LastName" => "Meadows",    "Email" => "est.mollis@arcu.co.uk",                 "Password" => "JFG88YJV4QC",    "DateCreated" => "2016-12-01"]);
        User::firstOrCreate(["FirstName" => "Uriah",        "LastName" => "Velasquez",  "Email" => "nonummy@luctus.edu",                "Password" => "WUO58QOG8AJ",      "DateCreated" => "2016-04-15"]);
        User::firstOrCreate(["FirstName" => "Hilary",       "LastName" => "Dixon",      "Email" => "vulputate@velitegestaslacinia.co.uk",                   "Password" => "ZTH13LTT8FJ",        "DateCreated" => "2017-10-28"]);
        User::firstOrCreate(["FirstName" => "Jerry",        "LastName" => "Cherry",     "Email" => "malesuada.ut.sem@consequat.com",                "Password" => "KKQ84BQA3JH",   "DateCreated" => "2016-11-15"]);
        User::firstOrCreate(["FirstName" => "Curran",       "LastName" => "Coffey",     "Email" => "tellus.eu.augue@malesuadavel.org",              "Password" => "LAH90WSM0BQ",     "DateCreated" => "2017-03-07"]);
        User::firstOrCreate(["FirstName" => "Quinlan",      "LastName" => "Obrien",     "Email" => "feugiat.placerat@convallis.org",                "Password" => "BYA60JJT8AZ",       "DateCreated" => "2017-10-30"]);
        User::firstOrCreate(["FirstName" => "Alan",         "LastName" => "Livingston", "Email" => "mollis@duiinsodales.co.uk",             "Password" => "BAQ21RYY0XZ",     "DateCreated" => "2017-01-07"]);
        User::firstOrCreate(["FirstName" => "Nerea",        "LastName" => "Mendez",     "Email" => "nascetur.ridiculus.mus@tempordiamdictum.org",                   "Password" => "CQB11BEY1TJ",       "DateCreated" => "2016-05-27"]);
        User::firstOrCreate(["FirstName" => "Sarah",        "LastName" => "Sosa",       "Email" => "nisi.magna@sitamet.com",                "Password" => "HBX55BGQ5FI",     "DateCreated" => "2016-03-26"]);
        User::firstOrCreate(["FirstName" => "Jayme",        "LastName" => "Cunningham", "Email" => "non.magna.Nam@eleifendnondapibus.com",                  "Password" => "VNA12BZL3KT",       "DateCreated" => "2017-06-22"]);
        User::firstOrCreate(["FirstName" => "Orli",         "LastName" => "Mclean",     "Email" => "est.congue.a@orci.org",             "Password" => "JQE46IZN9UP",     "DateCreated" => "2016-05-11"]);
        User::firstOrCreate(["FirstName" => "Lewis",        "LastName" => "Hendricks",  "Email" => "sem.molestie@amifringilla.edu",                 "Password" => "FGY2016FJM1OO",    "DateCreated" => "2016-10-22"]);
        User::firstOrCreate(["FirstName" => "Roth",         "LastName" => "Garner",     "Email" => "magnis.dis@Morbinon.edu",           "Password" => "BNL2017WIW0MO",       "DateCreated" => "2015-01-16"]);
        User::firstOrCreate(["FirstName" => "Keegan",       "LastName" => "Hancock",    "Email" => "Praesent.luctus@odio.edu",              "Password" => "COZ01FRN2GC",  "DateCreated" => "2015-03-08"]);
        User::firstOrCreate(["FirstName" => "Troy",         "LastName" => "Wilkins",    "Email" => "elementum@nullaIn.com",             "Password" => "GUK40YZN9TV",      "DateCreated" => "2017-03-02"]);
        User::firstOrCreate(["FirstName" => "Mikayla",      "LastName" => "Chandler",   "Email" => "fames@turpisegestas.co.uk",             "Password" => "APM43ZTM5AY",     "DateCreated" => "2017-06-10"]);
        User::firstOrCreate(["FirstName" => "Yoshi",        "LastName" => "Sullivan",   "Email" => "est.congue.a@IncondimentumDonec.edu",               "Password" => "CBE63AJR4KZ",     "DateCreated" => "2016-12-07"]);
        User::firstOrCreate(["FirstName" => "Jaden",        "LastName" => "Ramos",      "Email" => "rutrum.magna.Cras@diam.co.uk",                  "Password" => "APN65QTW3ZO",      "DateCreated" => "2017-12-15"]);
        User::firstOrCreate(["FirstName" => "Flynn",        "LastName" => "Barnett",    "Email" => "nisl.Maecenas.malesuada@tempus.com",                    "Password" => "WEJ03CNG3MY",        "DateCreated" => "2016-06-26"]);
        User::firstOrCreate(["FirstName" => "Jerry",        "LastName" => "Villarreal", "Email" => "eu@fermentumrisus.edu",                 "Password" => "GSC05EUI3OH",   "DateCreated" => "2016-09-19"]);
        User::firstOrCreate(["FirstName" => "Gray",         "LastName" => "Wade",       "Email" => "cursus.et@Donecat.net",             "Password" => "BCH41UBV8LQ",   "DateCreated" => "2016-03-14"]);
        User::firstOrCreate(["FirstName" => "Steven",       "LastName" => "Glass",      "Email" => "sem@Nuncuterat.org",                "Password" => "PCA22ZPG9AA",    "DateCreated" => "2016-09-26"]);
        User::firstOrCreate(["FirstName" => "Davis",        "LastName" => "Clayton",    "Email" => "nec.eleifend@Proin.edu",                    "Password" => "EMQ99WVH3HE",        "DateCreated" => "2017-07-08"]);
        User::firstOrCreate(["FirstName" => "Fletcher",     "LastName" => "Barnes",     "Email" => "et.arcu@eleifendCrassed.co.uk",             "Password" => "PKW71XXN5CO",     "DateCreated" => "2016-06-20"]);
    }
}
