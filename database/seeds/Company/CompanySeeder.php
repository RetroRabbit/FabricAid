<?php

use Illuminate\Database\Seeder;
use App\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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
}
