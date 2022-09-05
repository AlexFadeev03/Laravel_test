<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id'=>1,
            'street_address'=>'test_street_address',
            'street_address_line2'=>'',
            'city'=>'test_city',
            'state_province'=>'test_state_province',
            'postal_zip_code'=>12345,

        ]);
    }
}
