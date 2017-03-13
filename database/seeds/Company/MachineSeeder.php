<?php

use Illuminate\Database\Seeder;
use App\Machine;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Machine::firstOrCreate(['Code' => 'FSTR-01', 'Name' => 'Fabric Slitter Machine 01, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-02', 'Name' => 'Fabric Slitter Machine 02, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-03', 'Name' => 'Fabric Slitter Machine 03, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-04', 'Name' => 'Fabric Slitter Machine 04, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-05', 'Name' => 'Fabric Slitter Machine 05, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FSTR-06', 'Name' => 'Fabric Slitter Machine 06, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-01', 'Name' => 'Fabric Cutting Machine 01, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-02', 'Name' => 'Fabric Cutting Machine 02, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-03', 'Name' => 'Fabric Cutting Machine 03, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-04', 'Name' => 'Fabric Cutting Machine 04, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-05', 'Name' => 'Fabric Cutting Machine 05, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FCTR-06', 'Name' => 'Fabric Cutting Machine 06, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-01', 'Name' => 'Fabric Forming Machine 01, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-02', 'Name' => 'Fabric Forming Machine 02, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-03', 'Name' => 'Fabric Forming Machine 03, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-04', 'Name' => 'Fabric Forming Machine 04, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-05', 'Name' => 'Fabric Forming Machine 05, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FFRM-06', 'Name' => 'Fabric Forming Machine 06, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-01', 'Name' => 'Fabric Brushing Machine 01, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-02', 'Name' => 'Fabric Brushing Machine 02, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-03', 'Name' => 'Fabric Brushing Machine 03, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-04', 'Name' => 'Fabric Brushing Machine 04, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-05', 'Name' => 'Fabric Brushing Machine 05, Sandton', 'AreaId' => 1]);
        Machine::firstOrCreate(['Code' => 'FBSH-06', 'Name' => 'Fabric Brushing Machine 06, Sandton', 'AreaId' => 1]);

        Machine::firstOrCreate(['Code' => 'CFF-01', 'Name' => 'Office Coffee Machine 01, Sandton', 'AreaId' => 2]);
        Machine::firstOrCreate(['Code' => 'CFF-02', 'Name' => 'Office Coffee Machine 02, Sandton', 'AreaId' => 2]);
        Machine::firstOrCreate(['Code' => 'CFF-03', 'Name' => 'Office Coffee Machine 03, Sandton', 'AreaId' => 2]);
    
        Machine::firstOrCreate(['Code' => 'CFF-04', 'Name' => 'HR Coffee Machine 01, Sandton', 'AreaId' => 3]);
        Machine::firstOrCreate(['Code' => 'CFF-05', 'Name' => 'HR Coffee Machine 02, Sandton', 'AreaId' => 3]);
        Machine::firstOrCreate(['Code' => 'CFF-06', 'Name' => 'HR Coffee Machine 03, Sandton', 'AreaId' => 3]);
        Machine::firstOrCreate(['Code' => 'CFF-07', 'Name' => 'HR Coffee Machine 04, Sandton', 'AreaId' => 3]);

        Machine::firstOrCreate(['Code' => 'CFF-08', 'Name' => 'IT Coffee Machine 01, Sandton', 'AreaId' => 4]);
        Machine::firstOrCreate(['Code' => 'CFF-09', 'Name' => 'IT Coffee Machine 02, Sandton', 'AreaId' => 4]);
    

        Machine::firstOrCreate(['Code' => 'FSTR-07', 'Name' => 'Fabric Slitter Machine 01, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-08', 'Name' => 'Fabric Slitter Machine 02, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-09', 'Name' => 'Fabric Slitter Machine 03, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-10', 'Name' => 'Fabric Slitter Machine 04, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-11', 'Name' => 'Fabric Slitter Machine 05, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FSTR-12', 'Name' => 'Fabric Slitter Machine 06, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-07', 'Name' => 'Fabric Cutting Machine 01, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-08', 'Name' => 'Fabric Cutting Machine 02, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-09', 'Name' => 'Fabric Cutting Machine 03, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-10', 'Name' => 'Fabric Cutting Machine 04, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-11', 'Name' => 'Fabric Cutting Machine 05, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FCTR-12', 'Name' => 'Fabric Cutting Machine 06, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-07', 'Name' => 'Fabric Forming Machine 01, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-08', 'Name' => 'Fabric Forming Machine 02, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-09', 'Name' => 'Fabric Forming Machine 03, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-10', 'Name' => 'Fabric Forming Machine 04, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-11', 'Name' => 'Fabric Forming Machine 05, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FFRM-12', 'Name' => 'Fabric Forming Machine 06, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-07', 'Name' => 'Fabric Brushing Machine 01, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-08', 'Name' => 'Fabric Brushing Machine 02, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-09', 'Name' => 'Fabric Brushing Machine 03, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-10', 'Name' => 'Fabric Brushing Machine 04, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-11', 'Name' => 'Fabric Brushing Machine 05, Johannesburg', 'AreaId' => 5]);
        Machine::firstOrCreate(['Code' => 'FBSH-12', 'Name' => 'Fabric Brushing Machine 06, Johannesburg', 'AreaId' => 5]);

        Machine::firstOrCreate(['Code' => 'CFF-10', 'Name' => 'Office Coffee Machine 01, Johannesburg', 'AreaId' => 6]);
        Machine::firstOrCreate(['Code' => 'CFF-11', 'Name' => 'Office Coffee Machine 02, Johannesburg', 'AreaId' => 6]);
        Machine::firstOrCreate(['Code' => 'CFF-12', 'Name' => 'Office Coffee Machine 03, Johannesburg', 'AreaId' => 6]);
    
        Machine::firstOrCreate(['Code' => 'CFF-13', 'Name' => 'HR Coffee Machine 01, Johannesburg', 'AreaId' => 7]);
        Machine::firstOrCreate(['Code' => 'CFF-14', 'Name' => 'HR Coffee Machine 02, Johannesburg', 'AreaId' => 7]);
        Machine::firstOrCreate(['Code' => 'CFF-15', 'Name' => 'HR Coffee Machine 03, Johannesburg', 'AreaId' => 7]);
        Machine::firstOrCreate(['Code' => 'CFF-16', 'Name' => 'HR Coffee Machine 04, Johannesburg', 'AreaId' => 7]);

        Machine::firstOrCreate(['Code' => 'CFF-17', 'Name' => 'IT Coffee Machine 01, Johannesburg', 'AreaId' => 8]);
        Machine::firstOrCreate(['Code' => 'CFF-18', 'Name' => 'IT Coffee Machine 02, Johannesburg', 'AreaId' => 8]);
    

        Machine::firstOrCreate(['Code' => 'FSTR-13', 'Name' => 'Fabric Slitter Machine 01, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-14', 'Name' => 'Fabric Slitter Machine 02, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-15', 'Name' => 'Fabric Slitter Machine 03, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-16', 'Name' => 'Fabric Slitter Machine 04, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-17', 'Name' => 'Fabric Slitter Machine 05, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FSTR-18', 'Name' => 'Fabric Slitter Machine 06, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-13', 'Name' => 'Fabric Cutting Machine 01, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-14', 'Name' => 'Fabric Cutting Machine 02, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-15', 'Name' => 'Fabric Cutting Machine 03, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-16', 'Name' => 'Fabric Cutting Machine 04, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-17', 'Name' => 'Fabric Cutting Machine 05, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FCTR-18', 'Name' => 'Fabric Cutting Machine 06, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-13', 'Name' => 'Fabric Forming Machine 01, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-14', 'Name' => 'Fabric Forming Machine 02, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-15', 'Name' => 'Fabric Forming Machine 03, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-16', 'Name' => 'Fabric Forming Machine 04, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-17', 'Name' => 'Fabric Forming Machine 05, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FFRM-18', 'Name' => 'Fabric Forming Machine 06, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-13', 'Name' => 'Fabric Brushing Machine 01, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-14', 'Name' => 'Fabric Brushing Machine 02, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-15', 'Name' => 'Fabric Brushing Machine 03, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-16', 'Name' => 'Fabric Brushing Machine 04, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-17', 'Name' => 'Fabric Brushing Machine 05, Durban', 'AreaId' => 9]);
        Machine::firstOrCreate(['Code' => 'FBSH-18', 'Name' => 'Fabric Brushing Machine 06, Durban', 'AreaId' => 9]);

        Machine::firstOrCreate(['Code' => 'CFF-19', 'Name' => 'Office Coffee Machine 01, Durban', 'AreaId' => 10]);
        Machine::firstOrCreate(['Code' => 'CFF-20', 'Name' => 'Office Coffee Machine 02, Durban', 'AreaId' => 10]);
        Machine::firstOrCreate(['Code' => 'CFF-21', 'Name' => 'Office Coffee Machine 03, Durban', 'AreaId' => 10]);
    
        Machine::firstOrCreate(['Code' => 'CFF-22', 'Name' => 'HR Coffee Machine 01, Durban', 'AreaId' => 11]);
        Machine::firstOrCreate(['Code' => 'CFF-23', 'Name' => 'HR Coffee Machine 02, Durban', 'AreaId' => 11]);
        Machine::firstOrCreate(['Code' => 'CFF-24', 'Name' => 'HR Coffee Machine 03, Durban', 'AreaId' => 11]);
        Machine::firstOrCreate(['Code' => 'CFF-25', 'Name' => 'HR Coffee Machine 04, Durban', 'AreaId' => 11]);

        Machine::firstOrCreate(['Code' => 'CFF-26', 'Name' => 'IT Coffee Machine 01, Durban', 'AreaId' => 12]);
        Machine::firstOrCreate(['Code' => 'CFF-27', 'Name' => 'IT Coffee Machine 02, Durban', 'AreaId' => 12]);
    

        Machine::firstOrCreate(['Code' => 'FSTR-19', 'Name' => 'Fabric Slitter Machine 01, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-20', 'Name' => 'Fabric Slitter Machine 02, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-21', 'Name' => 'Fabric Slitter Machine 03, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-22', 'Name' => 'Fabric Slitter Machine 04, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-23', 'Name' => 'Fabric Slitter Machine 05, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FSTR-24', 'Name' => 'Fabric Slitter Machine 06, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-19', 'Name' => 'Fabric Cutting Machine 01, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-20', 'Name' => 'Fabric Cutting Machine 02, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-21', 'Name' => 'Fabric Cutting Machine 03, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-22', 'Name' => 'Fabric Cutting Machine 04, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-23', 'Name' => 'Fabric Cutting Machine 05, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FCTR-24', 'Name' => 'Fabric Cutting Machine 06, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-19', 'Name' => 'Fabric Forming Machine 01, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-20', 'Name' => 'Fabric Forming Machine 02, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-21', 'Name' => 'Fabric Forming Machine 03, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-22', 'Name' => 'Fabric Forming Machine 04, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-23', 'Name' => 'Fabric Forming Machine 05, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FFRM-24', 'Name' => 'Fabric Forming Machine 06, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-19', 'Name' => 'Fabric Brushing Machine 01, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-20', 'Name' => 'Fabric Brushing Machine 02, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-21', 'Name' => 'Fabric Brushing Machine 03, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-22', 'Name' => 'Fabric Brushing Machine 04, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-23', 'Name' => 'Fabric Brushing Machine 05, Cape Town', 'AreaId' => 13]);
        Machine::firstOrCreate(['Code' => 'FBSH-24', 'Name' => 'Fabric Brushing Machine 06, Cape Town', 'AreaId' => 13]);

        Machine::firstOrCreate(['Code' => 'CFF-28', 'Name' => 'Office Coffee Machine 01, Cape Town', 'AreaId' => 14]);
        Machine::firstOrCreate(['Code' => 'CFF-29', 'Name' => 'Office Coffee Machine 02, Cape Town', 'AreaId' => 14]);
        Machine::firstOrCreate(['Code' => 'CFF-30', 'Name' => 'Office Coffee Machine 03, Cape Town', 'AreaId' => 14]);
    
        Machine::firstOrCreate(['Code' => 'CFF-31', 'Name' => 'HR Coffee Machine 01, Cape Town', 'AreaId' => 15]);
        Machine::firstOrCreate(['Code' => 'CFF-32', 'Name' => 'HR Coffee Machine 02, Cape Town', 'AreaId' => 15]);
        Machine::firstOrCreate(['Code' => 'CFF-33', 'Name' => 'HR Coffee Machine 03, Cape Town', 'AreaId' => 15]);
        Machine::firstOrCreate(['Code' => 'CFF-34', 'Name' => 'HR Coffee Machine 04, Cape Town', 'AreaId' => 15]);

        Machine::firstOrCreate(['Code' => 'CFF-35', 'Name' => 'IT Coffee Machine 01, Cape Town', 'AreaId' => 16]);
        Machine::firstOrCreate(['Code' => 'CFF-36', 'Name' => 'IT Coffee Machine 02, Cape Town', 'AreaId' => 16]);
    }
}
