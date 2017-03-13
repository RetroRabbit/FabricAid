<?php

use Illuminate\Database\Seeder;

use App\Access;
use App\Role;
use App\RoleAccess;
use App\ArtisanType;
use App\Company;
use App\Category;
use App\FocusArea;
use App\Type;
use App\Status;
use App\User;
use App\Area;
use App\Machine;
use App\Tool;
use App\Template;
use App\Job;

use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AccessSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(RoleAccessSeeder::class);
        $this->call(ArtisanTypeSeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(FocusAreaSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(MachineSeeder::class);
        $this->call(ToolSeeder::class);
        $this->call(TemplateSeeder::class);
        $this->call(JobSeeder::class);
    }

}
