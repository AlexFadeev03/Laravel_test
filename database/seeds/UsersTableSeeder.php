<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name'=>'test__first_name',
            'last_name'=>'test__last_name',
            'phone_number'=>'0638057779',
            'email'=>'@gmail.com',

        ]);
    }
}
