<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = DB::table('users')->count();
        if($count == 0) {
            //add a default user data...
            DB::table('users')->insert([
                'name' => 'Bazi Anis',
                'email' => 'admin@admin.com',
                'password' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }else {
            //data already there no need to add fake data
        }
    }
}
