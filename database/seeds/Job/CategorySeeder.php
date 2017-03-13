<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::firstOrCreate(
        [
            'Code' => 'CTG-P',
            'Name' => 'Preventative'
        ]);
        Category::firstOrCreate(
        [
            'Code' => 'CTG-CI',
            'Name' => 'Continuous Improvement'
        ]);
    }
}
