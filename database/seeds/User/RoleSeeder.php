<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::firstOrCreate(['Name' => 'Administrator']);
        Role::firstOrCreate(['Name' => 'Supervisor']);
        Role::firstOrCreate(['Name' => 'Artisan']);
    }
}
