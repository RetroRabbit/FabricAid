<?php

use Illuminate\Database\Seeder;
use App\Area;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::firstOrCreate(['Code' => 'JHB-01-PL-01',      'Name' => 'Plant 01',                       'CompanyId' => 1]);
        Area::firstOrCreate(['Code' => 'JHB-01-OFFC-MN',    'Name' => 'Main Office',                    'CompanyId' => 1]);
        Area::firstOrCreate(['Code' => 'JHB-01-OFFC-HR',    'Name' => 'Human Resources Office',         'CompanyId' => 1]);
        Area::firstOrCreate(['Code' => 'JHB-01-OFFC-IT',    'Name' => 'Information Technology Office',  'CompanyId' => 1]);

        Area::firstOrCreate(['Code' => 'JHB-02-PL-02',      'Name' => 'Plant 02',                       'CompanyId' => 2]);
        Area::firstOrCreate(['Code' => 'JHB-02-OFFC-MN',    'Name' => 'Main Office',                    'CompanyId' => 2]);
        Area::firstOrCreate(['Code' => 'JHB-02-OFFC-HR',    'Name' => 'Human Resources Office',         'CompanyId' => 2]);
        Area::firstOrCreate(['Code' => 'JHB-02-OFFC-IT',    'Name' => 'Information Technology Office',  'CompanyId' => 2]);

        Area::firstOrCreate(['Code' => 'DBN-01-PL-03',      'Name' => 'Plant 03',                       'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'DBN-01-OFFC-MN',    'Name' => 'Main Office',                    'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'DBN-01-OFFC-HR',    'Name' => 'Human Resources Office',         'CompanyId' => 3]);
        Area::firstOrCreate(['Code' => 'DBN-01-OFFC-IT',    'Name' => 'Information Technology Office',  'CompanyId' => 3]);

        Area::firstOrCreate(['Code' => 'CPT-01-PL-04',      'Name' => 'Plant 04',                       'CompanyId' => 4]);
        Area::firstOrCreate(['Code' => 'CPT-01-OFFC-MN',    'Name' => 'Main Office',                    'CompanyId' => 4]);
        Area::firstOrCreate(['Code' => 'CPT-01-OFFC-HR',    'Name' => 'Human Resources Office',         'CompanyId' => 4]);
        Area::firstOrCreate(['Code' => 'CPT-01-OFFC-IT',    'Name' => 'Information Technology Office',  'CompanyId' => 4]);
    }
}
