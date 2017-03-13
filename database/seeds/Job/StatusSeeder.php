<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::firstOrCreate(['Code' => 'ST-I',    'Name' => 'Inactive']);
        Status::firstOrCreate(['Code' => 'ST-P',    'Name' => 'Pending']);
        Status::firstOrCreate(['Code' => 'ST-R',    'Name' => 'Running']);
        Status::firstOrCreate(['Code' => 'ST-OH',   'Name' => 'On-Hold']);
        Status::firstOrCreate(['Code' => 'ST-C',    'Name' => 'Completed']);
    }
}
