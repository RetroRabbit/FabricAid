<?php

use Illuminate\Database\Seeder;
use App\FocusArea;

class FocusAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FocusArea::firstOrCreate(['Code' => 'FA-D',   'Name' => 'Downtime']);
        FocusArea::firstOrCreate(['Code' => 'FA-PPH', 'Name' => 'Pass Per Hour']);
    }
}
