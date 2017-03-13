<?php

use Illuminate\Database\Seeder;
use App\ArtisanType;

class ArtisanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArtisanType::firstOrCreate(['Name' => 'Mechanic']);
        ArtisanType::firstOrCreate(['Name' => 'Electrician']);
        ArtisanType::firstOrCreate(['Name' => 'Enginer']);
        ArtisanType::firstOrCreate(['Name' => 'Plumber']);
    }
}
