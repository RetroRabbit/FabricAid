<?php

use Illuminate\Database\Seeder;
use App\Access;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
}
