<?php

use Illuminate\Database\Seeder;
use App\Agency;

class AgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	$agency = new Agency;
        $agency->name = "Agency";
        $agency->email = "agency@agency.com";
        $agency->password = bcrypt("123456");
        $agency->save();
    }
}
