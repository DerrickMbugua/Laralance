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
        $Freelancer=new Role;
        $Freelancer->name='Freelancer';
        $Freelancer->description='Freelancers looking for jobs';
        $Freelancer->save();

        $Client=new Role;
        $Client->name='Client';
        $Client->description='Clients posting jobs';
        $Client->save();
    }
}
