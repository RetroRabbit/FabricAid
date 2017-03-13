<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::firstOrCreate(['Code' => 'JT-OT', 'Name' => 'One Time']);
        Type::firstOrCreate(['Code' => 'JT-R',  'Name' => 'Recurring']);
    }
}
