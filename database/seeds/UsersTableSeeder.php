<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            'name' => 'Rodrigo',
            'email' => 'admin@metbus.cl',
            'password' => bcrypt('123456'),
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
