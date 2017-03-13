<?php

use Illuminate\Database\Seeder;
use App\RoleAccess;

class RoleAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
}
